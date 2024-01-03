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
<div id="filters" class="row">
    <div  class="col-sm-8">
        <div class="card border-0" >


            @foreach($category->soluations as $soluation)
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
                                <a href="{{route('soluation.show',$soluation)}}">           <h2>{{$soluation->name}}
                                        <span> <i class="fa-sharp fa-solid fa-star" style="color: black"></i> {{$rate}}</span>
                                    </h2></a>

                                <p class="max-lines"> {{$soluation->body}}</p>
                            </div>
                        </div>
                    </div>

                </div>


            @endforeach


        </div>
    </div>
    {{--            <div class="col-sm-4">--}}
    {{--                <h5>MORE INSIGHTS </h5>--}}
    {{--                <div class="box">--}}
    {{--                    <img src="{{asset('frontend/images/c-1.png')}}" alt="" srcset="">--}}
    {{--                    <p class="pt-4">--}}
    {{--                        As Wisely's Mike Vichich Sees It, It's All About "Recency, Frequency, And Spend" For Restaurants--}}

    {{--                    </p>--}}

    {{--                    <span class="pt-3">  February 28, 2023</span>--}}

    {{--                </div>--}}
    {{--            </div>--}}
</div>
</div>
