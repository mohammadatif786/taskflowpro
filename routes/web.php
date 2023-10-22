<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\TaskController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\Employee\EmployeedashboardController;
use App\Http\Controllers\Employee\EmployeeProfile;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin',[LoginController::class,'index']);
Route::get('/admin/reset-password',[LoginController::class,'passwordReset'])->name('/admin/reset-password');

Route::controller(LandingPageController::class)->group(function(){

    Route::get('/','index');
    Route::get('about','about');
    Route::get('gallary','gallary');
    Route::get('contact','contact');

});

Route::prefix('/admin')->middleware(['isAdmin'])->group(function(){

    Route::get('/dashboard',[DashboardController::class,'index'])->name('/admin/dashboard');
    Route::get('/profile',[DashboardController::class,'profile'])->name('/admin/profile');
    Route::post('/{adminId}/update-profile',[DashboardController::class,'updateProfile'])->name('/admin.update-profile');
    Route::post('/upload-image',[DashboardController::class,'uploadImage']);

    Route::controller(TaskController::class)->group(function(){

        Route::get('/task','index')->name('admin/task');
        Route::post('/add-task','insert')->name('/add-task');
        Route::put('/{id}/update-task','update');
        Route::get('/{id}/delete-task','destory');

        Route::get('/task-category','taskCategory')->name('admin/task-category');
        Route::post('/add-task-Category','addTaskCategory')->name('admin/add-task-Category');
        Route::get('/{id}/delete-task-category','categoryDestory');
        Route::put('/{id}/update-task-category','taskCategoryupdate');

        Route::post('/insert-task-assign-to-employee','taskAssignInsert')->name('admin/insert-task-assign-to-employee');
        Route::get('/task-assign-to-employee','taskAssign')->name('admin/task-assign-to-employee');

    });

    Route::controller(EmployeeController::class)->group(function(){

        Route::get('employee','index')->name('admin/employee');
        Route::post('/add-employee','insert')->name('/add-employee');
        Route::put('/{id}/update-employee','update');
        Route::get('/{id}/delete-employee','destory');
    });
});


Route::prefix('/employee')->middleware(['auth','isEmployee'])->group(function(){

    Route::get('/dashboard',[EmployeedashboardController::class,'index'])->name('employee/dashboard');

    Route::get('/task-list',[EmployeedashboardController::class,'taskList'])->name('employee/task-list');
    Route::get('/task-history',[EmployeedashboardController::class,'taskHistory'])->name('employee/task-history');
    Route::get('/{taskId}/send-complete-task', [EmployeedashboardController::class, 'completeTask'])->name('employee.send-complete-task');

    Route::get('profile',[EmployeeProfile::class,'index'])->name('/employee/profile');
    Route::post('/{employeeId}/update-profile',[EmployeeProfile::class,'updateProfile'])->name('/employee.update-profile');

    Route::post('/upload-image',[EmployeeProfile::class,'uploadImage']);
});
