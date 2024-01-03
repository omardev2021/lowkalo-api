@extends('frontend.layouts.master')
@section('content')
    <br>
    <div class="container-fluid box text-center ">
        <!-- <img src="/images/cc.png" alt="" srcset="" class="img-pos d-none d-sm-block"> -->
        <h1 class="title-big"> قائمة الدروس </h1>
        <hr style="opacity: 1;color:#00E6A7; width: 120px; margin: auto; height: 8px;border-width:4px">


    </div>

    <div class="container my-3" style="padding: 5%;">
        @foreach ($videos as $video)
            {{-- @if ($video->processed) --}}
            <div class="d-flex align-items-center">
                <div>
                    <img src="{{ asset('frontend/images/image 12.png') }}" class="img-fluid w-50" alt="">
                </div>
                {{-- @php
                        $hours_add_zero = sprintf('%02d', $video->hours);
                    @endphp
                    @php
                        $minutes_add_zero = sprintf('%02d', $video->minutes);
                    @endphp
                    @php
                        $seconds_add_zero = sprintf('%02d', $video->seconds);
                    @endphp --}}
                <div>
                    <h2>{{ $video->title }}</h2>
                    <div class="d-flex my-2">
                        <div class="mx-2">
                            <i class="fa-solid fa-video" style="color: #541BF2;"></i><span style="color: #2B788B;">
                                فيديو</span>
                        </div>
{{--                        <div class="mx-2">--}}
{{--                            <i class="fa-solid fa-hourglass-start" style="color: #541BF2;"></i>--}}
{{--                            --}}{{-- <time>{{ $video->hours > 0 ? $hours_add_zero . ':' : '' }}{{ $minutes_add_zero }}:{{ $seconds_add_zero }}</time> --}}
{{--                            --}}{{-- <span--}}
{{--                                    style="color: #2B788B;"> 4 دقائق</span> --}}
{{--                        </div>--}}
                        <div class="mx-2">
                            <i class="fa-solid fa-user-tie" style="color: #541BF2;"></i><span style="color: #2B788B;">
                                محمد الشريف</span>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab repellat voluptates quae optio
                        veritatis, labore iste fugiat adipisci quibusdam. Laboriosam sapiente sequi a nesciunt numquam
                        dolorem natus assumenda repudiandae ipsa.</p>
                    <a href="/part/{{ $video->id }}"> <button class="btn-bg mx-3" type="button">مشاهدة</button>
                    </a>
                </div>
            </div>
            <br>
            <hr>
            <br>
            {{-- @endif --}}
            {{-- @empty --}}
            {{-- <div class="mx-auto col-8">
                <div class="alert alert-primary text-center" role="alert">
                    لا يوجد فيديوهات
                </div>
            </div> --}}
        @endforeach
        {{-- <div class="d-flex align-items-center">
            <div>
                <img src="{{asset('frontend/images/image 12.png')}}" class="img-fluid w-50" alt="">
            </div>
            <div>
                <h1>الدرس الاول</h1>
                <div class="d-flex my-2">
                    <div class="mx-2">
                        <i class="fa-solid fa-video" style="color: #2B788B;"></i><span style="color: #2B788B;"> فيديو</span>
                    </div>
                    <div class="mx-2">
                        <i class="fa-solid fa-hourglass-start" style="color: #2B788B;"></i><span style="color: #2B788B;"> 4 دقائق</span>
                    </div>
                    <div class="mx-2">
                        <i class="fa-solid fa-user-tie" style="color: #2B788B;"></i><span style="color: #2B788B;">  محمد الشريف</span>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab repellat voluptates quae optio
                    veritatis, labore iste fugiat adipisci quibusdam. Laboriosam sapiente sequi a nesciunt numquam
                    dolorem natus assumenda repudiandae ipsa.</p>
             <a href="{{route('video')}}">  <button class="btn-bg mx-3" type="button">مشاهدة</button> </a>
            </div>
        </div>
        <hr>
        <div class="d-flex align-items-center">
            <div>
                <img src="{{asset('frontend/images/image 12.png')}}" class="img-fluid w-50" alt="">
            </div>
            <div>
                <h1>الدرس الاول</h1>
                <div class="d-flex my-2">
                    <div class="mx-2">
                        <i class="fa-solid fa-video" style="color: #2B788B;"></i><span style="color: #2B788B;"> فيديو</span>
                    </div>
                    <div class="mx-2">
                        <i class="fa-solid fa-hourglass-start" style="color: #2B788B;"></i><span style="color: #2B788B;"> 4 دقائق</span>
                    </div>
                    <div class="mx-2">
                        <i class="fa-solid fa-user-tie" style="color: #2B788B;"></i><span style="color: #2B788B;">  محمد الشريف</span>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab repellat voluptates quae optio
                    veritatis, labore iste fugiat adipisci quibusdam. Laboriosam sapiente sequi a nesciunt numquam
                    dolorem natus assumenda repudiandae ipsa.</p>
             <a href="{{route('video')}}">  <button class="btn-bg mx-3" type="button">مشاهدة</button> </a>
            </div>
        </div>
        <hr>
        <div class="d-flex align-items-center">
            <div>
                <img src="{{asset('frontend/images/image 12.png')}}" class="img-fluid w-50" alt="">
            </div>
            <div>
                <h1>الدرس الاول</h1>
                <div class="d-flex my-2">
                    <div class="mx-2">
                        <i class="fa-solid fa-video" style="color: #2B788B;"></i><span style="color: #2B788B;"> فيديو</span>
                    </div>
                    <div class="mx-2">
                        <i class="fa-solid fa-hourglass-start" style="color: #2B788B;"></i><span style="color: #2B788B;"> 4 دقائق</span>
                    </div>
                    <div class="mx-2">
                        <i class="fa-solid fa-user-tie" style="color: #2B788B;"></i><span style="color: #2B788B;">  محمد الشريف</span>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab repellat voluptates quae optio
                    veritatis, labore iste fugiat adipisci quibusdam. Laboriosam sapiente sequi a nesciunt numquam
                    dolorem natus assumenda repudiandae ipsa.</p>
             <a href="{{route('video')}}">  <button class="btn-bg mx-3" type="button">مشاهدة</button> </a>
            </div>
        </div>
        <hr>
        <div class="d-flex align-items-center">
            <div>
                <img src="{{asset('frontend/images/image 12.png')}}" class="img-fluid w-50" alt="">
            </div>
            <div>
                <h1>الدرس الاول</h1>
                <div class="d-flex my-2">
                    <div class="mx-2">
                        <i class="fa-solid fa-video" style="color: #2B788B;"></i><span style="color: #2B788B;"> فيديو</span>
                    </div>
                    <div class="mx-2">
                        <i class="fa-solid fa-hourglass-start" style="color: #2B788B;"></i><span style="color: #2B788B;"> 4 دقائق</span>
                    </div>
                    <div class="mx-2">
                        <i class="fa-solid fa-user-tie" style="color: #2B788B;"></i><span style="color: #2B788B;">  محمد الشريف</span>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab repellat voluptates quae optio
                    veritatis, labore iste fugiat adipisci quibusdam. Laboriosam sapiente sequi a nesciunt numquam
                    dolorem natus assumenda repudiandae ipsa.</p>
             <a href="{{route('video')}}">  <button class="btn-bg mx-3" type="button">مشاهدة</button> </a>
            </div>
        </div>
        <hr>
        <div class="d-flex align-items-center">
            <div>
                <img src="{{asset('frontend/images/image 12.png')}}" class="img-fluid w-50" alt="">
            </div>
            <div>
                <h1>الدرس الاول</h1>
                <div class="d-flex my-2">
                    <div class="mx-2">
                        <i class="fa-solid fa-video" style="color: #2B788B;"></i><span style="color: #2B788B;"> فيديو</span>
                    </div>
                    <div class="mx-2">
                        <i class="fa-solid fa-hourglass-start" style="color: #2B788B;"></i><span style="color: #2B788B;"> 4 دقائق</span>
                    </div>
                    <div class="mx-2">
                        <i class="fa-solid fa-user-tie" style="color: #2B788B;"></i><span style="color: #2B788B;">  محمد الشريف</span>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab repellat voluptates quae optio
                    veritatis, labore iste fugiat adipisci quibusdam. Laboriosam sapiente sequi a nesciunt numquam
                    dolorem natus assumenda repudiandae ipsa.</p>
             <a href="{{route('video')}}">  <button class="btn-bg mx-3" type="button">مشاهدة</button> </a>
            </div>
        </div>
        <hr> --}}



    </div>
@endsection
