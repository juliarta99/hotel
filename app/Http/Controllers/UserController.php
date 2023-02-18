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
        if($otp->is_verify === 0){
            return redirect('email/forgot-pass')->with('error', 'Mohon untuk verifikasi email terlebih dahulu!');
        }
        return view('forgot.forgot',
        [
            'title' => "Forgot Pass Argent's",
            'otp' => $otp
        ]);
    }

    public function updatePass($verify, Request $request)
    {
        $otp = VerifyToken::where('slug', $verify)->first();

        $request->validate([
            'password' => ['required', Password::min(8)->symbols()->numbers()],
            'konfirmasiPassword' => 'required|same:password'
        ]);

        $request['password'] = Hash::make($request->password);
        User::where('email', $otp->email)->update($request->except('konfirmasiPassword', '_token', '_method'));
        $otp->delete();

        return redirect('/login')->with('succes', 'Password berhasil diubah');
    }
}
