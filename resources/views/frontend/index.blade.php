@extends('frontend.layouts.master')

@section('meta')
    @if (Config::get('app.locale') == 'en')
        <title>Lowkalo: Everything related to managing restaurant inventory</title>
        <link rel="canonical" href="https://www.lowkalo.com/en" />
        <link rel="alternate" href="https://www.lowkalo.com/en" hreflang="en" />
        <link rel="alternate" href="https://www.lowkalo.com" hreflang="ar" />
        <link rel="alternate" href="https://www.lowkalo.com" hreflang="x-default" />
        @elseif(Config::get('app.locale') == 'ar')
        <title>لوكالو : كل ما يخص ادارة مخزون المطاعم</title>
        <link rel="canonical" href="https://www.lowkalo.com" />
        <link rel="alternate" href="https://www.lowkalo.com/en" hreflang="en" />
        <link rel="alternate" href="https://www.lowkalo.com" hreflang="ar" />
        <link rel="alternate" href="https://www.lowkalo.com" hreflang="x-default" />
            @endif
@endsection

@section('content')
    <!-- hero -->
    <div class="container my-3">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <h1 class="title-big">{{ __('messages.home1') }}</h1>
                <p class="des">{{ __('messages.home2') }}</p>
                <div class="d-flex align-items-center">
                    <a href="{{ route('register') }}" class="btn-bg">{{ __('messages.home3') }}</a>
                    <a href="{{ route('login') }}" class="mx-4" style="color: #150a42">{{ __('messages.home4') }}</a>
                </div>
                <div class="d-flex text-center my-3">
                    <span class="mx-4" style="font-weight: bold;font-size: 20px;">
                        75 <i class="fa-solid fa-bolt-lightning mx-1" style="color: #00E6A7"></i>
                        <br>
                        <span style="font-weight: 400;font-size: 15px;color: #150a42">{{ __('messages.home5') }}</span>
                    </span>

                    <span class="mx-4" style="font-weight: bold;font-size: 20px;">
                        100 <i class="fa-solid fa-bolt-lightning mx-1" style="color: #00E6A7"></i>
                        <br>
                        <span style="font-weight: 400;font-size: 15px;color: #150a42"> {{ __('messages.home6') }}</span>
                    </span>
                </div>
                <a href="{{ route('course') }}"> <button class="btn-bg">{{ __('messages.home7') }}</button></a>

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

        <h1 class="title-big">{{ __('messages.home8') }} <br> {{ __('messages.home9') }} </h1><br>
        <p class="des"> {{ __('messages.home10') }} <br>
            {{ __('messages.home11') }}</p>

        <a href="{{ route('course') }}"><button class="btn-bg">{{ __('messages.home12') }}</button> </a>
    </div>

    <!-- start hero -->
    <br><br>
    <div class="buy my-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="title-big">{{ __('messages.home13') }} </h1>
                    <p class="des">{{ __('messages.home14') }} </p>
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
                <a href="{{ route('course') }}" class="btn-bg">{{ __('messages.home15') }}</a>
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

                    <h1 class="title-big">{{ __('messages.home16') }} </h1><br>
                    <p class="des"> {{ __('messages.home17') }}
                    </p>
                    <div class="text-center mt-4">

                    </div>
                    {{-- <a class="btn-bg"> <button type="button" style="all: unset" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            احجز الان ٢٥٠ SAR فقط→
                        </button> </a> --}}
                        <a class="btn-bg" href="{{route('frontend.booking')}}"> <button type="button" style="all: unset"
                            >
                                {{ __('messages.home18') }}
                        </button> </a>
                </div>
            </div>


        </div>
    </div>


@endsection
