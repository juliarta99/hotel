<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>

    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

</head>
<body>
    <div class="container text-center vh-100">
        <div class="row align-items-center h-100">
            <div class="col">
                <h1>Register</h1>
                <form class="mt-5" action="/register" method="post">
                  @csrf
                    <div class="mb-3">
                      <label for="name" class="form-label">Name</label>
                      <input type="text" value="{{ old('name') }}" name="name" class="form-control @error('name') border border-1 border-danger @enderror" id="name" aria-describedby="emailHelp">
                      @error('name')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input type="email" value="{{ old('email') }}" name="email" class="form-control @error('email') border border-1 border-danger @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
                      @error('email')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control @error('password') border border-1 border-danger @enderror" id="exampleInputPassword1">
                      @error('password')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                    </div>
                    <button type="submit" class="mx-auto btn btn-primary">Submit</button>
                    <div class="form-text mt-3"> <a href="/login">Sudah Punya Akun ?</a></div>
                  </form>
            </div>
          <div class="col">
            <img src="{{ asset('img/register.png') }}" alt="">
          </div>
        </div>
    </div>

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>