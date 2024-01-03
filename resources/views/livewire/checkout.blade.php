<div>
    <style>
        .radio-option {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .radio-option input[type="radio"] {
            display: none;
        }

        .radio-option label {
            display: flex;
            align-items: center;
            cursor: pointer;
            margin-left: 10px;
        }

        .radio-option label .radio-icon {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            border: 2px solid #ccc;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .radio-option label .radio-icon img {
            max-width: 100%;
            max-height: 100%;
        }

        .radio-option input[type="radio"]:checked + label .radio-icon {
            border-color: #000;
        }

        @media (min-width: 480px) {
            .tam-logo {
                width: 150px;
            }
        }
    </style>
    @if (Config::get('app.locale') == 'ar')
        <div class="container" style="padding-top: 5%;padding-bottom: 5%">
            <div class="row" >
                {{--                <div class="col-sm-8 p-5 " id="cartPageRow">--}}
                <div class="col-sm-9 p-5 " style="background-color: white">
                    {{--                            <livewire:wizard-component />--}}
                    <div class="row">
{{--                        <div class="col-md-2" >--}}
{{--                            <img src="https://www.tamratdates.com/images/logo.webp" class="img-fluid tam-logo" >--}}
{{--                        </div>--}}
                        <div class="col-md-10 text-end" style="border-right: solid #d8d8d8 2px">
                            <h2>مرحبا بك omar</h2>
                            <nav class="breadcrumbs w-full " >
                                <ol class="flex items-center flex-wrap text-sm">
                                    <li class="whitespace-nowrap"><a href="" class="fix-align" style="color: #7C9D64">الرئيسية</a></li>
                                    <li><img src="{{asset('images/back-s.png')}}" class="mx-2"></li>
                                    <li><span class="fix-align">صفحة السلة</span></li>
                                    <li><img src="{{asset('images/back-s.png')}}" class="mx-2"></li>
                                    <li><span class="fix-align">انهاء الطلب</span></li>
                                </ol>
                            </nav>

                        </div>
                    </div>
                    <hr class="mb-5">
                    <div class="d-flex items-center" style="gap: 5px">
                        <img src="{{asset('images/one.png')}}" width="40" height="40">

                        <img src="{{asset('images/shipped.png')}}" width="40" height="40">
                        <span style="">الشحن والتوصيل</span>
                        <span style="height: 5px;background-color: #d8d8d8;width: 650px"></span>

                    </div>
                    <h4 class="my-4">عنوان الشحن</h4>
                    <form >
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="inputEmail4" class="form-label">الاسم الاول</label>
                                <input type="text" name="fname" class="form-control @error('fname') is-invalid @enderror" >
                                @error('fname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>الرجاء ادخال الاسم الاول</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="inputEmail4" class="form-label">الاسم الاخير</label>
                                <input type="text" name="lname" class="form-control @error('lname') is-invalid @enderror" >
                                @error('lname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>الرجاء ادخال الاسم الاخير</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="inputEmail4" class="form-label">البريد الالكتروتي</label>
                                <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" >
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>الرجاء التحقق من البريد الالكتروني</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="inputEmail4" class="form-label">رقم التواصل</label>
                                <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" >
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>الرجاء التحقق من رقم الجوال</strong>
                                </span>
                                @enderror
                            </div>






                            <div class="col-12 text-start">
                                <button type="submit" class="btn btn-shop" >حفظ</button>
                            </div>
                        </div>
                    </form>

                    {{--                @push('scripts')--}}
                    {{--                    <script>--}}
                    {{--                        Livewire.on('shippingAmountUpdated', () => {--}}
                    {{--                            // Disable all form inputs--}}
                    {{--                            document.querySelectorAll('#shipping-form input').forEach(input => {--}}
                    {{--                                input.disabled = true;--}}
                    {{--                            });--}}
                    {{--                            // Enable edit button--}}
                    {{--                            document.querySelector('#edit-form-button').disabled = false;--}}
                    {{--                        });--}}
                    {{--                    </script>--}}
                    {{--                @endpush--}}
                    <div class="d-flex items-center my-5" style="gap: 10px">
                        <img src="{{asset('images/two.png')}}" width="40" height="40">

                        <img src="{{asset('images/credit-card.png')}}" width="40" height="40">
                        <span style="">عملية الدفع</span>
                        <span style="height: 5px;background-color: #d8d8d8;width: 650px"></span>
                    </div>
                    <h4 class="mt-4">وسائل الدفع المدعومة</h4>
                    <img src="{{asset('images/accepted-payment-methods-right.png')}}" alt="وسائل الدفع المدعومة" class="pay-img">
                    <br>
                    <div class="container">
                        {{--                <livewire:payment-form />--}}
                        <h4 class="mt-4">اختر طريقة الدفع</h4>
                        <form>

                            {{--                        <div>--}}
                            {{--                            <div>--}}
                            {{--                                <input type="radio" wire:model="selectedOption" value="option1"> Option 1--}}
                            {{--                            </div>--}}
                            {{--                            <div>--}}
                            {{--                                <input type="radio" wire:model="selectedOption" value="option2"> Option 2--}}
                            {{--                            </div>--}}



                            {{--                            @if ($selectedOption === 'option1')--}}
                            {{--                                <livewire:form-option1 />--}}
                            {{--                            @elseif ($selectedOption === 'option2')--}}
                            {{--                                <livewire:form-option2 />--}}


                            {{--                            @endif--}}
                            {{--                        </div>--}}
                            <div>
                                <input type="radio" wire:model="selectedOption" value="option1" id="visa" style="display: none">
                                <input type="radio" wire:model="selectedOption" value="option2" id="mastercard" style="display: none">

                                <div class="category">
                                    <label for="visa" class="visaMethod mb-3">
                                        <div class="imgName">
                                            <div class="imgContainer visa">
                                                <img src="{{asset('images/paymento.png')}}" alt="">
                                            </div>
                                            <span class="name mt-4" >دفع الكتروني</span>
                                        </div>
                                        <span class="check"><i class="fa-solid fa-circle-check" style="color: #6064b6;"></i></span>
                                        <!-- Visa method content -->
                                    </label>

                                    <label for="mastercard" class="mastercardMethod">
                                        <div class="imgName">
                                            <div class="imgContainer mastercard">
                                                <img src="{{asset('images/transfer.png')}}"  alt="">
                                            </div>
                                            <span class="name mt-4">حوالات بنكية</span>
                                        </div>
                                        <span class="check"><i class="fa-solid fa-circle-check" style="color: #6064b6;"></i></span>


                                    </label>
                                    @if($selectedOption === 'option1')
                                        @error('form') <span class="text-danger">{{ $message }}</span> @enderror

                                        <form wire:submit.prevent>
                                            <button wire:click="payment" type="button" class="btn btn-danger ce w-100 mt-2">انتقل الى الدفع</button>
                                        </form>
                                    @endif
                                    @if($selectedOption === 'option2')
                                        <div id="bank-payment" class="payment" >

                                            <div class="row" style="padding: 20px">

                                                <div class="col-sm-3">

                                                    <h5 class="mt-4">اسم البنك</h5>
                                                    <p>SABB</p>
                                                </div>

                                                <div class="col-sm-3">

                                                    <h5 class="mt-4">رمز البنك</h5>
                                                    <p>SABBSARI</p>
                                                </div>


                                                <div class="col-sm-3">

                                                    <h5 class="mt-4">رقم الحساب
                                                    </h5>
                                                    <p>035-397892-001</p>
                                                </div>
                                                <div class="col-sm-3">

                                                    <h5 class="mt-4">رقم الأيبان
                                                    </h5>
                                                    <p>SA4845000000035397892002</p>
                                                </div>

                                            </div>

                                            <form wire:submit.prevent>

                                                <div class="row">
                                                    <div class="col-12">
                                                        <h5 class="mx-3">اختيار صورة اشعار الدفع</h5>
                                                        <input type="file" name="photo" wire:model="photo" class="form-control mx-2 @error('photo') is-invalid @enderror" >
                                                        @error('photo')
                                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <button wire:click="bank" type="button" class="btn btn-danger ce w-100 mt-2">تاكيد والمتابعة</button>
                                            </form>
                                        </div>
                                    @endif
                                </div>
                            </div>

                        </form>

                    </div>

                </div>
                <div class="col-sm-3 p-3 " >
                    <div class="cart-summary-wrapper">
                        <h5 class="py-3">ملخص الطلب</h5>
                        <div class="d-flex justify-content-between align-content-center boder-total py-4">
                            <h6 class="py-1  h6">الوصف </h6>
                            <h6>كورس ادارة مخزون المطاعم والكافيهات</h6>
                        </div>

                        <div class="d-flex justify-content-between align-content-center boder-total py-4">
                            <h6 class="py-1  h6">المجموع </h6>
                            <h6><span id="totalCheckout"></span>250 ر.س</h6>
                        </div>

                        {{--                <h6 class="py-4">* الأسعار شاملة للضريبة</h6>--}}
                        {{--                    <button class="btn btn-danger ce w-100">اكمال الطلب</button>--}}
                    </div>
                </div>
            </div>
        </div>
    @elseif (Config::get('app.locale') == 'en')




        <div class="container " style="padding-top: 5%;padding-bottom: 5%">
            <div class="row" >
                {{--                <div class="col-sm-8 p-5 " id="cartPageRow">--}}
                <div class="col-sm-9 p-5 " style="background-color: white">
                    {{--                            <livewire:wizard-component />--}}
                    <div class="row">
                        <div class="col-md-2" >
                            <img src="https://www.tamratdates.com/images/logo.webp" class="tam-logo" style="padding-right: 10px">
                        </div>
                        <div class="col-md-10 text-start" style="border-left: solid #d8d8d8 2px">
                            <h2>Welcome {{auth()->user()->name}}</h2>
                            <nav class="breadcrumbs w-full " >
                                <ol class="flex items-center flex-wrap text-sm">
                                    <li class="whitespace-nowrap"><a href="{{route('home.page')}}" class="fix-align" style="color: #7C9D64">Home</a></li>
                                    <li><img src="{{asset('images/next.png')}}" class="mx-2"></li>
                                    <li><span class="fix-align">Cart Page</span></li>
                                    <li><img src="{{asset('images/next.png')}}" class="mx-2"></li>
                                    <li><span class="fix-align">Checkout</span></li>
                                </ol>
                            </nav>

                        </div>
                    </div>
                    <hr class="mb-5">
                    <div class="d-flex items-center" style="gap: 5px">
                        <img src="{{asset('images/one.png')}}" width="40" height="40">

                        <img src="{{asset('images/shipped.png')}}" width="40" height="40">
                        <span style="">Shipping and delivery</span>
                        <span style="height: 5px;background-color: #d8d8d8;width: 650px"></span>

                    </div>
                    <h4 class="my-4">Shipping Address</h4>
                    <form wire:submit.prevent="submitForm">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="inputEmail4" class="form-label">First name</label>
                                <input type="text" name="fname" class="form-control @error('fname') is-invalid @enderror" wire:model="fname">
                                @error('fname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>Please check your first name</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="inputEmail4" class="form-label">Last name</label>
                                <input type="text" name="lname" class="form-control @error('lname') is-invalid @enderror" wire:model="lname">
                                @error('lname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>Please check your last name</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="inputEmail4" class="form-label">Email</label>
                                <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" wire:model="email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>Please check your email</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="inputEmail4" class="form-label">Phone number</label>
                                <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" wire:model="phone">
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>Please check your phone number</strong>
                                </span>
                                @enderror
                            </div>



                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Country</label>
                                <select name="selectedCountry" wire:model="selectedCountry" class="form-control select2" required>
                                    <option value=""  selected >Select a country</option>
                                    @foreach ($countries as $country)
                                        <option value="{{ $country->id }}">{{ $country->country_en }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @if($in)
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">City</label>
                                    <select name="selectedCity" wire:model="selectedCity" class="form-control select2" required>
                                        <option value="">Select a city</option>
                                        @foreach ($cities as $city)
                                            <option value="{{ $city->id }}">{{ $city->city_en }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            @else
                                <div class="col-md-6 mb-3">
                                    <label for="inputEmail4" class="form-label">City</label>
                                    <input type="text" name="city_inter" class="form-control @error('city_inter') is-invalid @enderror" wire:model="city_inter">
                                    @error('city_inter')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>Please check your last name</strong>
                                </span>
                                    @enderror
                                </div>
                            @endif


                            <div class="col-md-6 ">
                                <label for="inputEmail4" class="form-label">Address</label>
                                <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" wire:model="address">
                                @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>Please check your address</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col-12 text-start">
                                <button type="submit" class="btn btn-shop" >save</button>
                            </div>
                        </div>
                    </form>

                    {{--                @push('scripts')--}}
                    {{--                    <script>--}}
                    {{--                        Livewire.on('shippingAmountUpdated', () => {--}}
                    {{--                            // Disable all form inputs--}}
                    {{--                            document.querySelectorAll('#shipping-form input').forEach(input => {--}}
                    {{--                                input.disabled = true;--}}
                    {{--                            });--}}
                    {{--                            // Enable edit button--}}
                    {{--                            document.querySelector('#edit-form-button').disabled = false;--}}
                    {{--                        });--}}
                    {{--                    </script>--}}
                    {{--                @endpush--}}
                    <div class="d-flex items-center my-5" style="gap: 10px">
                        <img src="{{asset('images/two.png')}}" width="40" height="40">

                        <img src="{{asset('images/credit-card.png')}}" width="40" height="40">
                        <span style="">Payment</span>
                        <span style="height: 5px;background-color: #d8d8d8;width: 650px"></span>
                    </div>
                    <h4 class="mt-4">Supported payment methods</h4>
                    <img src="{{asset('images/accepted-payment-methods-right.png')}}" alt="وسائل الدفع المدعومة" class="pay-img">
                    <br>
                    <div class="container">
                        {{--                <livewire:payment-form />--}}
                        <h4 class="mt-4">Choose the payment method</h4>
                        <form>

                            {{--                        <div>--}}
                            {{--                            <div>--}}
                            {{--                                <input type="radio" wire:model="selectedOption" value="option1"> Option 1--}}
                            {{--                            </div>--}}
                            {{--                            <div>--}}
                            {{--                                <input type="radio" wire:model="selectedOption" value="option2"> Option 2--}}
                            {{--                            </div>--}}



                            {{--                            @if ($selectedOption === 'option1')--}}
                            {{--                                <livewire:form-option1 />--}}
                            {{--                            @elseif ($selectedOption === 'option2')--}}
                            {{--                                <livewire:form-option2 />--}}


                            {{--                            @endif--}}
                            {{--                        </div>--}}
                            <div>
                                <input type="radio" wire:model="selectedOption" value="option1" id="visa" style="display: none">
                                <input type="radio" wire:model="selectedOption" value="option2" id="mastercard" style="display: none">

                                <div class="category">
                                    <label for="visa" class="visaMethod mb-3">
                                        <div class="imgName">
                                            <div class="imgContainer visa">
                                                <img src="{{asset('images/paymento.png')}}" alt="">
                                            </div>
                                            <span class="name mt-4" >electronic payment</span>
                                        </div>
                                        <span class="check"><i class="fa-solid fa-circle-check" style="color: #6064b6;"></i></span>
                                        <!-- Visa method content -->
                                    </label>

                                    <label for="mastercard" class="mastercardMethod">
                                        <div class="imgName">
                                            <div class="imgContainer mastercard">
                                                <img src="{{asset('images/transfer.png')}}"  alt="">
                                            </div>
                                            <span class="name mt-4">Bank transfers</span>
                                        </div>
                                        <span class="check"><i class="fa-solid fa-circle-check" style="color: #6064b6;"></i></span>


                                    </label>
                                    @if($selectedOption === 'option1')
                                        @error('form') <span class="text-danger">{{ $message }}</span> @enderror

                                        <form wire:submit.prevent>
                                            <button wire:click="payment" type="button" class="btn btn-danger ce w-100 mt-2">Proceed to payment</button>
                                        </form>
                                    @endif
                                    @if($selectedOption === 'option2')
                                        <div id="bank-payment" class="payment" >
                                            @error('bank') <span class="text-danger">{{ $message }}</span> @enderror
                                            <div class="row" style="padding: 20px">

                                                <div class="col-sm-3">

                                                    <h5 class="mt-4">Bank name</h5>
                                                    <p>SABB</p>
                                                </div>

                                                <div class="col-sm-3">

                                                    <h5 class="mt-4">Bank code</h5>
                                                    <p>SABBSARI</p>
                                                </div>


                                                <div class="col-sm-3">

                                                    <h5 class="mt-4">Account number
                                                    </h5>
                                                    <p>035-397892-001</p>
                                                </div>
                                                <div class="col-sm-3">

                                                    <h5 class="mt-4">IBAN number
                                                    </h5>
                                                    <p>SA4845000000035397892002</p>
                                                </div>

                                            </div>

                                            <form wire:submit.prevent>

                                                <div class="row">
                                                    <div class="col-12">
                                                        <h5 class="mx-3">Choose the payment receipt image</h5>
                                                        <input type="file" name="photo" wire:model="photo" class="form-control mx-2 @error('photo') is-invalid @enderror" >
                                                        @error('photo')
                                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <button wire:click="bank" type="button" class="btn btn-danger ce w-100 mt-2">Confirm and continue</button>
                                            </form>
                                        </div>
                                    @endif
                                </div>
                            </div>

                        </form>

                    </div>

                </div>
                <div class="col-sm-3 p-3 " >
                    <div class="cart-summary-wrapper">
                        <h5 class="py-3">Order summary</h5>


                        <div class="d-flex justify-content-between align-content-center boder-total py-4">
                            <h6 class="py-1  h6">Total </h6>
                            <h6><span id="totalCheckout"></span>{{$price}} SAR</h6>
                        </div>
                        <div class="d-flex justify-content-between align-content-center boder-total py-4">
                            <h6 class="py-1  h6">Shipping fee </h6>
                            <h6><span id="totalCheckout">{{$shippingAmount}}</span></h6>
                        </div>
                        {{--                <h6 class="py-4">* الأسعار شاملة للضريبة</h6>--}}
                        {{--                        <button class="btn btn-danger ce w-100">اكمال الطلب</button>--}}
                    </div>
                </div>
            </div>
        </div>

    @endif



</div>
