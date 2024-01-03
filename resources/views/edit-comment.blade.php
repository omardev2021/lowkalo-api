@extends('frontend.layouts.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center mt-3">
            <div class="card mb-2 col-md-8">
                <div class="card-header text-center">
                    تعديل التعليق
                </div>
                <div class="card-body">
                    <form action="{{ route('comment.update', $comment->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('patch')

                        <div class="form-group">
                            <label for="comment">نص التعليق</label>
                            <textarea id="comment" type="text" rows="4" class="form-control @error('comment') is-invalid @enderror"
                                name="comment">{{ $comment->body }}</textarea>
                            @error('comment')
                                <span class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group row">
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-secondary">عدل</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
