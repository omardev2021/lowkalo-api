
@extends('frontend.layouts.master')
@section('content')

    <header class="top-s">
        <div class="container">

            <span>الخدمات/الطلب عبر الانترنت</span>
            <div class="title">
                <h1 class="fw-bold">الطلب عبر الانترنت
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
                                <div class="images"><img src="{{asset('frontend/images/c-1.png')}}" alt="" srcset=""></div>
                            </div>
                            <div class="col-sm-8">
                                <div class="content" style="text-align: right">
                                    <h2>فودكس
                                        <span> <i class="fa-sharp fa-solid fa-star" style="color: black"></i> 5.0</span>
                                    </h2>
                                    <p>  تقدم Foodics نظام إدارة مطاعم شاملًا قائمًا على السحابة وحل نقاط البيع التي يمكن لأصحاب المطاعم الوصول إليها من جهاز iPad الخاص بهم بسرعة وبلغات متعددة.

                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="images"><img src="{{asset('frontend/images/9.webp')}}" alt="" srcset=""></div>
                            </div>
                            <div class="col-sm-8">
                                <div class="content" style="text-align: right">                                    <h2>أي ويتر
                                        <span> <i class="fa-sharp fa-solid fa-star" style="color: black"></i> 5.0</span>
                                    </h2>
                                    <p>  أنشئ موقع مطعمك في ثلاث خطوات


                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="images"><img src="{{asset('frontend/images/ch.jpg')}}" alt="" srcset=""></div>
                            </div>
                            <div class="col-sm-8">
                                <div class="content" style="text-align: right">                                    <h2>تشات فود
                                        <span><i class="fa-sharp fa-solid fa-star" style="color: black"></i> 5.0</span>
                                    </h2>
                                    <p>  الحل المتميز للطلب متعدد القنوات والتسويق المعتمد على البيانات

                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                    {{--                    hoem--}}
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="images"><img src="{{asset('frontend/images/v1.jpg')}}" alt="" srcset=""></div>
                            </div>
                            <div class="col-sm-8">
                                <div class="content" style="text-align: right">                                    <h2>سلايد


                                        <span> <i class="fa-sharp fa-solid fa-star" style="color: black"></i> 5.0</span>
                                    </h2>
                                    <p> ابدأ مبيعاتك على منصات التواصل الاجتماعي

                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="images"><img src="{{asset('frontend/images/v2.jpg')}}" alt="" srcset=""></div>
                            </div>
                            <div class="col-sm-8">
                                <div class="content" style="text-align: right">                                    <h2>أرابوت


                                        <span> <i class="fa-sharp fa-solid fa-star" style="color: black"></i> 5.0</span>
                                    </h2>
                                    <p> باشر البيع على الواتساب الآن
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="images"><img src="{{asset('frontend/images/v3.jpg')}}" alt="" srcset=""></div>
                            </div>
                            <div class="col-sm-8">
                                <div class="content" style="text-align: right">                                    <h2>موبيلزر


                                        <span> <i class="fa-sharp fa-solid fa-star" style="color: black"></i> 5.0</span>
                                    </h2>
                                    <p> أنشئ تطبيق الجوال وموقع مطعمك في دقائق وليس في شهور

                                        .</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="images"><img src="{{asset('frontend/images/v4.webp')}}" alt="" srcset=""></div>
                            </div>
                            <div class="col-sm-8">
                                <div class="content" style="text-align: right">                                    <h2>أوردر


                                        <span> <i class="fa-sharp fa-solid fa-star" style="color: black"></i> 5.0</span>
                                    </h2>
                                    <p> موقعك الخاصّ وتطبيقك لتلقّي الطّلبات


                                        .</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="images"><img src="{{asset('frontend/images/v5.jpg')}}" alt="" srcset=""></div>
                            </div>
                            <div class="col-sm-8">
                                <div class="content" style="text-align: right">                                    <h2>كوكب


                                        <span> <i class="fa-sharp fa-solid fa-star" style="color: black"></i> 5.0</span>
                                    </h2>
                                    <p> الوسيلة الأمثل لاستقبال طلبات عملائك أونلاين.

                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="images"><img src="{{asset('frontend/images/v6.webp')}}" alt="" srcset=""></div>
                            </div>
                            <div class="col-sm-8">
                                <div class="content" style="text-align: right">                                    <h2>مكافآت


                                        <span> <i class="fa-sharp fa-solid fa-star" style="color: black"></i> 5.0</span>
                                    </h2>
                                    <p> برنامج ولاء فعّال لشركتك
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="images"><img src="{{asset('frontend/images/v7.jpg')}}" alt="" srcset=""></div>
                            </div>
                            <div class="col-sm-8">
                                <div class="content" style="text-align: right">                                    <h2>فودر


                                        <span> <i class="fa-sharp fa-solid fa-star" style="color: black"></i> 5.0</span>
                                    </h2>
                                    <p> أفضل حل للتسويق واستلام الطلبات عبر الواتساب


                                        .</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="images"><img src="{{asset('frontend/images/v8.webp')}}" alt="" srcset=""></div>
                            </div>
                            <div class="col-sm-8">
                                <div class="content" style="text-align: right">                                    <h2>راديس


                                        <span> <i class="fa-sharp fa-solid fa-star" style="color: black"></i> 5.0</span>
                                    </h2>
                                    <p> المحرك الأمثل لتجارتك الرقمية
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="images"><img src="{{asset('frontend/images/v9.webp')}}" alt="" srcset=""></div>
                            </div>
                            <div class="col-sm-8">
                                <div class="content" style="text-align: right">                                    <h2>مبشر


                                        <span> <i class="fa-sharp fa-solid fa-star" style="color: black"></i> 5.0</span>
                                    </h2>
                                    <p> منيو عبر رموز الاستجابة السريعة ونادل افتراضي


                                        .</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="images"><img src="{{asset('frontend/images/v10.jpg')}}" alt="" srcset=""></div>
                            </div>
                            <div class="col-sm-8">
                                <div class="content" style="text-align: right">                                    <h2>منصتي


                                        <span> <i class="fa-sharp fa-solid fa-star" style="color: black"></i> 5.0</span>
                                    </h2>
                                    <p> أنشئ متجرك الإلكتروني خلال ٢٤ ساعة.


                                        </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="images"><img src="{{asset('frontend/images/v11.webp')}}" alt="" srcset=""></div>
                            </div>
                            <div class="col-sm-8">
                                <div class="content" style="text-align: right">                                    <h2>روت


                                        <span> <i class="fa-sharp fa-solid fa-star" style="color: black"></i> 5.0</span>
                                    </h2>
                                    <p> منصة للتسويق والطلب عبر الإنترنت (أونلاين)


                                        .</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="images"><img src="{{asset('frontend/images/v12.webp')}}" alt="" srcset=""></div>
                            </div>
                            <div class="col-sm-8">
                                <div class="content" style="text-align: right">                                    <h2>تيكر


                                        <span> <i class="fa-sharp fa-solid fa-star" style="color: black"></i> 5.0</span>
                                    </h2>
                                    <p> نظام متطوّر للطّلبات عبر الإنترنت.

                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="images"><img src="{{asset('frontend/images/v13.jpg')}}" alt="" srcset=""></div>
                            </div>
                            <div class="col-sm-8">
                                <div class="content" style="text-align: right">                                    <h2>أوكي منيو


                                        <span> <i class="fa-sharp fa-solid fa-star" style="color: black"></i> 5.0</span>
                                    </h2>
                                    <p> الحل الأسهل لإدارة الطلبات والمدفوعات عبر الإنترنت

                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="images"><img src="{{asset('frontend/images/z.webp')}}" alt="" srcset=""></div>
                            </div>
                            <div class="col-sm-8">
                                <div class="content" style="text-align: right">                                    <h2>Zyda


                                        <span> <i class="fa-sharp fa-solid fa-star" style="color: black"></i> 5.0</span>
                                    </h2>
                                    <p> تدعم زيدا المطاعم لتقديم تجربة الطلب المباشر عبر الإنترنت.


                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="images"><img src="{{asset('frontend/images/or4.jpg')}}" alt="" srcset=""></div>
                            </div>
                            <div class="col-sm-8">
                                <div class="content" style="text-align: right">                                    <h2>اوردبل




                                        <span> <i class="fa-sharp fa-solid fa-star" style="color: black"></i> 5.0</span>
                                    </h2>
                                    <p>أطلق متجرك الالكتروني اليوم!



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
