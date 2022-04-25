<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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
// Main page
Route::get('/','Site\HomeController@index')->name('/');

// About page
Route::get('about','Site\HomeController@about')->name('about');

// Posts page
Route::get('posts','Site\HomeController@posts')->name('posts');
Route::get('post_details','Site\HomeController@postDetails')->name('postDetails');

// Team page
Route::get('teams','Site\HomeController@allTeam')->name('allTeam');

//   ContactUs
Route::get('contact','Site\ContactUsController@index')->name('contact');
Route::post('contact','Site\ContactUsController@create')->name('create.contact');

// Cars page
Route::get('cars','Site\CarController@index')->name('cars');
Route::get('carDetails/{id}','Site\CarController@details')->name('carDetails');


// Auth management
Route::get('login','Site\AuthController@login')->name('siteLogin');
Route::post('login','Site\AuthController@postLogin')->name('postLogin');
Route::get('register','Site\AuthController@register')->name('siteRegister');
Route::post('siteRegister','Site\AuthController@postRegister')->name('postRegister');
Route::get('profile','Site\AuthController@profile')->name('profile')->middleware('auth:user');
Route::get('logout','Site\AuthController@logout')->name('siteLogout')->middleware('auth:user');;
Route::get('redirect/{service}','Site\AuthController@redirect');
Route::get('callback/{service}','Site\AuthController@callback');
