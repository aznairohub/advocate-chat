<?php

use App\Http\Controllers\indexController;
use App\Http\Controllers\adminController;
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

Route::get('/',[indexController::class,'index']);
Route::get('/about',[indexController::class,'about']);
Route::get('/services',[indexController::class,'services']);
Route::get('/laywerregister',[indexController::class,'laywerregister']);
Route::get('/userregister',[indexController::class,'userregister']);
Route::get('/lawyerlogin',[indexController::class,'lawyerlogin']);
Route::get('/userlogin',[indexController::class,'userlogin']);
Route::get('/logout',[indexController::class,'logout']);

Route::get('/adminindex',[adminController::class,'index']);
Route::get('/admin/viewuser',[adminController::class,'viewuser']);
Route::get('/admin/viewadvocate',[adminController::class,'viewadvocate']);
Route::get('/adminprofile',[adminController::class,'adminprofile']);
// Route::get('/adminindex',[adminController::class,'index']);