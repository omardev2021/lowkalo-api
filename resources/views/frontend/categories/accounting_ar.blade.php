@extends('frontend.layouts.master')
@section('content')

    <header class="top-s">
        <div class="container">
            <span>الخدمات/المحاسبة</span>
            <div class="title">
                <h1 class="fw-bold">المحاسبة
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

                    <div class="card-body" >
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="images"><img src="{{asset('frontend/images/4.jpg')}}" alt="" srcset=""></div>
                            </div>
                            <div class="col-sm-8">
                                <div class="content" style="text-align: right">
                                    <h2>دفاتر
                                        <span> <i class="fa-sharp fa-solid fa-star" style="color: black"></i> 5.0</span>
                                    </h2>
                                    <p>  دفاتر هي شركة تكنولوجيا متخصصة
                                        في تقديم الحلول الرقمية لإدارة موارد المؤسسة
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="images"><img src="{{asset('frontend/images/5.webp')}}" alt="" srcset=""></div>
                            </div>
                            <div class="col-sm-8">
                                <div class="content" style="text-align: right">
                                    <h2>قيود

                                        <span> <i class="fa-sharp fa-solid fa-star" style="color: black"></i> 5.0</span>
                                    </h2>
                                    <p>  برنامج محاسبة يدير أعمالك بكفاءة ، ويصدر تقارير دقيقة تساعدك في اتخاذ القرارات الصحيحة لشركتك. </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="images"><img src="{{asset('frontend/images/31.png')}}" alt="" srcset=""></div>
                            </div>
                            <div class="col-sm-8">
                                <div class="content" style="text-align: right">
                                    <h2>Xero
                                        <span> <i class="fa-sharp fa-solid fa-star" style="color: black"></i> 5.0</span>
                                    </h2>
                                    <p>  يوصلك برنامج المحاسبة Xero عبر الإنترنت لعملك إلى البنك والمحاسب ومحاسب الحسابات وتطبيقات الأعمال الأخرى.</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="images"><img src="{{asset('frontend/images/m1.jpg')}}" alt="" srcset=""></div>
                            </div>
                            <div class="col-sm-8">
                                <div class="content" style="text-align: right">
                                    <h2>سند
                                        <span> <i class="fa-sharp fa-solid fa-star" style="color: black"></i> 5.0</span>
                                    </h2>
                                    <p> أعطي عملك الوقت والتركيز وأترك الأمور المحاسبية علينا
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="images"><img src="{{asset('frontend/images/m2.jpg')}}" alt="" srcset=""></div>
                            </div>
                            <div class="col-sm-8">
                                <div class="content" style="text-align: right">
                                    <h2>فوم
                                        <span> <i class="fa-sharp fa-solid fa-star" style="color: black"></i> 5.0</span>
                                    </h2>
                                    <p>  نظام محاسبة سحابي يسير الاستخدام للجميع

                                        </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="images"><img src="{{asset('frontend/images/m3.jpg')}}" alt="" srcset=""></div>
                            </div>
                            <div class="col-sm-8">
                                <div class="content" style="text-align: right">
                                    <h2>وافق
                                        <span> <i class="fa-sharp fa-solid fa-star" style="color: black"></i> 5.0</span>
                                    </h2>
                                    <p> برنامج محاسبة سريع وحديث وقوي.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="images"><img src="{{asset('frontend/images/m4.webp')}}" alt="" srcset=""></div>
                            </div>
                            <div class="col-sm-8">
                                <div class="content" style="text-align: right">
                                    <h2>برنامج عدد المحاسبي
                                        <span> <i class="fa-sharp fa-solid fa-star" style="color: black"></i> 5.0</span>
                                    </h2>
                                    <p>  الجودة والدقة يجعل عدد خيارك الأفضل
                                        .</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="images"><img src="{{asset('frontend/images/m5.jpg')}}" alt="" srcset=""></div>
                            </div>
                            <div class="col-sm-8">
                                <div class="content" style="text-align: right">
                                    <h2>أكاونتينغ
                                        <span> <i class="fa-sharp fa-solid fa-star" style="color: black"></i> 5.0</span>
                                    </h2>
                                    <p> برنامج محاسبة سحابي مخصص للشركات الصغيرة والمتوسطة
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="images"><img src="{{asset('frontend/images/m6.webp')}}" alt="" srcset=""></div>
                            </div>
                            <div class="col-sm-8">
                                <div class="content" style="text-align: right">
                                    <h2>كويك بوكس
                                        <span> <i class="fa-sharp fa-solid fa-star" style="color: black"></i> 5.0</span>
                                    </h2>
                                    <p> برنامج محاسبة عالمي لكلّ القطاعات
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="images"><img src="{{asset('frontend/images/m7.jpg')}}" alt="" srcset=""></div>
                            </div>
                            <div class="col-sm-8">
                                <div class="content" style="text-align: right">
                                    <h2>مكليدجر
                                        <span> <i class="fa-sharp fa-solid fa-star" style="color: black"></i> 5.0</span>
                                    </h2>
                                    <p> ركز على تنمية أعمالك واترك دفاترك علينا!
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
