<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApplyController extends Controller
{
    //
    public function show() {
        return view('apply');
    }
    
    public function submit(Request $request) {
        $validated = $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'DOB' => 'required',
            'mobile' => 'nullable',
            'gender' => 'required',
            'state' => 'required',
            'work' => 'required'
        ]);
    
        // Save to DB
        DB::table('caretakers')->insert($validated);
    
        return redirect()->route('apply.form')->with('success', 'You have registered successfully.');
    }
    
}
