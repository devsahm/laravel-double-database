<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_code=Auth::user()->referal_code;
        $user=DB::connection('mysql2')->table('users')->where('referal_code', $user_code)->get();  
        $agents=DB::table('agent_profits')->where('agent_id' , Auth::user()->id)->get();
                                                        

                                                           
                                       
     


        return view('agent.index', compact(['agents', 'user']));
    }
}
