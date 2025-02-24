<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        if(auth()->user() && auth()->user()->role == 'user'){
            return redirect()->to("customer");
        }elseif (auth()->user() && auth()->user()->role == 'admin') {
            return redirect()->to("admin");
        }
        return view('auth.login');
    }

    public function loginProcess(Request $request)
    {
        $user = User::where('email', $request->email)
            ->where('role', 'user')
            ->first();
        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);
            return redirect()->to('/customer');
        }
        return redirect()->back()->with('error', 'Email atau password salah');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->to('/login')->with('success', 'Anda berhasil logout');
    }

    function register()
    {
        return view('auth.register');
    }

    function registerProcess(Request $request)
    {
        $register = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'role' => 'user',
        ];

        if (\App\Models\User::create($register)) {
            return redirect()->to('login')->with('success', 'Register berhasil');
        } else {
            return redirect()->back()->with('error', 'Register gagal!');
        }
    }
}
