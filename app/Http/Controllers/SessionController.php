<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (! Auth::attempt($attributes)) {
            throw ValidationException::withMessages(
                [
                    'password' => 'credentials do not match'                ]
            );
        }

        request()->session()->regenerate();

        return redirect('/home');
    }

    public function destroy()
    {
        Auth::logout();

        return redirect('/');
    }

    public function session_data()
    {
      if (Auth::check())
      {
        // $userSessionId = Auth::id();
        // $userSessionEmail = Auth::user()->email;
        // $userSessionFirstname = Auth::user()->first_name;
        // $userSessionlastname = Auth::user()->last_name;
        return true;
      }else{
        return false;
      }
    }
}