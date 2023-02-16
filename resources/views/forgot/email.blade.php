<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>
<body>
    @if (session()->has('error'))
        <p class="text-danger">{{ session('error') }}</p>
    @endif
    <form action="/email/forgot-pass" method="post">
        @csrf
        <input type="email" name="email" class="@error('email') border border-1 border-danger @enderror">
        @error('email')
            <p class="text-danger">{{ $message }}</p>
        @enderror
        <button type="submit">Kirim</button>
    </form>
</body>
</html>