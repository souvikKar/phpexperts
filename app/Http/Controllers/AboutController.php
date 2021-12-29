<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use Carbon\Carbon;

class AboutController extends Controller
{
    //
    public function HomeAbout(){
        $abouts  = About::latest()->get();
        return view('admin.about.index',compact('abouts'));
    }

    public function AddAbout(){
        return view('admin.about.create');
    }

    public function StoreAbout(Request $request){
       // $request->age = "2000-10-25";
   
        About::insert([
            'about_me' => $request->about_me,
            'age' => Carbon::parse($request->age)->diff(Carbon::now())->y,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'created_at' => Carbon::now(),
        ]);

        return redirect()->route('home.about')->with('success','About inserted Successfully');
    }
    
        public function EditAbout($id){
            $abouts = About::find($id);
            return view('admin.about.edit',compact('abouts'));
        }

        public function UpdateAbout(Request $request, $id){
            $abouts = About::find($id)->update([
                'about_me' => $request->about_me,
                'age' => Carbon::parse($request->age)->diff(Carbon::now())->y,
                'email'=> $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
                'created_at'=> Carbon::now(),
            ]);
            return redirect()->route('home.about')->with('success','About Updated Successfully');
        }

        public function Delete($id){
            $abouts =  About::find($id)->delete();
            return redirect()->route('home.about')->with('success','About Deleted Successfully');
        }
}
