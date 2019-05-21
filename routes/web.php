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





// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'FrontendhomeController@home')->name('frontendhome');
Route::get('/about', 'AboutController@about')->name('about');
Route::get('/gallary', 'GallaryController@gallary')->name('gallary');
Route::get('/doctors', 'DoctorsController@doctors')->name('doctors');
Route::get('/hospital', 'HospitalController@hospital')->name('hospital');
Route::get('/pharmacy', 'PharmacyController@pharmacy')->name('pharmacy');
Route::get('/contact', 'ContactController@contact')->name('contact');
Route::get('/medicine', 'MedicineController@medicine')->name('medicine');
Route::get('/doctorslist', 'DoctorsListController@doctorslist')->name('doctorslist');
Route::get('/frontend-user', 'LoginController@user_login')->name('user_login');
// Route::post('/frontend-login', 'LoginController@login')->name('login');
Route::get('/appoinment-show/{id}', 'AppoinmentController@index')->name('index');
Route::get('/appoinment', 'AppoinmentController@appoinment')->name('appoinment');
Route::post('/appoinment-create', 'AppoinmentController@create')->name('create');

Route::group(['as'=>'admin.','prefix'=>'admin', 'namespace'=>'Admin','middleware'=>['auth'] ],
	function (){

		Route::get('/home', 'HomeController@index')->name('home');
		Route::resource('appoinment', 'AppoinmentController');
		Route::resource('users', 'UsersController');


});