<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Low Kal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('frontend/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/main_css.css') }}">
    <link href="https://fonts.cdnfonts.com/css/dubai" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{--    <!-- Styles -->--}}
    {{--    <link rel="stylesheet" href="{{ asset('css/app.css') }}">--}}

    {{--    <!-- Scripts -->--}}
    {{--    <script src="{{ asset('js/app.js') }}" defer></script>--}}
    {{--    @vite('resources/js/app.js')--}}

</head>
<style>
    *{
        padding: 0px;
        margin: 0px;
        box-sizing: border-box;
        font-family: 'Tajawal', sans-serif;
        direction: ltr;
    }
</style>
<body style="   background-color: #F3F4FF;">
<header>
    @include('frontend.layouts.header_en')

    @yield('content')
    @include('frontend.layouts.footer_en')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
            integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="{{ asset('frontend/app.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
            integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <script type="text/javascript">
        var url = "{{ route('changeLang') }}";

        $(".changeLang").change(function() {
            window.location.href = url + "?lang=" + $(this).val();
        });
    </script>
    <script>
        $('.saveComment').on('click', function(event) {
            var token = '{{ Session::token() }}';
            var urlComment = '{{ route('comment') }}';
            var videoId = 0;
            var AuthUser = "{{{ (Auth::user()) ? 0 : 1 }}}";
            var blocked = "{{{ (Auth::user()) ? (Auth::user()->block) ? 1 : 0 : 2}}}";
            if (AuthUser == '1') {
                event.preventDefault();
                var html='<div class="alert alert-danger">\
                              <ul>\
                                  <li>يجب تسجيل الدخول لكي تستطيع التعليق على الفيديو</li>\
                              </ul>\
                          </div>';
                $(".commentAlert ").html(html);
            }
            else if (blocked == '1') {
                var html='<div class="alert alert-danger">\
                                  <ul>\
                                      <li class="commentAlert">أنت ممنوع من التعليق</li>\
                                  </ul>\
                              </div>';
                $(".commentAlert ").html(html);

            }
            else if ($('#comment').val().length == 0) {
                var html='<div class="alert alert-danger">\
                              <ul>\
                                  <li>الرجاء كتابة تعليق</li>\
                              </ul>\
                          </div>';
                $(".commentAlert ").html(html);
            }
            else {
                $(".commentAlert ").html('');
                event.preventDefault();
                videoId = $("#videoId").val();
                comment = $("#comment").val();
                $.ajax({
                    method: 'POST',
                    url: urlComment,
                    data: {
                        comment: comment,
                        videoId: videoId,
                        _token: token
                    },
                    success : function(data) {
                        $("#comment").val('');
                        destroyUrl = "{{route('comment.destroy', 'des_id')}}";
                        destroy = destroyUrl.replace('des_id', data.commentId);
                        editUrl = "{{route('comment.edit', 'id')}}";
                        url = editUrl.replace('id', data.commentId);
                        var html='  <div class="card mt-5 mb-3">\
                                              <div class="card-body">\
                                                  <div class="row">\
                                                      <div class="col-2">\
                                                          <img src="'+data.userImage+'" width="150px" class="rounded-full"/>\
                                                      </div>\
                                                      <div class="col-10">\
                                                          <form method="GET" action="'+destroy+'">\
                                                              @csrf\
                                                              @method('DELETE')\
                                                              <button type="submit" class="float-left"><i class="far fa-trash-alt text-danger fa-lg"></i></button>\
                                                          </form>\
                                                          <form method="GET" action="'+url+'">\
                                                              @csrf\
                                                              @method('PATCH')\
                                                              <button type="submit" class="float-left"><i class="far fa-edit text-success fa-lg ml-3"></i></button>\
                                                          </form>\
                                                          <p class="mt-3 mb-2"><strong>'+data.userName+'</strong></p>\
                                                          <i class="far fa-clock"></i> <span class="comment_date text-secondary">'+data.commentDate+'</span>\
                                                          <p class="mt-3" >'+comment+'</p>\
                                                      </div>\
                                                  </div>\
                                              </div>\
                                          </div>';
                        $(".commentBody").prepend(html);


                    }
                })
            }
        });



    </script>

    <script>

        $('#videoPlayer').on('ended', function(e) {
            var token = '{{ Session::token() }}';
            var urlComment = '{{ route('view') }}';
            event.preventDefault();
            videoId = $("#videouid").val();
            console.log('ednd');
            $.ajax({
                method: 'POST',
                url: urlComment,
                data: {
                    video_id: videoId,
                    _token: token
                },
                success: function(data) {
                    console.log('done');
                }
            })
        });
    </script>

    <script>
        function myFunction() {
            // Get the text field
            var copyText = document.getElementById("myInput");

            // Select the text field
            copyText.select();
            copyText.setSelectionRange(0, 99999); // For mobile devices

            // Copy the text inside the text field
            navigator.clipboard.writeText(copyText.value);

            // Alert the copied text
            alert("Copied the text: " + copyText.value);
        }
    </script>

    <script>
        function buyme() {
            $('#buy-tab').click();
        }
        function applyCoupon() {
            var coupon_name = $('#coupon_name').val();
            var spinner = `<div class="spinner-grow text-success" role="status">
  <span class="visually-hidden">Loading...</span>
</div>`;
            $('#dis').html(spinner);
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'POST',
                dataType: 'json',
                data: {
                    coupon_name: coupon_name
                },
                url: "{{ url('/coupon-apply') }}",
                success: function(data) {
                    couponCalculation();
                    // console.log('done');
                    // couponCalculation();
                    if (data.validity == true) {
                        $('#couponField').hide();
                    }
                    $('#dis').text('خصم');
                    // Start Message
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',

                        showConfirmButton: false,
                        timer: 3000
                    })
                    if ($.isEmptyObject(data.error)) {
                        Toast.fire({
                            type: 'success',
                            icon: 'success',
                            title: data.success
                        })

                    } else {
                        Toast.fire({
                            type: 'error',
                            icon: 'error',
                            title: data.error
                        })

                    }

                    // End Message

                }

            })
        }
        couponCalculation();

        function couponCalculation() {
            $.ajax({
                type: 'GET',
                url: "{{ url('/coupon-calculation') }}",
                dataType: 'json',
                success: function(data) {
                    if (data.total) {
                        $('#couponCalField').html(

                            `

                            <h1>${data.total} SAR</h1>

                            `


                        )




                    } else {

                        $('#couponCalField').html(
                            `
                        <div class="d-flex">
                        <h1>${data.total_amount} SAR</h1>
                        <h4 class="card-title"><s>${data.subtotal} SAR</s></h4>
                      </div>
                      <span class="float-end"> Coupon :</span>      <span class="float-start">${data.coupon_name}  <span style="decoration:none;"><button onclick="couponRemove()"><i class="fa-solid fa-trash"></i></button></span></span>



`





                        )

                    }
                }

            });
        }
        couponCalculation();

        function couponRemove() {
            $.ajax({
                type: 'GET',
                url: "{{ url('/coupon-remove') }}",
                dataType: 'json',
                success: function(data) {
                    couponCalculation();
                    $('#couponField').show();
                    $('#coupon_name').val('');


                    // Start Message
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',

                        showConfirmButton: false,
                        timer: 3000
                    })
                    if ($.isEmptyObject(data.error)) {
                        Toast.fire({
                            type: 'success',
                            icon: 'success',
                            title: data.success
                        })

                    } else {
                        Toast.fire({
                            type: 'error',
                            icon: 'error',
                            title: data.error
                        })

                    }

                    // End Message

                }
            });

        }


        function check() {
            var size = $(`#date option:selected`).text();
            $('#times')
                .empty()


            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'POST',
                dataType: 'json',
                data: {
                    date: size
                },
                url: "{{ url('/check-times') }}",
                success: function(data) {
                    if (data.validity == true) {
                        console.log('done');

                        $.each(data.times, function (i, value) {

                            var votevalue = parseInt(value.id);
                            console.log(votevalue);
                            $('#times').append('<option value=' + votevalue + '>' + value.time + '</option>');
                        });
                    }



                    // End Message

                }

            })


        }


    </script>


</body>

</html>
