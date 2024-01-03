<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <style>
        .w-90{
            width: 90%;
        }
        .w-30{
            width: 30%;
        }
        .fa-icon{
            background-color: #7C9D64;
            padding: 5px;
            width: 30px;
            height: 30px;
            line-height:20px;
            border-radius: 50%;
            text-align: center;
            color: #fff;
            cursor: pointer;

        }
        .total-chash{
            color: #7C9D64;
        }
        .boder-total{
            border-top: 1px solid #f1f1f1;
            border-bottom:1px solid #f1f1f1;
            padding: 5px 0px;
        }
        .boder-total .h6{
            color: #9ca3af;
        }
        .bg-test{
            background-color: #F8F9FA;
        }
        .ce {
            background-color: #7C9D64;
        }
        .app {
            background-color: #7C9D64;
        }
        .py-5 {
            padding-top: 1.25rem;
            padding-bottom: 1.25rem;
        }
        .w-full {
            width: 100%;
        }
        .text-sm {
            font-size: .875rem;
            line-height: 1.25rem;
        }
        .items-center {
            align-items: center;
        }
        .flex-wrap {
            flex-wrap: wrap;
        }
        .flex {
            display: flex;
        }
        ol, ul, menu {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .whitespace-nowrap {
            white-space: nowrap;
        }
        ul, li {
            margin: 0;
            padding: 0;
            list-style: none;
        }







        .containerpay{
            width: 400px;
            border-radius: 8px;
            padding: 40px;
            box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.1),
            0 5px 12px -2px rgba(0, 0, 0, 0.1),
            0 18px 36px -6px rgba(0, 0, 0, 0.1);
        }

        .containerpay .title{
            font-size: 20px;
            font-family: Arial, Helvetica, sans-serif;
        }

        .containerpay form input{
            display: none;
        }

        .containerpay form .category{
            margin-top: 10px;
            padding-top: 20px;

            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-gap: 15px;
        }

        .category label{
            /* width: 100%; */
            /* height: 65px; */
            height: 145px;
            padding: 20px;
            box-shadow: 0px 0px 0px 1px rgba(0, 0, 0, 0.2);
            display: flex;
            /* justify-content: space-between; */
            justify-content: center;
            align-items: center;
            cursor: pointer;
            border-radius: 5px;
            position: relative;
        }

        /* label:nth-child(2), label:nth-child(3){
            margin: 15px 0;
        } */


        #visa:checked ~ .category .visaMethod,
        #mastercard:checked ~ .category .mastercardMethod,
        #paypal:checked ~ .category .paypalMethod,
        #AMEX:checked ~ .category .amexMethod{
            box-shadow: 0px 0px 0px 1px #6064b6;
        }


        #visa:checked ~ .category .visaMethod .check,
        #mastercard:checked ~ .category .mastercardMethod .check,
        #paypal:checked ~ .category .paypalMethod .check,
        #AMEX:checked ~ .category .amexMethod .check{
            display: block;
        }


        label .imgName{
            display: flex;
            /* justify-content: space-between;
             */
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            flex-direction: column;
            gap: 10px;
        }

        .imgName span{
            /* margin-left: 20px; */
            font-family: Arial, Helvetica, sans-serif;

            position: absolute;
            top: 72%;
            transform: translateY(-72%);
        }

        .imgName .imgContainer{
            width: 50px;
            display: flex;
            justify-content: center;
            align-items: center;

            position: absolute;
            top: 35%;
            transform: translateY(-35%);
        }

        /*img{*/
        /*    width: 50px;*/
        /*    height: auto;*/
        /*}*/

        .visa img{
            width: 80px;
            /* margin-left: 5px; */
        }

        .mastercard img{
            width: 65px;
        }

        .paypal img{
            width: 80px;
        }

        .AMEX img{
            width: 50px;
        }

        .check{
            display: none;
            position: absolute;
            top: -4px;
            right: -4px;
        }

        .check i{
            font-size: 18px;
        }


        .cart-summary-wrapper {
            position: sticky;
            top: 16px;
            transition: all .5s cubic-bezier(.2,1,.3,1);
            background-color: white;
            padding: 20px;
        }

    </style>
    @livewireStyles
</head>
@if (Config::get('app.locale') == 'en')
    <body dir="ltr" style="background-color: #f8f8f8">
    @elseif (Config::get('app.locale') == 'ar')
        <body dir="rtl" style="background-color: #f8f8f8">
        @endif


        {{--<nav class="breadcrumbs w-full " style="padding-right: 11%;padding-top:10px;">--}}
        {{--    <ol class="flex items-center flex-wrap text-sm">--}}
        {{--        <li class="whitespace-nowrap"><a href="{{route('home.page')}}" class="fix-align" style="color: #7C9D64">الرئيسية</a></li>--}}
        {{--        <li><img src="{{asset('images/back-s.png')}}" class="mx-2"></li>--}}
        {{--        <li><span class="fix-align">صفحة السلة</span></li>--}}
        {{--    </ol>--}}
        {{--</nav>--}}


        <livewire:checkout />








        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
                integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
        </script>


            @livewireScripts
        <script
            src="https://code.jquery.com/jquery-3.6.1.min.js"
            integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
            crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        </body>
</html>
