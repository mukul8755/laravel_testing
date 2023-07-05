<?php

namespace App\Http\Controllers;
use App\Rules\BirthYearRule;
use Illuminate\Http\Request;

class CustumValidator extends Controller
{
    public function create()
    {
        return view('CustumValidation.forms');
    }
        
  
    public function store(Request $request)
    {
        $validatedData = $request->validate([
                'name' => 'required',
                'birth_year' => [
                    'required',
                    new BirthYearRule()
                ]
            ]);
        return back()->with('success', 'User created successfully.');
    }
}
