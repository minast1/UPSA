<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Image\Image;
use App\File ;
use App\Course ; 
use Inertia\Inertia;
use Illuminate\Support\Facades\Redirect ;
use Illuminate\Http\Concerns\InteractsWithInput;
use Illuminate\Support\Facades\Auth;
use Spatie\MediaLibrary\HasMedia\HasMedia;


class AssignmentController extends Controller
{
       public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
           $courses = Course::all() ;
          return Inertia::render('assignment', ['courses'=> $courses]) ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

             $assignments = $request->file() ; 
              foreach ($assignments as $assignment) {

       $extension = $assignment->getClientOriginalExtension() ;
       $filename = time().'.'.$extension ; 
        $course = Course::find($request->input('id'));

        $course->addMedia($assignment)->usingFileName($filename)->toMediaCollection('assignments') ;   
        }

        if (count($assignments) > 1) {
            $message = 'Assignments Uploaded Successfully' ;
                
           }

        else {
            $message = 'Assignment Uploaded Successfully' ;

        }

              return redirect()->back()->with('message', $message);       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
