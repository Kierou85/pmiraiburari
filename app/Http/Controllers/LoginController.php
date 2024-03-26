<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class LoginController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect('admin');
        }else{
            return view('login');
        }
    }

    public function actionlogin(Request $request)
    {
        $data = [
            'name' => $request->input('name'),
            'password' => $request->input('password'),
        ];
    
        // if (Auth::attempt($data)) {
        //     $user = Auth::user();
        //     if ($user->role == 'admin') {
        //         return redirect('/admin');
        //     } elseif ($user->role == 'pengguna') {
        //         return redirect('/pengguna');
        //     }
        // } else {
        //     // Session::flash('error', 'Email atau Password Salah');
        //     return redirect('login');
        // }

        if (Auth::attempt($data)) {
            $user = Auth::user();
            if ($user->role == 'admin') {
                return redirect('/admin');
            } 
        } else {
            // Session::flash('error', 'Email atau Password Salah');
            return redirect('admin');
        }
    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect('/login');
    }

    
}
