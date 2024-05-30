<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * @return Collection<int, User>
     */
    public function index(): Collection
    {
//        view('form')
        return User::all();
    }

    public function get(Request $request, $id): JsonResponse
    {
        $user = User::where('id', $id)->first();
        return response()->json($user);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:50',
            'surname' => 'required|max:50',
            'email' => 'required|email',
        ]);

        return User::create($request->all());
    }
}
