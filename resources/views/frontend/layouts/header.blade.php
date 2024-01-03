<nav class="navbar navbar-expand-lg  bg-body-tertiary py-4">
    <div class="container">
        <a class="navbar-brand" href="#" style="font-weight: bold;">
            <h3 style="font-weight:bold">{{ __('messages.header1') }}</h3>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">{{ __('messages.header2') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('course') }}">{{ __('messages.header3') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('services')}}">{{ __('messages.header4') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">{{ __('messages.header5') }}</a>
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
                        <a href="{{ url('/videos/1') }}"><button class="btn-buy mx-3" style="width: 150px" type="button">{{ __('messages.header6') }}</button></a>
                    @endcan
                    <li class="nav-item dropdown" style="list-style: none">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            @if( auth()->user()->administration_level == 4)
                            <li class="nav-item text-center mb-2">
                                <a class="nav-link" href="{{ route('admin.home') }}">{{ __('messages.header7') }}
                                </a>
                            </li>
                            @endif
                            <li class="nav-item text-center mb-2">
                                <a class="nav-link" href="{{ route('account') }}">{{ __('messages.header8') }}
                                </a>
                            </li>
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf
                                <li class="nav-item text-center">
                                    <a class="nav-link" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                    this.closest('form').submit();">{{ __('messages.header9') }}
                                    </a>
                                </li>

                            </form>


                        </ul>
                    </li>

                @endauth
                @guest
                        <livewire:login-modal />
                        <livewire:register-modal />
                @endguest

                       @if (Config::get('app.locale') == 'ar')

                                <li style="list-style: none">
                                    <a rel="alternate" hreflang="en" href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}" class="dropdown-item">
                                        English   <span><img src="{{ asset('frontend/images/uk.png') }}" width="28" height="24"
                                                                                 alt=""></span>
                                    </a>
                                </li>

                        @elseif (Config::get('app.locale') == 'en')

                                <li style="list-style: none">
                                    <a rel="alternate" hreflang="ar" href="{{ LaravelLocalization::getLocalizedURL('ar', null, [], true) }}" class="dropdown-item">
                                        العربية   <span><img src="{{ asset('frontend/images/ar.jpg') }}" width="28" height="24"
                                                                                 alt=""></span>
                                    </a>
                                </li>

                        @endif




            </div>
        </div>
    </div>

</nav>
