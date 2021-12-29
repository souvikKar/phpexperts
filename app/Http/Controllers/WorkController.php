<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class WorkController extends Controller
{
    //
    public function HomeWork(){
        $works = Work::latest()->paginate(4); 
        return view('admin.work.index',compact('works'));
    }
    
    public function AddWork(){
        //$works = Work::latest()->get(); 
        //$homeworks = DB::table('works')->first();

        return view('admin.work.create');
    }

    public function StoreWork(Request $request){
       
        if(!$request->end_date){
            $work= Work::insert([
                'designation' => $request->designation,
                'company' => $request->company,
                'start_date' => $request->start_date,
                'end_date' => "Present",
                'description' => $request->description,
                'created_at' => Carbon::now(),
            ]);
            return redirect()->route('home.work')->with('success','Work Details inserted Successfully');
        
            
        } else {
            $work =  Work::insert([
                'designation' => $request->designation,
                'company' => $request->company,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'description' => $request->description,
                'created_at' => Carbon::now(),
            ]);
            return redirect()->route('home.work')->with('success','Work Details inserted Successfully');
     }
 }
            public function EditWork($id){

                $works = Work::find($id);
                return view('admin.work.edit',compact('works'));
            }


            public function UpdateWork(Request $request, $id){
                if(!$request->end_date){
                $works = Work::find($id)->update([
                    'designation' => $request->designation,
                    'company' => $request->company,
                    'start_date' => $request->start_date,
                    'end_date' => "Present",
                    'description' => $request->description,
                    'created_at' => Carbon::now(),
                ]);
                return redirect()->route('home.work')->with('success','Work Updated Successfully');
            } else {
                $works = Work::find($id)->update([
                    'designation' => $request->designation,
                    'company' => $request->company,
                    'start_date' => $request->start_date,
                    'end_date' => $request->end_date,
                    'description' => $request->description,
                    'created_at' => Carbon::now(),
                ]);

                return redirect()->route('home.work')->with('success','Work Updated Successfully');
            }
        }

        public function Delete($id){
            $works =  Work::find($id)->delete();
            return redirect()->route('home.work')->with('success','Work Deleted Successfully');
        }
}