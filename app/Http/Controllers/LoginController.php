<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        if (request()->method() == 'POST'){
            return $this->storeData();
        }
        return view('auth/login');
    }

    public function storeData()
    {
        request()->validate(
            [
                'username' => 'required|exists:users,username',
                'password' => 'required',
            ]
        );

        if (Auth::attempt(['username' => request('username'), 'password' => request('password')])) {
            request()->session()->regenerate();

           if (\auth()->user()->role == 'warga'){
               return redirect('/warga');
           }
            return redirect('/admin');

        }

        return redirect()->back()->withInput()->withErrors(
            [
                'password' => 'Password not match.',
            ]
        );
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }

}
