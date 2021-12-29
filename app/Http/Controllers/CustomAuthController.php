<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;


class CustomAuthController extends Controller
{
    //
    public function Login(){
        return view('layouts.pages.signin');
    }

    public function Register(){
        return view('layouts.pages.signup');
    }

    public function Save(Request $request){
        User::insert([
                        'name' => $request->name,
                        'email' => $request->email,
                        'password' =>  Hash::make($request->password),
                        'phone' => $request->phone,
                        //'describe' => $request->describe,
                        'city' => $request->city,
                        'state' => $request->state,
                        'country' => $request->country,
                        'age' => $request->age,
                        'created_at' => Carbon::now(),
                        
                    ]);
            
                    return redirect()->back()->with('success','you have signed in');
                

    
    }

    public function CheckLogin(Request $request){
        $request->validate([
                    'email' => 'required',
                    'password' => 'required',
                ]);
        $userinfo = User::where('email','=',$request->email)->first();

        if(!$userinfo){
            return back()->with('success','we do not recongnize your email address');
        } else {

            if(Hash::check($request->password, $userinfo->password)){
                $request->session()->put('LoggedUser', $userinfo->id);
                return redirect('/display');

            } else {
                return back()->with('success','Incorrect Password');
            }


        }
    }

    public function Display(){
        $datas = User::where('id','=', session('LoggedUser'))->first();
        return view('layouts.frontdisplay',compact('datas'));
    }



    // public function customLogin(Request $request)
    // {
    //     $request->validate([
    //         'email' => 'required',
    //         'password' => 'required',
    //     ]);
   
    //     $credentials = $request->only('email', 'password');
    //     if (Auth::attempt($credentials)) {
    //         return redirect()->intended('/');
    //     }
  
    //     return redirect("signin")->with('success','Login details are not valid');
    // }

   
    // public function customSignup(Request $request)
    // {  
        
    //         User::insert([
    //             'name' => $request->name,
    //             'email' => $request->email,
    //             'password' =>  Hash::make($request->password),
    //             'phone' => $request->phone,
    //             //'describe' => $request->describe,
    //             'city' => $request->city,
    //             'state' => $request->state,
    //             'country' => $request->country,
    //             'age' => $request->age,
    //             'created_at' => Carbon::now(),
                
    //         ]);
    
    //         return redirect()->back()->with('success','you have signed in');
         
        
    // }
    

}
