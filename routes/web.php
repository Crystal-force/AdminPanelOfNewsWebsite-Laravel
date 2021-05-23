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
    return view('login');
});
Route::post('/admin_login', 'LoginController@login');
Route::get('/register', 'RegisterController@index');
Route::post('/newadmin', 'RegisterController@register');
Route::get('/forgotpassword', 'ForgotController@index');
Route::post('/reset', 'ForgotController@reset');

  Route::get('/dashboard', 'DashboardController@index');
  Route::get('/user-management', 'UserInfoController@index');
  Route::post('/user-remove', 'UserInfoController@userremove');
  Route::get('/ciudad-valles', 'NewsController@index');
  Route::get('/news-detail/{id?}', 'NewsController@newsdetail');
  Route::post('/remove-news', 'NewsController@removenews');

  Route::get('/slp', 'SlpController@index');
  Route::get('/huasteca', 'HuastecaController@index');
  Route::get('/rio-verde', 'RioVerdeController@index');
  Route::get('/tamazunchale', 'TamazunchaleController@index');
  Route::get('/polocia', 'PoliciaController@index');
  Route::get('/de-todo', 'DetomoController@index');

  Route::get('/user-detail/{id?}', 'UserInfoController@usershow');
  Route::get('/total-news',  'NewsController@totalnews');
  Route::post('/reject-user', 'UserInfoController@user_reject');

  Route::get('/newusershow/{id?}', 'UserInfoController@new_show');
  Route::post('/accept-user', 'UserInfoController@acceptnew');
  Route::get('/newnewsshow', 'NewsController@new_news');
  Route::post('/accept-news', 'NewsController@publishnews');

Route::get('/logout', array('uses'=>'LoginController@logout'));

Route::get('/newuser-show', 'UserInfoController@allnewshow');
Route::get('/alluser-detail/{id?}', 'UserInfoController@newuserdetail');
Route::get('/newnews-show', 'NewsController@addnewsshow');
Route::post('/news-remove', 'NewsController@removenewnews');

Route::post('/contact', [
  'uses' => 'ContactMessageController@store',
  'as' => 'contact.store'
]);