@extends('frontend.layouts.master')
@section('meta')
    @if (Config::get('app.locale') == 'en')
        <title>Lowkalo: Front of house , Back of house and more.</title>
        <link rel="canonical" href="https://www.lowkalo.com/en/services" />
        <link rel="alternate" href="https://www.lowkalo.com/en/services" hreflang="en" />
        <link rel="alternate" href="https://www.lowkalo.com/services" hreflang="ar" />
        <link rel="alternate" href="https://www.lowkalo.com/services" hreflang="x-default" />
    @elseif(Config::get('app.locale') == 'ar')
        <title>لوكالو : فرونت اوف هاوس ، باك اوف هاوس والمزيد</title>
        <link rel="canonical" href="https://www.lowkalo.com/services" />
        <link rel="alternate" href="https://www.lowkalo.com/en/services" hreflang="en" />
        <link rel="alternate" href="https://www.lowkalo.com/services" hreflang="ar" />
        <link rel="alternate" href="https://www.lowkalo.com/services" hreflang="x-default" />
    @endif
@endsection
@section('content')
    <style>
        /**{*/
        /*    padding: 0px;*/
        /*    margin: 0px;*/
        /*    box-sizing: border-box;*/
        /*    font-family: 'Tajawal', sans-serif;*/
        /*    direction: ltr;*/
        /*}*/
        .categories {
            text-align: right !important;
        }
        .max-lines {
            display: block;/* or inline-block */
            text-overflow: ellipsis;
            word-wrap: break-word;
            overflow: hidden;
            max-height: 1.6em;
            line-height: 1.8em;
        }
    </style>
    <header class="TOP-SERVICES">
        <h1>{{ __('messages.services1') }}
            <br>
            <hr style="opacity: 1;color:#00E6A7; width: 120px; margin: auto; height: 8px;border-width:4px">

        </h1>
    </header>

<style>
    .TOP-SERVICES{
    text-align: center;
    background-color: #4115BA;
    padding: 50px;
    height: 280px;
    position: relative;


}
.TOP-SERVICES h1{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50% , -50% );
    color: white;
    line-height: 3.625rem;
    font-size: 2.9721rem;
    font-weight: 700;
}
</style>


    {{--    <div class="container text-center services-page">--}}
    {{--        <div class="d-flex mb-3" style="gap: 10px">--}}
    {{--            <div >--}}
    {{--                <button class="btn-bg2" id="ksa" onclick="filtersksa()">السعودية</button>--}}
    {{--            </div>--}}



    {{--            <div >--}}
    {{--                <button class="btn-bg2" id="uae" onclick="filtersuae()">الامارات</button>--}}
    {{--            </div>--}}



    {{--            <div >--}}

    {{--                <button class="btn-bg2" id="kw" onclick="filterskw()">الكويت</button>--}}
    {{--            </div>--}}




    {{--            <div >--}}
    {{--                <button class="btn-bg" id="all" onclick="filters()">الكل</button>--}}
    {{--            </div>--}}




    {{--        </div>--}}
    {{--        <div class="row">--}}
    {{--            <div class="col-sm-4">--}}
    {{--                <div class="form">--}}
    {{--                    <form action="{{route('cat.search')}}" method="get">--}}
    {{--                        <input--}}
    {{--                            type="search"--}}
    {{--                            name="term"--}}
    {{--                            id=""--}}
    {{--                            placeholder="ابحث عن فئة..."--}}
    {{--                            class="form-control w-70"--}}
    {{--                        />--}}
    {{--                    </form>--}}
    {{--                    <br />--}}
    {{--                    <div class="categories">--}}
    {{--                        @if(!empty($term))--}}
    {{--                            <h2>{{$term}}</h2>--}}
    {{--                        @else--}}
    {{--                        @endif--}}
    {{--                        <h2 class="title-big">الفئات</h2>--}}
    {{--                        <div class="dd">--}}
    {{--                            <ul class="MuiList-root MuiList-padding">--}}
    {{--                                <li class="MuiListItem-root jss73 jss74 MuiListItem-gutters">--}}
    {{--                                    <span style="font-weight: bold">كل الفئات</span>--}}
    {{--                                </li>--}}
    {{--                                @foreach($services as $service)--}}
    {{--                                    <li class="MuiListItem-root jss73 MuiListItem-gutters">--}}
    {{--                                        <div class="MuiListItemText-root">--}}
    {{--                                            <a href="{{route('service.details',$service)}}">   <span--}}
    {{--                                                    class="MuiTypography-root MuiListItemText-primary MuiTypography-body1 MuiTypography-displayBlock"--}}
    {{--                                                >{{$service->name_ar}}</span--}}
    {{--                                                ></a>--}}
    {{--                                        </div>--}}
    {{--                                    </li>--}}
    {{--                                @endforeach--}}

    {{--                            </ul>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div id="filters" class="col-sm-8">--}}

    {{--                <div class="row" >--}}
    {{--                    @foreach($services as $service)--}}
    {{--                    <div class="col-lg-6 mb-5" >--}}
    {{--                        <div class="card" >--}}
    {{--                            <div class="card-header" style="background-color: #4115BA;">                                <h1 class="card-info">--}}
    {{--                                {{$service->name_ar}}</h1>--}}
    {{--                                <h6 class="card-info"> Keep track of revenue and expenses efficiently in one place.</h6>--}}
    {{--                            </div>--}}
    {{--                            @foreach($service->soluations->take(3) as $soluation)--}}

    {{--                                        <div class="card-body">--}}
    {{--                                            <div class="row">--}}
    {{--                                                <div class="col-sm-4">--}}
    {{--                                                    <div class="images"><img src="{{asset($soluation->image_path)}}" alt="" srcset=""></div>--}}
    {{--                                                </div>--}}
    {{--                                                <div class="col-sm-8">--}}
    {{--                                                        <?php--}}
    {{--                                                        $avgStar=     $soluation->reviews()->avg('rate');--}}
    {{--                                                        $rate =    number_format((float)$avgStar, 1, '.', '');--}}
    {{--                                                        ?>--}}
    {{--                                                    <div class="content" style="text-align: right">                                                        <h2>{{$soluation->name_ar}}--}}
    {{--                                                            <span> <i class="fa-sharp fa-solid fa-star" style="color: black"></i> {{$rate}}</span>--}}
    {{--                                                        </h2>--}}

    {{--                                                        <p class="max-lines"> {{$soluation->body_ar}}</p>--}}
    {{--                                                    </div>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}

    {{--                                        </div>--}}



    {{--                            @endforeach--}}
    {{--                            <div class="card-footer" style="background-color: transparent">--}}
    {{--                                <a href="{{route('service.details',$service)}}" class="btn browser">تصفح جميع الحلول</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    @endforeach--}}


    {{--                </div>--}}





    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    <livewire:soluations-list />

@endsection
