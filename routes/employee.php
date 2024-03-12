<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

Route::get('employee',[EmployeeController::class,'index'])->name('employee.list');
Route::post('employee',[EmployeeController::class,'store'])->name('employee.store');
Route::get('employee/{employee_id}',[EmployeeController::class,'show'])->name('employee.find');
Route::delete('employee/{employee_id}',[EmployeeController::class,'destroy'])->name('employee.delete');
Route::put('employee/{employee_id}',[EmployeeController::class,'update'])->name('employee.update');