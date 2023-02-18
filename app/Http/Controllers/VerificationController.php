<?php

namespace App\Http\Controllers;

use App\Mail\ForgotPass;
use App\Models\VerifyToken;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class VerificationController extends Controller
{
    // verify email
    public function notice(Request $request)
    {
        // validasi
        if ($request->user() instanceof MustVerifyEmail && $request->user()->hasVerifiedEmail()) {
                return redirect('/')->with('error', 'Email anda sudah diverifikasi!');
            }

        return view('emails.verify-email',
        [
            'title' => 'Verification Email'
        ]);
    }

    public function verify(EmailVerificationRequest $request)
    {
        $request->fulfill();

        return redirect('/')->with('succes', 'Email berhasil diverifikasi!');
    }

    public function resend(Request $request)
    {
        $request->user()->sendEmailVerificationNotification();

        return back()->with('succes', 'Email berhasil dikirim!');
    }

    // forgot pass
    public function typeEmail()
    {
        return view('forgot.email',
        [
            'title' => 'Type Email'
        ]);
    }

    public function createOtp(Request $request)
    {
        $validateData = $request->validate([
            'email' => 'required'
        ]);
        $validateData['token'] = rand(1000,9999);
        $validateData['slug'] = Str::random(255);

        $cekEmail = User::where('email', $request->email)->get();
        if(count($cekEmail) == 0 ) {
            return back()->with('error', 'Email tidak ditemukan!');
        }

        $verifys = VerifyToken::where('email', $validateData['email'])->get();
        foreach($verifys as $verify){
            $verify->delete();
        }
        
        VerifyToken::create($validateData);
        $email = $validateData['email'];
        $token = $validateData['token'];
        $slug = $validateData['slug'];

        Mail::to($email)->send(new ForgotPass($email, $token));

        return redirect("/otp/forgot-pass/$slug")->with('succes', 'Email berhasil terkirim!') ;
    }

    public function noticeOtp($verify)
    {
        $otp = VerifyToken::where('slug', $verify)->first();
        return view('forgot.otp',
        [
            'title' => 'Verify OTP',
            'otp' => $otp
        ]);
    }

    public function verifyOtp($verify, Request $request)
    {
        $otp = VerifyToken::where('slug', $verify)->first();
        $request->validate([
            'OTP' => 'required',
        ]);

        $cekOTP = VerifyToken::where('token', $otp->token)->first();
        if($request->OTP != $cekOTP->token) {
            return back()->with('error', 'Kode yang anda masukkan salah');
        } else {
            $cekOTP->is_verify = 1;
            $cekOTP->save();
            return redirect("/forgot-pass/$cekOTP->slug")->with('succes', 'Silahkan ganti sandi anda');
        }
    
    }
}
