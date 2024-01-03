@extends('theme.default')

@section('content')
    <div class="container">
        <div class="row justify-content-center mt-3">
            <div class="card mb-2 col-md-8">
                <div class="card-header text-center">
                    اضافة جزء جديد
                </div>

                {{-- @if (auth()->user()->block)
                <div class="alert alert-danger" role="alert">
                    للأسف لا تستطيع رفع مقاطع فيديو، يرجى التواصل مع الإدارة لمعرفة السبب
                </div> --}}
                {{-- @else --}}
                <div class="card-body">
                    <form action="{{ route('store.part') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="title">عنوان الجزء</label>
                            <input type="text" id="title" name="title" value="{{ old('title') }}"
                                class="form-control @error('title') is-invalid @enderror">
                            @error('title')
                                <span class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                        <button type="submit" class="btn btn-secondary">اضافة</button>
                </div>
            </div>

            </form>
        </div>
        {{-- @endif --}}
    </div>
    </div>
    </div>
    <script>
        function readCoverImage(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#cover-image-thumb').attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
                $(".input-name").html(input.files[0].name);
            }
        }

        function readVideo(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.readAsDataURL(input.files[0]);
                $(".video-name").html('\
                        <div class="alert alert-primary">\
                            تم اختيار مقطع الفيديو بنجاح ' + input.files[0].name + '\
                        </div>');
            }
        }
    </script>
@endsection
