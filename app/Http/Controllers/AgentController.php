<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Agent;
use App\AgentWallet;
use App\Transactionable;
use Illuminate\Support\Facades\Mail;
use DB;
use Auth;
use PDF;
use App\Mail\ReferralCode;


class AgentController extends Controller
{

public function __construct()
    {
        $this->middleware(['auth', 'verified']);
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
        if( $user_code === null){
        $user=0;
        }else{
         $user=DB::connection('mysql2')->table('users')->where('referal_code', $user_code)->count(); 
        }
        $agents=DB::table('agent_profits')->where('agent_id' , Auth::user()->id)->get();
        $profit= DB::table('agent_profits')->where('agent_id', '=' , Auth::user()->id)->sum('profit');
        $profit=number_format($profit, 2, '.', ',');
        $date=date('Y-m-d H:i:s');
        $today_transaction= DB::table('agent_profits')->where('created_at', $date)->count();
        $wallet=AgentWallet::where('agent_id', Auth::user()->id)->first();
        if($wallet==null){
        $wallet=0;
        }else{
        $wallet=$wallet->balance;
        }
        return view('agent.profile', compact(['agents', 'user', 'profit', 'today_transaction', 'wallet']));
    }

    public function generatecode(Request $request,  $id)
    {
    //Generate referral Code and save to agent table
     $agent_id=Auth::user()->id;
     $agent=Agent::findorFail($agent_id);
     $code=rand(100, 500).$agent_id;
     $agent->referal_code= $code;
     $agent->level=1;
     $agent->save();
     
    //update African Money Users table if the agent already exist there()
    $user=DB::connection('mysql2')->table('users')->where('email' , Auth::user()->email)->first(); 
    if($user!= null){
    $user=DB::connection('mysql2')->table('users')->where('email' , Auth::user()->email)->update(['referal_code' => $code]); 
    }
    
     Mail::to(Auth::user()->email)->send(new ReferralCode($agent));
     return back()->with('success', 'Referral code generated successfully');
    }


    public function transactions()
    {

     $agents=DB::table('agent_profits')->where('agent_id' , Auth::user()->id)->orderBy('id', 'desc')->get(); 
    
     return view('agent.transactions', compact('agents'));  	
    }

    public function withdrawal()
    {

        $wallet=AgentWallet::findorFail(Auth::user()->id);
       if(!$wallet){
        $wallet=0;
       }else{
         $wallet=$wallet->balance;
       }
        return view('agent.withdraw', compact('wallet'));  
 
    }

    public function withdrawwbalance(Request $request)
    {
$this->validate($request, [
    'amount'=>'required|numeric'
]);

//update AAgent Wallet table with the new balance
$id=Auth::user()->id;
$AgentWallet= AgentWallet::findorFail($id);
if($AgentWallet->balance >= $request->amount){
$wallet_balance= (double)$AgentWallet->balance - (double)$request->amount;
$AgentWallet->balance=$wallet_balance;
$AgentWallet->save();


//update Agent Wallet on the African Money Platform
$user= DB::connection('mysql2')->table('users')->where('referal_code', Auth::user()->referal_code)->first();
$userwallet=DB::connection('mysql2')->table('wallets')->where('user_id', $user->id)->where('currency_id', 12)->first();//12 means naira      
$new_wallet_balance=(double)$userwallet->amount + (double)$request->amount;
 DB::connection('mysql2')->table('wallets')
 ->where('user_id', $user->id)
 ->where('currency_id', 12)
 ->update(['amount' => $new_wallet_balance]);
//Add records to African Money Transactions Table   

DB::connection('mysql2')->table('transactionable')->insert(
    ['user_id' => $user->id, 'transactionable_id' => '222', 'transactionable_type' => 'APP\Models\Agent', 'entity_id' =>$user->id, 'entity_name' => 'African Money Agent',  'transaction_state_id' => 1, 'money_flow' => '+', 'activity_title' => 'Agent Network-Withdrawal',  'balance' => $new_wallet_balance, 'thumb' => $user->avatar, 'gross' => $request->amount, 'fee' => 0, 'net' => $request->amount, 'currency_id' => 12, 'created_at' => date('Y-m-d H:i:s'), 'currency_symbol' => '₦'  ,'updated_at' => date('Y-m-d H:i:s') ]
);

return back()->with('success', 'Your Africa money wallet was funded successfully');
}else{

    return back()->with('cerrors', 'Ops, you don\'t have up to ₦'. $request->amount. ' in your wallet, please try again later with a lesser amount');
}
       

    }



    public function accountStatement(Request $request)
    {

        $this->validate($request, [
        'start_date' => 'required',
        'end_date'=> 'required'
        ]);

        if($request->state_date == $request->end_date){
         return back()->with('cerrors', 'The start date and the end date are the same, please try again');
        }

        $agent=DB::table('agent_profits')->where('agent_id' , Auth::user()->id)->get();
        if($agent== null){
        return back()->with('cerrors', 'Ops, you cannot generate account statement. No transaction record was found');
       }
    $startDate=$request->start_date;
    $endDate=$request->end_date;

       $data = DB::table('agent_profits')
        ->select(DB::raw('agent_profits.profits as profits'))
        ->whereBetween('agent_profits.created_at', [$startDate, $endDate]);

dd($data);
    // DB::table('agent_profits')->where('agent_id' , Auth::user()->id)
    // ->where('da')
    // ->get();


        $pdf = PDF::loadView('accountstatement', $data);  
        return $pdf->download('medium.pdf');

        return view('agent.accountstatement');
    }

    public function generateStatementView()
    {

        return view('agent.statement');
    }
    



}
