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
    @if (session()->has('succes'))
        <p class="text-success">{{ session('succes') }}</p>
    @endif
    <form action="/forgot-pass/{{ $otp->slug }}" method="post">
        @csrf
        @method('put')
        <input type="password" name="password" class="@error('password') border border-1 border-danger @enderror">
        @error('password')
            <p class="text-danger">{{ $message }}</p>
        @enderror
        <input type="password" name="konfirmasiPassword" class="@error('konfirmasiPassword') border border-1 border-danger @enderror">
        @error('konfirmasiPassword')
            <p class="text-danger">{{ $message }}</p>
        @enderror
        <button type="submit">Submit</button>
    </form>
</body>
</html>