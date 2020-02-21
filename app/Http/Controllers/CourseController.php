<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Inertia\Inertia;
use Illuminate\Support\Facades\Redirect ;
use Illuminate\Http\Request;
use App\Programe; 
use App\User;
use App\Course ;


class CourseController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


      public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() 
    {
    	 $courses =  Course::with(['user', 'programe'])->get();
        $adminusers =    User::all();
        $programes = Programe::all() ;
       return Inertia::render('course', ['courses'=> $courses, 'adminusers' => $adminusers, 'programes' => $programes]) ;
    }

     public function store(Request $request)
    {    
    	 $request->validate([
          'name' => 'required',
            'code' => 'required',
            'lecturer' => 'required',
            'semester' => 'required',
            'programe' => 'required'
      ]);

    	  $data = [
             'name' => $request->input('name'),
             'code' => $request->input('code'),
             'user_id' => $request->input('lecturer'),
             'semester' => $request->input('semester'),
             'programe_id' => $request->input('programe'),
           ] ;
         
        Course::create($data);
         return redirect()->back()->with('message', 'Course Successfully Created!');
    }

    public function update(Request $request, Course $course)
    { 
    
         $request->validate([
          'name' => 'required',
            'code' => 'required',
            'lecturer' => 'required',
            'semester' => 'required',
            'programe' => 'required'
      ]);
        //($request->input('lecturer')) ;
          $data = [
             'name' => $request->input('name'),
             'code' => $request->input('code'),
             'user_id' => $request->input('lecturer'),
             'semester' => $request->input('semester'),
             'programe_id' => $request->input('programe')
           ] ;
    
        $course->update($data);
         return redirect()->back()->with('message', 'Course Successfully Updated!');
        //return Redirect::route('course.index', ['message' => 'Course Successfully Updated']);
        
    }
}