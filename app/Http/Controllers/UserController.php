<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
  public function register(Request $request)
  {
    
      $firstname = $request->input('first_name');
      $lastname = $request->input('last_name');
      $email = $request->input('email');
      $password = $request->input('password');

      $user = new User();
      $user->first_name=$firstname;
      $user->last_name=$lastname;
      $user->email=$email;
      $user->password=$password;
      $user->save();
      return redirect()->route('listing');
  }

  public function allData()
  {
    $users = User::all();
    return view('listing',['users'=>$users]);

    
  }

  public function delete($id)
  {
    $user = User::find($id);
    $user->delete();

    return redirect()->route('listing');
  }

  public function edit($id)
  {
    $users = User::find($id);
    return view('edit',compact('users'));
  }

  public function update($id , Request $request)
  {
    $users = User::find($id);
    $users->first_name = $request->input('first_name');
    $users->last_name = $request->input('last_name');
    $users->about = $request->input('about');
    $users->save();

    return redirect()->route('listing');
  }

  public function store()
  {
    //validate
    $attributes = request()->validate([
      'first_name' => ['required'],
      'last_name' => ['required'],
      'email' => ['required' , 'email'],
      'password' =>['required' , 'confirmed'], //looks for password_confirmation
      'password_confirmation' => 'required'
    ]);


    //create user
    $user = User::create($attributes);

    //login
    Auth::login($user);

    //redirect
    return redirect('/home');
  }
}



