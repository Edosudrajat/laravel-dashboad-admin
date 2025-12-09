<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

use function Pest\Laravel\session;

class AuthController extends Controller
{

    public function welcome() {
        return view('landing');
    }

    public function showLogin() {
        return view('auth.login');
    }

    public function login(Request $request) {

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            
            $request->session()->regenerate();

            return redirect()->route('employees.index');
        }

        throw ValidationException::withMessages([
            'email' => 'Email or password is incorrect'
        ]);
    }

    public function showRegister() {
        return view('auth.register');
    }

    public function register(Request $request) {

        $validated = $request->validate([
            'name' => 'required|string|min:3|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
        ]);

        User::create($validated);

        return redirect()->route('auth.login')->with('success', 'Akun berhasil dibuat!');
    }

    public function logout(Request $request) {
        
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect()->route('welcome');
    }
}