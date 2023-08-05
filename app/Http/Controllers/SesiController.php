<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\homemodel;

class SesiController extends Controller
{
    public function SesiController(){
        return view('auth.login_admin');
    }
    public function login(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ],[

            'email.required'=>'Email Wajib di isi!',
            'password.required'=>'Password Wajib di isi!',
        ]);

        $infologin = [
            'email'=>$request->email,
            'password'=>$request->password,
        ];

        if (Auth::attempt($infologin)) {
            return view('admin.admin');
            exit();
        }else {
            return redirect('user')->withErrors('Username dan password tidak sesuai')->withInput();
        }
    }

    public function logout(){
        Auth::logout();
        return redirect ('user');
    }
}
