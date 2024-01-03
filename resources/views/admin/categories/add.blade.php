@extends('theme.default')





@section('content')


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Basic Information</h4>
                    <p class="card-title-desc">Fill all information below</p>

                    <form action="{{ route('cat.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <label for="name">Name</label>
                                    <input id="name" name="name" type="text"
                                           class="form-control @error('name') is-invalid @enderror"
                                           placeholder="name" value="{{ old('name') }}" autocomplete="name">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="name_ar">Name</label>
                                    <input id="name_ar" name="name_ar" type="text"
                                           class="form-control @error('name_ar') is-invalid @enderror"
                                           placeholder="name_ar" value="{{ old('name_ar') }}" autocomplete="name_ar">
                                    @error('name_ar')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                                <div class="mb-3">
                                    <label for="short">short description</label>
                                    <input id="short" name="short" type="text"
                                           class="form-control @error('short') is-invalid @enderror"
                                           placeholder="name_ar" value="{{ old('short') }}" autocomplete="short">
                                    @error('short')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="short_ar">short description AR</label>
                                    <input id="short_ar" name="short_ar" type="text"
                                           class="form-control @error('short') is-invalid @enderror"
                                           placeholder="short_ar" value="{{ old('short_ar') }}" autocomplete="short_ar">
                                    @error('short_ar')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="question">question</label>
                                    <input id="question" name="question" type="text"
                                           class="form-control @error('question') is-invalid @enderror"
                                           placeholder="question" value="{{ old('question') }}" autocomplete="question">
                                    @error('question')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="question_ar">question ar</label>
                                    <input id="question_ar" name="question_ar" type="text"
                                           class="form-control @error('question_ar') is-invalid @enderror"
                                           placeholder="question_ar" value="{{ old('question_ar') }}" autocomplete="question_ar">
                                    @error('question_ar')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="body">body </label>

                                    <textarea name="body"  class="form-control"></textarea>

                                </div>

                                <div class="mb-3">
                                    <label for="body_ar">body ar</label>

                                    <textarea name="body_ar"  class="form-control"></textarea>

                                </div>

                                <div class="form-group file-area">
                                    <label for="image">صورة الغلاف</label>
                                    <input type="file" id="image" accept="image/*" onchange="readCoverImage(this);"
                                           name="image_path" class="form-control @error('image') is-invalid @enderror">
                                    <div class="input-title">اسحب الصورة إلى هنا أو انقر للاختيار يدويًا</div>

                                    @error('image')
                                    <span class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                                    @enderror
                                </div>

                                <div class="row">
                                    <img id="cover-image-thumb" class="col-2" width="100" height="100">
                                    <span class="input-name col-6"></span>
                                </div>









                            </div>


                        </div>

                        <div class="d-flex flex-wrap gap-2">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">Save Changes</button>
                            <button type="button" class="btn btn-secondary waves-effect waves-light">Cancel</button>
                        </div>
                    </form>

                </div>
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
    <!-- end row -->
@endsection
@section('script')
    <!-- select 2 plugin -->
    <script src="{{ URL::asset('/admin/assets/libs/select2/select2.min.js') }}"></script>

    <!-- dropzone plugin -->
    <script src="{{ URL::asset('/admin/assets/libs/dropzone/dropzone.min.js') }}"></script>

    <!-- init js -->
    <script src="{{ URL::asset('/admin/assets/js/pages/ecommerce-select2.init.js') }}"></script>
@endsection
