<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

// Route::get('/', function (Service $service) {
//     die(get_class($service));
// });

//Dentista
Route::middleware('auth')->group(function () {
    Route::get('dentists', 'App\Http\Controllers\DentistController@index');
    Route::get('dentists/create', 'App\Http\Controllers\DentistController@create');
    Route::post('dentists/store', 'App\Http\Controllers\DentistController@store');
    Route::get('appointments/show', 'App\Http\Controllers\AppointmentController@show');
    Route::post('medicalRecords/create/{id}', 'App\Http\Controllers\MedicalRecordController@create');
    Route::post('medicalRecords/store', 'App\Http\Controllers\MedicalRecordController@store');
    Route::get('medicalRecords/show/patient/{id}', 'App\Http\Controllers\MedicalRecordController@showPatientMedicalRecords');
    Route::get('patients/create', 'App\Http\Controllers\PatientController@create');
    Route::post('patients/store', 'App\Http\Controllers\PatientController@store');
    Route::post('patients/delete/{id}', 'App\Http\Controllers\PatientController@delete');
    Route::post('medicalRecords/edit/{id}', 'App\Http\Controllers\MedicalRecordController@edit');
    Route::post('medicalRecords/update/{id}', 'App\Http\Controllers\MedicalRecordController@update');
    Route::get('medicalRecords/show/{id}', 'App\Http\Controllers\MedicalRecordController@show');
    Route::post('medicalRecords/delete/{id}', 'App\Http\Controllers\MedicalRecordController@delete');
    Route::post('appointments/delete/{id}', 'App\Http\Controllers\AppointmentController@delete');
    Route::get('users/delete', 'App\Http\Controllers\userController@delete');
});

//No dentista
Route::get('/', 'App\Http\Controllers\PatientController@index');
Route::get('users/login', 'App\Http\Controllers\userController@login')->name('login');
Route::post('users/session', 'App\Http\Controllers\userController@session');
Route::get('users/logout', 'App\Http\Controllers\userController@logout');
Route::get('users/delete', 'App\Http\Controllers\userController@delete');
Route::get('appointments', 'App\Http\Controllers\AppointmentController@index');
Route::post('appointments/store', 'App\Http\Controllers\AppointmentController@store');
Route::post('appointments/create/{id}', 'App\Http\Controllers\AppointmentController@create');




