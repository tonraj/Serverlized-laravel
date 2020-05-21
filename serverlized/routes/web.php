<?php

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

Auth::routes(['register'=>false]);

Route::any('/deploy_server', 'User@deploy')->name('deploy');
Route::post('/plans', 'User@plans')->name('plans');
Route::get('/dashboard', 'User@index')->name('dashboard');
Route::any('/user/login', 'UserAuth@login')->name('login');
Route::any('/register', 'UserAuth@register')->name('register');
Route::any('/getServers', 'User@getServer');

