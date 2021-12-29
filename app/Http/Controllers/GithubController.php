<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;

class GithubController extends Controller
{
    //
    public function redirectToGithub(){
        return Socialite::driver('github')->redirect();
    }

    public function handleToGithub(){
       try{
        $githubUser = Socialite::driver('github')->user();
       } catch(\Exception $e){
           return redirect('/signin');
       }
           

            $user = User::where([
                'provider' => 'github',
                'provider_id' => $githubUser->getId()
            ])->first();

                if(!$user){
                   $user =  User::create([
                       'name' => $githubUser->getNickname(),
                       'email' => $githubUser->getEmail(), 
                       'provider'=>'github',
                       'provider_id' => $githubUser->getId(),
                       'email_verified_at'=> now()

                    ]);
                }
                return redirect('/display');

       
        

       // dd($user->getNickname(), $user->getEmail(), $user->getId());
        //dd($user);
       //echo "<pre>"; print_r($user); die();
    }
}
