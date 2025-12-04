<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
   public function signup(){
    return view('auth.signup');
   }
   public function signupPost(Request $request){
    $request->validate([
        'email'=>'required',
        'password'=>'required'
    ]);
    User::create([
        'email'=>$request->email,
        'password'=>Hash::make($request->password)
    ]);
            return redirect()->route('login')->with('success', 'Account created successfully!');

   }

   public function login(){
    return view('auth.login');
   }
   public function loginPost(Request $request){
    $request->validate([
        'email'=>'required',
        'password'=>'required'
    ]);

    $credentials=$request->only('email','password');
    if(Auth::attempt($credentials)){
        $request->session()->regenerate();
        return redirect()->route('cart.index');
    }
    return back()->withErrors(['email'=>'Invalid email or password']);
   }

   public function logout(Request $request){
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect()->route('login');
   }
}
