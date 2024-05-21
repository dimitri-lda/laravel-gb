<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        $name = $request->input('name');
        $last_name = $request->input('last_name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $position = $request->input('position');
        $address = $request->input('address');
        $url = $this->getUrl($request);
        $path = $this->getPath($request);
        $workData = $request->input('workData');
        $decodedWorkData = json_decode($workData, true);
        $addressData = $decodedWorkData['address'];

        // дальше сохраняем данные в базу данных, не явлется требованием задания
    }

    public function update(Request $request, $id)
    {
        // $employee = Employee::find($id);
        $name = $request->input('name');
        $last_name = $request->input('last_name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $position = $request->input('position');
        $address = $request->input('address');
        $url = $this->getUrl($request);
        $path = $this->getPath($request);
        $workData = $request->input('workData');
        $decodedWorkData = json_decode($workData, true);
        $addressData = $decodedWorkData['address'];

        // дальше обновляем данные в базе данных, не явлется требованием задания
        return view('update-employee-data', ['id' => $id]);
    }

    public function getPath(Request $request): string
    {
        return $request->path();
    }

    public function getUrl(Request $request): string
    {
        return $request->url();
    }
}
