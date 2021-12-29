<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Title;
use Carbon\Carbon;
class HomeController extends Controller
{
    //

    public function HomeTitle(){
        //$titles = Title::latest()->get();
       $titles = Title::latest()->paginate(5);
        return view('admin.title.index',compact('titles'));
    }
    public function AddTitle(){
        return view('admin.title.create');
    }
    public function StoreTitle(Request $request){
        //dd($request->all());
        $title_image = $request->file('image');

        $name_gen = hexdec(uniqid());
        $img_ext = strtolower($title_image->getClientOriginalExtension());
        $img_name = $name_gen.'.'.$img_ext;

        $up_location = 'image/title/';
        $last_img = $up_location.$img_name;
        $title_image->move($up_location,$img_name);

        Title::insert([
            'name' => $request->name,
            'designation' => $request->designation,
            'image'=> $last_img,
            'created_at' => Carbon::now(),
        ]);

        return redirect()->route('home.title')->with('success','Title inserted Successfully');
   }

   public function Edit($id){
       $titles = Title::find($id);
       return view('admin.title.edit',compact('titles'));
   }

   public function Update(Request $request, $id){

    $validated = $request->validate([
        'name' => 'required|min:4',
    ],
    [
        'designation.required' => 'Please Input Description',
        'image.min' => 'Title Longer Then 4 chars',

    ]);

    $old_image = $request->old_image;

    $title_image = $request->file('image');

    if($title_image){
    $name_gen = hexdec(uniqid());
    $img_ext = strtolower($title_image->getClientOriginalExtension());
    $img_name = $name_gen.'.'.$img_ext;
    $up_location = 'image/title/';
    $last_img = $up_location.$img_name;
    $title_image->move($up_location,$img_name);

    unlink($old_image);

    Title::find($id)->update([
        'name' => $request->name,
        'designation'=>$request->designation,
        'image' => $last_img,
        'created_at' => Carbon::now()
    ]);

    return redirect()->route('home.title')->with('success','Title updated successfully...');
   }
}
   public function Delete($id){
    $title_image = Title::find($id);
    $old_image =$title_image->image;
    unlink($old_image);

     Title::find($id)->delete();
     return redirect()->route('home.title')->with('success','Title Deleted Successfully...');
 }
 
}
