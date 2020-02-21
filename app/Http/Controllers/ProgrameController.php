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


class ProgrameController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

      public function __construct()
    {
        $this->middleware('auth');
    }

     public function index() 
    {
    	 $programes =  Programe::all();
        $adminusers =    User::all();
       return Inertia::render('programe', ['programes'=> $programes, 'adminusers' => $adminusers]) ;
    }

    public function store(Request $request)
    {
        
        $request->validate([
          'level' => 'required',
            'session' => 'required',
            'qualification' => 'required',
            'code' => 'required'
      ]);
       Programe::create($request->all());
return redirect()->back()->with('message', 'Programe Created Successfully!');    }

     public function update(Request $request, Programe $programe)
    { 
    
         $request->validate([
          'level' => 'required',
            'session' => 'required',
            'qualification' => 'required',
            'code' => 'required'
      ]);
       
         $programe->update($request->all());
    
         return redirect()->back()->with('message', 'Programe Successfully Updated!');
        
    }
}