<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ServiceController extends Controller
{
    //
    public function show()
{
    return view('hire');
}

public function book(Request $request)
{
    $request->validate([
        'fname' => 'required|string',
        'email' => 'required|email',
        'address' => 'required|string',
        'date' => 'required|string',
        'services' => 'required|string',
    ]);

    DB::table('services')->insert($request->only('fname', 'email', 'address', 'date', 'services'));

    return redirect()->back()->with('success', 'You have registered successfully.');
}

}
