<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function showLoginForm() {
        return view('auth.login');
    }

    public function login(Request $request) {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('username', $request->username)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            session(['user_id' => $user->id, 'role' => $user->role]);

            if ($user->role === 'admin') {
                return redirect('/admin/dashboard');
            } else {
                return redirect('/karyawan/dashboard');
            }
        }

        return back()->with('error', 'Login gagal. Cek username dan password.');
    }
}
