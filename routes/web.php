<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\C_title;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/' ,function() {
    return view('home');
});

Route::get('/multiplication', function() {
    return view('multiplication');
});

Route::post('/multiplication',function(Request $request) {
    $data['inputMul'] = $request-> input('inputMul');
    return view('resultMultiplication',$data);
});

Route::get('/admin', [adminController::class, 'index']);

Route::resource('/title',C_title::class);
Route::post('/title',[C_title::class,'store']);
