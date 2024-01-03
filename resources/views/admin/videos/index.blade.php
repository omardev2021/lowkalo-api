@extends('theme.default')

@section('heading')
    الفيديوهات الأكثر مشاهدة
@endsection

@section('content')
    <hr>
    <div class="row">
        <div class="col-md-12">
            <table id="videos-table" class="table table-stribed text-right" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>اسم الفديو</th>
                        <th>اسم الجزء</th>
                        <th>مشاهدة</th>
                        <th>تعديل</th>
                        <th>حذف</th>
                        <th>حظر</th>

                    </tr>
                </thead>

                <tbody>
                    @foreach ($videos as $video)
                        <tr>
                            <td>{{ $video->title }}</td>
                            <td>{{ $video->part->title }}</td>
                            {{-- <td>{{ $user->paid() ? 'مشترك' : 'غير مشترك' }}</td> --}}
                            <td>
                                {{-- <form class="ml-4 form-inline" method="POST" action="" style="display:inline-block">
                                    @method('patch')
                                    @csrf
                                    <select class="form-control form-control-sm" name="administration_level">
                                        <option selected disabled>اختر نوعًا</option>
                                        <option value="0">مستخدم</option>
                                        <option value="1">مدير</option>
                                        <option value="2">مدير عام</option>
                                    </select>
                                    <button type="submit" class="btn btn-info btn-sm"><i class="fa fa-edit"></i>
                                        تعديل</button>
                                </form> --}}
                                <a href="/videos/{{ $video->id }}"><button type="button" class="btn btn-info btn-sm"><i class="fa fa-eye"></i>
                                    مشاهدة</button></a>
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
@endsection
