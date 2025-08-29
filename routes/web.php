<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\RecipeController;
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
    return view('welcome');
});

Route::get('/test', function () {
    return 'Route is working';
});


Route::get('/recipes',[RecipeController::class,'index']);             
Route::get('/recipes/create',[RecipeController::class,'create']);    
Route::get('recipes/{id}',[RecipeController::class,'show']);         
Route::post('/recipes',[RecipeController::class,'store']);           
Route::get('recipes/{id}/edit',[RecipeController::class,'edit']); 
Route::put('/recipes/{id}',[RecipeController::class,'update']);      
Route::delete('/recipes/{id}',[RecipeController::class,'destroy']);  

