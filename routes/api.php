<?php

use App\Http\Controllers\API\CategoryController;
use App\Http\Controllers\API\CocktailController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\LeadController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/cocktails', [CocktailController::class, 'cocktails']);
Route::get('/cocktails/category/{slug}', [CocktailController::class, 'filter']);
Route::post('/contacts', [LeadController::class, 'store']);
Route::get('/categories', [CategoryController::class, 'categories']);
