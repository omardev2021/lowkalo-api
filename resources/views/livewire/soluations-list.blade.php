<div class="container text-center services-page">

        <div class="d-flex mb-3" style="gap: 10px">
    <div class="filter-buttons">
        <button wire:click="clearFilter()" class="{{ $selectedOrigin === null ? 'selected' : '' }}">
            {{ __('messages.services2') }}
            <div class="loading-indicator" wire:loading wire:target="clearFilter()"></div>
        </button>
        <button wire:click="filterByOrigin('ksa')" class="{{ $selectedOrigin === 'ksa' ? 'selected' : '' }}">
            {{ __('messages.services3') }}
            <div class="loading-indicator" wire:loading wire:target="filterByOrigin('ksa')"></div>
        </button>
        <button wire:click="filterByOrigin('uae')" class="{{ $selectedOrigin === 'uae' ? 'selected' : '' }}">
            {{ __('messages.services4') }}
            <div class="loading-indicator" wire:loading wire:target="filterByOrigin('uae')"></div>
        </button>
        <button wire:click="filterByOrigin('kw')" class="{{ $selectedOrigin === 'kw' ? 'selected' : '' }}">
            {{ __('messages.services5') }}
            <div class="loading-indicator" wire:loading wire:target="filterByOrigin('kw')"></div>
        </button>
        <button wire:click="filterByOrigin('egypt')" class="{{ $selectedOrigin === 'egypt' ? 'selected' : '' }}">
            {{ __('messages.services6') }}
            <div class="loading-indicator" wire:loading wire:target="filterByOrigin('egypt')"></div>
        </button>


    </div>
        </div>
    <div class="row">
        <div class="col-sm-4">
            <livewire:search-dropdown />
            <div class="form">


                <br />

                @if (Config::get('app.locale') == 'en')
                    <div class="categories" style="text-align: left !important;">
                @elseif(Config::get('app.locale') == 'ar')
                    <div class="categories" style="text-align: right !important;">
                @endif

                    @if(!empty($term))
                        <h2>{{$term}}</h2>
                    @else
                    @endif
                    <h2 class="title-big">{{ __('messages.services8') }}</h2>
                    <div class="dd">
                        <ul class="MuiList-root MuiList-padding">
                            <li class="MuiListItem-root jss73 jss74 MuiListItem-gutters">
                                <span style="font-weight: bold">{{ __('messages.services9') }}</span>
                            </li>
                            @foreach($services as $service)
                                <li class="MuiListItem-root jss73 MuiListItem-gutters">
                                    <div class="MuiListItemText-root">
                                        <a href="{{route('service.details',['type' => $service->type, 'slug' => $service->slug,'category'=>$service])}}">
                                            @if (Config::get('app.locale') == 'en')
                                                <span
                                                    class="MuiTypography-root MuiListItemText-primary MuiTypography-body1 MuiTypography-displayBlock"
                                                >{{$service->name}}</span
                                                @elseif(Config::get('app.locale') == 'ar')
                                                <span
                                                    class="MuiTypography-root MuiListItemText-primary MuiTypography-body1 MuiTypography-displayBlock"
                                                >{{$service->name_ar}}</span
                                                    @endif

                                            ></a>
                                    </div>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="filters" class="col-sm-8">

            <div class="row" >
                @foreach($categories as $service)
                    <div class="col-lg-6 mb-5" >
                        <div class="card" >
                            <div class="card-header" style="background-color: #4115BA;">
                                @if (Config::get('app.locale') == 'en')
                                    <h1 class="card-info">
                                        {{$service->name}}</h1>
                                @elseif(Config::get('app.locale') == 'ar')
                                    <h1 class="card-info">
                                        {{$service->name_ar}}</h1>
                                @endif

                                <h6 class="card-info"> Keep track of revenue and expenses efficiently in one place.</h6>
                            </div>
                            @foreach($service->soluations->take(3) as $soluation)

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="images"><img src="{{asset($soluation->image_path)}}" alt="" srcset=""></div>
                                        </div>
                                        <div class="col-sm-8">
                                                <?php
                                                $avgStar=     $soluation->reviews()->avg('rate');
                                                $rate =    number_format((float)$avgStar, 1, '.', '');
                                                ?>

                                                @if (Config::get('app.locale') == 'en')
                                                <div class="content">
                                                    <h2>{{$soluation->name}}
                                                        <span> <i class="fa-sharp fa-solid fa-star" style="color: black"></i> {{$rate}}</span>
                                                    </h2>
                                                    <p class="max-lines"> {{$soluation->body}}</p>

                                                @elseif(Config::get('app.locale') == 'ar')
                                                        <div class="content" style="text-align: right">
                                                    <h2>{{$soluation->name_ar}}
                                                        <span> <i class="fa-sharp fa-solid fa-star" style="color: black"></i> {{$rate}}</span>
                                                    </h2>
                                                    <p class="max-lines"> {{$soluation->body_ar}}</p>

                                                @endif


                                            </div>
                                        </div>
                                    </div>

                                </div>



                            @endforeach
                            <div class="card-footer" style="background-color: transparent">
                                <a href="{{route('service.details',['type' => $service->type, 'slug' => $service->slug,'category'=>$service])}}" class="btn browser">{{ __('messages.services10') }}</a>

                            </div>
                        </div>
                    </div>
                @endforeach


            </div>





        </div>
    </div>
</div>
