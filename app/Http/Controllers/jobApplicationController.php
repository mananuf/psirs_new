<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\job;

class jobApplicationController extends Controller
{

    public function index(){
        $jobs = job::all();
        return view('admin.jobs.index',compact('jobs'));

    }

    public function apply(Request $request){


        $request->validate([
            'file'=>'required',
            'name'=>'required',
            'email'=>'required|email'

        ]);
        $file_path= $request->file('file')->store('applications', 'public');
        $jobs = new job;
        $jobs->name = $request->name;
        $jobs->email = $request->email;
        $jobs->file = $file_path;
        $jobs->save();
        return back()->with('success','application received');


    }


    public function applications(){


   }
   public function destroy(job $job){

      Storage::disk('public')->delete($job->file);
      $job->delete();
      return back()->with('success','job application deleted successfully');


   }
   public function openApplication(){

   }




}
