@extends('frontend.layouts.master')
@section('content')

    <header class="top-s">
        <div class="container">

            <span>الخدمات/إدارة طلبات التوصيل</span>
            <div class="title">
                <h1 class="fw-bold">إدارة طلبات التوصيل
                </h1>
            </div>

        </div>
    </header>


    <!-- main -->

    <div class="container">
        <div class="main-content row">
            <div class="col-sm-6">
                <div class="mt-5 pt-5">
                    <h1>ما هو برنامج المحاسبة والتمويل للمطاعم؟</h1><br>
                    <p>

                        تقوم محاسبة المطعم والتمويل بإحصاءات وتتبع وتحسين كل دولار يأتي ويخرج من مطعمك. سيتيح لك الاحتفاظ بهذا السجل - من المعاملات والنصائح وكشوف المرتبات والمخزون والمزيد - الحفاظ على نشاطك التجاري ، مع توفير البيانات التي يمكنك استخدامها لتحليل أداء مطعمك وجعله أكثر ربحية. بدون وجود الأنظمة المناسبة ، يمكن أن يكون تتبع الإيرادات والمصروفات مهمة مرهقة للغاية لمشغلي المطاعم. سيتم تصميم حل برنامج المحاسبة المناسب خصيصًا لتلبية احتياجات مشغلي المطاعم ، مما يساعد على التأكد من تتبع جميع بياناتك بسلاسة في مكان واحد ، مما يمنحك رؤى فعالة وسهلة الوصول إلى أموالك.
                    </p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="main-content-img">
                    <img src="{{asset('frontend/images/pexels-ron-lach-8879381_bi0fad.webp')}}" alt="" srcset="">
                </div>
            </div>
        </div>
    </div>


    <!-- end main  -->
    <div class="container my-5 p-5">
        <h1>افضل الخدمات
            <br>
            <hr style="opacity: 1;color:black; width: 120px; height: 8px;border-width:4px">

        </h1>

        <div class="row">
            <div class="col-sm-8">
                <div class="card border-0" >

                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="images"><img src="{{asset('frontend/images/a1.webp')}}" alt="" srcset=""></div>
                            </div>
                            <div class="col-sm-8">
                                <div class="content" style="text-align: right">

                                <h2>أوتو

                                        <span> <i class="fa-sharp fa-solid fa-star" style="color: black"></i> 5.0</span>
                                    </h2>
                                    <p>أوتو هي بوابة الشحن الاولى في الشرق الأوسط للمتاجر الإلكترونية وتجار التجزئة
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="images"><img src="{{asset('frontend/images/a2.webp')}}" alt="" srcset=""></div>
                            </div>
                            <div class="col-sm-8">
                                <div class="content" style="text-align: right">

                                <h2>أوردر لورد

                                        <span> <i class="fa-sharp fa-solid fa-star" style="color: black"></i> 5.0</span>
                                    </h2>
                                    <p>  نظام متكامل لإدارة طلبات التّوصيل.

                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="images"><img src="{{asset('frontend/images/a3.webp')}}" alt="" srcset=""></div>
                            </div>
                            <div class="col-sm-8">
                                <div class="content" style="text-align: right">

                                <h2>جيت سويفت


                                    <span> <i class="fa-sharp fa-solid fa-star" style="color: black"></i> 5.0</span>
                                    </h2>
                                    <p> نظام متقن لإدارة السّائقين والطّرقات.



                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                    {{--                    here--}}
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="images"><img src="{{asset('frontend/images/m10.webp')}}" alt="" srcset=""></div>
                            </div>
                            <div class="col-sm-8">
                                <div class="content" style="text-align: right">

                                <h2>يالو
                                        <span> <i class="fa-sharp fa-solid fa-star" style="color: black"></i> 5.0</span>
                                    </h2>
                                    <p> نظام إدارة خدمة التوصيل ومتجر لخدمات التوصيل
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="images"><img src="{{asset('frontend/images/m11.webp')}}" alt="" srcset=""></div>
                            </div>
                            <div class="col-sm-8">
                                <div class="content" style="text-align: right">

                                <h2>Tookan
                                        <span> <i class="fa-sharp fa-solid fa-star" style="color: black"></i> 5.0</span>
                                    </h2>
                                    <p> نحو إدارة فعالة وآلية لخدمات التوصيل

                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="images"><img src="{{asset('frontend/images/m12.webp')}}" alt="" srcset=""></div>
                            </div>
                            <div class="col-sm-8">
                                <div class="content" style="text-align: right">

                                <h2>لأجلك اللوجستية


                                    <span> <i class="fa-sharp fa-solid fa-star" style="color: black"></i> 5.0</span>
                                    </h2>
                                    <p> على بعد ضغطة زر واحدة
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="images"><img src="{{asset('frontend/images/m13.webp')}}" alt="" srcset=""></div>
                            </div>
                            <div class="col-sm-8">
                                <div class="content" style="text-align: right">

                                <h2>ويغو


                                        <span> <i class="fa-sharp fa-solid fa-star" style="color: black"></i> 5.0</span>
                                    </h2>
                                    <p>منصة لإدارة خدمة التوصيل في المطاعم
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="images"><img src="{{asset('frontend/images/m14.webp')}}" alt="" srcset=""></div>
                            </div>
                            <div class="col-sm-8">
                                <div class="content" style="text-align: right">

                                <h2>دووك
                                        <span> <i class="fa-sharp fa-solid fa-star" style="color: black"></i> 5.0</span>
                                    </h2>
                                    <p> نظّم عمليّات التّوصيل في مطعمك بمنتهى السّهولة

                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="images"><img src="{{asset('frontend/images/m15.webp')}}" alt="" srcset=""></div>
                            </div>
                            <div class="col-sm-8">
                                <div class="content" style="text-align: right">

                                <h2>يسوى
                                        <span> <i class="fa-sharp fa-solid fa-star" style="color: black"></i> 5.0</span>
                                    </h2>
                                    <p> خدمة التّوصيل بضغطة زرّ.

                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="images"><img src="{{asset('frontend/images/m16.jpg')}}" alt="" srcset=""></div>
                            </div>
                            <div class="col-sm-8">
                                <div class="content" style="text-align: right">

                                <h2>مشكور
                                        <span> <i class="fa-sharp fa-solid fa-star" style="color: black"></i> 5.0</span>
                                    </h2>
                                    <p> اطلب من
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="images"><img src="{{asset('frontend/images/m17.jpg')}}" alt="" srcset=""></div>
                            </div>
                            <div class="col-sm-8">
                                <div class="content" style="text-align: right">

                                <h2>سيرفو
                                        <span> <i class="fa-sharp fa-solid fa-star" style="color: black"></i> 5.0</span>
                                    </h2>
                                    <p> لسنا الوحيدين، لكننا متميزين
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

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

@endsection
