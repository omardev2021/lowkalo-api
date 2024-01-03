@extends('frontend.layouts.master_en')
@section('content')
    <br>
    <div class="container-fluid box text-center ">
        <h1 class="title-big"> Course Details </h1>
        <hr style="opacity: 1;color:#00E6A7; width: 120px; margin: auto; height: 8px;border-width:4px">


    </div>
    <br>
    <div class="container" >
        <div class="row ">
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-6">
                        <div class="row">
                            <div class="col-4">
                                <h5 class="co">Section</h5>
                                <p class="co2">Cafes and restaurants</p>
                            </div>
                            <div class="col-4">
                                <h5 class="co">Level</h5>
                                <p class="co2">All levels</p>
                            </div>
                            <div class="col-4">
                                <h5 class="co">Duration of the course</h5>
                                <p class="co2">01:30:00</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-6">

                    </div>

                </div>


                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active co" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                                type="button" role="tab" aria-controls="home" aria-selected="true"
                                style="color: black;">Course Details</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link co" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                                type="button" role="tab" aria-controls="profile" aria-selected="false"
                                style="color: black;">Course topics</button>
                    </li>
                    @guest
                        <li class="nav-item" role="presentation">
                            <button class="nav-link co" id="buy-tab" data-bs-toggle="tab" data-bs-target="#buy"
                                    type="button" role="tab" aria-controls="profile" aria-selected="false"
                                    style="color: black;">Buy the course</button>
                        </li>
                    @endguest
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
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <br>
                        <div>
                            <div class="c-d" style="padding: 20px">
<style>
    .co {
  font-family: 'myFirstFont', sans-serif;
    color: #150a42;

font-weight: bold;

}
.co2 {
  font-family: 'myFirstFont', sans-serif;
  color: gray;
}
</style>

                                <h4 class="co"> About the course </h4>
                                <p class="co2">One of the most important elements in any restaurant and the main nerve of the success of restaurants and cafes is knowing the costs and movement of inventory materials for products. Through my work on the development of many restaurants and cafes and my interview with many entrepreneurs in this field, the inventory management process does not receive sufficient attention, especially the waste operations that occur in the restaurant.
                                </p>
                                <h4 class="co"> In this course we talk about </h4>


                                <ul class="mx-4">
                                    <li class="co2">Understand the food cost ratio and its impact on profits.
                                    </li>
                                    <li class="co2">Different wastages in inventory management process with examples.
                                    </li>
                                    <li class="co2">Estimate the volume of purchases.</li>
                                    <li class="co2">Menu Engineering or the Menu Engineering and its four classifications and how to benefit from them.</li>
                                    <li class="co2"> Knowing the cost of products and if they are fully and correctly consumed.</li>
                                    <li class="co2">Create advertising and marketing campaigns based on sales data.
                                    </li>
                                    <li class="co2">The difficulty of maintaining a healthy and balanced profit margin without careful monitoring of food consumption inside the restaurant / coffee shop.</li>
                                    <li class="co2">Knowing the cost and levels of products and if they are fully and correctly consumed.</li>



                                </ul>
                                <br>
                                <h4 class="co"> Requirements to complete the course </h4>
                                <p class="co2">Full mental presence, no previous experience or information is required. The course can be completed
                                    At the time and period convenient for you (the course is online) </p>
                                <br>

                                <h4 class="co"> For whom this course </h4>


                                <ul class="mx-3">
                                    <li class="co2">Owners of small and medium-sized restaurants and cafes.</li>
                                    <li class="co2">For managers and employees in the restaurants and cafes sector.
                                    </li>
                                    <li class="co2">Employees in technology companies related to the restaurants and cafes sector.</li>
                                    <li class="co2"> People interested in entering the field of managing restaurants and cafes.</li>

                                </ul>

                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <br>
                        <h4 class="co">Lessons and course topics</h4>
                        <div>
                            <ul class="accordion">
                                <li>
                                    <input type="radio" name="accordion" id="first" checked>
                                    <label class="label2 co" for="first">الدرس الاول - المقدمة للكورس </label>
                                    <div class="content">
                                        <div class="d-flex">
                                            <div style="margin-right: 75%">
                                                <i class="fa-solid fa-circle-play"></i><span class="co2"> المقدمة - الجزء
                                                    الأول</span>
                                            </div>
                                            <div>
                                                <i class="fa-sharp fa-solid fa-lock"></i>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="d-flex">
                                            <div style="margin-right: 58%">
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
                                            <div style="margin-right: 70%">

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
                                            <div style="margin-right: 58%">
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
                                            <div style="margin-right: 58%">
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
                                            <div style="margin-right: 57.5%">
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
                                            <div style="margin-right: 38.5%">
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
                                            <div style="margin-right: 51.5%">
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
                                            <div style="margin-right: 64.5%">
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
                                            <div style="margin-right: 60%">
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
                                            <div style="margin-right: 75%">
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
                                            <div style="margin-right: 68.5%">
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
                                            <div style="margin-right: 63%">
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
                                            <div style="margin-right: 84%">
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
                    <div class="tab-pane fade" id="buy" role="tabpanel" aria-labelledby="buy-tab">
                        <br>
                        <h4 class="co">Buy the course</h4>

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
                </div>

            </div>
            <div class="col-sm-4 ">
                <div class="card text-center " style="width: 20rem;padding: 10px;">
                    <img src="{{ asset('frontend/images/121.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5>Inventory Management Course</h5>
                        <div  id="couponCalField">

                        </div>
                        @auth
                            @if (auth()->user()->subscribed == 5)
                                <p style="color: #045752;">you are already subscribed, you can watch the course</p>
                                <a href="{{ url('/videos') }}"><button class="btn-buy2" type="button">Watch the course</button></a>
                            @else
                                <div class="input-group mb-3 form-control" id="couponField">
                                    <input type="text" class="form-control discount" placeholder="هل تمتلك كود تخفيض ؟"
                                           id="coupon_name">
                                    <button class="btn" id="dis" type="button" onclick="applyCoupon()">Apply</button>
                                </div>


                                <form action="{{ route('purchase') }}" method="post">
                                    @csrf
                                    <button class="btn-buy"><i class="fa-regular fa-credit-card"></i> Buy the course</button>
                                </form>
                            @endif
                        @endauth
                        @guest

                            <div class="input-group mb-3 form-control" id="couponField">
                                <input type="text" class="form-control discount" placeholder="هل تمتلك كود تخفيض ؟"
                                       id="coupon_name">
                                <button class="btn" id="dis" type="button" onclick="applyCoupon()">Apply</button>
                            </div>
                            <button class="btn-buy" type="submit" id="call" onclick="buyme()"><i class="fa-regular fa-credit-card"></i> Buy now!</button>
                        @endguest



                    </div>
                </div>

            </div>
        </div>
    </div>
    <br>


@endsection
