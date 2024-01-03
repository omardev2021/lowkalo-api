@extends('theme.default')



@section('content')
    <div class="row">
        <div class="col-lg-12">
            {{-- <a href="{{route('coupon.form')}}"><button class="btn btn-primary">اضافة كود خصم</button></a>   --}}
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">حجوزات الاستشارة</h4>
                    <div class="table-responsive">
                        <table class="table align-middle table-nowrap mb-0">
                            <thead class="table-light">
                                <tr>

                                    <th class="align-middle">الاسم</th>
                                    <th class="align-middle">التاريخ</th>
                                    <th class="align-middle">الوقت</th>
                                    <th class="align-middle">الحالة</th>


                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bookings as $booking)
                                    <tr>

                                        {{-- <td><a href="javascript: void(0);" class="text-body fw-bold">{{ $booking->id }}</a>
                                        </td> --}}
                                        <td>
                                            {{ $booking->name }} 
                                        </td>
                                        <td>
                                            {{ $booking->date->date }}
                                        </td>
                                        <td>
                                            {{ $booking->time->time }}
                                        </td>

                                        <td>
                                            @if ($booking->status == 2)
                                                تمت عملية الدقع
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
