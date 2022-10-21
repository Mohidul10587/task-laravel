<?php

use App\Http\Controllers\contactController;
use App\Http\Controllers\dashBoardController;
use App\Http\Controllers\jobformController;
use App\Http\Controllers\priceController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('contact', function() {
//     return view('contact');
// });

// Route::view('contact','contact');
Route::view('aboutus','aboutus');
Route::get('price',[priceController::class,'showPircePage']);


Route::get('contact',[contactController::class,'contactform']);
Route::post('contactsend',[contactController::class,'contactdata']);

Route::get('jobform',[jobformController::class,'getjobform']);
Route::post('jobform',[jobformController::class,'postjobformdata']);

Route::get('dashBoard',[dashBoardController::class,'getDashBoard']);
Route::get('dashBoard',[dashBoardController::class,'userdata']);
