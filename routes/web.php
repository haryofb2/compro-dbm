<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RoutegalleryProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

//FRONTEND
route::get('/','FrontendMasterController@index')->name('frontend');

//menu about
Route::get('/about','FrontendAboutController@index')->name('about');
Route::get('/stakeholder','FrontendAboutController@stakeholder')->name('stakeholder');
Route::get('/statistic','FrontendAboutController@statistic')->name('statistic');

//menu service
route::get('/service','FrontendServiceController@index')->name('service');

//menu gallery
route::get('/gallery','FrontendGalleryController@index')->name('gallery');

//menu info
Route::resource('/info','FrontendInfoController');

//menu event
route::get('/event','FrontendEventController@index')->name('event');


//BACKEND
Route::get('/home', 'HomeController@index')->name('home');

//Category Divition
Route::resource('backend_divition','BackendDivitionController');

//Category Position
Route::resource('backend_position','BackendPositionController');

//Category Cabang
Route::resource('backend_cabang','BackendCabangController');

//Category Employee
Route::resource('backend_employee','BackendEmployeeController');

//Category Info
Route::resource('backend_info','BackendInfoController');

//Category event
Route::resource('backend_event','BackendEventController');

//localization
Route::get('lang/{language}', 'LocalizationController@switch')->name('localization.switch');

Route::resource('backend_partner','BackendPartnerController');

Route::resource('backend_menu','BackendMenuController');

Route::resource('category_menu','CatMenuController');