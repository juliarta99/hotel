@extends('layouts.main')
@section('content')
    <!-- content -->
    <div id="destination_page" class="mt-3 mb-5">
        <h1 class="text-center mb-3">Gallery</h1>
        <div class="row m-auto w-95">
            <!-- <div class="col-6">
                <div class="row justify-content-center bg-dark d-flex">
                    <div class="d-flex flex-column">
                        <div class="col-4 bg-dark p-0">
                            <img src="asset/anantara_uluwatu_bali_resort_stay_longer_special.webp" alt="">
                        </div>
                        <div class="col-4 p-0">
                            <img src="asset/kamar2.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-4 p-0">
                        <img src="asset/kamar1.jpg" alt="">
                    </div>
                </div>
            </div> -->

            <!-- <div class="col-12">
                <div class="row justify-content-center d-flex">
                    <div class="row col-7 p-0">
                        <div class="row col-12 bg-dark p-0">
                            <div class="col-6 p-0">
                                <img src="asset/spa.jpg" alt="">
                            </div>
                            <div class="col-6 p-0">
                                <img src="asset/spa.jpg" alt="">
                            </div>
                        </div>
                        <div class="row col-12 bg-dark p-0">
                            <div class="col-6 p-0">
                                <img src="asset/spa.jpg" alt="">
                            </div>
                            <div class="col-6 p-0">
                                <img src="asset/spa.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="row col-5">
                        <div class="col-12 p-0 ps-2">
                            <img src="asset/bamboo.jpg" class="h-100" alt="">
                        </div>
                    </div>
                </div>
            </div> -->

            <div class="col-9">
                <div class="row">
                    <div class="col-6 p-1"><img src="{{ asset("img/kamar1.jpg") }}" alt=""></div>
                    <div class="col-6 p-1"><img src="{{ asset("img/kamar2.jpg") }}" alt=""></div>
                    <div class="col-6 p-1"><img src="{{ asset("img/teras.jpg") }}" alt=""></div>
                    <div class="col-6 p-1"><img src="{{ asset("img/kamar3.webp") }}" class="h-100" alt=""></div>
                </div>
            </div>
            <div class="col-3 p-1">
                <div class="wallpaperflare w-100 h-100"></div>
            </div>
        </div>
    </div>    
@endsection