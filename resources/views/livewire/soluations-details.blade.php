<div>
<div class="d-flex mb-3" style="gap: 10px">
    <div class="filter-buttons">
        <button wire:click="clearFilter()" wire:model="selectedOriginName" class="{{ $selectedOriginName === null ? 'selected' : '' }}">
            {{ __('messages.services2') }}
            <div class="loading-indicator"  wire:loading wire:target="clearFilter()"></div>
        </button>
        <button  wire:click="filterByOriginName('ksa')" wire:model="selectedOriginName" class="{{ $selectedOriginName === 'ksa' ? 'selected' : '' }}">
            {{ __('messages.services3') }}
            <div class="loading-indicator" wire:loading wire:target="filterByOriginName('ksa')"></div>
        </button>
        <button wire:click="filterByOriginName('uae')" wire:model="selectedOriginName" class="{{ $selectedOriginName === 'uae' ? 'selected' : '' }}">
            {{ __('messages.services4') }}
            <div class="loading-indicator" wire:loading wire:target="filterByOriginName('uae')"></div>
        </button>
        <button wire:click="filterByOriginName('kw')" wire:model="selectedOriginName" class="{{ $selectedOriginName === 'kw' ? 'selected' : '' }}">
            {{ __('messages.services5') }}
            <div class="loading-indicator" wire:loading wire:target="filterByOriginName('kw')"></div>
        </button>
        <button wire:click="filterByOriginName('egypt')" wire:model="selectedOriginName" class="{{ $selectedOriginName === 'egypt' ? 'selected' : '' }}">
            {{ __('messages.services6') }}
            <div class="loading-indicator" wire:loading wire:target="filterByOriginName('egypt')"></div>
        </button>


    </div>
</div>

<div id="filters" class="row">
    <div class="col-sm-8">
        <div class="card border-0" >

           

                <div class="card-body" wire:key="solution-{{ $soluation->id }}">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="images"><img src="{{asset($soluation->image_path)}}" alt="" srcset=""></div>
                        </div>
                        <div class="col-sm-8">
                            
          
                                <div class="content">
                                    <a href="{{route('soluation.show',['type' => $soluation->category->type, 'slug' => $soluation->category->slug,'soluation'=>$soluation,'name'=>$soluation->name])}}">
                                    <h2>{{$soluation->name}}
                                        <span> <i class="fa-sharp fa-solid fa-star" style="color: black"></i> {{$rate}}</span>
                                    </h2>
                                    </a>
                                    <p class="max-lines"> {{$soluation->body}}</p>

                        
                           
                            </div>
                        </div>
                    </div>

                </div>






        </div>
    </div>

</div>
</div>

</div>
