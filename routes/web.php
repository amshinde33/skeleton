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
    return view('welcome');
});
//user routes
Route::get('/profile', 'UserController@index');
Route::post('/insert', 'UserController@insert');
Route::post('/update', 'UserController@update');
Route::get('/userlist', 'UserController@list');
Route::post('/status/{id}', 'UserController@status');
Route::post('/delete/{id}', 'UserController@destroy');
route::get('/addUserPage', 'UserController@addUserPage');
route::post('/addUser', 'UserController@addUser');
Route::get('/passwordPage', 'UserController@passwordPage');
Route::post('/updatepassword', 'UserController@updatePassword');
Route::get('/addUserRolePage', 'UserController@addUserRolePage');
Route::post('/addUserRoles', 'UserController@addUserRoles');
Route::get('/userRolesList','UserController@userRolesList');
// Application routes
Route::get('/appList', 'ApplicationController@list');
Route::get('/addApplicationPage', 'ApplicationController@applicationPage');
Route::post('/appCreate', 'ApplicationController@create');
Route::get('/appEdit/{id}', 'ApplicationController@edit');
Route::get('/appUpdate/{id}', 'ApplicationController@update');
Route::post('/appStatus', 'ApplicationController@status');
Route::post('/appCretePushNotification/{id}','ApplicationController@create_push_notification');
//Route::get('/appNotificationList','ApplicationController@notification_list');
Route::get('/appNotificationList/{id}','ApplicationController@notification_list');
Route::get('/appNotificationList/appEditNotification/{id}','ApplicationController@edit_notification');
Route::post('/appUpdateNotification/{id}','ApplicationController@update_notification');
Route::post('/appNotificationList/appDeleteNotification','ApplicationController@destroy_notification');

//Customer routes
Route::get('/customerList', 'CustomerController@list');
Route::get('customerEdit/{id}', 'CustomerController@edit');
Route::post('/customerUpdate/{id}', 'CustomerController@update');
Route::post('/customerStatus', 'CustomerController@status');
// Demo routes
Route::get('/datatables', 'PagesController@datatables');
Route::get('/ktdatatables', 'PagesController@ktDatatables');
Route::get('/select2', 'PagesController@select2');
//Route::get('/index', 'PagesController@index');
// Quick search dummy route to display html elements in search dropdown (header search)
Route::get('/quick-search', 'PagesController@quickSearch')->name('quick-search');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
