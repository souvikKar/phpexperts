<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\ContactForm;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    //
    // public function Contact(){
    //     $contacts= DB::table('contacts')->get();
    //     return view('home',compact('contacts'));
    // }

    public function ContactForm(Request $request){
        $validated = $request->validate([
            'name'=>'required',
            'email'=>'required',
            'message'=>'required',
        ]);
        ContactForm::insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'message'=>$request->message,
            'created_at'=>Carbon::now(),
        ]);
        return redirect()->route('homepage')->with('success','Your Message send Successfully...');
    }

    public function AdminMessage(){
        $messages = ContactForm::all();
        return view('admin.contact.index',compact('messages'));
    }
    public function Delete($id){
        $contacts = ContactForm::find($id)->delete();
        return redirect()->route('admin.message')->with('success','Contacts message deleted successfully...');
    }



}
