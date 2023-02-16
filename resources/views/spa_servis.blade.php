@extends('layouts.main')
@section('content')
    <!-- content -->
    <div id="destination_page" class="mt-3 mb-5">
        <h1 class="text-center mb-3">SPA & SERVIS</h1>
        <div class="row w-100 m-auto">
            <!-- <div class="col-6">
                <div class="row justify-content-center bg-dark d-flex">
                    <div class="d-flex flex-column">
                        <div class="col-4 bg-dark p-0">
                            <img src="img/anantara_uluwatu_bali_resort_stay_longer_special.webp" alt="">
                        </div>
                        <div class="col-4 p-0">
                            <img src="img/kamar2.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-4 p-0">
                        <img src="img/kamar1.jpg" alt="">
                    </div>
                </div>
            </div> -->
            <div class="col-6">
                <div class="row justify-content-center d-flex">
                    <div class="row col-7">
                        <div class="col-12 bg-dark p-0 pb-1">
                            <img src="{{ asset("img/spa(2).jpg") }}" alt="">
                        </div>
                        <div class="col-12 p-0 pt-1">
                            <img src="{{ asset("img/servis.jpg") }}" alt="">
                        </div>
                    </div>
                    <div class="row col-5">
                        <div class="col-12 p-0 ps-2">
                            <img src="{{ asset("img/bamboo.jpg") }}" class="h-100" alt="">
                        </div>
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
                                RESERVATION
                                <ul>
                                    <li class="Nunito"><i class="fa-solid fa-phone"></i> xxx-xxx-xxx</li>
                                    <li class="Nunito"><i class="fa-solid fa-envelope"></i> xxx-xxx-xxx</li>
                                    <li class="Nunito"><i class="fa-solid fa-clock"></i> 09.00 am - 09.00 pm</li>
                                </ul>
                            </b>
                            (Kami bisa datang langsung ke rumah anda)
                            <br>*Available in Bali
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection