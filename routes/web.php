<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\GitHubLoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/google/redirect', [App\Http\Controllers\GoogleLoginController::class, 'redirectToGoogle'])->name('google.redirect');
Route::get('/google/callback', [App\Http\Controllers\GoogleLoginController::class, 'handleGoogleCallback'])->name('google.callback');

Route::get('/github/redirect',[GitHubLoginController::class,"redirectToGithub"]);
Route::get('/github/callback',[GitHubLoginController::class,"handleGithubCallback"]);
Route::get('/logout', [LoginController::class, "logout"]);

