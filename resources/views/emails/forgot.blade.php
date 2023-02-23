<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OTP Forgot Pass</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .forgot{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        h1{
            font-size: 35px;
            margin-top: 10px;
        }
        img{
            width: 200px;
            height: 200px;
            margin: 5px 0;
        }
        h3{
            font-size: 20px;
        }
        h4{
            font-size: 15px;
        }
        p{
            font-size: 12px;
        }
        .token{
            color: green;
        }
        h6{
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="forgot">
        <h1>Verifikasi OTP</h1>
        <p>Untuk melakukan perubahan pada akun anda harus melakukan verifikasi email terlebih dahulu</p>
        <img src="{{ asset("img/verifikasi.png") }}" alt="">
        <h3>OTP</h3>
        <h3 class="token">{{ $token }}</h3>
        <h3>Terima Kasih</h3>
        <h6>&copy; Argent's Hotel</h6>
    </div>
</body>
</html>