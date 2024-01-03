@extends('frontend.layouts.master')
@section('content')
    <div class="container" dir="ltr">
        <div class="row py-5">
            <div class="text-center">
                <img src="{{ asset('frontend/images/15.png') }}" class="img-fluid " alt="">
                <h1 class="my-4">عذراً</h1>
                <h3 class="mb-5">عملية الدفع لم تتم بنجاح ، الرجاء المحاولة مرة اخرى</h3>
                <!-- <button class="btn-bg mx-3" type="button">الانتقال الى صفحة الكورس</button> -->


           <a href="{{route('home')}}">    <button class="btn-bg mx-3" type="button">العودة للرئيسية</button> </a> 
            </div>
        </div>
    </div>
@endsection
