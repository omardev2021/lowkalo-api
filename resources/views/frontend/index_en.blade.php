@extends('frontend.layouts.master_en')
@section('content')
    <!-- hero -->
    <div class="container my-3">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <h1 class="title-big">
                    Learn to manage restaurants and cafes better.</h1>
                <p class="des">An educational material divided into 7 parts to better manage your restaurant inventory</p>
                <div class="d-flex align-items-center">
                    <a href="{{ route('register') }}" class="btn-bg">Join us →</a>
                    <a href="{{ route('login') }}" class="mx-4" style="color: #150a42">Login →</a>
                </div>
                <div class="d-flex text-center my-3">
                    <span class="mx-4" style="font-weight: bold;font-size: 20px;">
                        75 <i class="fa-solid fa-bolt-lightning mx-1" style="color: #00E6A7"></i>
                        <br>
                        <span style="font-weight: 400;font-size: 15px;color: #150a42">Active Users</span>
                    </span>

                    <span class="mx-4" style="font-weight: bold;font-size: 20px;">
                        100 <i class="fa-solid fa-bolt-lightning mx-1" style="color: #00E6A7"></i>
                        <br>
                        <span style="font-weight: 400;font-size: 15px;color: #150a42"> Minutes of content</span>
                    </span>
                </div>
                <a href="{{ route('course') }}"> <button class="btn-bg">Join now for only 250 SAR</button></a>

            </div>
            <div class="col-sm-6 text-center">
                <img src="{{ asset('frontend/images/121.png') }}" alt="" srcset="" class="img-fluid">
            </div>
        </div>
    </div>


    <!-- end hero -->
    </header>


    <!-- end  -->
    <div class="container-fluid box text-center ">
{{--        <img src="{{ asset('frontend/images/cc.png') }}" alt="" srcset="" class="img-pos d-none d-sm-block">--}}

        <h1 class="title-big">Learn the art of restaurant management in a strip <br> Highly competitive </h1><br>
        <p class="des">Knowing product costs and calculating raw materials are key to the success of your restaurant. Your possession of knowledge <br>
           and Proper knowledge of their impact on profits is fundamental to success in this highly competitive sector .</p>

        <a href="{{ route('course') }}"><button class="btn-bg">About the course</button> </a>
    </div>

    <!-- start hero -->
    <br><br>
    <div class="buy my-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="title-big">This course was attended by employees of these companies </h1>
                    <p class="des">Our training courses have helped develop many employees in the restaurant and cafe sector </p>
                </div>
                <div class="col-sm-6 text-center">
                    <div class="d-felx">
                        <img src="{{ asset('frontend/images/c-1.png') }}" alt="" srcset="" class="w-25 m-1">
                        <img src="{{ asset('frontend/images/c-2.png') }}" alt="" srcset="" class="w-25 m-1">
                        <img src="{{ asset('frontend/images/c-3.png') }}" alt="" srcset="" class="w-25 m-1">
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="{{ route('course') }}" class="btn-bg">Join now for only 250 SAR→</a>
            </div>
        </div>
    </div>

    <!-- hero -->
    <div class="container my-3">
        <div class="row align-items-center">
            <div class="col-sm-6 text-center">
                <img src="{{ asset('frontend/images/9.png') }}" alt="" srcset="" class="img-fluid">

            </div>
            <div class="col-sm-6">

                <div class="container-fluid box text-center ">

                    <h1 class="title-big">Book a session with Mr. Mohamed Sharif </h1><br>
                    <p class="des"> Book a session with Mr. Mohamed Al-Sharif for an hour to answer questions and provide assistance and suggestions
                    </p>
                    <div class="text-center mt-4">

                    </div>
                    {{-- <a class="btn-bg"> <button type="button" style="all: unset" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            احجز الان ٢٥٠ SAR فقط→
                        </button> </a> --}}
                    <a class="btn-bg" href="{{route('frontend.booking')}}"> <button type="button" style="all: unset"
                        >
                            Book now for 250 SAR only→
                        </button> </a>
                </div>
            </div>


        </div>
    </div>


@endsection
