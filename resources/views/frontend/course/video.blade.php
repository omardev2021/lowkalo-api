@extends('frontend.layouts.master')
@section('content')

<div class="container-fluid box text-center ">
    <img src="/images/cc.png" alt="" srcset="" class="img-pos d-none d-sm-block">
    <h1> الدرس الاول </h1>

  <a href="{{route('lessons')}}"><button class="btn-bg">العودة للخلف</button></a>  
</div>


<div class="container-fluid box text-center ">
    <!-- <iframe class="embed-responsive-item 16by9" width="800" height="400" allow="fullscreen;"
    src="https://www.youtube.com/embed/tgbNymZ7vqY">
    </iframe> -->
    <div class="embed-responsive embed-responsive-16by9 ">
        <iframe class="embed-responsive-item " width="800" height="400"
            src="https://www.youtube.com/embed/tgbNymZ7vqY" allowfullscreen></iframe>
    </div>

</div>
<div class=" container-fluid box text-center">
    <button class="btn-bg mx-5">الدرس السابق</button>
    <button class="btn-bg mx-5">الدرس القادم</button>
</div>




@endsection