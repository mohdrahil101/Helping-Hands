<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function show() {
        return view('register');
    }
    
    public function submit(Request $request) {
        $request->validate([
            'fname' => 'required|string|max:255|unique:user,fname',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
        ]);
    
        // DB::create([
        //     'fname' => $request->fname,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password),
        // ]);
        // DB::table('user')->insert($request->only('fname', 'email', 'password'));
        // use Illuminate\Support\Facades\Hash;

        // Hash the password before inserting it into the database
        DB::table('user')->insert([
            'fname' => $request->fname,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Hash the password using bcrypt
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
    
        return redirect()->back()->with('success', 'You have registered successfully.');
    }
    
}
