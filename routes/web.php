<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Auth::routes();


Route::get('/display', [StudentController::class,'index'])->name('home');
Route::get('display/{id}',[StudentController::class,'show']);

//To Create Record
Route::get('/display/result',[StudentController::class, 'result']);
Route::post('/display',[StudentController::class, 'store'])->name('making');


Route::get('display/destroy/{id}', [StudentController::class, 'destroy']); //Get method works but not delete?/   
 //Account id 22 is 26 in db(to delete)



Route::put('/display/edit/{id}', [StudentController::class, 'update'])->name('update');//Not Working

