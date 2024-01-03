@extends('theme.default')



@section('content')
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">الزيارات</h4>
                    <div class="table-responsive">
                        <table class="table align-middle table-nowrap mb-0">
                            <thead class="table-light">
                            <tr>

                                <th class="align-middle">اسم الشركة</th>

                                <th class="align-middle">الوقت</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($visits as $visit)
                                <tr>

                                    <td><a href="javascript: void(0);"
                                           class="text-body fw-bold">{{ $visit->soluation->name_ar }}</a> </td>
                                    <td>
                                        {{ $visit->created_at }}
                                    </td>



                                    {{--                                                                        <td>--}}
                                    {{--                                                                            <div class="d-flex gap-3">--}}
                                    {{--                                                                                <a href="{{ route('coupon.edit', $coupon) }}"class="text-success"><i class="fa-solid fa-pen-to-square"></i></a>--}}
                                    {{--                                                                                <form method="POST" action="{{ route('coupon.destroy', $coupon) }}"--}}
                                    {{--                                                                                      class="d-inline-block">--}}
                                    {{--                                                                                    @method('delete')--}}
                                    {{--                                                                                    @csrf--}}
                                    {{--                                                                                    <button type="submit" style="border: none"--}}
                                    {{--                                                                                            onclick="return confirm('هل أنت متأكد؟')"> <a--}}
                                    {{--                                                                                            href="javascript:void(0);" class="text-danger"><i class="fa-solid fa-trash"></i></a></button>--}}
                                    {{--                                                                                </form>--}}

                                    {{--                                                                            </div>--}}
                                    {{--                                                                        </td>--}}


                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                    <!-- end table-responsive -->
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
@endsection
@section('script')
    <!-- apexcharts -->
    <script src="{{ URL::asset('/admin/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- dashboard init -->
    <script src="{{ URL::asset('admin/assets/js/pages/dashboard.init.js') }}"></script>
@endsection






{{--<!DOCTYPE html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
{{--<head>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}
{{--    <meta name="csrf-token" content="{{ csrf_token() }}">--}}

{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">--}}

{{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"--}}
{{--          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">--}}
{{--    <link rel="stylesheet" href="{{ asset('frontend/style.css') }}">--}}
{{--    <link rel="stylesheet" href="{{ asset('frontend/main_css.css') }}">--}}
{{--    <title>Laracasts Voting</title>--}}

{{--    <!-- Fonts -->--}}
{{--    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">--}}

{{--    <!-- Styles -->--}}
{{--    <link rel="stylesheet" href="{{ asset('css/app.css') }}">--}}

{{--    <!-- Scripts -->--}}
{{--    <script src="{{ asset('js/app.js') }}" defer></script>--}}
{{--    @vite('resources/js/app.js')--}}
{{--</head>--}}
{{--<body class="font-sans bg-gray-background text-gray-900 text-sm">--}}
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
{{--                <li class="nav-item">--}}
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

{{--                --}}{{-- <li class="nav-item dropdown">--}}
{{--                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"--}}
{{--                        aria-expanded="false">--}}
{{--                        المدونة--}}
{{--                    </a>--}}
{{--                    <ul class="dropdown-menu">--}}
{{--                        <li><a class="dropdown-item" href="#">#</a></li>--}}
{{--                        <li><a class="dropdown-item" href="#"> #</a></li>--}}
{{--                    </ul>--}}
{{--                </li> --}}

{{--            </ul>--}}
{{--            --}}{{--            <div class="row mx-3">--}}

{{--            --}}{{--                <div class="col-md-4">--}}
{{--            --}}{{--                    <select class="form-control changeLang" style="width: 80px">--}}
{{--            --}}{{--                        @if (session()->get('locale') == 'en')--}}
{{--            --}}{{--                            <option value="en" selected>English--}}
{{--            --}}{{--                            </option>--}}
{{--            --}}{{--                            <option value="ar" >العربية--}}
{{--            --}}{{--                            </option>--}}

{{--            --}}{{--                        @elseif(session()->get('locale') == 'ar')--}}
{{--            --}}{{--                            <option value="en" >English--}}
{{--            --}}{{--                            </option>--}}
{{--            --}}{{--                            <option value="ar" selected>العربية--}}
{{--            --}}{{--                            </option>--}}
{{--            --}}{{--                        @endif--}}
{{--            --}}{{--                        --}}{{----}}{{-- <option value="sp" {{ session()->get('locale') == 'sp' ? 'selected' : '' }}>Spanish</option> --}}
{{--            --}}{{--                    </select>--}}

{{--            --}}{{--                </div>--}}
{{--            --}}{{--            </div>--}}
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
{{--                            --}}{{-- <li><a class="dropdown-item" href="#"> #</a></li> --}}
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


{{--<main class="container mx-auto max-w-custom flex">--}}
{{--    <div class="w-70 mr-5">--}}
{{--        <div--}}
{{--            class="bg-white border-2 border-blue rounded-xl mt-16"--}}
{{--            style="--}}
{{--                          border-image-source: linear-gradient(to bottom, rgba(50, 138, 241, 0.22), rgba(99, 123, 255, 0));--}}
{{--                            border-image-slice: 1;--}}
{{--                            background-image: linear-gradient(to bottom, #ffffff, #ffffff), linear-gradient(to bottom, rgba(50, 138, 241, 0.22), rgba(99, 123, 255, 0));--}}
{{--                            background-origin: border-box;--}}
{{--                            background-clip: content-box, border-box;--}}
{{--                    "--}}
{{--        >--}}
{{--            <div class="text-center px-6 py-2 pt-6">--}}
{{--                <h3 class="font-semibold text-base">Add an idea</h3>--}}
{{--                <p class="text-xs mt-4">Let us know what you would like and we'll take a look over!</p>--}}
{{--            </div>--}}

{{--            <form action="#" method="POST" class="space-y-4 px-4 py-6">--}}
{{--                <div>--}}
{{--                    <input type="text" class="w-full text-sm bg-gray-100 border-none rounded-xl placeholder-gray-900 px-4 py-2" placeholder="Your Idea">--}}
{{--                </div>--}}
{{--                <div>--}}
{{--                    <select name="category_add" id="category_add" class="w-full bg-gray-100 text-sm rounded-xl border-none px-4 py-2">--}}
{{--                        <option value="Category One">Category One</option>--}}
{{--                        <option value="Category Two">Category Two</option>--}}
{{--                        <option value="Category Three">Category Three</option>--}}
{{--                        <option value="Category Four">Category Four</option>--}}
{{--                    </select>--}}
{{--                </div>--}}
{{--                <div>--}}
{{--                    <textarea name="idea" id="idea" cols="30" rows="4" class="w-full bg-gray-100 rounded-xl border-none placeholder-gray-900 text-sm px-4 py-2" placeholder="Describe your idea"></textarea>--}}
{{--                </div>--}}
{{--                <div class="flex items-center justify-between space-x-3">--}}
{{--                    <button--}}
{{--                        type="button"--}}
{{--                        class="flex items-center justify-center w-1/2 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3"--}}
{{--                    >--}}
{{--                        <svg class="text-gray-600 w-4 transform -rotate-45" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />--}}
{{--                        </svg>--}}
{{--                        <span class="ml-1">Attach</span>--}}
{{--                    </button>--}}
{{--                    <button--}}
{{--                        type="submit"--}}
{{--                        class="flex items-center justify-center w-1/2 h-11 text-xs bg-blue text-white font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3"--}}
{{--                    >--}}
{{--                        <span class="ml-1">Submit</span>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="w-175">--}}
{{--        <nav class="flex items-center justify-between text-xs">--}}
{{--            <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">--}}
{{--                <li><a href="#" class="border-b-4 pb-3 border-blue">All Ideas (87)</a></li>--}}
{{--                <li><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Considering (6)</a></li>--}}
{{--                <li><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">In Progress (1)</a></li>--}}
{{--            </ul>--}}

{{--            <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">--}}
{{--                <li><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Implemented (10)</a></li>--}}
{{--                <li><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Closed (55)</a></li>--}}
{{--            </ul>--}}
{{--        </nav>--}}

{{--        <div class="mt-8">--}}

{{--            <div>--}}
{{--                <a href="/" class="flex items-center font-semibold hover:underline">--}}
{{--                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />--}}
{{--                    </svg>--}}
{{--                    <span class="ml-2">All ideas</span>--}}
{{--                </a>--}}
{{--            </div>--}}

{{--            <div class="idea-container bg-white rounded-xl flex mt-4">--}}
{{--                <div class="flex flex-1 px-4 py-6">--}}
{{--                    <div class="flex-none">--}}
{{--                        <a href="#">--}}
{{--                            <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl">--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="w-full mx-4">--}}
{{--                        <h4 class="text-xl font-semibold">--}}
{{--                            <a href="#" class="hover:underline">A random title can go here</a>--}}
{{--                        </h4>--}}
{{--                        <div class="text-gray-600 mt-3">--}}
{{--                            Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet officia doloribus quibusdam dolorem quod velit repellat obcaecati doloremque, nulla iusto modi hic. Dolore possimus consequuntur et recusandae laboriosam? Esse, culpa.--}}
{{--                        </div>--}}

{{--                        <div class="flex items-center justify-between mt-6">--}}
{{--                            <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">--}}
{{--                                <div class="font-bold text-gray-900">John Doe</div>--}}
{{--                                <div>&bull;</div>--}}
{{--                                <div>10 hours ago</div>--}}
{{--                                <div>&bull;</div>--}}
{{--                                <div>Category 1</div>--}}
{{--                                <div>&bull;</div>--}}
{{--                                <div class="text-gray-900">3 Comments</div>--}}
{{--                            </div>--}}
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
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div> <!-- end idea-container -->--}}

{{--            <div class="buttons-container flex items-center justify-between mt-6">--}}
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
{{--                    <div class="bg-white font-semibold text-center rounded-xl px-3 py-2">--}}
{{--                        <div class="text-xl leading-snug">12</div>--}}
{{--                        <div class="text-gray-400 text-xs leading-none">Votes</div>--}}
{{--                    </div>--}}
{{--                    <button--}}
{{--                        type="button"--}}
{{--                        class="w-32 h-11 text-xs bg-gray-200 font-semibold uppercase rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3"--}}
{{--                    >--}}
{{--                        <span>Vote</span>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </div> <!-- end buttons-container -->--}}

{{--            <div class="comments-container relative space-y-6 ml-22 pt-4 my-8 mt-1">--}}
{{--                <div class="comment-container relative bg-white rounded-xl flex mt-4">--}}
{{--                    <div class="flex flex-1 px-4 py-6">--}}
{{--                        <div class="flex-none">--}}
{{--                            <a href="#">--}}
{{--                                <img src="https://source.unsplash.com/200x200/?face&crop=face&v=2" alt="avatar" class="w-14 h-14 rounded-xl">--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                        <div class="w-full mx-4">--}}
{{--                            --}}{{-- <h4 class="text-xl font-semibold">--}}
{{--                                <a href="#" class="hover:underline">A random title can go here</a>--}}
{{--                            </h4> --}}
{{--                            <div class="text-gray-600 mt-3 line-clamp-3">--}}
{{--                                Lorem ipsum dolor sit amet consectetur.--}}
{{--                            </div>--}}

{{--                            <div class="flex items-center justify-between mt-6">--}}
{{--                                <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">--}}
{{--                                    <div class="font-bold text-gray-900">John Doe</div>--}}
{{--                                    <div>&bull;</div>--}}
{{--                                    <div>10 hours ago</div>--}}
{{--                                </div>--}}
{{--                                <div class="flex items-center space-x-2">--}}
{{--                                    <button class="relative bg-gray-100 hover:bg-gray-200 border rounded-full h-7 transition duration-150 ease-in py-2 px-3">--}}
{{--                                        <svg fill="currentColor" width="24" height="6"><path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z" style="color: rgba(163, 163, 163, .5)"></svg>--}}
{{--                                        <ul class="hidden absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">--}}
{{--                                            <li><a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">Mark as Spam</a></li>--}}
{{--                                            <li><a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">Delete Post</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div> <!-- end comment-container -->--}}
{{--                <div class="is-admin comment-container relative bg-white rounded-xl flex mt-4">--}}
{{--                    <div class="flex flex-1 px-4 py-6">--}}
{{--                        <div class="flex-none">--}}
{{--                            <a href="#">--}}
{{--                                <img src="https://source.unsplash.com/200x200/?face&crop=face&v=3" alt="avatar" class="w-14 h-14 rounded-xl">--}}
{{--                            </a>--}}
{{--                            <div class="text-center uppercase text-blue text-xxs font-bold mt-1">Admin</div>--}}
{{--                        </div>--}}
{{--                        <div class="w-full mx-4">--}}
{{--                            <h4 class="text-xl font-semibold">--}}
{{--                                <a href="#" class="hover:underline">Status Changed to "Under Construction"</a>--}}
{{--                            </h4>--}}
{{--                            <div class="text-gray-600 mt-3 line-clamp-3">--}}
{{--                                Lorem ipsum dolor sit amet consectetur.--}}
{{--                            </div>--}}

{{--                            <div class="flex items-center justify-between mt-6">--}}
{{--                                <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">--}}
{{--                                    <div class="font-bold text-blue">Andrea</div>--}}
{{--                                    <div>&bull;</div>--}}
{{--                                    <div>10 hours ago</div>--}}
{{--                                </div>--}}
{{--                                <div class="flex items-center space-x-2">--}}
{{--                                    <button class="relative bg-gray-100 hover:bg-gray-200 border rounded-full h-7 transition duration-150 ease-in py-2 px-3">--}}
{{--                                        <svg fill="currentColor" width="24" height="6"><path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z" style="color: rgba(163, 163, 163, .5)"></svg>--}}
{{--                                        <ul class="hidden absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">--}}
{{--                                            <li><a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">Mark as Spam</a></li>--}}
{{--                                            <li><a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">Delete Post</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div> <!-- end comment-container -->--}}
{{--                <div class="comment-container relative bg-white rounded-xl flex mt-4">--}}
{{--                    <div class="flex flex-1 px-4 py-6">--}}
{{--                        <div class="flex-none">--}}
{{--                            <a href="#">--}}
{{--                                <img src="https://source.unsplash.com/200x200/?face&crop=face&v=4" alt="avatar" class="w-14 h-14 rounded-xl">--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                        <div class="w-full mx-4">--}}
{{--                            --}}{{-- <h4 class="text-xl font-semibold">--}}
{{--                                <a href="#" class="hover:underline">A random title can go here</a>--}}
{{--                            </h4> --}}
{{--                            <div class="text-gray-600 mt-3 line-clamp-3">--}}
{{--                                Lorem ipsum dolor sit amet consectetur.--}}
{{--                            </div>--}}

{{--                            <div class="flex items-center justify-between mt-6">--}}
{{--                                <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">--}}
{{--                                    <div class="font-bold text-gray-900">John Doe</div>--}}
{{--                                    <div>&bull;</div>--}}
{{--                                    <div>10 hours ago</div>--}}
{{--                                </div>--}}
{{--                                <div class="flex items-center space-x-2">--}}
{{--                                    <button class="relative bg-gray-100 hover:bg-gray-200 border rounded-full h-7 transition duration-150 ease-in py-2 px-3">--}}
{{--                                        <svg fill="currentColor" width="24" height="6"><path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z" style="color: rgba(163, 163, 163, .5)"></svg>--}}
{{--                                        <ul class="hidden absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">--}}
{{--                                            <li><a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">Mark as Spam</a></li>--}}
{{--                                            <li><a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">Delete Post</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div> <!-- end comments-container -->--}}


{{--        </div>--}}
{{--    </div>--}}
{{--</main>--}}
{{--</body>--}}
{{--</html>--}}
