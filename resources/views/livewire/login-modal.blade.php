<div>

    {{--    <button type="button" wire:click="$set('showModal', true)">Click me</button>--}}
    <button type="button" class="action-btn headbutton" style="all: unset;" wire:click="$set('showModal', true)">
        <i class="fa-solid fa-arrow-right"></i> {{ __('messages.header10') }}
    </button>


    @if($showModal)

            <div x-data="{ show: @entangle('showModal'), email: '' }" x-show="show">
                <div class="overlay-alp" @click="show = false" wire:click="resetall"></div>

                <div class="popup2">
                    <div class="contentBox2">
                        <div style="margin: auto">
                            <div class="user text-center mt-4">
                                <img src="{{asset('images/login.png')}}" width="70">
                            </div>

                           
                                <h5 class="py-3 text-center">{{ __('messages.modal5') }}</h5>
                                <form wire:submit.prevent="submitEmailForm" >
                                    <div class="mb-3">
                                        <input type="email" name="email" class="form-control" placeholder="{{ __('messages.modal3') }}" wire:model.defer="email">
                                        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                              
                                        <button type="submit" class="btn-buy mb-4" >
                                            Continue
                                            {{--                                            <div class="spinner-border text-light" role="status" wire:loading wire:target="submitEmailForm">--}}
                                            {{--                                                <span class="visually-hidden"></span>--}}
                                            {{--                                            </div>--}}
                                        </button>
                              

                                </form>

                        


                        </div>
                    </div>
                </div>
            </div>
            <style>
                .alp {
    background-color: white;width: 50%;margin: auto;
    position: absolute;
    top:0;
    right: 0;
    left: 0;
    bottom: 0;
    padding: 10px;
    border-radius: 10px;
    height: 500px;
    z-index: 30;
}

.popup2 {
    position:fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    z-index: 1000;

}
.contentBox2{
    position: relative;
    height: 400px;
    width: 400px;
    border-radius: 20px;
    background: #fff;
    display: flex;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);


}
            </style>

    @endif
</div>
