<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{

    //display a listing of the resource.
    public function index(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        return 
        [
            "name" => $name,
            "email" => $email,
            "message" => "Got requested!"
        ];

        // return "Student Controller index()";
    }

    //store a newly created resource in storage.
    public function store(Request $request)
    {
        return "Student Controller store()";
        $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'age' => 'nullable|integer|min:1',
           



]);

    }

    //display the specified resource.
    public function show(string $id)
    {
        return "Student Controller show()";
    }

    //update to specified resource in storage.
    public function update(Request $request, string $id)
    {
        return "Student Controller update()";
    }

    //remove the specified resource from storage.
    public function destroy(string $id)
    {
        return "Student Controller destroy()";
    }
}
