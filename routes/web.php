<?php

use App\Http\Controllers\EmployeeController;
use App\Models\Employee;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test_database', function () {
    $employee = new Employee([
        'first_name' => 'Иван',
        'last_name' => 'Иванов',
        'email' => 'ivanov@example.com'
    ]);
    $employee->save();

    return "Сотрудник успешно сохранен!";
});

Route::get('/test_database_controller', [EmployeeController::class, 'index']);
