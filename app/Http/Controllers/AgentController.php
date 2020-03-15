<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
use Auth;

class AgentController extends Controller
{

public function __construct()
    {
        $this->middleware('auth');
    }

public function launch()
    {
        // $someModel = new SomeModel;
        // $someModel->setConnection('mysql2');
        // $something = $someModel->find(1);
        // return $something;

        $agent=DB::connection('mysql2')->table('biller_profits')->first();
        dd($agent);
        // $blogs = DB::table('blogs')->orderBy('id', 'desc')->paginate(6);
    }

    public function profile(){
        $user_code=Auth::user()->referal_code;
        $user=DB::connection('mysql2')->table('users')->where('referal_code', $user_code)->get();  
        $agents=DB::table('agent_profits')->where('agent_id' , Auth::user()->id)->get();
        $profit= DB::table('agent_profits')->where('agent_id', '=' , Auth::user()->id)->sum('profit');
        $profit=number_format($profit, 2, '.', ',');
        $date=date('Y-m-d H:i:s');
        $today_transaction= DB::table('agent_profits')->where('created_at', $date)->count();
        return view('agent.profile', compact(['agents', 'user', 'profit', 'today_transaction']));
    }

    public function generatecode(Request $request,  $id)
    {
   
     $agent_id=Auth::user()->id;
     $agent=User::findorFail( $agent_id);
     $code=rand(10, 500).$agent_id;
     $agent->referal_code= $code;
     $agent->save();
     return back()->with('success', 'code generated successfully');
    }

    public function transactions()
    {

     $agents=DB::table('agent_profits')->where('agent_id' , Auth::user()->id)->orderBy('id', 'desc')->get(); 
    
     return view('agent.transactions', compact('agents'));  	
    }
    


}
