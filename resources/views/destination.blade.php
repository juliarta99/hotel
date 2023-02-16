@extends('layouts.main')
@section('content')
    <!-- content -->
    <div id="destination_page" class="mt-3  mb-5">
        <h1 class="text-center mb-3">ARGENT'S SEMINYAK BALI</h1>
        <div class="row w-100 m-auto">
            <div class="col-6">
                <div class="row justify-content-center">
                    <div class="col-10 bg-dark p-0">
                        <img src="{{ asset("img/anantara_uluwatu_bali_resort_stay_longer_special.webp") }}" alt="">
                    </div>
                    <div class="col-5 p-0 pt-2 pe-1">
                        <img src="{{ asset("img/kamar2.jpg") }}" alt="">
                    </div>
                    <div class="col-5 p-0 pt-2 ps-1">
                        <img src="{{ asset("img/kamar1.jpg") }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-6 p-0 d-flex align-items-center">
                <div class="desc">
                    <div class="d-flex flex-wrap">
                        <div class="col-6 p-0"><h3 class="Nunito">FROM <b>USD</b> $365</h3></div>
                        <div class="col-6 p-0 text-end"><button class="bg-warning btn text-white">BOOK NOW</button></div>
                        <div class="col-12 mt-3">Linger a little longer with more days to savour, more nights to remember. With your savings on accommodation, indulge in more experiences immersing you in the best of the destination.</div>
                        <div class="col-12 pt-2 pb-2 Nunito"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i> 4 / 5</div>
                        <div class="col-12">
                            <b class="Nunito">
                                Offer includes:
                                <ul>
                                    <li class="Nunito">30% savings on accommodation</li>
                                    <li class="Nunito">25% savings on laundry</li>
                                    <li class="Nunito">Daily breakfast at 360 rooftops</li>
                                    <li class="Nunito">Free flow bubble bath</li>
                                    <li class="Nunito">30-minute photo session with professional photographer (It is strongly advised to book photoshoot sessions at least 2 days in advance)</li>
                                </ul>
                            </b>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection