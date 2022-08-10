<?php

use App\Http\Controllers\indexController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\userController;
use App\Http\Controllers\advocateController;
// use App\Http\Controllers\BotManController;
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
Route::post('/lawyeraction',[indexController::class,'lawyeraction']);
Route::post('/useraction',[indexController::class,'useraction']);
Route::post('/lawyerloginaction',[indexController::class,'lawyerloginaction']);
Route::post('/userloginaction',[indexController::class,'userloginaction']);
Route::post('/logout',[indexController::class,'logout']);





Route::get('/adminindex',[adminController::class,'index']);
Route::get('/admin/viewuser',[adminController::class,'viewuser']);
Route::get('/admin/viewadvocate',[adminController::class,'viewadvocate']);
Route::get('/adminprofile',[adminController::class,'adminprofile']);
Route::get('/viewservices',[adminController::class,'viewservices']);
Route::post('/servicesaction',[adminController::class,'servicesaction']);
Route::get('/editservice/{id}',[adminController::class,'editservice']);
Route::get('/deleteservices/{id}',[adminController::class,'deleteservices']);
Route::post('/editserviceaction/{id}',[adminController::class,'editserviceaction']);
Route::get('/admin/viewcases',[adminController::class,'viewcases']);
Route::get('/user/approve/{id}',[adminController::class,'userapprove']);
Route::get('/user/decline/{id}',[adminController::class,'userdecline']);
Route::get('/advocate/approve/{id}',[adminController::class,'advocateapprove']);
Route::get('/advocate/decline/{id}',[adminController::class,'advocatedecline']);
Route::post('/serviceaction',[adminController::class,'serviceaction']);
Route::post('/editserviceaction/{id}',[adminController::class,'editserviceaction']);
Route::post('/adminprofileaction',[adminController::class,'adminprofileaction']);


Route::get('/advocateindex',[advocateController::class,'index']);
Route::get('/viewcaserequest',[advocateController::class,'viewcaserequest']);
Route::get('/request',[advocateController::class,'request']);
Route::get('/viewapprovedcase',[advocateController::class,'viewapprovedcase']);
Route::get('/viewprofile',[advocateController::class,'viewprofile']);
Route::post('/advocateprofileaction/{id}',[advocateController::class,'advocateprofileaction']);
Route::get('/case/requestapprove/{id}',[advocateController::class,'caserequestapprove']);
Route::get('/case/requestdecline/{id}',[advocateController::class,'caserequestdecline']);
Route::get('/requestapprove/{id}',[advocateController::class,'requestapprove']);
Route::get('/requestdecline/{id}',[advocateController::class,'requestdecline']);
Route::get('/update/{id}',[advocateController::class,'update']);
Route::post('/updateaction/{id}',[advocateController::class,'updateaction']);





Route::get('/userindex',[userController::class,'index']);
Route::get('/userprofile',[userController::class,'profile']);
Route::get('/user/viewadvocates',[userController::class,'viewadvocates']);
Route::get('/user/services',[userController::class,'services']);
Route::get('/user/viewcases',[userController::class,'viewcases']);
Route::get('/applycase/{id}',[userController::class,'applycase']);
Route::get('/requestadvocate/{id}',[userController::class,'requestadvocate']);
Route::post('/userprofileaction/{id}',[userController::class,'userprofileaction']);
Route::post('/requestadvocateaction/{id}',[userController::class,'requestadvocateaction']);
Route::post('/requestlawaction',[userController::class,'requestlawaction']);
Route::get('/user/viewstatus',[userController::class,'viewstatus']);
Route::get('/resend/{id}',[userController::class,'resend']);
Route::get('/law/resend/{id}',[userController::class,'lawresend']);
Route::get('/viewadvocate/{id}',[userController::class,'viewadvocate']);
Route::get('/viewcasestatus/{id}/{type}',[userController::class,'viewcasestatus']);


// Route::match(['get', 'post'], '/botman', 'BotManController@handle');