<?php

namespace App\Http\Controllers;
use App\Models\Educate;
use Illuminate\Http\Request;
use Carbon\Carbon;

class EducationController extends Controller
{
    //
    public function HomeEducation(){
        $educations = Educate::latest()->paginate(4); 
        return view('admin.education.index',compact('educations'));
    }

    public function AddEducation(){
        return view('admin.education.create');
    }

    public function StoreEducation(Request $request){
        
        if(!$request->end_date){
            $education= Educate::insert([
                'degree' => $request->degree,
                'university' => $request->university,
                'start_date' => $request->start_date,
                'end_date' => "Till now",
                'description' => $request->description,
                'created_at' => Carbon::now(),
            ]);
            return redirect()->route('home.education')->with('success','Education Details inserted Successfully');
        
            
        } else {
            $work =  Educate::insert([
                'degree' => $request->degree,
                'university' => $request->university,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'description' => $request->description,
                'created_at' => Carbon::now(),
            ]);
            return redirect()->route('home.education')->with('success','Education Details inserted Successfully');
     }
    }
         public function EditEducation($id){
             $educations = Educate::find($id);
             return view('admin.education.edit',compact('educations')); 

         }

         public function UpdateEducation(Request $request, $id){
            
            if(!$request->end_date){
                $educations = Educate::find($id)->update([
                    'degree' => $request->degree,
                    'university' => $request->university,
                    'start_date' => $request->start_date,
                    'end_date' => "Till now",
                    'description' => $request->description,
                    'created_at' => Carbon::now(),
                ]);
                return redirect()->route('home.education')->with('success','Education Updated Successfully');
            } else {
                $eductations = Educate::find($id)->update([
                    'degree' => $request->degree,
                    'university' => $request->university,
                    'start_date' => $request->start_date,
                    'end_date' => $request->end_date,
                    'description' => $request->description,
                    'created_at' => Carbon::now(),
                ]);

                return redirect()->route('home.education')->with('success','Education Updated Successfully');
            }
         }
}
