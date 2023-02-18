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
        <img src="{{ asset("img/search-removebg.png") }}" class="w-25" alt="">
        <h1 class="fw-bolder Nunito">Masukkan Email</h1>
        @if (session()->has('error'))
            <p class="text-danger">{{ session('error') }}</p>
        @endif
        <form action="/email/forgot-pass" class="d-flex align-items-center flex-column w-50" method="post">
            @csrf
            <input type="email" name="email" id="email" placeholder="Email" class="w-100 search ps-3 @error('email') border border-1 border-danger @enderror">
            @error('email')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            <button type="submit" class="w-25  btn bg-primary mt-3 text-white">Submit</button>
        </form>
    </div>
</body>
</html>