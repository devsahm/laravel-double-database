<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\AgentWallet;
use DB;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $user_code=Auth::user()->referal_code;
        if( $user_code === null){
        $user=0;
        }else{
        $user=DB::connection('mysql2')->table('users')->where('referal_code', $user_code)->count(); 
        }
        $wallet=DB::table('agent_wallets')->where('agent_id', Auth::user()->id)->first();
       
        if($wallet == null){
        $wallet=0;
        }else{
        $wallet=$wallet->balance;
        }

        $agents=DB::table('agent_profits')->where('agent_id' , Auth::user()->id)->get();
        $profit= DB::table('agent_profits')->where('agent_id', '=' , Auth::user()->id)->sum('profit');
        $profit=number_format($profit, 2, '.', ',');
        $date= date('Y-m-d h:i:sa');
        $today_transaction= DB::table('agent_profits')->where('created_at', $date)->count();
        return view('agent.index', compact(['agents', 'user', 'profit', 'today_transaction', 'wallet']));
    }
}
