@extends('theme.default')



@section('content')


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Basic Information</h4>
                    <p class="card-title-desc">Fill all information below</p>

                    <form action="{{ route('coupon.update', $coupon) }}" method="POST" enctype="multipart/form-data">
                        @method('patch')
                        @csrf
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <label for="productname">Coupon Name</label>
                                    <input id="productname" name="coupon_name" type="text"
                                        class="form-control @error('coupon_name') is-invalid @enderror"
                                        placeholder="Coupon Name" value="{{ $coupon->coupon_name }}" autocomplete="name">
                                    @error('coupon_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="productname">Coupon Discount (%)</label>
                                    <input id="coupon_discount" name="coupon_discount" type="number"
                                        class="form-control @error('name') is-invalid @enderror"
                                        placeholder="Coupon Discount (%)" value="{{ $coupon->coupon_discount }}"
                                        autocomplete="coupon_discount">
                                    @error('coupon_discount')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>



                                <div class="mb-3">
                                    <label for="productname">Coupon Expiration Date<label>
                                            <input id="coupon_validity" name="coupon_validity" type="date"
                                                min="{{ Carbon\Carbon::now()->format('Y-m-d') }}"
                                                class="form-control @error('coupon_validity') is-invalid @enderror"
                                                placeholder="Coupon Expiration Date" value="{{ $coupon->coupon_validity }}"
                                                autocomplete="coupon_validity">
                                            @error('coupon_validity')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
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
