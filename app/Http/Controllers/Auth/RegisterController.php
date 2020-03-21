<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Agent;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Auth;
use DB;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

      protected function register(Request $request) {
      dd('acscsc');
        request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => 'required|unique:agents|string|email|max:255', 
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $user=DB::connection('mysql2')->table('users')->where('email', Input::get('email'))->first();
        if ($user === null) {
            $agent= Agent::create([
            'name' => $request->name,
            'email' =>$request->email,
            'level'=>$request->level,
            'password'=> Hash::make($request->password),
        ]);
 
        //Adding a new user record in African Money Platform
        $Afmuser= new User;
        $Afmuser->setConnection('mysql2');
        $Afmuser->name=$request->name;
        $Afmuser->email=$request->email;
        $Afmuser->password=Hash::make($request->password);
        $Afmuser->avatar="https://africanmoney.net/storage/users/default.png";
        $Afmuser->role_id=2;
        $Afmuser->save();

        auth()->login($agent);

        return redirect('/home');

        }else{

            return back()->with('cerrors', 'It seems you have used the same credentials to signup on african money platform. Kindly login to your african money account and upgrade to an agent account. Thanks');
           }
          
            
    }


    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        
       
    }




    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
