<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Programe ; 
use App\Student ;
use Illuminate\Support\Facades\Auth; 

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()

    {
       
        $students = Student::inRandomOrder()->get();
        $programes = Programe::get();
         return Inertia::render('dash', ['programes' => $programes, 'students' => $students]);
    }
}
