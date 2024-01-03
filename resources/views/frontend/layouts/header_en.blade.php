<nav class="navbar navbar-expand-lg bg-body-tertiary py-4">
    <div class="container">
        <a class="navbar-brand" href="#" style="font-weight: bold;">
            <h3 style="font-weight:bold">Low Kalo</h3>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('course') }}">Courses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('services')}}">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Lowkalo</a>
                </li>

                {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        المدونة
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">#</a></li>
                        <li><a class="dropdown-item" href="#"> #</a></li>
                    </ul>
                </li> --}}

            </ul>
{{--            <div class="row mx-3">--}}

{{--                <div class="col-md-4">--}}
{{--                    <select class="form-control changeLang" style="width: 80px">--}}
{{--                        @if (session()->get('locale') == 'en')--}}
{{--                            <option value="en" selected>English--}}
{{--                            </option>--}}
{{--                            <option value="ar" >العربية--}}
{{--                            </option>--}}

{{--                        @elseif(session()->get('locale') == 'ar')--}}
{{--                            <option value="en" >English--}}
{{--                            </option>--}}
{{--                            <option value="ar" selected>العربية--}}
{{--                            </option>--}}
{{--                        @endif--}}
{{--                        --}}{{-- <option value="sp" {{ session()->get('locale') == 'sp' ? 'selected' : '' }}>Spanish</option> --}}
{{--                    </select>--}}

{{--                </div>--}}
{{--            </div>--}}
            <div class="d-flex align-items-center" role="search">
                @auth
                    @can('watch-videos')
                        <a href="{{ url('/videos/1') }}"><button class="btn-buy mx-3" style="width: 150px" type="button">Watch the Course</button></a>
                    @endcan
                    <li class="nav-item dropdown" style="list-style: none">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                           aria-expanded="false">
                            {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            @if( auth()->user()->administration_level == 4)
                                <li class="nav-item text-center mb-2">
                                    <a class="nav-link" href="{{ route('admin.home') }}">Admin
                                    </a>
                                </li>
                            @endif
                            <li class="nav-item text-center mb-2">
                                <a class="nav-link" href="{{ route('account') }}">My Account
                                </a>
                            </li>
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf
                                <li class="nav-item text-center">
                                    <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                    this.closest('form').submit();">Logout
                                    </a>
                                </li>

                            </form>
                            {{-- <li><a class="dropdown-item" href="#"> #</a></li> --}}
                        </ul>
                    </li>

                @endauth
                @guest
                    <a href="{{ route('login') }}" class="algin-middel"> <i class="fa-solid fa-arrow-right"></i> Login
                    </a>
                    <a href="{{ route('register') }}"><button class="btn-buy mx-3" style="width: 150px" type="button">Register</button></a>
                @endguest
                    @if (session()->get('locale') == 'en')
                        <li style="list-style: none"><a href="{{ route('language.arabic') }}" class="dropdown-item"> العربية
                                <span><img src="{{ asset('frontend/images/ar.jpg') }}" width="28" height="18"
                                           alt=""></span></a></li>

                    @elseif(session()->get('locale') == 'ar')
                        <li style="list-style: none"><a href="{{ route('language.english') }}" class="dropdown-item">English
                                <span><img src="{{ asset('frontend/images/uk.png') }}" width="28" height="24"
                                           alt=""></span></a></li>
                    @endif
            </div>
        </div>
    </div>
</nav>
