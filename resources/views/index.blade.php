@if (session()->has('succes'))
        <p class="text-success">{{ session('succes') }}</p>
    @endif
    @if (session()->has('error'))
        <p class="text-danger">{{ session('error') }}</p>
    @endif
    @guest
        <a href="/login">Login</a>
    @endguest
    @auth
        <p>Selamat datang, {{ Auth::user()->name }}</p>
        <a href="/logout">Logout</a>
    @endauth
    @can('is_admin')
        <p> Ini admin </p>
    @endcan
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- style css -->
    <link rel="stylesheet" href="style.css">

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">

    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

    <!-- cdnjs fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

</head>
<body>
    <!-- navbar start -->
    <nav class="text-white position-fixed w-100">
        <div class="row justify-content-start align-items-center m-auto nav2">
            <div class="col-3">
                Argent's hotel.com
            </div>
            <div class="col-6 text-center d-flex justify-content-center">
                <li><a href="index.html#home" class="text-white Nunito me-3">HOME</a></li>
                <li><a href="index.html#destination" class="text-white Nunito me-3">DESTINATION</a></li>
                <li><a href="spa_servis.html" class="text-white Nunito me-3">SPA SERVIS</a></li>
                <li><a href="gallery.html" class="text-white Nunito me-3">GALLERY</a></li>
                <li><a href="contact.html" class="text-white Nunito">CONTACT</a></li>
            </div>
            <div class="col-3 text-end d-flex">
                <li><a href="#" class="text-white me-3"><i class="fa-solid fa-map-pin me-1"></i>MY BOOKING</a></li>
                <li><a href="#" class="text-white me-3"><i class="fa-solid fa-arrow-right-to-bracket me-1"></i>LOG-IN</a></li>
                <li><a href="#" class="text-white"><i class="fa-solid fa-user me-1"></i></i>SIGN UP</a></li>
            </div>
        </div>
        <div class="text pt-3 text-center position-relative">
            <h1 class="text-white">Argent's</h1>
            <b>Hotel</b> & <b>Spa</b>
            <button class="bg-warning btn text-white me-5 position-absolute">BOOK NOW</button>
        </div>
    </nav>
    <!-- navbar end -->

    <!-- homepage start -->
    <div id="home"></div>
    <!-- homepage end -->

    <!-- destination start -->
    <div id="destination" class="pt-5 d-flex flex-column align-items-center">
        <h1>A WORD OF LUXURY AWAITS</h1>
        <div class="desc text-center mt-4">Underwater explorations in the Maldives. Cultural discovery in Europe’s most captivating cities. Epic adventures in the jungles of Thailand. From beach to city to pristine nature, experience authentic luxury with the very best offers at Anantara hotels and resorts around the world. Explore our most popular rates and start planning your next escape today.</div>
        <div class="discount text-center mt-4">
            <b>Argent’s DISCOVERY members save up to 10% more. To access your extra savings, click hare If you’re not a member, it’s free to join and takes just a moment. Sign up today</b>
        </div>
        <div class="container-fluid pt-5">
            <h1 class="text-center mb-2">CHOOSE YOUR DESTINATION</h1>
            <div class="row text-white w-75 m-auto">
                <div data-aos="zoom-in" class="col d-flex p-3 justify-content-center">
                    <div class="card bg-dark">
                        <img src="asset/anantara_uluwatu_bali_resort_stay_longer_special.webp" class="card-img-top" alt="ARGENT'S SEMINYAK BALI">
                        <div class="card-body">
                            <h5 class="card-title">ARGENT'S SEMINYAK BALI</h5>
                            <b>$365</b>
                            <a href="destination.html" class="btn btn-outline-warning">Detail</a>
                        </div>
                    </div>
                </div>
                <div data-aos="zoom-in" class="col d-flex p-3 justify-content-center">
                    <div class="card bg-dark">
                        <img src="asset/3.swiming pool.webp" class="card-img-top" alt="ARGENT'S ULUWATU BALI">
                        <div class="card-body">
                            <h5 class="card-title">ARGENT'S ULUWATU BALI</h5>
                            <b>$365</b>
                            <a href="#" class="btn btn-outline-warning">Detail</a>
                        </div>
                    </div>
                </div>
                <div data-aos="zoom-in" class="col d-flex p-3 justify-content-center">
                    <div class="card bg-dark">
                        <img src="asset/ocean_front_pool_villa.jpg" class="card-img-top" alt="ARGENT'S DENPASAR BALI">
                        <div class="card-body">
                            <h5 class="card-title">ARGENT'S DENPASAR BALI</h5>
                            <b>$365</b>
                            <a href="#" class="btn btn-outline-warning">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- destination end -->

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>