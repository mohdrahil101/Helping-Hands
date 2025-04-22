<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function show() {
        return view('login');
    }
    
    public function login(Request $request) {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
    
        // $user = User::where('fname', $request->username)->first();
        $user = DB::table('user')->where('fname', $request->username)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            // Auth::login($user);
            return redirect()->route('user');
        }
    
        return redirect()->back()->with('error', 'Invalid credentials');
    }
    
}
