@extends('theme.default')

@section('heading')
    لوحة التحكم
@endsection

@section('content')
    <div class="row justify-content-center">

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center text-right">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                عدد مقاطع الفيديو</div>
                            {{-- <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $numberOfVideos }}</div> --}}
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-video fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center text-right">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                عدد القنوات</div>
                            {{-- <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $numberOfChannels }}</div> --}}
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-film fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center text-right">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                عدد القنوات</div>
                            {{-- <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $numberOfChannels }}</div> --}}
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-film fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <hr>
    <div class="row">
        <div class="col-md-12">
            <table id="videos-table" class="table table-stribed text-right" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>اسم القناة</th>
                        <th>البريد الإلكتروني</th>
                        <th>الحالة</th>
                        <th>تعديل</th>
                        <th>حذف</th>
                        <th>حظر</th>

                    </tr>
                </thead>

                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->paid() ? 'مشترك' :'غير مشترك' }}</td>
                            <td>
                            <form class="ml-4 form-inline" method="POST" action="" style="display:inline-block">
                                @method('patch')
                                @csrf
                                <select class="form-control form-control-sm" name="administration_level">
                                    <option selected disabled>اختر نوعًا</option>
                                    <option value="0">مستخدم</option>
                                    <option value="1">مدير</option>
                                    <option value="2">مدير عام</option>
                                </select>
                                <button type="submit" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> تعديل</button> 
                            </form>
                        </td>
                            <td>
                                <form method="POST" action="" style="display:inline-block">
                                @method('delete')
                                @csrf
                                {{-- @if (auth()->user() != $user && !$user->isSuperAdmin())
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('هل أنت متأكد أنك تريد حذف هذه القناة')"><i class="fa fa-trash"></i> حذف</button> 
                                @else
                                    <div class="btn btn-danger btn-sm disabled"><i class="fa fa-trash"></i> حذف </div>
                                @endif --}}
                                <div class="btn btn-danger btn-sm disabled"><i class="fa fa-trash"></i> حذف </div>
                            </form>
                            </td>
                            <td>
                                <form method="POST" action="" style="display:inline-block">
                                @method('patch')
                                @csrf
                                {{-- @if (auth()->user() != $user && !$user->isSuperAdmin())
                                    @if ($user->block)
                                    <div class="btn btn-warning btn-sm disabled"><i class="fas fa-lock"></i> محظور </div> 
                                    @else
                                    <button type="submit" class="btn btn-warning btn-sm" onclick="return confirm('هل أنت متأكد أنك تريد حظر هذه القناة')"><i class="fa fa-lock"></i> حظر</button> 
                                    @endif
                                @else
                                    <div class="btn btn-warning btn-sm disabled"><i class="fas fa-lock"></i> حظر </div>
                                @endif --}}
                                <div class="btn btn-warning btn-sm disabled"><i class="fas fa-lock"></i> حظر </div>
                            </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


@section('script')
    <!-- Page level plugins -->
    <script src="{{ asset('theme/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('theme/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('#videos-table').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Arabic.json"
                }
            });
        });
    </script>
@endsection

{{-- <div>
        <canvas id="myChart" class="mt-4"></canvas>
    </div> --}}
@endsection
