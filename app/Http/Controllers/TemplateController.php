<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    //
    public function index(){

    //     return view('Frontend.home',['name'=>'Joyce Harrison','age'=>'28','email'=>'Joyce@company.com','phone'=>'+0718-111-0011
    //     ','address'=>'140, City Center, New York, U.S.A
    //     ', 'aboutme'=>'Hello! I’m Joyce Harrison. I am passionate about UI/UX design and Web Design. I am a skilled Front-end Developer and master of Graphic Design tools such as Photoshop and Sketch.'
    // ]);
    }

    public function test(){
        return view('admin.test');
    }

    public function Logout(){
        Auth::logout();
        return redirect()->route('login')->with('success','User Logout');
    }

  

}
