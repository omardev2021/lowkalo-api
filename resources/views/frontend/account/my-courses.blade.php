@extends('frontend.layouts.master')
@section('content')
<div class="" style="background: #f1f1f1;padding: 10px">
    <div class="container pages d-flex ">

        <li class="nav-item" style="border:none;list-style: none;">
            <a class="nav-link my-2 mx-3 " href="{{route('account')}}" style="font-size:16px;">حسابي</a>
        </li>
        <li class="nav-item" style="border:none;list-style: none">
            <a class="nav-link my-2 mx-3" href="{{route('courses')}}" style="font-size:16px">دوراتي</a>
        </li>
        <li class="nav-item" style="border:none;list-style: none">
            <a class="nav-link my-2 mx-3" href="{{route('bookings')}}"style="font-size:16px">حجوزاتي</a>
        </li>
        {{-- <li class="nav-item" style="border:none;list-style: none">
            <a class="nav-link my-2 mx-3" href="" style="font-size:16px;decoration:">حذف
                الحساب</a>
        </li> --}}

        <li class="nav-item" style="border:none;list-style: none">
          <form method="POST" action="{{ route('logout') }}" x-data>
            @csrf
 
                <a class="nav-link my-2 mx-3" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                this.closest('form').submit();">تسجيل
                    الخروج
                </a>


        </form>
        </li>

    </div>

</div>



    <br>
    <div class="container-fluid box text-center ">
        <!-- <img src="/images/cc.png" alt="" srcset="" class="img-pos d-none d-sm-block"> -->
        <h1> دوراتي </h1>
        <hr style="opacity: 1;color:#C3DCE3; width: 120px; margin: auto; height: 8px;border-width:4px">


    </div>
    <br>
    <div class="container card-page my-5" style="padding: 20px">
        @if( auth()->user()->subscribed == 5)

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">اسم الدورة</th>
                    <th scope="col">مشاهدة الدورة</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <th scope="row">١</th>
                    <td>دورة ادارة المطاعم والكافيهات</td>
                    <td><a href="{{url('/videos/1')}}"><button class="btn-buy">مشاهدة</button></a></td>
 

                </tr>




            </tbody>
        </table>
        @else 

        <div class="row py-2">
            <div class="text-center">
                <img src="{{ asset('frontend/images/15.png') }}" class="img-fluid " width="200" height="200" alt="">
                <h1 class="my-4">لم يتم الاشتراك في اي دورة بعد</h1>
        
          
        
        
            </div>
        </div>

        @endif
    </div>

    </div>
@endsection
