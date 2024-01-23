<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::middleware('auth:sanctum')->group( function (){

    Route::post('/createtask', [App\Http\Controllers\Tasks\CreateTaskController::class, 'createTaskCr']);
    Route::post('/createproject', [App\Http\Controllers\Projects\CreateProjectController::class, 'createProjectCr']);

});
