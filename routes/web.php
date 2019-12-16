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

Auth::routes();

Route::get('/', function () {
		return view('welcome');
	});

Route::get('/beranda', function () {
		return view('beranda');
	});

Route::get('/Tentang', function () {
		return view('Tentang');
	});

Route::get('/galery', function () {
		return view('galery');
	});


Route::group(['middleware' => ['auth', 'checkRole:admin,user']], function(){
	Route::get('/beranda', 'HomeController@index')->name('home');
});

Route::group(['middleware' => ['auth', 'checkRole:user']], function(){
	
});

Route::group(['middleware' => ['auth', 'checkRole:admin']], function(){
	

});

Route::resource('laporan', 'LaporController');

Route::view('/feedback', 'form_feedback');
Route::post('submit', 'FeedbackController@save');
Route::get('/feedbackuser', 'FeedbackController@index');




/*Route::group(['middleware' => ['web', 'auth']], function(){
	Route::get('/', function() {
		return view('welcome');
	});


	Route::get('/home', function() {
		if (Auth::user()->admin == 0) {
			return view('home');
		}else {
			$users['users'] = \App\User::all();
			return view('adminhome', $users);
		}
	});

});*/

