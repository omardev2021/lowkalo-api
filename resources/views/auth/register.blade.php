@extends('frontend.layouts.master')
@section('content')
    <br>

    <br>
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-sm-6 a">
                <img src="{{ asset('frontend/images/image 12.png') }}" alt="" srcset="" class="img-fluid">
            </div>
            <div class="col-sm-6">
                {{--                <x-jet-validation-errors class="mb-4" />--}}
                <h4>تسجيل جديد</h4>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example1">الاسم </label>
                        <input type="text" name="name" id="form2Example1" class="form-control w-50" />

                    </div>
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example1">البريد الالكتروني</label>
                        <input type="email" name="email" id="form2Example1" class="form-control w-50" />

                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example1">رقم الجوال</label>
                        <input type="text" name="phone" id="form2Example1" class="form-control w-50" />

                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example2">كلمة المرور</label>
                        <input type="password" name="password" id="form2Example2" class="form-control w-50" />

                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example2">تأكيد كلمة المرور</label>
                        <input type="password" name="password_confirmation" id="form2Example2" class="form-control w-50" />

                    </div>


                    <!-- Submit button -->
                    <button type="submit" class="btn-bg btn-block mb-4"> تسجيل</button>

                </form>
            </div>
        </div>
    </div>
@endsection
