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

Route::get('/','InformationViewController@viewTeacherCode')->name('view.teacher.code');

Route::get('/view-result/{id}','InformationViewController@viewResult')->name('view.result');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/information-store','InformationStoreController@store')->name('information.store');


Route::post('/information-delete/{id}', 'InformationStoreController@destroy')->name('information.delete');
Route::post('/information-update/{id}', 'InformationStoreController@update')->name('information.update');



Route::group(['prefix' => 'admin'], function(){
	Route::get('/deshboard', 'Admin\AdminController@index')->name('backend.index');
		// Admin Login Routes
	  Route::get('/', 'Auth\Admin\LoginController@showLoginForm')->name('admin.login');
	  Route::post('/adminlogin-submit', 'Auth\Admin\LoginController@login')->name('admin.login.submit');
	  Route::post('/adminlogout-submit', 'Auth\Admin\LoginController@logout')->name('admin.logout');

	   Route::get('/user-list', 'Admin\UserController@userList')->name('admin.user.list');

	  Route::post('/user-list-update/{id}', 'Admin\UserController@userListUpdate')->name('user.list.update');
});