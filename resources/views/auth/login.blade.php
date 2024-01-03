@extends('frontend.layouts.master')
@section('content')

    <br>
    <br>
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-sm-6 a">
                <img src="https://lowkalo.com/frontend/images/image 12.png" alt="" srcset="" class="img-fluid">

            </div>
            <div class="col-sm-6">
                <h4>تسجيل دخول</h4>

                <form method="POST" action="{{route('login')}}">
                    @csrf
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example1">البريد الالكتروني</label>
                        <input type="email" id="form2Example1" name="email" class="form-control w-50">

                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example2">كلمة المرور</label>
                        <input type="password" id="form2Example2" name="password" class="form-control w-50">

                    </div>


                    <!-- Submit button -->
                    <button type="submit" class="btn-bg btn-block mb-4"> دخول</button>

                </form>
            </div>
        </div>
    </div>




@endsection
