<?php

use App\Http\Controllers\HospitalController;
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



Route::get('/',[HospitalController::class, 'index']);


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('hospital', function () {
//    $doctor = Doctor::find(1);
//    return $doctor->hospital;
// });

// Route::get('doctores', function () {
//     $hospital = Hospital::find(1);
//     return $hospital->doctors;
// });

// Route::get('pacientes/{id}', function ($id) {
//     $doctor = Doctor::find($id);
//     return $doctor->patients;
// });
