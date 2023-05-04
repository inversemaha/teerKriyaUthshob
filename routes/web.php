<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApplicantsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\SelfieSubmissionController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Artisan;
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


Route::get('/', [Controller::class, 'home']);
Route::get('/login', [AuthController::class, 'login']);


Route::any('/success', [Controller::class, 'success']);
Route::any('/404', [Controller::class, 'error']);
Route::any('/contact', [Controller::class, 'contact']);
Route::get('/privacy-policy', [Controller::class, 'privacy']);




Route::any('/save-option', [Controller::class, 'saveOption']);
Route::any('/success', [Controller::class, 'success']);




Route::group(['middleware' => 'applicant'], function () {

    Route::any('/apply', [Controller::class, 'apply']);
    Route::get('/applicant/application', [ApplicantsController::class, 'applicantApplication']);
    Route::get('/applicant/logout', [ApplicantsController::class, 'logout']);
});


Route::group(['prefix' => "admin"], function () {
    Route::redirect('/login', '/login');
    Route::post('/login-check', [AuthController::class, 'loginCheck']);
    Route::any('/me-login', [AuthController::class, 'meLogin']);
    Route::get('/password-recover', [AuthController::class, 'passwordRecover']);
    Route::post('/password-reset', [AuthController::class, 'passwordReset']);

    Route::get('/votes', [AuthController::class, 'votes']);


});


Route::group(['prefix' => "admin", 'middleware' => ['admin']], function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard']);

    //Manage Video Start
    Route::get('/video/create/{id}', [VideoController::class, 'create']);
    Route::post('/video/store', [VideoController::class, 'store']);
    Route::any('/videos', [VideoController::class, 'create']);
    Route::get('/video/edit/{id}', [VideoController::class, 'edit']);
    Route::post('/video/update', [VideoController::class, 'update']);
    Route::get('/video/delete/{id}', [VideoController::class, 'destroy']);
    //Manage Video End


    //News
    Route::get('/news/create', [NewsController::class, 'create']);
    Route::post('/news/store', [NewsController::class, 'store']);
    Route::any('/news', [NewsController::class, 'show']);
    Route::get('/news/edit/{id}', [NewsController::class, 'edit']);
    Route::post('/news/update', [NewsController::class, 'update']);
    Route::get('/news/delete/{id}', [NewsController::class, 'destroy']);

    //News
    Route::get('/photo/create', [PhotoController::class, 'create']);
    Route::post('/photo/store', [PhotoController::class, 'store']);
    Route::any('/photos', [PhotoController::class, 'show']);
    Route::get('/photo/edit/{id}', [PhotoController::class, 'edit']);
    Route::post('/photo/update', [PhotoController::class, 'update']);
    Route::get('/photo/delete/{id}', [PhotoController::class, 'destroy']);

    Route::get('/settings', [AdminController::class, 'settings']);
    Route::post('/settings/update', [AdminController::class, 'settingUpdate']);
    Route::get('/profile', [AdminController::class, 'profile']);
    Route::post('/profile/update', [AdminController::class, 'profileUpdate']);





    Route::get('/manage-photo', [SelfieSubmissionController::class, 'managePhoto']);
    Route::post('/manage-photo/store', [SelfieSubmissionController::class, 'managePhotoStore']);
    Route::any('/manage-photo/edit/{id}', [SelfieSubmissionController::class, 'managePhotoUpdate']);
    Route::post('/manage-photo/update', [SelfieSubmissionController::class, 'managePhotoUpdateStore']);

    Route::get('/manage-photo/status-update/{id}/{status}', [SelfieSubmissionController::class, 'managePhotoStatus']);


    Route::get('/logout', [AdminController::class, 'logout']);
});


Route::get('/migrate', function () {
    Artisan::call('migrate');
});

Route::get('/testt', function () {

    notify()->success('Hi  welcome to codelapan');
    notify()->smiley('success', 'You are successfully reconnected');
    notify()->emotify('success', 'You are awesome, your data was successfully created');
    notify()->success('Welcome to Laravel Notify ⚡️') or notify()->success('Welcome to Laravel Notify ⚡️', 'My custom title');

    //notify()->success('Laravel Notify is awesome!');
    return view('test');
});





