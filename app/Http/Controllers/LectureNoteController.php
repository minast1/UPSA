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


class LectureNoteController extends Controller
{
       public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
           $courses = Course::all() ;
          return Inertia::render('notes', ['courses'=> $courses]) ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

             $notes = $request->file() ; 
              foreach ($notes as $note) {

       $extension = $note->getClientOriginalExtension() ;
       $filename = time().'.'.$extension ; 
        $course = Course::find($request->input('id'));

        $course->addMedia($note)->usingFileName($filename)->toMediaCollection('notes') ;   
        }

        if (count($notes) > 1) {
            $message = 'LectureNotes Uploaded Successfully' ;
                
           }

        else {
            $message = 'LectureNote Uploaded Successfully' ;

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
        $course = Course::find($id)->first() ; 
        dd($course) ; 
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
