<?php

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

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');


Auth::routes();
Route::get('/signout', 'HomeController@signOut');
Route::get('/admin', 'AdminController@index');
Route::get('/admin/pages', 'PagesAdminController@index');

Route::get('/admin/page/{id?}', 'PagesAdminController@form');
Route::get('/admin/page/{id}/delete', 'PagesAdminController@delete');
Route::post('/admin/page/{id?}', 'PagesAdminController@store');

Route::get('/admin/news', 'NewsAdminController@index');

Route::get('/admin/newsform/{id?}', 'NewsAdminController@form');
Route::get('/admin/newsform/{id}/delete', 'NewsAdminController@delete');
Route::post('/admin/newsform/{id?}', 'NewsAdminController@store');

Route::get('/admin/contact', 'ContactAdminController@index');
Route::post('/admin/contact', 'ContactAdminController@store');
Route::get('/admin/leads', 'LeadsAdminController@index');

Route::get('/landing', 'LandingController@index');
Route::post('/landing', 'LandingController@store');



