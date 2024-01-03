
@extends('frontend.layouts.master_en')
@section('content')

    <header class="top-s">
        <div class="container">
            <span>Services / Payment Terminal</span>
            <div class="title">
                <h1 class="fw-bold">Payment Terminal
                </h1>
            </div>

        </div>
    </header>


    <!-- main -->

    <div class="container">
        <div class="main-content row">
            <div class="col-sm-6">
                <div class="mt-5 pt-5">
                    <h1> What is accounting and finance software for restaurants?</h1><br>
                    <p>

                        Restaurant accounting and finance tallies, tracks, and ultimately optimizes every dollar that comes in and leaves your restaurant. Keeping that record — of transactions, tips, payroll, inventory and more — will let you keep your business humming along, while providing data that you can use to analyze your restaurant’s performance and make it more profitable. Without the right systems in place, keeping track of revenue and expenses can be an incredibly burdensome task for restaurant operators. The right accounting software solution will be tailored specifically to the needs of restaurant operators, helping to make sure all your data is seamlessly tracked in one place, giving you efficient, accessible insights into your finances.
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
        <h1>TOP SERVICE
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
                                <div class="content">
                                    <h2>Foodics
                                        <span> <i class="fa-sharp fa-solid fa-star" style="color: black"></i> 5.0</span>
                                    </h2>
                                    <p>  Foodics offers a cloud-based, all-in-one Restaurant Management System and Point of Sale solution that restaurant owners can access from their iPad quickly and in multiple languages.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="images"><img src="{{asset('frontend/images/89.png')}}" alt="" srcset=""></div>
                            </div>
                            <div class="col-sm-8">
                                <div class="content">
                                    <h2>Geidea

                                        <span> <i class="fa-sharp fa-solid fa-star" style="color: black"></i> 5.0</span>
                                    </h2>
                                    <p>  The new way to accept all types of payments and
                                        manage your entire business. </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="images"><img src="{{asset('frontend/images/323.png')}}" alt="" srcset=""></div>
                            </div>
                            <div class="col-sm-8">
                                <div class="content">
                                    <h2>Neoleap
                                        <span> <i class="fa-sharp fa-solid fa-star" style="color: black"></i> 5.0</span>
                                    </h2>
                                    <p> A leading financial technology company whose role is to develop the personal and business sector to be more secure and growing
                                        .</p>
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
