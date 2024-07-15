<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TaskController;
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

Route::controller(AuthController::class)->group(function () {
    Route::post('register', 'registerUser');
    Route::post('login', 'login');
    Route::get('users', 'getUsers');
    Route::post('logout', 'logout');
    Route::post('profile', 'userProfileInfo');
    Route::post('refresh', 'refresh');
    Route::put('updateinfo', 'updateUser');
    Route::post('verifyemail', 'checkEmail');
    Route::post('resetpassword', 'resetPassword');
    Route::post('checktoken', 'checkToken');
});

Route::controller(TaskController::class)->group(function () {
    Route::post('addtask', 'addTask');
    Route::get('tasks', 'getAllTasksByUser');
    Route::get('tasks/{id}', 'getTaskById');
    Route::put('edittask/{id}', 'editTaskById');
    Route::put('taskdone/{id}', 'TaskDoneById');
    Route::delete('tasks/{id}', 'deleteTaskById');
    Route::get('taskstatus/{id}', 'getStatusTaskById');
});
