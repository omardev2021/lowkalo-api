@extends('theme.default')



@section('content')
    <div class="row">
        <div class="col-lg-12">
            {{-- <a href="{{route('coupon.form')}}"><button class="btn btn-primary">اضافة كود خصم</button></a>   --}}
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">المدفوعات</h4>
                    <div class="table-responsive">
                        <table class="table align-middle table-nowrap mb-0">
                            <thead class="table-light">
                                <tr>

                                    <th class="align-middle">المبلغ</th>
                                    <th class="align-middle">ايميل المستخدم</th>
                                    <th class="align-middle">كود الخصم</th>
                                    <th class="align-middle">نسبة الخصم</th>
                                    <th class="align-middle">حالة عملية الدفع</th>
                             
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($payments as $payment)
                                    <tr>

                                        {{-- <td><a href="javascript: void(0);" class="text-body fw-bold">{{ $payment->id }}</a>
                                        </td> --}}
                                        <td>
                                            {{ $payment->amount }} ر.س
                                        </td>
                                        <td>
                                            {{ $payment->user->email }}
                                        </td>
                                        <td>
                                            @if (!$payment->coupon)
                                                لا يوجد كود خصم
                                            @else
                                                {{ $payment->coupon->coupon_name }}
                                            @endif
                                        </td>
                                        <td>
                                            @if (!$payment->coupon)
                                                لا يوجد خصم
                                            @else
                                                {{ $payment->coupon->coupon_discount }} %
                                            @endif
                                        </td>
                                        <td>
                                            @if ($payment->status == 2)
                                                تمت عملية الدقع
                                            @elseif($payment->status == 3)
                                                فشلت عملية الدفع
                                            @else
                                                لم تتم عملية الدقع
                                            @endif

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
