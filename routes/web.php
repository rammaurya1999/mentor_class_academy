<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\HomeController;

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
// Ram 03/04/2023 here path for clear route cache and etc.
    Route::get('/clear', function() {
    Artisan::call('cache:clear');
    Artisan::call('route:cache');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    return 'Application cache has been cleared';
});
// end here


// Admin Controller
    Route::get('adminLogin',[AdminController::class,'adminLogin']);
    Route::post('loginSuccess',[AdminController::class,'loginSuccess']);

    Route::middleware(['middleware'=>'Admin'])->group(function(){
    Route::get('admin/dashboard',[AdminController::class,'dashboard']);
    Route::get('Studentdata',[AdminController::class,'Studentdata']);
    Route::get('Mentordata',[AdminController::class,'Mentordata']);
    Route::post('changestatusmentor',[AdminController::class,'changestatusmentor']);
    Route::get('deletementor/{id}',[AdminController::class,'deletementor']);
    Route::post('changestatusstudent',[AdminController::class,'changestatusstudent']);
    Route::get('deleteStudent/{id}',[AdminController::class,'deleteStudent']);
    Route::get('admin/Profile',[AdminController::class,'admin_profile']);
    Route::post('admin/UpdateProfile',[AdminController::class,'adminUpdateProfile']);
    Route::get('admin/logout',[AdminController::class,'logout']);
    Route::get('admin/change_Password',[AdminController::class,'changePass']);
    Route::post('admin/update_Password',[AdminController::class,'updatePass']);
    Route::get('admin/mentorform',[AdminController::class,'mentorform']);
    Route::get('admin/add_mentor',[AdminController::class,'add_mentor']);
    Route::post('admin/mento_info',[AdminController::class,'mentorDataInsert']);
  
});


// Frontend Route
Route::middleware(['middleware'=>'user'])->group(function(){
    // Route::get('/', function () {
    //     return view('Frontend.index');
    // });
    
    
});
Route::get('index',[HomeController::class,'index']);
Route::post('userRegistration',[HomeController::class,'userRegistration']);
Route::get('login',[HomeController::class,'login']);
Route::get('userLogin',[HomeController::class,'userLogin']);
Route::get('loginsuccess',[HomeController::class,'loginsuccess']);
Route::get('userlogout',[HomeController::class,'userlogout']);
Route::get('lang_change',[HomeController::class,'change']);


