<?php

use App\Http\Controllers\ListController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

//All list
Route::get('/', [ListController::class, 'index'])->name('home');

// List Create View Show 
Route::get('listing/create', [ListController::class, 'create'])->name('jobcreate')->middleware('auth');

// List Store Data 
Route::post('listing/store', [ListController::class, 'store'])->name('jobstore')->middleware('auth');

//Single List
Route::get('/listing/{listing}', [ListController::class, 'show'])->name('jobbyid');

//Manage Job post

Route::get('/manage/jobs',[ListController::class, 'manage'])->name('managejob')->middleware('auth');

//Single Job Edit
Route::get('listing/{listing}/edit',[ListController::class, 'edit'])->name('editjob')->middleware('auth');

//Job Update

Route::PUT('listing/{listing}',[ListController::class, 'update'])->name('jobupdate')->middleware('auth');

//Job Delete
Route::DELETE('listing/{listing}',[ListController::class, 'destroy'])->name('destroyjob')->middleware('auth');

//show register form

Route::get('/register/create',[UserController::class, 'create'])->name('newregister')->middleware('guest');


//Submit Register

Route::POST('/register/submit',[UserController::class, 'store'])->name('userstore');

//Logout

Route::post('/logout',[UserController::class, 'logout'])->name('logout')->middleware('auth');

//show login form
Route::get('/login',[UserController::class, 'login'])->name('login');

//login sumbit

Route::post('/user/authenticate',[UserController::class, 'login_authenticate'])->name('login_authenticate');

