<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class Contacts extends Controller
{
    public function index(): View
    {
        $data = [
            'age' => 15,
            'name' => 'Ivan',
            'surname' => 'Deshkevich',
            'position' => 'Manager',
            'address' => 'Minsk, Kirova st. 9',
        ];
        return view('home', $data);
    }

    public function contacts(Request $request): View
    {
        $data = [
            'age' => 19,
            'name' => 'Ivan',
            'surname' => 'Deshkevich',
            'position' => 'Manager',
            'address' => 'Minsk, Kirova st. 9',
            'postcode' => '220033',
            'phone' => '+72344342343',
            'email' => '',
        ];
        return view('contacts', $data);
    }
}
