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

use App\Http\Controllers\ExameController;

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test', 'TestController@test')->name('test');

Route::get('/test/show', 'TestController@show')->name('test.show');

Route::post('/test', 'TestController@create')->name('test.create');

Route::get('/pacientes', 'PatientController@index')->name('patient.index');

Route::get('/pacientes/create', 'PatientController@create')->name('patient.create');

Route::post('/pacientes' ,'PatientController@store')->name('patient.store');

Route::get('pacientes/{patient', 'PatientController@show')->name('patient.show');

Route::get('/exames' ,'ExameController@index');


