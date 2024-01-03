
<div class="container text-center services-page">
    <div class="d-flex mb-3" style="gap: 10px">
        <div class="filter-buttons">
            <button wire:click="clearFilter()" class="{{ $selectedOrigin === null ? 'selected' : '' }}">
                ALL
                <div class="loading-indicator" wire:loading wire:target="filterByOriginTest()"></div>
            </button>
            <button wire:click="filterByOrigin('ksa')" class="{{ $selectedOrigin === 'ksa' ? 'selected' : '' }}">
                KSA
                <div class="loading-indicator" wire:loading wire:target="filterByOriginTest('ksa')"></div>
            </button>
            <button wire:click="filterByOrigin('uae')" class="{{ $selectedOrigin === 'uae' ? 'selected' : '' }}">
                UAE
                <div class="loading-indicator" wire:loading wire:target="filterByOriginTest('uae')"></div>
            </button>
            <button wire:click="filterByOrigin('kw')" class="{{ $selectedOrigin === 'kw' ? 'selected' : '' }}">
                KW
                <div class="loading-indicator" wire:loading wire:target="filterByOriginTest('kw')"></div>
            </button>
            <button wire:click="filterByOrigin('egypt')" class="{{ $selectedOrigin === 'egypt' ? 'selected' : '' }}">
                EG
                <div class="loading-indicator" wire:loading wire:target="filterByOrigin('egypt')"></div>
            </button>


        </div>
    </div>

    <div class="row">

        <div class="col-sm-4">

            <div class="form">
                <form action="{{route('cat.search')}}" method="get">
                    <input
                        type="search"
                        name="term"
                        id=""
                        placeholder="Search for services..."
                        class="form-control w-70"
                    />
                </form>

                <br />
                <div class="categories">
                    @if(!empty($term))
                        <h2>{{$term}}</h2>
                    @else
                    @endif
                    <h2 class="title-big">CATEGORIES</h2>
                    <div class="dd">
                        <ul class="MuiList-root MuiList-padding">
                            <li class="MuiListItem-root jss73 jss74 MuiListItem-gutters">
                                <span>All Categories</span>
                            </li>
                            @foreach($services as $service)
                                <li class="MuiListItem-root jss73 MuiListItem-gutters">
                                    <div class="MuiListItemText-root">
                                        <a href="{{route('service.details',$service)}}">   <span
                                                class="MuiTypography-root MuiListItemText-primary MuiTypography-body1 MuiTypography-displayBlock"
                                            >{{$service->name}}</span
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

            <div class="row">
                @foreach($services as $service)
                    <div class="col-lg-6 mb-5">
                        <div class="card">
                            <div class="card-header" style="background-color: #4115BA;">                                <h1 class="card-info">
                                    {{$service->name}}</h1>
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
                                            <div class="content">
                                                <h2>{{$soluation->name}}
                                                    <span> <i class="fa-sharp fa-solid fa-star" style="color: black"></i> {{$rate}}</span>
                                                </h2>

                                                <p class="max-lines"> {{$soluation->body}}</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>



                            @endforeach

                            <div class="card-footer" style="background-color: transparent">
                                <a href="{{route('service.details',$service)}}" class="btn browser">Browse All Soluations</a>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>


        </div>
    </div>
</div>

