@extends('layouts.main')
@section('content')
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
                        <img src="{{ asset("img/anantara_uluwatu_bali_resort_stay_longer_special.webp") }}" class="card-img-top" alt="ARGENT'S SEMINYAK BALI">
                        <div class="card-body">
                            <h5 class="card-title">ARGENT'S SEMINYAK BALI</h5>
                            <b>$365</b>
                            <a href="destination.html" class="btn btn-outline-warning">Detail</a>
                        </div>
                    </div>
                </div>
                <div data-aos="zoom-in" class="col d-flex p-3 justify-content-center">
                    <div class="card bg-dark">
                        <img src="{{ asset("img/3.swiming pool.webp") }}" class="card-img-top" alt="ARGENT'S ULUWATU BALI">
                        <div class="card-body">
                            <h5 class="card-title">ARGENT'S ULUWATU BALI</h5>
                            <b>$365</b>
                            <a href="#" class="btn btn-outline-warning">Detail</a>
                        </div>
                    </div>
                </div>
                <div data-aos="zoom-in" class="col d-flex p-3 justify-content-center">
                    <div class="card bg-dark">
                        <img src="{{ asset("img/ocean_front_pool_villa.jpg") }}" class="card-img-top" alt="ARGENT'S DENPASAR BALI">
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
@endsection