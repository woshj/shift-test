<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\JobTitleController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/
//create token
Route::post('/v1/create-token', [AuthController::class, 'createToken']);
//show office details
Route::apiResource('/v1/office', OfficeController::class)->only('show');
//show employee details
Route::apiResource('/v1/employee', EmployeeController::class)->only('show');
//show job title details
Route::apiResource('/v1/job-title', JobTitleController::class)->only('show');

/*
|--------------------------------------------------------------------------
| Private Routes
|--------------------------------------------------------------------------
*/
Route::group(['middleware' => ['auth:sanctum']], function () {
  //update office details
  Route::apiResource('/v1/office', OfficeController::class)->only('update');
  //update employee details
  Route::apiResource('/v1/employee', EmployeeController::class)->only('update');
  //update job title details
  Route::apiResource('/v1/job-title', JobTitleController::class)->only('update');
});
