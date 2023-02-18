<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('login',
    [
        'title' => "Login Argent's"
    ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if(Auth::user()->is_admin != 0){
                return redirect()->intended('/dashboard');
            } else {
                return redirect()->intended('/');
            }
        }

        return Redirect::back()->withErrors(['error' => 'Email atau password salah!']);
    }

    public function create()
    {
        return view('register',
    [
        'title' => "Register Argent's"
    ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email:dns|unique:users',
            'password' => ['required', Password::min(8)->numbers()->symbols()],
        ]);
        $request['password'] = Hash::make($request->password);

        $user = User::create($request->except('_token'));

        auth()->login($user);
        event(new Registered($user));

        return redirect()->route('verification.notice')->with('succes', 'Registrasi berhasil');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
