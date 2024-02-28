<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\SubAdminController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ExpenseController;
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
Route::get('/register',[AuthController::class,'loadRegister']);
Route::post('/register',[AuthController::class,'register'])->name('register');

Route::get('/',[AuthController::class,'loadIndex']);
Route::get('/login',[AuthController::class,'loadLogin']);
Route::post('/login',[AuthController::class,'login'])->name('login');
Route::get('/logout',[AuthController::class,'logout']);

// ********** Super Admin Routes *********
Route::group(['middleware'=>['web','isSuperAdmin']],function(){
    Route::get('/dashboard',[SuperAdminController::class,'dashboard']);

    Route::get('/users',[SuperAdminController::class,'users'])->name('superAdminUsers');
    Route::get('/manage-role',[SuperAdminController::class,'manageRole'])->name('manageRole');
    Route::post('/update-role',[SuperAdminController::class,'updateRole'])->name('updateRole');

});

// ********** Sub Admin Routes *********
Route::group(['middleware'=>['web','isSubAdmin']],function(){
    Route::get('/sub-admin/dashboard',[SubAdminController::class,'dashboard']);
});

// ********** Employee Routes *********
Route::group(['middleware'=>['web','isEmployee']],function(){
    Route::get('/employee/dashboard',[EmployeeController::class,'dashboard']);
    Route::post('/employee/expense', [ExpenseController::class, 'store'])->name('submit-expense');

});

// ********** User Routes *********
Route::group(['middleware'=>['web','isUser']],function(){
    Route::get('/User/dashboard',[UserController::class,'dashboard']);
});

