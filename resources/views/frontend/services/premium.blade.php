@extends('frontend.layouts.master')
@section('content')
    @if (Config::get('app.locale') == 'en')
    <br>
    <div class="container-fluid box text-center ">
        <h1 class="title-big"> Checkout Page </h1>
        <hr style="opacity: 1;color:#00E6A7; width: 120px; margin: auto; height: 8px;border-width:4px">


    </div>
    <br>

    <div class="container" >
        <div class="row ">
            <div class="col-sm-8">

                    <br>
                    <h4 class="co">Accepted Payment Methods</h4>

                    <div>
                        <div class="paymetMethod ">
                            {{--                                <h3 class="co">طرق الدفع المدعومة</h3>--}}
                            <img src="{{ asset('frontend/images/en.png') }}"
                                 style="max-width: 350px;">
                        </div>
                        <form action="{{ route('purchase.guest') }}" method="post">
                            @csrf

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" id="exampleFormControlInput1" required placeholder="name">
                            </div>
                            @error('name')
                            <div class="error" style="color: red">{{ $message }}</div>
                            @enderror
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">E-mail</label>
                                <input type="email" class="form-control" name="email"  id="exampleFormControlInput1" required placeholder="Login data will be sent to it">
                            </div>
                            @error('email')
                            <div class="error" style="color: red">{{ $message }}</div>
                            @enderror
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Phone</label>
                                <input type="text" class="form-control" name="phone"  id="exampleFormControlInput1" required placeholder="Phone">
                            </div>
                            @error('phone')
                            <div class="error" style="color: red">{{ $message }}</div>
                            @enderror
                            <br>
                            <br>
                            <div class="text-center">
                                <button class="btn-buy" type="submit"><i class="fa-regular fa-credit-card"></i> Continue</button>

                            </div>
                        </form>

                </div>

            </div>

            <div class="col-sm-4 ">
                <div class="card text-center " style="width: 20rem;padding: 10px;">
{{--                    <img src="{{ asset('frontend/images/121.png') }}" class="card-img-top" alt="...">--}}
                    <div class="card-body">
                        <h4 class="co">Order Summary</h4>
                        <div class="d-flex justify-content-between align-content-center boder-total py-4">
                            <h6 class="py-1  h6">Service</h6>
                            <h6><span id="totalCheckout"></span>Loyalty</h6>
                        </div>

                        <div class="d-flex justify-content-between align-content-center boder-total py-4">
                            <h6 class="py-1  h6">Description</h6>
                            <h6><span id="totalCheckout"></span>Premium Features</h6>
                        </div>


                        <div class="d-flex justify-content-between align-content-center boder-total py-4">
                            <h6 class="py-1  h6">Price</h6>
                            <h6><span id="totalCheckout"></span>250 SAR</h6>
                        </div>




                    </div>
                </div>

            </div>
        </div>
    </div>

    @elseif (Config::get('app.locale') == 'ar')
        <br>
        <div class="container-fluid box text-center ">
            <h1 class="title-big"> صفحة انهاء الطلب </h1>
            <hr style="opacity: 1;color:#00E6A7; width: 120px; margin: auto; height: 8px;border-width:4px">


        </div>
        <br>

        <div class="container" >
            <div class="row ">
                <div class="col-sm-8">

                    <br>
                    <h4 class="co">وسائل الدفع المدعومة</h4>

                    <div>
                        <div class="paymetMethod ">
                            {{--                                <h3 class="co">طرق الدفع المدعومة</h3>--}}
                            <img src="{{ asset('frontend/images/en.png') }}"
                                 style="max-width: 350px;">
                        </div>
                        <form action="{{ route('purchase.guest') }}" method="post">
                            @csrf

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">الاسم</label>
                                <input type="text" class="form-control" name="name" id="exampleFormControlInput1" required placeholder="الاسم">
                            </div>
                            @error('name')
                            <div class="error" style="color: red">{{ $message }}</div>
                            @enderror
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">الايميل</label>
                                <input type="email" class="form-control" name="email"  id="exampleFormControlInput1" required placeholder="سيتم ارسال بيانات الحساب عليه">
                            </div>
                            @error('email')
                            <div class="error" style="color: red">{{ $message }}</div>
                            @enderror
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">رقم الجوال</label>
                                <input type="text" class="form-control" name="phone"  id="exampleFormControlInput1" required placeholder="رقم الجوال">
                            </div>
                            @error('phone')
                            <div class="error" style="color: red">{{ $message }}</div>
                            @enderror
                            <br>
                            <br>
                            <div class="text-center">
                                <button class="btn-buy" type="submit"><i class="fa-regular fa-credit-card"></i> متابعة</button>

                            </div>
                        </form>

                    </div>

                </div>

                <div class="col-sm-4 ">
                    <div class="card text-center " style="width: 20rem;padding: 10px;">
                        {{--                    <img src="{{ asset('frontend/images/121.png') }}" class="card-img-top" alt="...">--}}
                        <div class="card-body">
                            <h4 class="co">ملخص الطلب</h4>
                            <div class="d-flex justify-content-between align-content-center boder-total py-4">
                                <h6 class="py-1  h6">الخدمة</h6>
                                <h6><span id="totalCheckout"></span>برامج الولاء</h6>
                            </div>

                            <div class="d-flex justify-content-between align-content-center boder-total py-4">
                                <h6 class="py-1  h6">الوصف</h6>
                                <h6><span id="totalCheckout"></span>مقارنات مدفوعة</h6>
                            </div>


                            <div class="d-flex justify-content-between align-content-center boder-total py-4">
                                <h6 class="py-1  h6">السعر</h6>
                                <h6><span id="totalCheckout"></span>250 ر.س</h6>
                            </div>




                        </div>
                    </div>

                </div>
            </div>
        </div>
    @endif
@endsection
