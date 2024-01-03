@extends('frontend.layouts.master')

@section('meta')
    @if (Config::get('app.locale') == 'en')
        <title>Lowkalo: Inventory Management Course</title>
        <link rel="canonical" href="https://www.lowkalo.com/en/course" />
        <link rel="alternate" href="https://www.lowkalo.com/en/course" hreflang="en" />
        <link rel="alternate" href="https://www.lowkalo.com/course" hreflang="ar" />
        <link rel="alternate" href="https://www.lowkalo.com/course" hreflang="x-default" />
    @elseif(Config::get('app.locale') == 'ar')
        <title>لوكالو : كورس ادارة مخزون المطاعم والكافيهات</title>
        <link rel="canonical" href="https://www.lowkalo.com/course" />
        <link rel="alternate" href="https://www.lowkalo.com/en/course" hreflang="en" />
        <link rel="alternate" href="https://www.lowkalo.com/course" hreflang="ar" />
        <link rel="alternate" href="https://www.lowkalo.com/course" hreflang="x-default" />
    @endif
@endsection
@section('content')

    <style>
        /*@media (min-width: 1024px) {*/
        /*    .laptop-only {*/
        /*        display: non; !* Display the div on laptop screens *!*/
        /*    }*/
        /*}*/

.lap {
    display: none;
}

        .nnn {
            display: none;
        }

        .mid1en {
            margin-left: 15px;
            margin-right: 15px;
            padding-left: 20px;


        }
        .mid2en {
            margin-left: 15px;
            margin-right: 15px;

        }
.mid3en {
    padding-left: 12px;
}

        @media (max-width: 768px) {
            .mid1 {
                margin-left: 15px;
                margin-right: 15px;
                padding-right: 12px;

            }
            .mid2 {
                margin-left: 15px;
                margin-right: 15px;

            }
            .mid1en {
                margin-left: 15px;
                margin-right: 15px;
                padding-left: 20px;


            }
            .mid2en {
                margin-left: 15px;
                margin-right: 15px;

            }
            .lap {
                display: block;
            }
            .mobile-only {
                display: none /* Display the div on mobile screens */
            }
            .info {
                padding-right: 5px;
                padding-left: 5px;
            }

            .nnn {
                display: block;
            }
        }
    </style>
    @if (Config::get('app.locale') == 'ar')
    <br>
    <div class="container-fluid box text-center ">
        <h1 class="title-big"> تفاصيل الدورة </h1>
        <hr style="opacity: 1;color:#00E6A7; width: 120px; margin: auto; height: 8px;border-width:4px">


    </div>
    <br>
    <div class="container" style="">
        <div class="d-flex " style="gap: 3%">
            <div class="text-center">
                <h5 class="co ">قطاع</h5>
            </div>
            <div class="text-center mid1">
                <h5 class="co ">المستوى</h5>
            </div>
            <div class="text-center">
                <h5 class="co ">مدة الدورة</h5>
            </div>
        </div>

        <div class="d-flex " style="gap: 2%">
            <div class="text-center">
                <p class="co2 ">الكافيهات<br> والمطاعم</p>
            </div>
            <div class="text-center mid2">
                <p class="co2 ">كل المستويات</p>
            </div>
            <div class="text-center">
                <p class="co2 ">01:30:00</p>
            </div>
        </div>
        <div class="row ">
            <div class="col-sm-8">



                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item " role="presentation ">
                        <button class="nav-link active co" id="buy-tab" data-bs-toggle="tab" data-bs-target="#buy"
                                type="button" role="tab" aria-controls="profile" aria-selected="true"
                                style="color: black;">شراء الدورة</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link  co" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                                type="button" role="tab" aria-controls="home" aria-selected="false"
                                style="color: black;">تفاصيل الدورة</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link co" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                                type="button" role="tab" aria-controls="profile" aria-selected="false"
                                style="color: black;">مواضيع الدورة</button>
                    </li>



{{--                    @auth--}}
{{--                        @if (auth()->user()->subscribed !== 5)--}}
{{--                    <li class="nav-item" role="presentation">--}}
{{--                        <button class="nav-link co" id="buy-tab" data-bs-toggle="tab" data-bs-target="#buy"--}}
{{--                                type="button" role="tab" aria-controls="profile" aria-selected="false"--}}
{{--                                style="color: black;">شراء الدورة</button>--}}
{{--                    </li>--}}
{{--@endif--}}
{{--                    @endauth--}}
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade " id="home" role="tabpanel" aria-labelledby="home-tab">
                        <br>
                        <div>
                            <div class="c-d" style="padding: 20px">


                                <h4 class="co"> عن الدورة </h4>
                                <p class="co2">من أهم العناصر الموجودة في أي مطعم وتعد العصب الرئيسي لنجاح المطاعم والكافيهات هي معرفة تكاليف وحركة مواد المخزون للمنتجات. من خلال عملي على تطوير العديد من المطاعم والكافيهات ومقابلتي للعديد من رواد الاعمال في هذا المجال ، عملية إدارة المخزون لاتنال الاهتمام الكافي وخاصة عمليات الهدر الحاصلة في المطعم.
                                </p>
                                <h4 class="co"> نتكلم في هذا الكورس عن </h4>


                                <ul class="mx-4">
                                    <li class="co2">فهم نسبة تكلفة المواد الغذائية وتأثيرها على الأرباح.
                                    </li>
                                    <li class="co2">عمليات الهدر المختلفة في عملية إدارة المخزون مع أمثلة.
                                    </li>
                                    <li class="co2">تقدير حجم المشتريات.</li>
                                    <li class="co2">هندسة قائمة الطعام او ال Menu Engineering وتصنيفاتها الاربعة وكيفية والاستفادة منها.</li>
                                    <li class="co2"> معرفة تكلفة المنتجات واذا تم استهلاكها بشكل كامل و صحيح.</li>
                                    <li class="co2">عمل حملات دعائية وتسويقية معتمدة على بيانات المبيعات.
                                    </li>
                                    <li class="co2">صعوبة الحفاظ على هامش ربح صحي ومتزن بدون مراقبة دقيقة لاستهلاك المواد الغذائية داخل المطعم/الكوفي شوب .</li>
                                    <li class="co2">معرفة تكلفة ومستويات المنتجات واذا تم استهلاكها بشكل كامل و صحيح.</li>

                                </ul>
                                <br>
                                <h4 class="co"> المتطلبات لاكمال الدورة </h4>
                                <p class="co2">الحضور الذهني الكامل، لايلزم اي خبرة أو معلومات سابقة. يمكن اكمال الكورس
                                    في الوقت والمدة المناسبة لك (الدورة مسجلة) </p>
                                <br>

                                <h4 class="co"> لمن هذا الدورة </h4>


                                <ul class="mx-3">
                                    <li class="co2">ملاك المطاعم والكافيهات، الصغيرة والمتوسطة الحجم.</li>
                                    <li class="co2">للمدراء والموظفين في قطاع المطاعم والكافيهات.
                                    </li>
                                    <li class="co2">الموظفين في شركات التقنية التي تخص قطاع المطاعم والكافيهات.</li>
                                    <li class="co2"> الاشخاص المهتمين في دخول مجال إدارة المطاعم والكافيهات.</li>

                                </ul>

                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <br>
                        <h4 class="co">دروس ومواضيع الدورة</h4>
                        <div>
                            <ul class="accordion">
                                <li>
                                    <input type="radio" name="accordion" id="first" checked>
                                    <label class="label2 co" for="first">الدرس الاول - المقدمة للكورس </label>
                                    <div class="content">
                                        <div class="d-flex">
                                            <div style="margin-left: 75%">
                                                <i class="fa-solid fa-circle-play"></i><span class="co2"> المقدمة - الجزء
                                                    الأول</span>
                                            </div>
                                            <div>
                                                <i class="fa-sharp fa-solid fa-lock"></i>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="d-flex">
                                            <div style="margin-left: 58%">
                                                <i class="fa-solid fa-circle-play"></i><span class="co2"> لماذا التحكم
                                                    بتكاليف المطعم -
                                                    الجزء الثاني</span>
                                            </div>
                                            <div>
                                                <i class="fa-sharp fa-solid fa-lock"></i>
                                            </div>
                                        </div>
                                        <hr>

                                    </div>
                                </li>
                                <li>
                                    <input type="radio" name="accordion" id="second">
                                    <label class="label2 co" for="second">الدرس الثاني بعد المقدمة - المخزون </label>
                                    <div class="content">
                                        <div class="d-flex">
                                            <div style="margin-left: 70%">

                                                <i class="fa-solid fa-circle-play"></i><span class="co2"> إدارة
                                                    المخزون - الجزء
                                                    الاول</span>
                                            </div>
                                            <div>
                                                <i class="fa-sharp fa-solid fa-lock"></i>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="d-flex">
                                            <div style="margin-left: 58%">
                                                <i class="fa-solid fa-circle-play"></i><span class="co2"> إدارة
                                                    المخزون -حساب الهدر-
                                                    الجزء الثاني</span>
                                            </div>
                                            <div>
                                                <i class="fa-sharp fa-solid fa-lock"></i>
                                            </div>
                                        </div>
                                        <hr>

                                    </div>
                                </li>
                                <li>
                                    <input type="radio" name="accordion" id="third">
                                    <label class="label2 co" for="third">الدرس الثالث - تسعير المواد الغذائية </label>
                                    <div class="content">
                                        <div class="d-flex">
                                            <div style="margin-left: 58%">
                                                <i class="fa-solid fa-circle-play"></i><span class="co2"> مقدمة تسعير
                                                    المواد الغذائية-
                                                    الجزء الاول</span>
                                            </div>
                                            <div>
                                                <i class="fa-sharp fa-solid fa-lock"></i>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="d-flex">
                                            <div style="margin-left: 57.5%">
                                                <i class="fa-solid fa-circle-play"></i><span class="co2"> تكلفة المنتج
                                                    - تسعير المنيو -
                                                    الجزء الثاني</span>
                                            </div>
                                            <div>
                                                <i class="fa-sharp fa-solid fa-lock"></i>
                                            </div>
                                        </div>
                                        <hr>

                                        <div class="d-flex">
                                            <div style="margin-left: 38.5%">
                                                <i class="fa-solid fa-circle-play"></i><span class="co2"> مقدمة تسعير
                                                    المواد نسبة تكلفة
                                                    المواد الغذائية للمنتج- الجزء الثالث</span>
                                            </div>
                                            <div>
                                                <i class="fa-sharp fa-solid fa-lock"></i>
                                            </div>
                                        </div>
                                        <hr>

                                        <div class="d-flex">
                                            <div style="margin-left: 51.5%">
                                                <i class="fa-solid fa-circle-play"></i><span class="co2"> تكاليف المواد
                                                    الغذائية
                                                    للمطعم
                                                    كامل- الجزء الرابع</span>
                                            </div>
                                            <div>
                                                <i class="fa-sharp fa-solid fa-lock"></i>
                                            </div>
                                        </div>
                                        <hr>

                                        <div class="d-flex">
                                            <div style="margin-left: 64.5%">
                                                <i class="fa-solid fa-circle-play"></i><span class="co2"> هامش المساهمة
                                                    الجزء الخامس
                                                </span>
                                            </div>
                                            <div>
                                                <i class="fa-sharp fa-solid fa-lock"></i>
                                            </div>
                                        </div>
                                        <hr>

                                        <div class="d-flex">
                                            <div style="margin-left: 60%">
                                                <i class="fa-solid fa-circle-play"></i><span class="co2"> مثال هامش
                                                    المساهمة الجزء
                                                    السادس</span>
                                            </div>
                                            <div>
                                                <i class="fa-sharp fa-solid fa-lock"></i>
                                            </div>
                                        </div>
                                        <hr>

                                    </div>
                                </li>
                                <li>
                                    <input type="radio" name="accordion" id="fourth">
                                    <label class="label2 co" for="fourth">الدرس الرابع - هندسة قائمة الطعام
                                    </label>
                                    <div class="content">
                                        <div class="d-flex">
                                            <div style="margin-left: 75%">
                                                <i class="fa-solid fa-circle-play"></i><span class="co2"> هندسة قائمة
                                                    الطعام</span>
                                            </div>
                                            <div>
                                                <i class="fa-sharp fa-solid fa-lock"></i>
                                            </div>
                                        </div>
                                        <hr>


                                    </div>
                                </li>
                                <li>
                                    <input type="radio" name="accordion" id="fiveth">
                                    <label class="label2 co" for="fiveth">الدرس الخامس - إدارة المشتريات </label>
                                    <div class="content">
                                        <div class="d-flex">
                                            <div style="margin-left: 68.5%">
                                                <i class="fa-solid fa-circle-play"></i><span class="co2"> إدارة
                                                    المشتريات الجزء
                                                    الاول</span>
                                            </div>
                                            <div>
                                                <i class="fa-sharp fa-solid fa-lock"></i>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="d-flex">
                                            <div style="margin-left: 63%">
                                                <i class="fa-solid fa-circle-play"></i><span class="co2"> إدارة
                                                    المشتريات الجزء
                                                    الجزء الثاني</span>
                                            </div>
                                            <div>
                                                <i class="fa-sharp fa-solid fa-lock"></i>
                                            </div>
                                        </div>
                                        <hr>

                                        <div class="d-flex">
                                            <div style="margin-left: 84%">
                                                <i class="fa-solid fa-circle-play"></i><span class="co2"> بار ليفل
                                                </span>
                                            </div>
                                            <div>
                                                <i class="fa-sharp fa-solid fa-lock"></i>
                                            </div>
                                        </div>
                                        <hr>

                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-pane fade show active" id="buy" role="tabpanel" aria-labelledby="buy-tab">
                        @guest()
                        <div class="card text-center lap" style="width: 20rem;padding: 10px;margin: auto;margin-top: 30px">
                            <img src="{{ asset('frontend/images/121.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5>دورة ادارة المخزون للمطاعم والكافيهات للمبتدئين
                                </h5>
                                <div  id="couponCalField2">

                                </div>
                                @auth
                                    @if (auth()->user()->subscribed == 5)
                                        <p style="color: #045752;">انت مشترك بالفعل يمكنك مشاهدة الدورة</p>
                                        <a href="{{ url('/videos') }}"><button class="btn-buy2" type="button">مشاهدة
                                                الدورة</button></a>
                                    @else
                                        <div class="input-group mb-3 form-control" id="couponField2">
                                            <input type="text" class="form-control discount" placeholder="هل تمتلك كود تخفيض ؟"
                                                   id="coupon_name2">
                                            <button class="btn" id="dis2" type="button" onclick="applyCoupon2()">خصم</button>
                                        </div>


                                        <form action="{{ route('purchase') }}" method="post">
                                            @csrf
                                            <button class="btn-buy"><i class="fa-regular fa-credit-card"></i> شراء الان</button>
                                        </form>
                                    @endif
                                @endauth
                                @guest

                                    <div class="input-group mb-3 form-control" id="couponField2">
                                        <input type="text" class="form-control discount" placeholder="هل تمتلك كود تخفيض ؟"
                                               id="coupon_name2">
                                        <button class="btn" id="dis" type="button" onclick="applyCoupon2()">خصم</button>
                                    </div>
                                    <button class="btn-buy" type="submit" id="scrollButton" >احجز الان</button>
                                @endguest



                            </div>
                        </div>
                        <br>
                        <h4 class="co">وسائل الدفع المقبولة</h4>

                        <div id="targetDiv1">
                            <div class="paymetMethod ">
                                {{--                                <h3 class="co">طرق الدفع المدعومة</h3>--}}
                                <img src="{{ asset('frontend/images/acc6.png') }}"
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
                                    <label for="exampleFormControlInput1" class="form-label">البريد الالكتروني</label>
                                    <input type="email" class="form-control" name="email"  id="exampleFormControlInput1" required placeholder="سوف يتم ارسال بيانات تسجيل الدخول فيه">
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
                                    <button class="btn-buy" type="submit"><i class="fa-regular fa-credit-card"></i> شراء الان</button>

                                </div>
                            </form>
                        </div>
                        @endguest
                        @auth()
                                <div class="card text-center lap" style="width: 20rem;padding: 10px;margin: auto;margin-top: 30px">
                                    <img src="{{ asset('frontend/images/121.png') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5>دورة ادارة المخزون للمطاعم والكافيهات للمبتدئين
                                        </h5>
                                        <div  id="couponCalField2">

                                        </div>
                                        @auth
                                            @if (auth()->user()->subscribed == 5)
                                                <p style="color: #045752;">انت مشترك بالفعل يمكنك مشاهدة الدورة</p>
                                                <a href="{{ url('/videos') }}"><button class="btn-buy2" type="button">مشاهدة
                                                        الدورة</button></a>
                                            @else
                                                <div class="input-group mb-3 form-control" id="couponField2">
                                                    <input type="text" class="form-control discount" placeholder="هل تمتلك كود تخفيض ؟"
                                                           id="coupon_name2">
                                                    <button class="btn" id="dis2" type="button" onclick="applyCoupon2()">خصم</button>
                                                </div>


                                                <form action="{{ route('purchase') }}" method="post">
                                                    @csrf
                                                    <button class="btn-buy"><i class="fa-regular fa-credit-card"></i> شراء الان</button>
                                                </form>
                                            @endif

                                        @endauth
                                        @guest

                                            <div class="input-group mb-3 form-control" id="couponField2">
                                                <input type="text" class="form-control discount" placeholder="هل تمتلك كود تخفيض ؟"
                                                       id="coupon_name2">
                                                <button class="btn" id="dis" type="button" onclick="applyCoupon2()">خصم</button>
                                            </div>
                                            {{--                                    <button class="btn-buy" type="submit" id="call" onclick="buyme()"><i class="fa-regular fa-credit-card"></i> شراء الان</button>--}}
                                        @endguest



                                    </div>
                                </div>

                            @endauth
@auth()
    <div class="mobile-only">
                                <br>


                                <div>
                                    <div class="paymetMethod ">
                                                                        <h3 class="co">وسائل الدفع المقبولة</h3>
                                        <img src="{{ asset('frontend/images/acc6.png') }}"
                                             style="max-width: 350px;">
                                    </div>

                                </div>
        <form action="{{ route('purchase') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">الاسم</label>
                <input type="text" class="form-control" name="name" value="{{auth()->user()->name}}" disabled id="exampleFormControlInput1" required placeholder="الاسم">
            </div>
            @error('name')
            <div class="error" style="color: red">{{ $message }}</div>
            @enderror
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">البريد الالكتروني</label>
                <input type="email" class="form-control" name="email" value="{{auth()->user()->email}}" disabled  id="exampleFormControlInput1" required placeholder="سوف يتم ارسال بيانات تسجيل الدخول فيه">
            </div>
            @error('email')
            <div class="error" style="color: red">{{ $message }}</div>
            @enderror
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">رقم الجوال</label>
                <input type="text" class="form-control"  name="phone" value="{{auth()->user()->phone}}" disabled  id="exampleFormControlInput1" required placeholder="رقم الجوال">
            </div>
            @error('phone')
            <div class="error" style="color: red">{{ $message }}</div>
            @enderror
            <br>
            <div class="text-center">
            <button class="btn-buy "><i class="fa-regular fa-credit-card"></i> شراء الان</button>
            </div>
        </form>
    </div>
                            @endauth
                    </div>
                </div>

            </div>
            <div class="col-sm-4 ">
                <div class="card text-center mobile-only" style="width: 20rem;padding: 10px;">
                    <img src="{{ asset('frontend/images/121.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5>دورة ادارة المخزون للمطاعم والكافيهات للمبتدئين
                        </h5>
                        <div  id="couponCalField">

                        </div>
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

                            <div class="input-group mb-3 form-control" id="couponField">
                                <input type="text" class="form-control discount" placeholder="هل تمتلك كود تخفيض ؟"
                                       id="coupon_name">
                                <button class="btn" id="dis" type="button" onclick="applyCoupon()">خصم</button>
                            </div>
                            <button class="btn-buy" type="submit" id="call" onclick="buyme()"><i class="fa-regular fa-credit-card"></i> شراء الان</button>
                        @endguest



                    </div>
                </div>

            </div>
        </div>
    </div>
    <br>
    @elseif(Config::get('app.locale') == 'en')

        <br>
        <div class="container-fluid box text-center ">
            <h1 class="title-big"> Course Details </h1>
            <hr style="opacity: 1;color:#00E6A7; width: 120px; margin: auto; height: 8px;border-width:4px">


        </div>
        <br>
        <div class="container" style="">
            <div class="row ">
                <div class="col-sm-8">
                    <div class="d-flex " style="gap: 5%">
                        <div class="text-center">
                            <h5 class="co ">Section</h5>
                        </div>
                        <div class="text-center mid1en">
                            <h5 class="co ">Level</h5>
                        </div>
                        <div class="text-center">
                            <h5 class="co ">Course duration</h5>
                        </div>
                    </div>

                    <div class="d-flex " style="gap: 2%">
                        <div class="text-center">
                            <p class="co2 ">Cafes <br>and restaurants</p>
                        </div>
                        <div class="text-center mid2en">
                            <p class="co2 ">All levels</p>
                        </div>
                        <div class="text-center">
                            <p class="co2 mid3en">01:30:00</p>
                        </div>
                    </div>



                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active co" id="buy-tab" data-bs-toggle="tab" data-bs-target="#buy"
                                    type="button" role="tab" aria-controls="profile" aria-selected="true"
                                    style="color: black;">Buy the course</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link co" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                                    type="button" role="tab" aria-controls="home" aria-selected="false"
                                    style="color: black;">Course Details</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link co" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                                    type="button" role="tab" aria-controls="profile" aria-selected="false"
                                    style="color: black;">Course topics</button>
                        </li>



                        {{--                    @auth--}}
                        {{--                        @if (auth()->user()->subscribed !== 5)--}}
                        {{--                    <li class="nav-item" role="presentation">--}}
                        {{--                        <button class="nav-link co" id="buy-tab" data-bs-toggle="tab" data-bs-target="#buy"--}}
                        {{--                                type="button" role="tab" aria-controls="profile" aria-selected="false"--}}
                        {{--                                style="color: black;">شراء الدورة</button>--}}
                        {{--                    </li>--}}
                        {{--@endif--}}
                        {{--                    @endauth--}}
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <br>
                            <div>
                                <div class="c-d" style="padding: 20px">


                                    <h4 class="co"> About the course </h4>
                                    <p class="co2">One of the most important elements in any restaurant and the mainstay of the success of restaurants and cafes is knowing the costs and movement of inventory materials for products. Through my work on developing many restaurants and cafes and meeting many entrepreneurs in this field, the inventory management process does not receive enough attention, especially the waste operations that occur in the restaurant.
                                    </p>
                                    <h4 class="co"> In this course we talk about </h4>


                                    <ul class="mx-4">
                                        <li class="co2">Understanding the cost percentage of food items and their impact on profits.</li>
                                        <li class="co2">Different types of waste in inventory management with examples.</li>
                                        <li class="co2">Estimating purchase volume.</li>
                                        <li class="co2">Menu Engineering and its four categories and how to benefit from them.</li>
                                        <li class="co2">Knowing the cost of products and whether they are consumed fully and correctly.</li>
                                        <li class="co2">Creating advertising and marketing campaigns based on sales data.</li>
                                        <li class="co2">The challenge of maintaining a healthy and balanced profit margin without precise monitoring of food consumption in the restaurant/coffee shop.</li>
                                        <li class="co2">Knowing the cost and levels of products and whether they are consumed fully and correctly.</li>


                                    </ul>
                                    <br>
                                    <h4 class="co">Requirements for Course Completion</h4>
                                    <p class="co2">Full mental presence; no prior experience or knowledge is required. You can complete the course at your own time and pace (the course is recorded).</p>
                                    <br>

                                    <h4 class="co">Who Is This Course For?</h4>

                                    <ul class="mx-3">
                                        <li class="co2">Restaurant and cafe owners, small and medium-sized.</li>
                                        <li class="co2">For managers and employees in the restaurant and cafe sector.</li>
                                        <li class="co2">Employees in technology companies related to the restaurant and cafe sector.</li>
                                        <li class="co2">Individuals interested in entering the field of restaurant and cafe management.</li>
                                    </ul>

                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <br>
                            <h4 class="co">Course Lessons and Topics</h4>
                            <div>
                                <ul class="accordion" >
                                    <li>
                                        <input type="radio" name="accordion" id="first" checked>
                                        <label class="label2 co" for="first" >الدرس الاول - المقدمة للكورس </label>
                                        <div class="content" >
                                            <div class="d-flex">
                                                <div style="margin-left: 75%">
                                                    <i class="fa-solid fa-circle-play"></i><span class="co2"> المقدمة - الجزء
                                                    الأول</span>
                                                </div>
                                                <div>
                                                    <i class="fa-sharp fa-solid fa-lock"></i>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="d-flex">
                                                <div style="margin-left: 58%">
                                                    <i class="fa-solid fa-circle-play"></i><span class="co2"> لماذا التحكم
                                                    بتكاليف المطعم -
                                                    الجزء الثاني</span>
                                                </div>
                                                <div>
                                                    <i class="fa-sharp fa-solid fa-lock"></i>
                                                </div>
                                            </div>
                                            <hr>

                                        </div>
                                    </li>
                                    <li>
                                        <input type="radio" name="accordion" id="second">
                                        <label class="label2 co" for="second">الدرس الثاني بعد المقدمة - المخزون </label>
                                        <div class="content">
                                            <div class="d-flex">
                                                <div style="margin-left: 70%">

                                                    <i class="fa-solid fa-circle-play"></i><span class="co2"> إدارة
                                                    المخزون - الجزء
                                                    الاول</span>
                                                </div>
                                                <div>
                                                    <i class="fa-sharp fa-solid fa-lock"></i>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="d-flex">
                                                <div style="margin-left: 58%">
                                                    <i class="fa-solid fa-circle-play"></i><span class="co2"> إدارة
                                                    المخزون -حساب الهدر-
                                                    الجزء الثاني</span>
                                                </div>
                                                <div>
                                                    <i class="fa-sharp fa-solid fa-lock"></i>
                                                </div>
                                            </div>
                                            <hr>

                                        </div>
                                    </li>
                                    <li>
                                        <input type="radio" name="accordion" id="third">
                                        <label class="label2 co" for="third">الدرس الثالث - تسعير المواد الغذائية </label>
                                        <div class="content">
                                            <div class="d-flex">
                                                <div style="margin-left: 58%">
                                                    <i class="fa-solid fa-circle-play"></i><span class="co2"> مقدمة تسعير
                                                    المواد الغذائية-
                                                    الجزء الاول</span>
                                                </div>
                                                <div>
                                                    <i class="fa-sharp fa-solid fa-lock"></i>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="d-flex">
                                                <div style="margin-left: 57.5%">
                                                    <i class="fa-solid fa-circle-play"></i><span class="co2"> تكلفة المنتج
                                                    - تسعير المنيو -
                                                    الجزء الثاني</span>
                                                </div>
                                                <div>
                                                    <i class="fa-sharp fa-solid fa-lock"></i>
                                                </div>
                                            </div>
                                            <hr>

                                            <div class="d-flex">
                                                <div style="margin-left: 38.5%">
                                                    <i class="fa-solid fa-circle-play"></i><span class="co2"> مقدمة تسعير
                                                    المواد نسبة تكلفة
                                                    المواد الغذائية للمنتج- الجزء الثالث</span>
                                                </div>
                                                <div>
                                                    <i class="fa-sharp fa-solid fa-lock"></i>
                                                </div>
                                            </div>
                                            <hr>

                                            <div class="d-flex">
                                                <div style="margin-left: 51.5%">
                                                    <i class="fa-solid fa-circle-play"></i><span class="co2"> تكاليف المواد
                                                    الغذائية
                                                    للمطعم
                                                    كامل- الجزء الرابع</span>
                                                </div>
                                                <div>
                                                    <i class="fa-sharp fa-solid fa-lock"></i>
                                                </div>
                                            </div>
                                            <hr>

                                            <div class="d-flex">
                                                <div style="margin-left: 64.5%">
                                                    <i class="fa-solid fa-circle-play"></i><span class="co2"> هامش المساهمة
                                                    الجزء الخامس
                                                </span>
                                                </div>
                                                <div>
                                                    <i class="fa-sharp fa-solid fa-lock"></i>
                                                </div>
                                            </div>
                                            <hr>

                                            <div class="d-flex">
                                                <div style="margin-left: 60%">
                                                    <i class="fa-solid fa-circle-play"></i><span class="co2"> مثال هامش
                                                    المساهمة الجزء
                                                    السادس</span>
                                                </div>
                                                <div>
                                                    <i class="fa-sharp fa-solid fa-lock"></i>
                                                </div>
                                            </div>
                                            <hr>

                                        </div>
                                    </li>
                                    <li>
                                        <input type="radio" name="accordion" id="fourth">
                                        <label class="label2 co" for="fourth">الدرس الرابع - هندسة قائمة الطعام
                                        </label>
                                        <div class="content">
                                            <div class="d-flex">
                                                <div style="margin-left: 75%">
                                                    <i class="fa-solid fa-circle-play"></i><span class="co2"> هندسة قائمة
                                                    الطعام</span>
                                                </div>
                                                <div>
                                                    <i class="fa-sharp fa-solid fa-lock"></i>
                                                </div>
                                            </div>
                                            <hr>


                                        </div>
                                    </li>
                                    <li>
                                        <input type="radio" name="accordion" id="fiveth">
                                        <label class="label2 co" for="fiveth">الدرس الخامس - إدارة المشتريات </label>
                                        <div class="content">
                                            <div class="d-flex">
                                                <div style="margin-left: 68.5%">
                                                    <i class="fa-solid fa-circle-play"></i><span class="co2"> إدارة
                                                    المشتريات الجزء
                                                    الاول</span>
                                                </div>
                                                <div>
                                                    <i class="fa-sharp fa-solid fa-lock"></i>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="d-flex">
                                                <div style="margin-left: 63%">
                                                    <i class="fa-solid fa-circle-play"></i><span class="co2"> إدارة
                                                    المشتريات الجزء
                                                    الجزء الثاني</span>
                                                </div>
                                                <div>
                                                    <i class="fa-sharp fa-solid fa-lock"></i>
                                                </div>
                                            </div>
                                            <hr>

                                            <div class="d-flex">
                                                <div style="margin-left: 84%">
                                                    <i class="fa-solid fa-circle-play"></i><span class="co2"> بار ليفل
                                                </span>
                                                </div>
                                                <div>
                                                    <i class="fa-sharp fa-solid fa-lock"></i>
                                                </div>
                                            </div>
                                            <hr>

                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane fade show active" id="buy" role="tabpanel" aria-labelledby="buy-tab">
                            @guest()
                                <div class="card text-center lap" style="width: 20rem;padding: 10px;margin: auto;margin-top: 30px">
                                    <img src="{{ asset('frontend/images/121.png') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5>Inventory management for restaurants and cafes for beginners
                                        </h5>
                                        <div  id="couponCalField2">

                                        </div>
                                        @auth
                                            @if (auth()->user()->subscribed == 5)
                                                <p style="color: #045752;">انت مشترك بالفعل يمكنك مشاهدة الدورة</p>
                                                <a href="{{ url('/videos') }}"><button class="btn-buy2" type="button">مشاهدة
                                                        الدورة</button></a>
                                            @else
                                                <div class="input-group mb-3 form-control" id="couponField2">
                                                    <input type="text" class="form-control discount" placeholder="هل تمتلك كود تخفيض ؟"
                                                           id="coupon_name2">
                                                    <button class="btn" id="dis2" type="button" onclick="applyCoupon2()">خصم</button>
                                                </div>


                                                <form action="{{ route('purchase') }}" method="post">
                                                    @csrf
                                                    <button class="btn-buy"><i class="fa-regular fa-credit-card"></i> شراء الان</button>
                                                </form>
                                            @endif
                                        @endauth
                                        @guest

                                            <div class="input-group mb-3 form-control" id="couponField2">
                                                <input type="text" class="form-control discount" placeholder="هل تمتلك كود تخفيض ؟"
                                                       id="coupon_name2">
                                                <button class="btn" id="dis" type="button" onclick="applyCoupon2()">خصم</button>
                                            </div>
                                            <button class="btn-buy" type="submit" id="scrollButton2" >Subscribe Now</button>
                                            {{--                                    <button class="btn-buy" type="submit" id="call" onclick="buyme()"><i class="fa-regular fa-credit-card"></i> شراء الان</button>--}}
                                        @endguest



                                    </div>
                                </div>
                                <br>
                                <h4 class="co">Accepted payment methods</h4>

                                <div id="targetDiv2">
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
                                            <label for="exampleFormControlInput1" class="form-label">Email</label>
                                            <input type="email" class="form-control" name="email"  id="exampleFormControlInput1" required placeholder="Login information will be sent there">
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
                                            <button class="btn-buy" type="submit"><i class="fa-regular fa-credit-card"></i> Buy now</button>

                                        </div>
                                    </form>
                                </div>
                            @endguest
                            @auth()
                                <div class="card text-center lap" style="width: 20rem;padding: 10px;margin: auto;margin-top: 30px">
                                    <img src="{{ asset('frontend/images/121.png') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5>Inventory management for restaurants and cafes for beginners</h5>
                                        <div  id="couponCalField2">

                                        </div>
                                        @auth
                                            @if (auth()->user()->subscribed == 5)
                                                <p style="color: #045752;">You are already subscribed, you can watch the course</p>
                                                <a href="{{ url('/videos') }}"><button class="btn-buy2" type="button">Watch the course</button></a>
                                            @else
                                                <div class="input-group mb-3 form-control" id="couponField2">
                                                    <input type="text" class="form-control discount" placeholder="Do you have a discount code?"
                                                           id="coupon_name2">
                                                    <button class="btn" id="dis2" type="button" onclick="applyCoupon2()">apply</button>
                                                </div>


                                                <form action="{{ route('purchase') }}" method="post">
                                                    @csrf
                                                    <button class="btn-buy"><i class="fa-regular fa-credit-card"></i> Buy now</button>
                                                </form>
                                            @endif
                                        @endauth
                                        @guest

                                            <div class="input-group mb-3 form-control" id="couponField2">
                                                <input type="text" class="form-control discount" placeholder="Do you have a discount code?"
                                                       id="coupon_name2">
                                                <button class="btn" id="dis" type="button" onclick="applyCoupon2()">apply</button>
                                            </div>
                                            {{--                                    <button class="btn-buy" type="submit" id="call" onclick="buyme()"><i class="fa-regular fa-credit-card"></i> شراء الان</button>--}}
                                        @endguest



                                    </div>
                                </div>

                            @endauth
                                @auth()
                                    <div class="mobile-only">
                                        <br>


                                        <div>
                                            <div class="paymetMethod ">
                                                <h3 class="co">Accepted payment methods</h3>
                                                <img src="{{ asset('frontend/images/en.png') }}"
                                                     style="max-width: 350px;">
                                            </div>

                                        </div>
                                        <form action="{{ route('purchase') }}" method="post">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Name</label>
                                                <input type="text" class="form-control" name="name" value="{{auth()->user()->name}}" disabled id="exampleFormControlInput1" required placeholder="name">
                                            </div>
                                            @error('name')
                                            <div class="error" style="color: red">{{ $message }}</div>
                                            @enderror
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Email</label>
                                                <input type="email" class="form-control" name="email" value="{{auth()->user()->email}}" disabled  id="exampleFormControlInput1" required placeholder="email">
                                            </div>
                                            @error('email')
                                            <div class="error" style="color: red">{{ $message }}</div>
                                            @enderror
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Phone</label>
                                                <input type="text" class="form-control"  name="phone" value="{{auth()->user()->phone}}" disabled  id="exampleFormControlInput1" required placeholder="phone">
                                            </div>
                                            @error('phone')
                                            <div class="error" style="color: red">{{ $message }}</div>
                                            @enderror
                                            <br>
                                            <div class="text-center">
                                                <button class="btn-buy "><i class="fa-regular fa-credit-card"></i> Buy now</button>
                                            </div>
                                        </form>
                                    </div>
                                @endauth
                        </div>
                    </div>

                </div>
                <div class="col-sm-4 ">
                    <div class="card text-center mobile-only" style="width: 20rem;padding: 10px;">
                        <img src="{{ asset('frontend/images/121.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5>Inventory management for restaurants and cafes for beginners</h5>
                            <div  id="couponCalField">

                            </div>
                            @auth
                                @if (auth()->user()->subscribed == 5)
                                    <p style="color: #045752;">You are already subscribed, you can watch the course</p>
                                    <a href="{{ url('/videos') }}"><button class="btn-buy2" type="button">Watch the course</button></a>
                                @else
                                    <div class="input-group mb-3 form-control" id="couponField">
                                        <input type="text" class="form-control discount" placeholder="Do you have a discount code?"
                                               id="coupon_name">
                                        <button class="btn" id="dis" type="button" onclick="applyCoupon()">apply</button>
                                    </div>


                                    <form action="{{ route('purchase') }}" method="post">
                                        @csrf
                                        <button class="btn-buy"><i class="fa-regular fa-credit-card"></i> Buy now</button>
                                    </form>
                                @endif
                            @endauth
                            @guest

                                <div class="input-group mb-3 form-control" id="couponField">
                                    <input type="text" class="form-control discount" placeholder="Do you have a discount code?"
                                           id="coupon_name">
                                    <button class="btn" id="dis" type="button" onclick="applyCoupon()">apply</button>
                                </div>
                                <button class="btn-buy" type="submit" id="call" onclick="buyme()"><i class="fa-regular fa-credit-card"></i> Buy now</button>
                            @endguest



                        </div>
                    </div>

                </div>
            </div>
        </div>
        <br>


    @endif

    <script>
        document.getElementById("scrollButton").addEventListener("click", function() {
            const targetDiv = document.getElementById("targetDiv1"); // Change to the desired target div
            targetDiv.scrollIntoView({ behavior: "smooth" });
        });


    </script>

    <script>
        document.getElementById("scrollButton2").addEventListener("click", function() {
            const targetDiv = document.getElementById("targetDiv2"); // Change to the desired target div
            targetDiv.scrollIntoView({ behavior: "smooth" });
        });
    </script>

@endsection
