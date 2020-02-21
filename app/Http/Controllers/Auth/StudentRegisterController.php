<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Student;
use App\Programe ;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Validator;


class StudentRegisterController extends Controller
{
   public function __construct()
        {
          
            $this->middleware('guest:student')->except('logout');
        }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $redirectTo = '/shome';

    public function register(Request $request)
    {
       
    
      $request->validate([
          'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:students',
            'indexnumber' => 'required|digits:8|unique:students',
            'code' => 'required'
      ]);
          
              $student = Student::create(['name' => $request->input('name'),
                                     'email' =>$request->input('email'),
                                     'indexnumber' => $request->input('indexnumber'),
                'programe_id' =>  $request->input('code')
]);
      
         Auth::guard('student')->login($student);
         return redirect('/shome');

    }

    protected function guard()
    {
        return Auth::guard('student');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showregister()
    {
        $programe = Programe::all() ;
       return view('auth.studentregister', $programe) ;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
