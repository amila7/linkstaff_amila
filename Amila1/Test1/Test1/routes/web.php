<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/StudentSavePage', function () {
    return view('welcome');
})->name('welcome.index');

Route::controller(StudentController::class)->group(function(){
  Route::get('/AddStudent','Addstudent');
  Route::post('/saveStudent','save')->name('student.save');
});
