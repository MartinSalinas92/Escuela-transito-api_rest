<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    //return $request->user();
});

//Usuarios
Route::post('/user',[App\Http\Controllers\UseController::class,'store']);
Route::post('/login',[App\Http\Controllers\UseController::class,'login']);



//Cursos
Route::get('/courses',[App\Http\Controllers\CoursesController::class,'index']);
Route::post('/coursesapi',[App\Http\Controllers\CoursesController::class,'store']);
Route::put('/course/{id}', [App\Http\Controllers\CoursesController::class,'update']);


//Postulantes
Route::get('/postulantes',[App\Http\Controllers\PostulanteController::class,'index']);
Route::get('/postulantesxdni',[App\Http\Controllers\PostulanteController::class,'indexPorDni']);
Route::post('/postulantesapi',[App\Http\Controllers\PostulanteController::class,'store']);
Route::put('/postulante/{id}', [App\Http\Controllers\PostulanteController::class,'update']);

Route::group(['middleware'=>'auth:api'],function(){

    //instructores
    Route::get('/instructoresindex',[App\Http\Controllers\InstructorController ::class,'index']);
    Route::post('/instructores',[App\Http\Controllers\InstructorController ::class,'store']);
    Route::put('/instructores/{id}', [App\Http\Controllers\InstructorController::class,'update']);



});
