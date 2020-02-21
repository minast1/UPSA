<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect ;


class UserController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function verifyStatus(Request $request)
    {
    	$code = $request->code ; 
    	
    	if ($code == 'ITSA') {
    		return redirect()->route('register') ;
    	}
    	return redirect()->back()->with('status', 'invalid code') ;
    }
}