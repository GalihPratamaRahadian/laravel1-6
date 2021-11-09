<?php

use App\Http\Controller\GroupsController;
use App\Http\Controller\CobaController;
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


Route::get('', [App\Http\Controllers\CobaController::class, 'index']);
//Route::get('/friends', [App\Http\Controllers\CobaController::class, 'index']);
//Route::get('/friends/create', [App\Http\Controllers\CobaController::class, 'create']);
//Route::post('/friends', [App\Http\Controllers\CobaController::class, 'store']);
//Route::get('/friends/{id}', [App\Http\Controllers\CobaController::class, 'show']);
//Route::get('/friends/{id}/edit', [App\Http\Controllers\CobaController::class, 'edit']);
//Route::put('/friends/{id}', [App\Http\Controllers\CobaController::class, 'update']);
//Route::delete('/friends/{id}', [App\Http\Controllers\CobaController::class, 'destroy']);

Route::resources([
    'friends' => App\Http\Controllers\CobaController::class,
    'groups' => App\Http\Controllers\GroupsController::class,
]);
Route::get('/groups/addmember/{group}', [App\Http\Controllers\GroupsController::class, 'addmember']);
Route::put('/groups/addmember/{group}', [App\Http\Controllers\GroupsController::class, 'updateaddmember']);
Route::put('/groups/deleteaddmember/{group}', [App\Http\Controllers\GroupsController::class, 'deleteaddmember']);