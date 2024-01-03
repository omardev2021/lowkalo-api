@extends('theme.default')



@section('content')
    <div class="row">
        <div class="col-lg-12">
            <a href="{{route('cat.form')}}"><button class="btn btn-primary">اضافة فئة</button></a>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">الفئات</h4>
                    <div class="table-responsive">
                        <table class="table align-middle table-nowrap mb-0">
                            <thead class="table-light">
                            <tr>

                                <th class="align-middle">اسم الفئة</th>
                                <th class="align-middle">اسم الفئة عربي</th>
                                <th class="align-middle">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($categories as $cat)
                                <tr>

                                    <td><a href="javascript: void(0);"
                                           class="text-body fw-bold">{{ $cat->name }}</a> </td>
                                    <td>
                                        {{ $cat->name_ar }}
                                    </td>



{{--                                    <td>--}}
{{--                                        <div class="d-flex gap-3">--}}
{{--                                            <a href="{{ route('coupon.edit', $coupon) }}"class="text-success"><i class="fa-solid fa-pen-to-square"></i></a>--}}
{{--                                            <form method="POST" action="{{ route('coupon.destroy', $coupon) }}"--}}
{{--                                                  class="d-inline-block">--}}
{{--                                                @method('delete')--}}
{{--                                                @csrf--}}
{{--                                                <button type="submit" style="border: none"--}}
{{--                                                        onclick="return confirm('هل أنت متأكد؟')"> <a--}}
{{--                                                        href="javascript:void(0);" class="text-danger"><i class="fa-solid fa-trash"></i></a></button>--}}
{{--                                            </form>--}}

{{--                                        </div>--}}
{{--                                    </td>--}}
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
