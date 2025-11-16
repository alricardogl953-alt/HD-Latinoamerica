<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register()
    {
        $genders = Gender::all();
        return view('pages.register', compact('genders'));
    }

    public function saveUser(Request $request)
    {
        $request->validate([
            'name'      => 'required|string|max:100',
            'email'     => 'required|email',
            'gender_id' => 'required|exists:genders,id',
        ]);

        User::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'gender_id' => $request->gender_id,
        ]);

        session([
            'name'      => $request->name,
            'email'     => $request->email,
            'gender_id' => $request->gender_id,
        ]);

        cookie()->queue('email', $request->email, 60 * 24);

        dd($request->all());

        return redirect()->route('toys');
    }
}
