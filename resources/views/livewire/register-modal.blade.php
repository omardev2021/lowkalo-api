<div>

    {{--    <button type="button" wire:click="$set('showModal', true)">Click me</button>--}}
{{--    <button type="button" class="action-btn headbutton" style="all: unset;" wire:click="$set('showModal', true)">--}}
{{--        <i class="fa-solid fa-arrow-right"></i> {{ __('messages.header10') }}--}}
{{--    </button>--}}

   <button class="btn-buy mx-3" style="width: 150px" type="button" wire:click="$set('showModal', true)">{{ __('messages.header11') }}</button>

    @if($showModal)

            <div x-data="{ show: @entangle('showModal'), showInputForm: null, email: '', phoneNumber: '' }" x-show="show">
                <div class="overlay-alp" @click="show = false" wire:click="resetall"></div>

                <div class="popup2">
                    <div class="contentBox2">
                        <div style="margin: auto">
                            <div class="user text-center mt-4">
                                <img src="{{asset('images/login.png')}}" width="70">
                            </div>
                            @if($def)
                            <div>

                                    <h5 class="py-3 text-center">{{ __('messages.modal1') }}</h5>
                                    <form wire:submit.prevent="register" >
                                        <div class="mb-3">
                                            <input type="text" name="name" class="form-control" placeholder="{{ __('messages.modal2') }}" wire:model.defer="name">
                                            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                            <input type="email" name="email" class="form-control" placeholder="{{ __('messages.modal3') }}" wire:model.defer="email">

                                            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                            <input type="text" name="phoneNumber" class="form-control" placeholder="{{ __('messages.modal4') }}" wire:model.defer="phoneNumber">
                                            @error('phoneNumber') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                        <button type="submit" class="btn-buy" >
                                            {{ __('messages.modal1') }}
{{--                                            <div class="spinner-border text-light" role="status" wire:loading wire:target="register">--}}
{{--                                                <span class="visually-hidden"></span>--}}
{{--                                            </div>--}}
                                        </button>

                                    </form>

                            </div>
                            @endif
                            @if(!$req)
                                <div x-show="showInputForm === 'email'">
                                    <h5 class="py-3 text-center">تسجيل الدخول</h5>
                                    <form wire:submit.prevent="submitEmailForm" >
                                        <div class="mb-3">
                                            <input type="email" name="email" class="form-control" placeholder="ادخل البريد الالكتروني" wire:model.defer="email">
                                            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                        <button type="submit" class="btn-buy mb-4" style="margin-right: 15%">
                                            المتابعة
                                            {{--                                            <div class="spinner-border text-light" role="status" wire:loading wire:target="submitEmailForm">--}}
                                            {{--                                                <span class="visually-hidden"></span>--}}
                                            {{--                                            </div>--}}
                                        </button>

                                        <a href="#" class="back-link " x-on:click="showInputForm = null" style="margin-right: 40%">العودة للخلف</a>
                                    </form>
                                </div>
                                <div x-show="showInputForm === 'sms'">
                                    <h5 class="py-3 text-center">تسجيل الدخول</h5>
                                    <form wire:submit.prevent="submitSMSForm">
                                        <div class="mb-3">
                                            <input type="text" name="phoneNumber" class="form-control" placeholder="ادخل رقم الجوال" wire:model.defer="phoneNumber">
                                            @error('phoneNumber') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                        <button type="submit" class="btn-buy mb-4"  >
                                            المتابعة
                                            {{--                                            <div class="spinner-border text-light" role="status" wire:loading wire:target="submitSMSForm">--}}
                                            {{--                                                <span class="visually-hidden"></span>--}}
                                            {{--                                            </div>--}}
                                        </button>
                                    </form>
                                    <a href="#" class="back-link " x-on:click="showInputForm = null" style="margin-right: 30%">العودة للخلف</a>
                                </div>
                                <div x-show="showInputForm === 'regis'">
                                    <h5 class="py-3 text-center">التسجبل</h5>
                                    <form wire:submit.prevent="register" >
                                        <div class="mb-3">
                                            <input type="text" name="name" class="form-control" placeholder="ادخل الاسم الكامل" wire:model.defer="name">
                                            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                            <input type="email" name="email" class="form-control" placeholder="ادخل البريد الالكتروني" wire:model.defer="email">

                                            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                            <input type="text" name="phoneNumber" class="form-control" placeholder="ادخل رقم الجوال" wire:model.defer="phoneNumber">
                                            @error('phoneNumber') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                        <button type="submit" class="logbu" style="margin-right: 30%">
                                            التسجيل
                                            <div class="spinner-border text-light" role="status" wire:loading wire:target="register">
                                                <span class="visually-hidden"></span>
                                            </div>
                                        </button>
                                        <a href="#" class="back-link" x-on:click="showInputForm = null" style="margin-right: 20%">هل لديك حساب بالفعل؟</a>

                                    </form>
                                </div>
                            @else
                                <form wire:submit.prevent="submitOTPForm">
                                    <h5 class="py-3 text-center">{{ __('messages.otp1') }}</h5>
                                    @if($otpMessage !== '')
                                        <p class="text-center">{{$otpMessage}}</p>
                                    @endif
                                    <div class="mb-3">
                                        <input type="text" name="otp" class="form-control" placeholder="{{ __('messages.otp2') }}" wire:model.defer="otp">
                                        @error('otp') <span class="text-danger">{{ $message }}</span> @enderror

                                    </div>
                                    @if (Config::get('app.locale') == 'ar')

                                    <button type="submit" class="btn-buy" style="margin-right: 20%">
                                        {{ __('messages.otp3') }}
                                        {{--                                        <div class="spinner-border text-light" role="status" wire:loading wire:target="submitOTPForm">--}}
                                        {{--                                            <span class="visually-hidden"></span>--}}
                                        {{--                                        </div>--}}
                                    </button>
                                    @else
                                        <button type="submit" class="btn-buy" style="margin-left: 20%">
                                            {{ __('messages.otp3') }}
                                            {{--                                        <div class="spinner-border text-light" role="status" wire:loading wire:target="submitOTPForm">--}}
                                            {{--                                            <span class="visually-hidden"></span>--}}
                                            {{--                                        </div>--}}
                                        </button>
                                    @endif
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

    @endif
</div>
