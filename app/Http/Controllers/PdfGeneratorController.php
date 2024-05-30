<?php

namespace App\Http\Controllers;

use App\Models\User;
use PDF;

class PdfGeneratorController extends Controller
{
    public function index($id)
    {
        $user = User::where('id', $id)->first();
        $data = [
            'name' => $user->name,
            'surname' => $user->surname,
            'email' => $user->email,
        ];
        $pdf = PDF::loadView('resume', $data);
        return $pdf->download('resume.pdf');
    }
}
