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
    <div class="container card-page my-5">

        <div class="row">

            <div class="col-sm-12">
                <div class="card mb-3">
                    <div class="card-header">
                      الاسم
                    </div>
                    <div class="card-body">
                      <blockquote class="blockquote mb-0">
                        <p>{{$name}}</p>
                       
                      </blockquote>
                    </div>
                  </div>
                  <div class="card mb-3">
                    <div class="card-header">
                      الايميل
                    </div>
                    <div class="card-body">
                      <blockquote class="blockquote mb-0">
                           <p>{{$email}}</p>
 
                      </blockquote>
                    </div>
                  </div>
 
                  <div class="card mb-3">
                    <div class="card-header">
                      عدد الدورات المشترك فيها
                    </div>
                    <div class="card-body">
                      <blockquote class="blockquote mb-0">
 
                        @if( auth()->user()->subscribed == 5)
                        <p>1</p>
                        @else 
                        <p>0</p>
                        @endif
                       
                      </blockquote>
                    </div>
                  </div>
                {{-- <h3 style="text-align: center;">معلومات الحساب</h3>
                <br>
                <div class="card-body text-center" style="align-self: center">

                    <form method="POST" action="">
                        @csrf

                        <label for="email" class="mb-2">الاسم الكامل</label>
                        <input class="form-control" type="text" name="name" value="">
                        @if ($errors->any('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                        <br>
                        <label for="email" class="mb-2">الايميل</label>
                        <input class="form-control mb-5" type="email" name="email" value="">
                        @if ($errors->any('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                        <input type="text" value="Hello World" id="myInput">

   
                        <button onclick="myFunction()">Copy text</button>
                        <br>
                        <button type="submit" class="btn btn-login mb-5">UPDATE</button>

                    </form>
                </div> --}}
            </div>

        </div>
    </div>


@endsection
