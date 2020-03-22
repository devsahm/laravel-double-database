<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agent;
use Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;


class ProfileController extends Controller
{
      public function updateprofile(Request $request, $id)
    {
        request()->validate([
            'firstname'=>'required|min:4',
            'lastname'=>'required|min:4',
            'phone_number'=>'required|numeric|min:11',
            'image'=>'required|max:300|mimes:jpg,png,jpeg'
        ]);
       
        $agent=Agent::findorFail($id);
    

 if($agent->avatar =='demo.png'){
  
  if(request()->hasFile('image')){

     $file = Input::file('image');
        $name = time() . '-' . $file->getClientOriginalName();
        $file = $file->move(('profileimage'), $name);
        $agent->update(['avatar'=>  $name]);
        }


    }else{

    if(Input::hasFile('image')){

        $usersImage = public_path("profileimage/{$agent->avatar}"); // get previous image from folder
        if (File::exists($usersImage)) { // unlink or remove previous image from folder
            unlink($usersImage);
        }

        $file = Input::file('image');
        $name = time() . '-' . $file->getClientOriginalName();
        $file = $file->move(('profileimage'), $name);
        $agent->update(['avatar'=>  $name]);
        }

       

    } 
        $agent->firstname= $request->firstname;
        $agent->lastname=$request->lastname;
        $agent->phone_number=$request->phone_number;
        $agent->save();
        return back()->with('success', 'You have successfully updated you profile');
    }



       public function updatepassword(Request $request, $id)
    {
   
    	
    	$this->validate($request, [
    	'password' => ['required', 'string', 'min:8', 'confirmed'],
    	]);

    $agent=Agent::findorFail($id);

if (Hash::check(request('oldpassword'),  $agent->password)){

    $agent->password=Hash::make(request('password'));
    $agent->save();
    session()->flash('success', 'You have successfully updated your password');
    return back();

}else{

return back()->with('cerrors', 'Your old password does not match our record');;
}






return redirect('/profile');

    }

}
