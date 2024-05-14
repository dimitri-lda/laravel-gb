<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FormProcessor extends Controller
{
    public function index(): View
    {
        return view('userform');
    }

    public function store(Request $request): View
    {
        $name = $request->input('name');
        $surname = $request->input('surname');
        $email = $request->input('email');

        $formData = [
            'name' => $name,
            'surname' => $surname,
            'email' => $email
        ];

        return view('user_response', ['user' => $formData]);
    }
}
