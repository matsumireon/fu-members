<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MembersPageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UpdatePageController;
use App\Http\Controllers\GoogleLoginController;

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

Route::match(['get','post',],'/members', [MembersPageController::class, 'show']);
Route::match(['get','post',],'/memberpage', [MembersPageController::class, 'memberpage']);

Route::match(['post','get',],'/post', [PostController::class, 'post']);
Route::match(['post','get',],'/ok', [PostController::class, 'ok']);
Route::post('/check', [PostController::class, 'check']);
Route::match(['post','get',],'/insert', [PostController::class, 'insert']);

Route::post('/update', [UpdatePageController::class, 'update']);
Route::post('/updatego', [UpdatePageController::class, 'updatego']);

Route::match(['get','post',],'/deletecheck', [MembersPageController::class, 'deletecheck']);
Route::match(['get','post',],'/delete', [MembersPageController::class, 'delete']);

Route::get('/auth/redirect', [GoogleLoginController::class, 'getGoogleAuth']);
Route::get('/login/callback', [GoogleLoginController::class, 'authGoogleCallback']);
Route::get('/logout', [GoogleLoginController::class, 'logout']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::match(['get','post',],'/Admin', [MembersPageController::class, 'Admin']);
