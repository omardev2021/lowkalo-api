@extends('frontend.layouts.master')
@section('content')
    <div class="container" dir="ltr">
        <div class="row py-5">
            <div class="text-center">
                <img src="{{ asset('frontend/images/4.png') }}" class="img-fluid w-25" alt="">
                <h1 class="my-4">شكرا لك!</h1>
                <h3 class="mb-5">تمت عملية الدفع بنجاح</h3>
                <a href="{{ route('account') }}"> <button class="btn-bg mx-3" type="button">الانتقال الى حسابي</button></a>


             <a href="{{ route('home') }}">    <button class="btn-bg mx-3" type="button">العودة للرئيسية</button> </a>
            </div>
        </div>
    </div>
@endsection
