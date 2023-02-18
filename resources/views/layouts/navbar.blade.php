    <!-- navbar start -->
    <nav class="text-white w-100">
        <div class="row justify-content-start align-items-center m-auto nav2">
            <div class="col-3">
                Argent's hotel.com
            </div>
            <div class="col-6 text-center d-flex justify-content-center">
                <li><a href="/" class="{{ Request::is('/') ? 'text-warning' : 'text-white'}} Nunito me-3">HOME</a></li>
                <li><a href="/#destination" class="{{ Request::is('/destinations') ? 'text-warning' : 'text-white'}} Nunito me-3">DESTINATION</a></li>
                <li><a href="/spa" class="{{ Request::is('spa') ? 'text-warning' : 'text-white'}} Nunito me-3">SPA SERVIS</a></li>
                <li><a href="/gallery" class="{{ Request::is('gallery') ? 'text-warning' : 'text-white'}} Nunito me-3">GALLERY</a></li>
                <li><a href="/contact" class="{{ Request::is('contact') ? 'text-warning' : 'text-white'}} Nunito">CONTACT</a></li>
            </div>
            <div class="col-3 text-end d-flex align-items-center">
                <li><a href="/" class="text-white me-3"><i class="fa-solid fa-map-pin me-1"></i>MY BOOKING</a></li>
                @guest
                    <li><a href="/login" class="text-white me-3"><i class="fa-solid fa-arrow-right-to-bracket me-1"></i>LOG-IN</a></li>
                    <li><a href="/register" class="text-white"><i class="fa-solid fa-user me-1"></i>SIGN UP</a></li>
                @endguest
                @auth
                    <li class="text-white me-3"><p class="text-white"><i class="fa-solid fa-user me-1"></i>Halo👋{{ Auth::user()->name }}</p></li>
                    <li class="text-white"><p class="text-white"><a href="/logout" class="text-warning"><i class="fa-solid fa-right-from-bracket"></i></a></li>
                @endauth
            </div>
        </div>
        <div class="text pt-3 text-center position-relative">
            <h1 class="text-white">Argent's</h1>
            <b>Hotel</b> & <b>Spa</b>
            <button class="bg-warning btn text-white me-5 position-absolute">BOOK NOW</button>
        </div>
    </nav>
    <!-- navbar end -->