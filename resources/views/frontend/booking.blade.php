{{-- @extends('frontend.layouts.master')
@section('content')
    <br>
    <div class="container-fluid box text-center ">
        <!-- <img src="/images/cc.png" alt="" srcset="" class="img-pos d-none d-sm-block"> -->
        <h1> تفاصيل الحجز </h1>
        <hr style="opacity: 1;color:#C3DCE3; width: 120px; margin: auto; height: 8px;border-width:4px">


    </div>
    <br>
    <div class="container my-3 align-items-center ">
        <div class="card text-center align-items-center" style="width: 25rem;padding: 10px;margin:auto">
            <img src="{{ asset('frontend/images/9.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5>استشارة مع محمد الشريف</h5>
                <h3>275 ر.س</h3>
                <span class="float-end"> الاسم :</span> <span class="float-start">{{ $booking->name }}</span>

                <br>

                <span class="float-end"> التاريخ :</span> <span class="float-start">{{ $booking->date->date }}</span>
                </span>
                <br>
                <span class="float-end"> الوقت :</span> <span class="float-start">{{ $booking->time->time }}</span>


                <br>
                <br>
                <span class="float-end fw-bold"> المجموع :</span> <span class="float-start"> 250 ر.س
                </span>

                <form action="{{ route('purchase.consult') }}" method="post">
                    @csrf
                    <button class="btn-buy"><i class="fa-regular fa-credit-card"></i> ادفع الان</button>
                </form>




            </div>
        </div>

    </div>
@endsection



 --}}




@extends('frontend.layouts.master')
@section('content')
    <br>
    <div class="container-fluid box text-center ">
        <!-- <img src="/images/cc.png" alt="" srcset="" class="img-pos d-none d-sm-block"> -->
        <h1> حجز اسشارة </h1>
        <hr style="opacity: 1;color:#C3DCE3; width: 120px; margin: auto; height: 8px;border-width:4px">


    </div>
    <br>
    <div class="container" style="">
        <div class="row ">
            <div class="col-sm-8">



                <form method="POST" action="{{ route('book') }}">
                    @csrf
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example1">الاسم </label>
                        <input type="text" name="name" id="form2Example1" class="form-control w-75 my-2 " required />

                    </div>
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example1">التاريخ</label>
                        {{-- <input type="email" name="email" id="form2Example1"
                                class="form-control w-75 my-2 " /> --}}
                        <select name="date" id="date" class="form-control w-75 my-2 " onchange="check()" required>
                            @foreach ($dates as $date)
                                <option value="{{ $date->id }}">{{ $date->date }}</option>
                            @endforeach

                        </select>

                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example1">الوقت</label>
                        {{-- <input type="email" name="email" id="form2Example1"
                                class="form-control w-75 my-2 " /> --}}
                        <select name="time" id="times" class="form-control w-75 my-2 " required>

                            {{-- <option selected>اختر الوقت</option> --}}


                        </select>

                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example2">موضوع الاستشارة</label>
                        <input type="text" name="subject" id="form2Example2" class="form-control w-75 my-2 " required />

                    </div>


                    <!-- Submit button -->
                    @auth
                        <button class="btn-buy" type="submit"><i class="fa-regular fa-credit-card"></i> الدفع وتاكيد
                            الحجز</button>
                    @endauth
                    @guest
                </form>
                        <p style="color: red">يرجى التسجيل او تسجيل الدخول للتمكن من حجز استشارة</p>
                        <a href="/register"><button class="btn-buy" style="margin-bottom: 20px">التسجيل</button></a>

                        <a href="/login"><button class="btn-buy2">تسجيل الدخول</button></a>

                    @endguest


                </form>



            </div>
            <div class="col-sm-4 ">
                <div class="card text-center " style="width: 20rem;padding: 10px;">
                    <img src="{{ asset('frontend/images/9.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5>استشارة مع محمد الشريف</h5>
                        <h1>٢٥٠ ر.س</h1>
                        <p style="color: #045752;">الرجاء تعبئة البيانات المطلوبة قبل المتابعة الى صفحة الدفع</p>
                        {{--               
                        @auth
                            @if (auth()->user()->subscribed == 5)
                                <p style="color: #045752;">انت مشترك بالفعل يمكنك مشاهدة الدورة</p>
                                <a href="{{ url('/videos') }}"><button class="btn-buy2" type="button">مشاهدة
                                        الدورة</button></a>
                            @else
                                <div class="input-group mb-3 form-control" id="couponField">
                                    <input type="text" class="form-control discount" placeholder="هل تمتلك كود تخفيض ؟"
                                        id="coupon_name">
                                    <button class="btn" id="dis" type="button" onclick="applyCoupon()">خصم</button>
                                </div>

                                <form action="{{ route('purchase') }}" method="post">
                                    @csrf
                                    <button class="btn-buy"><i class="fa-regular fa-credit-card"></i> شراء الان</button>
                                </form>
                            @endif
                        @endauth
                        @guest
                            <p style="color: red">يرجى التسجيل او تسجيل الدخول للتمكن من شراء الدورة</p>
                            <a href="/register"><button class="btn-buy" style="margin-bottom: 20px">التسجيل</button></a>

                            <a href="/login"><button class="btn-buy2">تسجيل الدخول</button></a>
       
                        @endguest --}}



                    </div>
                </div>

            </div>
        </div>
    </div>
    <br>
@endsection
