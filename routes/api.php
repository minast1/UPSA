<?php

use Illuminate\Http\Request;
use Illuminate\Routing\Router;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*
* Snippet for a quick route reference
*/
Route::get('/', function (Router $router) {
    return collect($router->getRoutes()->getRoutesByMethod()["GET"])->map(function($value, $key) {
        return url($key);
    })->values();   
});

Route::apiResource('programes', '\App\Http\Controllers\API\ProgrameAPIController');

Route::apiResource('courses', '\App\Http\Controllers\API\CourseAPIController');

Route::apiResource('students', '\App\Http\Controllers\API\StudentAPIController');

Route::apiResource('users', '\App\Http\Controllers\API\UserAPIController');