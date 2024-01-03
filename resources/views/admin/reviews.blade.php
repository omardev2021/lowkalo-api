@extends('theme.default')



@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">التقييمات</h4>
                    <div class="table-responsive">
                        <table class="table align-middle table-nowrap mb-0">
                            <thead class="table-light">
                            <tr>

                                <th class="align-middle">اسم العميل</th>
                                <th class="align-middle">اسم الشركة المقيمة</th>
                                <th class="align-middle">التقييم ١-٥</th>
                                <th class="align-middle">نص التقييم</th>
                                <th class="align-middle">اشعار الدفع</th>
                                <th class="align-middle">الحالة</th>
                                <th class="align-middle">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($reviews as $coupon)
                                <tr>

                                    <td><a href="javascript: void(0);"
                                           class="text-body fw-bold">{{ $coupon->user->name }}</a> </td>
                                    <td>
                                        {{ $coupon->soluation->name }}
                                    </td>
                                    <td>
                                        {{ $coupon->rate }}
                                    </td>
                                    <td>
                                        {{ $coupon->notes }}
                                    </td>
                                    <td>
                                     <a href="{{ $coupon->image_path }}">معاينة</a>
                                    </td>

                                    <td>
                                       @if($coupon->status == 1)
                                           <span>منشور</span>
                                            @elseif($coupon->status == 5)
                                            <span>مرفوض</span>

                                        @else
                                            <span>قيد المراجعة</span>

                                        @endif
                                    </td>

{{--                                    <td>--}}
{{--                                        @if ($coupon->coupon_validity >= Carbon\Carbon::now()->format('Y-m-d'))--}}
{{--                                            <span class="badge badge-pill badge-soft-success font-size-11">Valid</span>--}}
{{--                                        @else--}}
{{--                                            <span class="badge badge-pill badge-soft-danger font-size-11">Invalid</span>--}}
{{--                                        @endif--}}
{{--                                    </td>--}}

                                    <td>
                                        <div class="d-flex gap-3">

                                            <form action="{{route('confirm.re',['review' => $coupon])}}" enctype="multipart/form-data" method="post">
                                                @method('PATCH')
                                                @csrf
                                                <button type="submit" style="all: unset"> <a
                                                        class="text-success mx-3">نشر</a></button>
                                            </form>

                                            <form action="{{route('reject.re',['review' => $coupon])}}" enctype="multipart/form-data" method="post">
                                                @method('PATCH')
                                                @csrf
                                                <button type="submit" style="all: unset"> <a
                                                        class="text-danger mx-3">رفض</a></button>
                                            </form>


                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                    <!-- end table-responsive -->
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
@endsection
@section('script')
    <!-- apexcharts -->
    <script src="{{ URL::asset('/admin/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- dashboard init -->
    <script src="{{ URL::asset('admin/assets/js/pages/dashboard.init.js') }}"></script>
@endsection
