<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Student;
use App\Programe ;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use Illuminate\Validation\ValidationException;



class StudentLoginController extends Controller
{


    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:student')->except('logout');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $redirectTo = '/shome';

    public function login(Request $request)
    {
         $request->validate([
            $this->username() => 'required|digits:8',
            
        ]);

      $credentials = $request->only('indexnumber');
     $user =  Student::where('indexnumber', $credentials)->first();


       if ($user) {
            Auth::guard('student')->login($user);
            // Authentication passed...
            return redirect('/shome');
        }
        throw ValidationException::withMessages([
            $this->username() => [trans('auth.failed')],
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function username()
    {
        return 'indexnumber' ;
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
    public function showlogin()
    {
        return view('auth.studentlogin');
    }
    

     public function showregister()
    {
        $programe = Programe::all() ;
        return view('auth.studentregister',['programe' => $programe]);
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
    public function logout(Request $request)
    {
        Auth::guard('student')->logout();
         $request->session()->invalidate();
         return $this->loggedOut($request) ?: redirect('/');
    }

    protected function loggedOut(Request $request)
    {
        //
    }

   
}
