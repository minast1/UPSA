<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;


class SiteController extends Controller
{
    public function index()
    {
    	return Inertia::render('welcome') ;
    }



    public function login(Request $request)
    {
    	$request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('dash');
        }
             throw ValidationException::withMessages([
            'email' => [trans('auth.failed')],
        ]);
        
    }

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
