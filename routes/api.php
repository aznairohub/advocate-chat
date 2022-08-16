<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\advocatechatController;
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

Route::post('/advocateRegistration',[advocatechatController::class,'advocateRegistration']);
Route::post('/clientRegistration',[advocatechatController::class,'clientRegistration']);
Route::put('/editclientprofile',[advocatechatController::class,'editclientprofile']);
Route::get('/admin/viewclientprofile',[advocatechatController::class,'adminviewclientprofile']);

