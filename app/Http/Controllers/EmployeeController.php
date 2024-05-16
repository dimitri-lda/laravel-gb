<?php

namespace App\Http\Controllers;

use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index(): string
    {
        $employee = new Employee([
            'first_name' => 'Иван2',
            'last_name' => 'Иванов2',
            'email' => 'ivanov2@example.com'
        ]);
        $employee->save();

        return "Сотрудник успешно сохранен!";
    }
}


