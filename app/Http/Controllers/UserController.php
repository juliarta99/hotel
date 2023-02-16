<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VerifyToken;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    public function forgot($verify)
    {
        $otp = VerifyToken::where('slug', $verify)->first();
        return view('forgot.forgot',
        [
            'title' => 'Forgot Pass',
            'otp' => $otp
        ]);
    }

    public function updatePass($verify, Request $request)
    {
        $otp = VerifyToken::where('slug', $verify)->first();
        if($otp->is_verify != true){
            return redirect('email/forgot')->with('error', 'Mohon untuk verifikasi email terlebih dahulu!');
        }

        $validateData = $request->validate([
            'password' => ['required', Password::min(8)->symbols()->numbers()],
            'konfirmasiPassword' => 'required|same:password'
        ]);

        $validateData['password'] = Hash::make($request->password);
        User::where('email', $otp->email)->update($validateData);

        return redirect('/login')->with('succes', 'Password berhasil diubah');
    }
}
