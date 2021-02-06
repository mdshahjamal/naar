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

Route::get('/', function () {
    return view('frontend.master');
});

Route::get('home', 'FrontendController@home')->name('home');
Route::get('home2', 'FrontendController@home2')->name('home2');
Route::get('about-us', 'FrontendController@aboutUs')->name('aboutUs');
Route::get('campaign', 'FrontendController@campaign')->name('campaign');
Route::get('events', 'FrontendController@events')->name('events');
Route::get('event-details', 'FrontendController@eventDetail')->name('eventDetail');
Route::get('blog', 'FrontendController@blog')->name('blog');
Route::get('blog-detail', 'FrontendController@blogDetail')->name('blogDetail');
Route::get('service', 'FrontendController@service')->name('service');
Route::get('operationalVideo', 'FrontendController@operationalVideo')->name('operationalVideo');

//Route::get('/customer-signup-form','FrontendController@index')->name('');