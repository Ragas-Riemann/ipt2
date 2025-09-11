<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class PersonController extends Controller
{
    // Show the form
public function index()
{
    return view('students');
}

    // Save to database
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string',
            'last_name'  => 'required|string',
            'age'        => 'required|integer',
        ]);

        Person::create($request->all());

     return redirect()->route('students')->with('success', 'Person added successfully!');

    }

    // Show database records
    public function show()
    {
        $people = Person::all();
        return view('show', compact('people'));
    }
}
