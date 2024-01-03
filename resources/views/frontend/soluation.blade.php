<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('frontend/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/main_css.css') }}">
    <title>soluation</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    @vite('resources/js/app.js')
</head>
<style>
    *{
        padding: 0px;
        margin: 0px;
        box-sizing: border-box;
        font-family: 'Tajawal', sans-serif;
        direction: ltr;
    }
</style>
<body class="font-sans  text-gray-900 text-sm" style="background-color: #F3F4FF;">

{{--<nav class="navbar navbar-expand-lg bg-body-tertiary py-4">--}}
{{--    <div class="container">--}}
{{--        <a class="navbar-brand" href="#" style="font-weight: bold;">--}}
{{--            <h3 style="font-weight:bold">Low Kalo</h3>--}}
{{--        </a>--}}
{{--        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"--}}
{{--                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--            <span class="navbar-toggler-icon"></span>--}}
{{--        </button>--}}
{{--        <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--            <ul class="navbar-nav m-auto mb-2 mb-lg-0">--}}
{{--                <li class="nav-item" style="color: black">--}}
{{--                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" aria-current="page" href="{{ route('course') }}">Courses</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="{{route('services')}}">Services</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="#">About Lowkalo</a>--}}
{{--                </li>--}}

{{--                 <li class="nav-item dropdown">--}}
{{--                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"--}}
{{--                        aria-expanded="false">--}}
{{--                        المدونة--}}
{{--                    </a>--}}
{{--                    <ul class="dropdown-menu">--}}
{{--                        <li><a class="dropdown-item" href="#">#</a></li>--}}
{{--                        <li><a class="dropdown-item" href="#"> #</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}

{{--            </ul>--}}
{{--                        <div class="row mx-3">--}}

{{--                            <div class="col-md-4">--}}
{{--                                <select class="form-control changeLang" style="width: 80px">--}}
{{--                                    @if (session()->get('locale') == 'en')--}}
{{--                                        <option value="en" selected>English--}}
{{--                                        </option>--}}
{{--                                        <option value="ar" >العربية--}}
{{--                                        </option>--}}

{{--                                    @elseif(session()->get('locale') == 'ar')--}}
{{--                                        <option value="en" >English--}}
{{--                                        </option>--}}
{{--                                        <option value="ar" selected>العربية--}}
{{--                                        </option>--}}
{{--                                    @endif--}}
{{--                                     <option value="sp" {{ session()->get('locale') == 'sp' ? 'selected' : '' }}>Spanish</option>--}}
{{--                                </select>--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--            <div class="d-flex align-items-center" role="search">--}}
{{--                @auth--}}
{{--                    @can('watch-videos')--}}
{{--                        <a href="{{ url('/videos/1') }}"><button class="btn-buy mx-3" style="width: 150px" type="button">Watch the Course</button></a>--}}
{{--                    @endcan--}}
{{--                    <li class="nav-item dropdown" style="list-style: none">--}}
{{--                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"--}}
{{--                           aria-expanded="false">--}}
{{--                            {{ auth()->user()->name }}--}}
{{--                        </a>--}}
{{--                        <ul class="dropdown-menu">--}}
{{--                            @if( auth()->user()->administration_level == 4)--}}
{{--                                <li class="nav-item text-center mb-2">--}}
{{--                                    <a class="nav-link" href="{{ route('admin.home') }}">Admin--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                            @endif--}}
{{--                            <li class="nav-item text-center mb-2">--}}
{{--                                <a class="nav-link" href="{{ route('account') }}">My Account--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <form method="POST" action="{{ route('logout') }}" x-data>--}}
{{--                                @csrf--}}
{{--                                <li class="nav-item text-center">--}}
{{--                                    <a class="nav-link" href="{{ route('logout') }}"--}}
{{--                                       onclick="event.preventDefault();--}}
{{--                                    this.closest('form').submit();">Logout--}}
{{--                                    </a>--}}
{{--                                </li>--}}

{{--                            </form>--}}
{{--                             <li><a class="dropdown-item" href="#"> #</a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}

{{--                @endauth--}}
{{--                @guest--}}
{{--                    <a href="{{ route('login') }}" class="algin-middel"> <i class="fa-solid fa-arrow-right"></i> Login--}}
{{--                    </a>--}}
{{--                    <a href="{{ route('register') }}"><button class="btn-buy mx-3" style="width: 150px" type="button">Register</button></a>--}}
{{--                @endguest--}}
{{--                @if (session()->get('locale') == 'en')--}}
{{--                    <li style="list-style: none"><a href="{{ route('language.arabic') }}" class="dropdown-item"> العربية--}}
{{--                            <span><img src="{{ asset('frontend/images/ar.jpg') }}" width="28" height="18"--}}
{{--                                       alt=""></span></a></li>--}}

{{--                @elseif(session()->get('locale') == 'ar')--}}
{{--                    <li style="list-style: none"><a href="{{ route('language.english') }}" class="dropdown-item">English--}}
{{--                            <span><img src="{{ asset('frontend/images/uk.png') }}" width="28" height="24"--}}
{{--                                       alt=""></span></a></li>--}}
{{--                @endif--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</nav>--}}


{{--<main class="container mx-auto max-w-custom flex" style="padding: 2%">--}}
    <main class="container mx-auto max-w-custom flex flex-col md:flex-row" style="padding: 2%">
{{--    <div class="w-70 mr-5" style="margin-left: 20px">--}}
        <div class="w-70 mx-auto md:mx-0 md:mr-5" style="margin-left: 20px">
            <div
                class="bg-white md:sticky md:top-8 border-2 border-blue rounded-xl mt-16"
                style="
                          border-image-source: linear-gradient(to bottom, rgba(50, 138, 241, 0.22), rgba(99, 123, 255, 0));
                            border-image-slice: 1;
                            background-image: linear-gradient(to bottom, #ffffff, #ffffff), linear-gradient(to bottom, rgba(50, 138, 241, 0.22), rgba(99, 123, 255, 0));
                            background-origin: border-box;
                            background-clip: content-box, border-box;
                    "
            >
            <div class="text-center px-6 py-2 pt-6">
                <h3 class="font-semibold text-base">Add a Review</h3>
{{--                <p class="text-xs mt-4">Let us know what you would like and we'll take a look over!</p>--}}
            </div>

            <form action="{{route('rate',$soluation)}}" method="POST" enctype="multipart/form-data" class="space-y-4 px-4 py-6">
                @csrf
{{--                <div>--}}
{{--                    <input type="text" name="notes" class="w-full text-sm bg-gray-100 border-none rounded-xl placeholder-gray-900 px-4 py-2" placeholder="Your Review">--}}
{{--                </div>--}}
                <div>
                    <label class="font-semibold text-base" for="rate">rate</label>
                    <select name="rate" required id="rate" class="w-full bg-gray-100 text-sm rounded-xl border-none px-4 py-2">
                        <option value="1"> Bad</option>
                        <option value="2"> Acceptable</option>
                        <option value="3"> Good</option>
                        <option value="4"> Very Good</option>
                        <option value="5"> Exellent</option>
                    </select>
                    <input type="image" name="image_path">
                </div>
                <div>
                    <textarea name="notes" required id="idea" cols="30" rows="4" class="w-full bg-gray-100 rounded-xl border-none placeholder-gray-900 text-sm px-4 py-2" placeholder="Your Review"></textarea>
                </div>
                <div class="flex items-center justify-between space-x-3">
{{--                    <button--}}
{{--                        type="button"--}}
{{--                        class="flex items-center justify-center w-1/2 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3"--}}
{{--                    >--}}
{{--                        <svg class="text-gray-600 w-4 transform -rotate-45" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />--}}
{{--                        </svg>--}}
{{--                        <span class="ml-1">Attach</span>--}}
{{--                    </button>--}}


                    @guest()
                        <div>
                            <h3 class="font-semibold text-base ">Please login to be able to submit a review</h3>

                        </div>
                        <div>
                            <button
                                type="submit"

                                class="flex items-center justify-center w-1/2 h-11 text-xs bg-blue text-white font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3"
                                style="background-color: #00E6A7">
                                <span class="ml-1">Login</span>
                            </button>
                        </div>
                        <br>


                    @endguest
                    @auth()
                        @if($rated)
                            <h3 class="font-semibold text-base">You've already submitted a review</h3>

                        @else

                            <button
                                type="submit"
                                class="flex items-center justify-center w-1/2 h-11 text-xs bg-blue text-white font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3"
                                style="background-color: #00E6A7"   >
                                <span class="ml-1">Submit</span>
                            </button>
                        @endif
                    @endauth
                </div>
            </form>
        </div>
    </div>

{{--    <div class="w-175">--}}
        <div class="w-full px-2 md:px-0 md:w-175">

        <div class="mt-8">

            <div>
                <a href="{{route('service.details',$soluation->category)}}" class="flex items-center font-semibold hover:underline">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                    <span class="ml-2">Go Back</span>
                </a>
            </div>

{{--            <div class="idea-container bg-white rounded-xl flex mt-4">--}}
{{--                <div class="flex flex-1 px-4 py-6">--}}
{{--                    <div class="flex-none">--}}
            <div class="idea-container bg-white rounded-xl flex mt-4">
                <div class="flex flex-col md:flex-row flex-1 px-4 py-6">
                    <div class="flex-none mx-2 md:mx-4">
                        <a href="#">
                            <img src="{{$soluation->image_path}}" alt="avatar" class="w-14 h-14 rounded-xl">
                        </a>
                    </div>
{{--                    <div class="w-full mx-4">--}}
                    <div class="w-full mx-2 md:mx-4">
                        <h4 class="text-xl font-semibold">
                            <a href="#" class="hover:underline">{{$soluation->name}}</a>
                        </h4>
                        <div class="text-gray-600 mt-3">
                            {{$soluation->body}}                        </div>

{{--                        <div class="flex items-center justify-between mt-6">--}}
{{--                            <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">--}}
{{--                                <div class="font-bold text-gray-900">{{$soluation->name}}</div>--}}
{{--                                <div>&bull;</div>--}}

                                <div class="flex flex-col md:flex-row md:items-center justify-between mt-6">
                                    <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                                        <div class="hidden md:block font-bold text-gray-900">{{$soluation->name}}</div>
                                        <div class="hidden md:block">&bull;</div>

                                <div>{{$soluation->category->name}}</div>
                                <div>&bull;</div>
                                <div class="text-gray-900">{{count($soluation->reviews)}} Reviews</div>
                            </div>
{{--                            <div class="flex items-center space-x-2">--}}
{{--                                <div class="bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">Open</div>--}}
{{--                                <button class="relative bg-gray-100 hover:bg-gray-200 border rounded-full h-7 transition duration-150 ease-in py-2 px-3">--}}
{{--                                    <svg fill="currentColor" width="24" height="6"><path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z" style="color: rgba(163, 163, 163, .5)"></svg>--}}
{{--                                    <ul class="hidden absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">--}}
{{--                                        <li><a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">Mark as Spam</a></li>--}}
{{--                                        <li><a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">Delete Post</a></li>--}}
{{--                                    </ul>--}}
{{--                                </button>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>
            </div> <!-- end idea-container -->

{{--            <div class="buttons-container flex items-center justify-between mt-6">--}}
                <div class="buttons-container flex items-center justify-between mt-6">
                    <div class="flex flex-col md:flex-row items-center space-x-4 md:ml-6">
{{--                <div class="flex items-center space-x-4 ml-6">--}}
{{--                    <button--}}
{{--                        type="button"--}}
{{--                        class="flex items-center justify-center h-11 w-32 text-xs bg-blue text-white font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3"--}}
{{--                    >--}}
{{--                        <span class="ml-1">Reply</span>--}}
{{--                    </button>--}}
{{--                    <button--}}
{{--                        type="button"--}}
{{--                        class="flex items-center justify-center w-36 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3"--}}
{{--                    >--}}
{{--                        <span>Set Status</span>--}}
{{--                        <svg class="w-4 h-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />--}}
{{--                        </svg>--}}
{{--                    </button>--}}
{{--                </div>--}}

{{--                <div class="flex items-center space-x-3">--}}
                    <div class="bg-white font-semibold text-center rounded-xl px-3 py-2">
                        <div class="text-xl leading-snug">{{count($soluation->reviews)}}</div>
                        <div class="text-gray-400 text-xs leading-none">Reviews</div>
                    </div>
{{--                    <button--}}
{{--                        type="button"--}}
{{--                        class="w-32 h-11 text-xs bg-gray-200 font-semibold uppercase rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3"--}}
{{--                    >--}}
{{--                        <span>Vote</span>--}}
{{--                    </button>--}}
                </div>
            </div> <!-- end buttons-container -->

            <div class="comments-container relative space-y-6 md:ml-22 pt-4 my-8 mt-1">
                @foreach($soluation->reviews as $rev)
                    @if($rev->status == 2)
                <div class="comment-container relative bg-white rounded-xl flex mt-4">
                    <div class="flex flex-col md:flex-row flex-1 px-4 py-6">
                        <div class="flex-none">

                                <a href="#">
                                    <img  src="{{asset('images/user.png')}}" alt="avatar" class="w-14 h-14 rounded-xl">
                                </a>
                            </div>
                        <div class="w-full md:mx-4">
                                <h4 class="text-xl font-semibold">
                                    <a href="#" class="hover:underline">
                                        @if($rev->rate == 1)
                                            Bad
                                        @elseif($rev->rate == 2)
                                            Acceptable
                                        @elseif($rev->rate == 3)
                                            Good
                                        @elseif($rev->rate == 4)
                                            Very Good
                                        @elseif($rev->rate == 5)
                                            Exellent
                                        @endif
                                    </a>
                                </h4>
                                <div class="text-gray-600 mt-3 line-clamp-3">
                                    {{$rev->notes}}
                                </div>

                                <div class="flex items-center justify-between mt-6">
                                    <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                                        <div class="font-bold text-gray-900">{{$rev->user->name}}</div>
                                        <div>&bull;</div>
                                        <div>{{$rev->created_at->diffForHumans()}}</div>
                                    </div>
{{--                                    <div class="flex items-center space-x-2">--}}
{{--                                        <button class="relative bg-gray-100 hover:bg-gray-200 border rounded-full h-7 transition duration-150 ease-in py-2 px-3">--}}
{{--                                            <svg fill="currentColor" width="24" height="6"><path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z" style="color: rgba(163, 163, 163, .5)"></svg>--}}
{{--                                            <ul class="hidden absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">--}}
{{--                                                <li><a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">Mark as Spam</a></li>--}}
{{--                                                <li><a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">Delete Post</a></li>--}}
{{--                                            </ul>--}}
{{--                                        </button>--}}
{{--                                    </div>--}}
                                </div>
                            </div>
                        </div>
                    </div> <!-- end comment-container -->
                    @endif
                @endforeach

            </div> <!-- end comments-container -->


        </div>
    </div>
</main>


<div class="end" style="margin-top: 4%">
    <footer class=" mt-5">
        <div class="row align-items-center ">

            <div class="col-sm-3 text-center">

                <div class="footer-content my-5">


                    <h2 style="font-weight:700;color: white">Low Kalo</h2><br>
                    <a href="" class="mb-4">info@lowkalo.com <i class="fa-solid fa-arrow-right-long"></i></a><br>
                    {{-- <div class="d-flex mt-4 text-center">
                        <span class="me-3">Social Media</span>
                        <i class="fa-brands fa-facebook-f mx-2"></i>
                        <i class="fa-brands fa-instagram mx-2"></i>
                        <i class="fa-brands fa-twitter mx-2"></i>
                    </div> --}}
                    <br>
                    <div class="media">



                        <a href=""> <i class="fab fa-instagram"></i></a>
                        <a href="https://wa.link/w1oyxx" target="_blank"> <i
                                class="fab fa fa-whatsapp"></i></a>
                        <a href=""> <i class="fab fa-twitter"></i></a>
                    </div>

                </div>
            </div>
            <div class="col-sm-9 text-center">

                <div class="footer-content my-5">
                    <div class="row">
                        <div class="col-sm-4">
                            <ul>
                                <li><a href="#" style="font-weight: bold">Pages</a></li>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About Lowkalo</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4">
                            <ul>
                                <li><a href="#" style="font-weight: bold">Services</a></li>
                                <li><a href="#">Online Courses</a></li>
                                <li><a href="#">Consultations</a></li>
                            {{-- <li><a href="#">Join us</a></li>
              <li><a href="#">Connect</a></li> --}}
                        </div>
                        <div class="col-sm-4">
                            <ul>



                                <li><a href="#" style="font-weight: bold"> Join us</a></li>
                                <li><a href="#">Creat an account </a></li>
                                <li><a href="#">Login</a></li>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="paymetMethod text-center">
            <img src="{{ asset('frontend/images/en.png') }}"
                 style="max-width: 350px;margin-left: 38%">
        </div>
        <div class="text-center p-3" style="background-color: #4115BA;">

            <span style="font-size: 16px;color:#E0F8F6">All rights reserved to © Lowkalo</span>
        </div>
    </footer>
</div>

</body>
</html>
