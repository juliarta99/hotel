<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

<!-- Bootstrap css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container text-center vh-100">
        <div class="row align-items-center h-100">
            <div class="col">
              <img src="{{ asset('img/login.jpeg') }}" alt="" style="width: 500px; height: 500px;">
            </div>
          <div class="col">
            <h1>Login</h1>
            @if (session()->has('succes'))
              <p class="text-success">{{ session('succes') }}</p>
            @endif
            <form class="mt-5" action="/login" method="post">
              @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" name="email" class="form-control @error('email') border border-1 border-danger @enderror" id="exampleInputEmail1" >
                  @error('email')
                      <p class="text-danger">{{ $message }}</p>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control @error('password') border border-1 border-danger @enderror" id="exampleInputPassword1" >
                  @error('password')
                      <p class="text-danger">{{ $message }}</p>
                  @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <div id="emailHelp" class="form-text mt-3"> <a href="/register">Belum Punya Akun?</a></div>
              </form>
          </div>
        </div>
      </div>
</body>
</html>