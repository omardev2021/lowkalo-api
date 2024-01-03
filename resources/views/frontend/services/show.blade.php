@extends('frontend.layouts.master')
@section('meta')
    @if (Config::get('app.locale') == 'en')
        <title>{{$category->name}} - Lowkalo</title>
        <link rel="canonical" href="https://www.lowkalo.com/en/{{$category->type}}/{{$category->slug}}" />
        <link rel="alternate" href="https://www.lowkalo.com/en/{{$category->type}}/{{$category->slug}}" hreflang="en" />
        <link rel="alternate" href="https://www.lowkalo.com/{{$category->type}}/{{$category->slug}}" hreflang="ar" />
        <link rel="alternate" href="https://www.lowkalo.com/{{$category->type}}/{{$category->slug}}" hreflang="x-default" />
    @elseif(Config::get('app.locale') == 'ar')
        <title>{{$category->name_ar}} - لوكالو</title>
        <link rel="canonical" href="https://www.lowkalo.com/{{$category->type}}/{{$category->slug}}" />
        <link rel="alternate" href="https://www.lowkalo.com/en/{{$category->type}}/{{$category->slug}}" hreflang="en" />
        <link rel="alternate" href="https://www.lowkalo.com/{{$category->type}}/{{$category->slug}}" hreflang="ar" />
        <link rel="alternate" href="https://www.lowkalo.com/{{$category->type}}/{{$category->slug}}" hreflang="x-default" />
    @endif
@endsection
@section('content')


        <style>
            html, body {
                margin: 0;
                padding: 0;
                overflow-x: auto;

            }

        .score {
            font-weight: bold;
        }
        .scorew {
            color: #4115BA;
        }
        .hro {
            color: #541BF2;
            opacity: 1;  height: 4px;border-width:1px

        }
        .her {
            color: #150a42;

            font-weight: 700;
        }
        .top-head {
            color: #150a42;
            line-height: 3.625rem;
            font-size: 2.9721rem;
            font-weight: 700;
            margin-left: 80px;

        }
        .top-head-2 {
            color: #150a42;
            line-height: 1.625rem;
            font-size: 1.5rem;
            font-weight: 700;
            margin-left: 80px;
        }
        .top-span {
            color: #541BF2;
        }

        .btn-bg-none {
            background-color: #541BF1;
            color: #F3F4FF;
            border: 0px solid;
            padding: 10px 20px;
            border-radius: 17px;
        }

        .btn-bg-active {
            background-color: #00E6A7;
            color: black;
            border: 0px solid;
            padding: 10px 20px;
            border-radius: 17px;
        }
        .blur-overlay {
            position: relative;
            background-color: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
        }

        .blur-row {
            position: relative;
            overflow: hidden;
        }

        .blur-row::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url({{asset('/images/fas.jpg')}}); /* Replace with your blurred background image */
            background-size: cover;

            z-index: 1;
        }

        .filter-button {
            position: relative;
            padding: 8px 16px;
            margin: 0 8px;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            background-color: #fff;
            color: #333;
            cursor: pointer;
            transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;

        }

        .sidebar-filter {
            display: flex;
            flex-direction: column;
            gap: 24px;
            padding: 32px;
            border-radius: 16px;
            background: #FFF;
            box-shadow: 0px 6px 30px 0px rgba(0, 0, 0, 0.04);
            width: 400px;
            margin-left: 5%;
        }
        .cus_scrollbar {
            overflow-x: auto;
            position: sticky;
            max-height: 90vh;
            top: 100px;
        }

        /*.sidebar-filter, .sidebar_fixed {*/
        /*    top: initial;*/
        /*    z-index: 2;*/
        /*    transition: all 0.35s ease-in-out;*/
        /*}*/
        /*.sidebar-xxl-fixed.show {*/
        /*    transform: translateX(0px);*/
        /*    opacity: 1;*/
        /*}*/


        .sidebar-filter .sidebar-filter__part {
            padding-bottom: 24px;
            border-bottom: 1px dashed #C1C4CC;
            margin-bottom: 24px;
        }

        .sidebar-filter .sidebar-filter__part {
            padding-bottom: 24px;
            border-bottom: 1px dashed #C1C4CC;
            margin-bottom: 24px;
        }

        .sidebar-filter .sidebar-filter__part .sidebar-filter__part-title {
            margin-bottom: 16px;
        }

        .sidebar-filter .sidebar-filter__part .query {
            width: 100%;
        }

        .sidebar-filter .sidebar-filter__part .query {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }



        .sidebar-filter .sidebar-filter__part .query .query__list {
            list-style-type: none;
            display: flex;
            justify-content: space-between;
        }

        .sidebar-filter .sidebar-filter__part .query .query__list .query__label {
            display: flex;
            align-items: center;
            gap: 14px;
        }
        input[type=checkbox]:checked, input[type=radio]:checked {
            background-color: #FFF;
        }
        input[type=checkbox], input[type=radio] {
            position: relative;
            border: 1px solid #DFE0E4;
            border-radius: 50%;
            background: none;
            cursor: pointer;
            line-height: 1;
            -webkit-appearance: none;
        }
        input[type=checkbox] {
            width: initial;
            height: initial;
        }
        input[type=checkbox]:checked:before, input[type=radio]:checked:before {
            opacity: 1;
        }
        input[type=checkbox]:before, input[type=radio]:before {
            content: "\f633";
            font-family: "bootstrap-icons";
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 16px;
            padding: 2px;
            z-index: 2;
            opacity: 0;
        }



        .sidebar_btn {
            position: absolute;
            top: 20px;


        }

        .bi-layout-text-sidebar::before {
            content: "\f462";
        }

        .bi::before, [class^="bi-"]::before, [class*=" bi-"]::before {
            display: inline-block;
            font-family: bootstrap-icons !important;
            font-style: normal;
            font-weight: normal !important;
            font-variant: normal;
            text-transform: none;
            line-height: 1;
            vertical-align: -0.125em;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .d-inline-block {
            display: inline-block!important;
        }

        table{
            /*position: absolute;*/
            position: relative;
            z-index: 2;
            /*left: 50%;*/
            /*top: 50%;*/
            /*transform: translate(-50%,-50%);*/
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
            box-shadow: 0 2px 15px rgba(64,64,64,.7);
            border-radius: 12px 12px 0 0;
            overflow-x: scroll;

        }
        td , th{
            padding: 15px 20px;
            text-align: center;


        }
        th{
            background-color: #FFFFFF;
            color: #000000;
            font-family: 'Open Sans',Sans-serif;
            font-weight: 200;
            text-transform: uppercase;
            position: sticky;
            top: 0;


        }
        tr{
            width: 100%;
            background-color: #fafafa;
            font-family: 'Montserrat', sans-serif;
        }
        tr:nth-child(even){
            background-color: #F3F4FF;
        }

        .filter-button2 {
            background-color: #4115BA;
            color: #fff;
            padding: 16px 24px;
            margin: 0 8px;
            font-size: 16px;
            border: none;
            border-radius: 4px;
display: flex;
            cursor: pointer;
            transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
        }

            .filter-button4 {
                background-color: #4115BA;
                color: #fff;
                padding: 7px 10px;
                margin: 0 8px;
                font-size: 16px;
                border: none;
                border-radius: 4px;

                cursor: pointer;
                transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
            }
            .filter-button3 {
                background-color: #4115BA;
                color: #fff;
                padding: 16px 24px;
                margin-left: auto;
                margin-right: auto;
                text-align: center;
                font-size: 16px;
                border: none;
                border-radius: 4px;

                cursor: pointer;
                transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
            }

            ul li {
                list-style: none;
            }




            .col-12.col-lg-12.col-xl-12.col-xxl-12.position-relative {
                z-index: 10;
            }

</style>


    <header class="top-s">

        @if (Config::get('app.locale') == 'en')
            <div class="container">
                <span>{{ __('messages.show1') }}{{$category->name}}</span>
                <div class="title">
                    <h1 class="fw-bold">{{$category->name}}
                    </h1>
                </div>

            </div>

                @elseif(Config::get('app.locale') == 'ar')
            <div class="container">
                <span>{{ __('messages.show1') }}{{$category->name_ar}}</span>
                <div class="title">
                    <h1 class="fw-bold">{{$category->name_ar}}
                    </h1>
                </div>

            </div>

        @endif
    </header>


    <!-- main -->

    <div class="container">

        <div class="main-content row">
            <div class="col-sm-6">
                <div class="mt-5 pt-5">
                    <h1>{{ __('messages.show2') }}</h1><br>
                    <p>

                        {{ __('messages.show3') }}                    </p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="main-content-img">
                    <img src="{{asset('frontend/images/pexels-ron-lach-8879381_bi0fad.webp')}}" alt="" srcset="">
                </div>
            </div>
        </div>
    </div>
    <style>
        .main-content-img img{
    border-radius: 8px;
    width: 70%;
}
    </style>
        @if($category->name == 'Loyalty')



                <livewire:service-filter />

        @endif



    <!-- end main  -->
    <div class="container my-5 p-5">
        <h1>{{ __('messages.show4') }}
            <br>
            <hr style="opacity: 1;color:black; width: 120px; height: 8px;border-width:4px">

        </h1>



        <livewire:soluations-details :category="$category" />


@endsection
