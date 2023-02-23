<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">

    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

</head>
<body>
    <div class="container-fluid d-flex flex-column justify-content-center align-items-center vh-100">
        <img src="{{ asset("img/verify.png") }}" class="w-25" alt="">
        <h1 class="fw-bolder Nunito">Berhasil Register</h1>
        <p class="Nunito">( cek email anda dan klik button verify )</p>
        @if (session()->has('limit'))
            <p class="text-danger">{{ session('limit') }}</p>
        @endif
        <form action="/email/resend-verify" class="d-flex align-items-center flex-column w-50" method="post">
            @csrf
            <button type="submit" class="w-25 btn bg-primary text-white">Resend</button>
        </form>
    </div>
</body>
</html>