
@extends('frontend.layouts.master')
@section('content')

    <header class="top-s">
        <div class="container">

            <span>الخدمات/تخطيط موارد المؤسسات</span>
            <div class="title">
                <h1 class="fw-bold">تخطيط موارد المؤسسات
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
                                <div class="images"><img src="{{asset('frontend/images/80.jpg')}}" alt="" srcset=""></div>
                            </div>
                            <div class="col-sm-8">
                                <div class="content" style="text-align: right">
                                    <h2>دفاتر
                                        <span> <i class="fa-sharp fa-solid fa-star" style="color: black"></i> 5.0</span>
                                    </h2>
                                    <p>دفاتر: البرنامج المحاسبي الأسهل والأقل تكلفة
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="images"><img src="{{asset('frontend/images/81.jpg')}}" alt="" srcset=""></div>
                            </div>
                            <div class="col-sm-8">
                                <div class="content" style="text-align: right">
                                    <h2>مايكروتك
                                        <span> <i class="fa-sharp fa-solid fa-star" style="color: black"></i> 5.0</span>
                                    </h2>
                                    <p>  نظام محاسبي متطور لإدارة الموارد المؤسسية
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="images"><img src="{{asset('frontend/images/82.webp')}}" alt="" srcset=""></div>
                            </div>
                            <div class="col-sm-8">
                                <div class="content" style="text-align: right">
                                    <h2>كسب
                                        <span> <i class="fa-sharp fa-solid fa-star" style="color: black"></i> 5.0</span>
                                    </h2>
                                    <p>  منصة سحابية محاسبية للشركات</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="images"><img src="{{asset('frontend/images/m23.jpg')}}" alt="" srcset=""></div>
                            </div>
                            <div class="col-sm-8">
                                <div class="content" style="text-align: right">
                                    <h2>Oditar ERP
                                        <span> <i class="fa-sharp fa-solid fa-star" style="color: black"></i> 5.0</span>
                                    </h2>
                                    <p> نظام سحابي للشركات الصغيرة والناشئة

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
