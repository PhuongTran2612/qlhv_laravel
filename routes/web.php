<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AttendanceController;
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

Route::get('/', function () {
    return view('main');
});
Route::get('/admin', function () {
    return view('admin.home');
});
Route::controller(UserController::class)->group(function(){

    Route::get('login', 'index')->name('login');

    Route::get('registration', 'registration')->name('registration');

    Route::get('logout', 'logout')->name('logout');

    Route::post('validateRegistration', 'validateRegistration')->name('user.validateRegistration');

    Route::post('validateLogin', 'validateLogin')->name('user.validateLogin');
});
Route::controller(ClassroomController::class)->group(function(){
    Route::get('listClass', 'index')->name('listClass');
    Route::get('detail/{id}', 'detail')->name('detail');
    Route::post('detail/{id}', 'classRegister')->name('classRegister');
});
Route::controller(AdminController::class)->group(function(){
    Route::get('admin/create', 'create')->name('create');
    Route::post('admin/addAdmin', 'addAdmin')->name('admin.addAdmin');
    Route::get('admin/listTeachers', 'listTeachers')->name('listTeachers');
    Route::get('admin/detailTeacher/{id}', 'detailTeacher')->name('detailTeacher');
    Route::get('admin/createClass', 'createClass')->name('createClass');
    Route::post('admin/createClass', 'addClass')->name('admin.addClass');
    Route::get('admin/listClass', 'listClass')->name('listClass');
    Route::get('admin/attendanceInfor/{id}', 'attendanceInfor')->name('attendanceInfor');
    Route::post('admin/attendanceInfor/{id}', 'attendance')->name('attendance');
});
