@extends('frontend.layouts.master')

@section('content')
    <style>
        .container2 {
            max-width: 1200px;
            margin: 100px auto;
            display: flex;
            flex-wrap: wrap;
            align-items: flex-start;
            gap: 20px;
        }

        .container2 .main-video-container2 {
            flex: 1 1 700px;
            border-radius: 5px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, .1);
            background-color: #fff;
            padding: 15px;
        }

        .container2 .main-video-container2 .main-video {
            margin-bottom: 7px;
            border-radius: 5px;
            width: 100%;
            height: 100%;
        }

        .container2 .main-video-container2 .main-vid-title {
            font-size: 20px;
            color: #444;
        }

        .container2 .video-list-container2 {
            flex: 1 1 350px;
            height: 550px;
            overflow-y: scroll;
            border-radius: 5px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, .1);
            background-color: #fff;
            padding: 15px;
        }

        /* .container2 .progress {
                                        flex: 1 1 100;
                                        height: 100px;

                                        border-radius: 5px;
                                        box-shadow: 0 5px 15px rgba(0, 0, 0, .1);
                                        background-color: #fff;
                                        padding: 15px;
                                    } */

        .container2 .video-list-container2::-webkit-scrollbar {
            width: 10px;
        }

        .container2 .video-list-container2::-webkit-scrollbar-track {
            background-color: #fff;
            border-radius: 5px;
        }

        .container2 .video-list-container2::-webkit-scrollbar-thumb {
            background-color: #444;
            border-radius: 5px;
        }

        .container2 .video-list-container2 .list {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 10px;
            background-color: #eee;
            cursor: pointer;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .container2 .video-list-container2 .list:last-child {
            margin-bottom: 0;
        }

        /* border: 2px solid #045752;
                                          border: 2px solid #E0F8F6; */
        .container2 .video-list-container2 .list.active {
            background-color: #541BF2;
        }

        .container2 .video-list-container2 .list.active .list-title {
            color: #fff;
        }

        .container2 .video-list-container2 .list.active .list-part {
            color: #fff;
        }

        .container2 .video-list-container2 .list .list-video {
            width: 100px;
            border-radius: 5px;
        }

        .container2 .video-list-container2 .list .list-title {
            font-size: 17px;
            color: #444;
        }

        .container2 .video-list-container2 .list .list-part {
            font-size: 17px;
            color: #444;
        }

        .progress-bar {
            background-color: #541BF2;

        }






        .mar {


            border-radius: 4px;

            width: 270px;
            color: #045752;
            background-color: #E0F8F6;
            margin-left: 15%;
            margin-right: 15%;
        }

        .mar:hover {
            background-color: #00afa4;
            color: #E0F8F6;
        }

        .disabled-link {
            pointer-events: none;
        }







        @media (max-width:1200px) {

            .container2 {
                margin: 0;
            }

        }

        @media (max-width:450px) {

            .container2 .main-video-container2 .main-vid-title {
                font-size: 15px;
                text-align: center;
            }

            .container2 .video-list-container2 .list {
                flex-flow: column;
                gap: 10px;
            }

            .container2 .video-list-container2 .list .list-video {
                width: 100%;
            }

            .container2 .video-list-container2 .list .list-title {
                font-size: 15px;
                text-align: center;
            }

        }
    </style>



    <div class="container-fluid box text-center ">
        {{-- <img src="/images/cc.png" alt="" srcset="" class="img-pos d-none d-sm-block"> --}}
        <h1 class="title-big"> {{ $video->title }} </h1>

        <a href="{{ url('/videos') }}"><button class="btn-buy" style="width: 200px">العودة للخلف</button></a>
        {{-- <div class="progress" style="width:400px">
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="50" aria-valuemin="0"
                    aria-valuemax="100">25%</div>
            </div>
        </div> --}}

    </div>

    <nav class="nav nav-pills nav-justified mb-3" style="background-color: #541BF2;padding:15px">
        @if ($video->id == 14)
            <button class="btn mar mb-2" disabled style="background-color: #F3F4FF">الدرس التالي</button>
        @else
            <a href="{{ url('/videos/' . $id) }}" class="btn mar mb-2" style="background-color: #F3F4FF;color:#541BF2 "> <button type="button" class="btn"><i
                        class="fa-solid fa-arrow-right"></i> الدرس التالي </button> </a>
        @endif
        {{-- <a class="nav-link" href="#">Much longer nav link</a>
        <a class="nav-link" href="#">Link</a> --}}
        @if ($video->id == 1)
            <button class="btn mar mb-2" disabled style="background-color: #F3F4FF">الدرس السابق</button>
        @else
            <a class="btn mar mb-2" href="{{ url('/videos/' . $idp) }}" style="background-color: #F3F4FF;color:#541BF2"> <button type="button" class="btn" >الدرس السابق
                    <i class="fa-solid fa-arrow-left"></i></button></a>
        @endif

    </nav>

    <div class="container2">


        <div class="main-video-container2">
            {{-- <video src="images/vid-1.mp4" loop controls class="main-video"></video> --}}
            <input id="videouid" type="hidden" value="{{ $video->id }}">
            @foreach ($video->convertedvideos as $video_converted)
                <video id="videoPlayer" controls playsinline autoplay poster="{{ Storage::url($video->image_path) }}"
                    style='{{ $video->Longitudinal == '0' ? 'width: 100%; height: 90%;' : 'width: 900px; height: 510px;' }}'>
                    @if ($video->quality == 1080)
                        <source id="webm_source" src="{{ Storage::url($video_converted->webm_Format_1080) }}"
                            type="video/webm">
                        <source id="mp4_source" src="{{ Storage::url($video_converted->mp4_Format_1080) }}"
                            type="video/mp4">
                    @elseif($video->quality == 720)
                        <source id="webm_source" src="{{ Storage::url($video_converted->webm_Format_720) }}"
                            type="video/webm">
                        <source id="mp4_source" src="{{ Storage::url($video_converted->mp4_Format_720) }}"
                            type="video/mp4">
                    @elseif($video->quality == 480)
                        <source id="webm_source" src="{{ Storage::url($video_converted->webm_Format_480) }}"
                            type="video/webm">
                        <source id="mp4_source" src="{{ Storage::url($video_converted->mp4_Format_480) }}"
                            type="video/mp4">
                    @elseif($video->quality == 360)
                        <source id="webm_source" src="{{ Storage::url($video_converted->webm_Format_360) }}"
                            type="video/webm">
                        <source id="mp4_source" src="{{ Storage::url($video_converted->mp4_Format_360) }}"
                            type="video/mp4">
                    @else
                        <source id="webm_source" src="{{ Storage::url($video_converted->webm_Format_240) }}"
                            type="video/webm">
                        <source id="mp4_source" src="{{ Storage::url($video_converted->mp4_Format_240) }}"
                            type="video/mp4">
                    @endif
                </video>
            @endforeach
            <select id='qualityPick'>
                <option value="1080" {{ $video->quality == 1080 ? 'selected' : '' }}
                    {{ $video->quality < 1080 ? 'hidden' : '' }}>1080p</option>
                <option value="720" {{ $video->quality == 720 ? 'selected' : '' }}
                    {{ $video->quality < 720 ? 'hidden' : '' }}>720p</option>
                <option value="480" {{ $video->quality == 480 ? 'selected' : '' }}
                    {{ $video->quality < 480 ? 'hidden' : '' }}>480p</option>
                <option value="360" {{ $video->quality == 360 ? 'selected' : '' }}
                    {{ $video->quality < 360 ? 'hidden' : '' }}>360p</option>
                <option value="240" {{ $video->quality == 240 ? 'selected' : '' }}>240p</option>
            </select>
            <h3 class="main-vid-title ">{{ $video->title }}</h3>
        </div>



        <div class="video-list-container2">
            <h3>مستوى تقدمك</h3>
            {{-- <div class="progress" style="  overflow-y:; margin-bottom:20px;margin-top:20px" >

                <div  class="progress-bar"  role="progressbar" style="width: 50%;" aria-valuenow="80" aria-valuemin="0"
                    aria-valuemax="100" style="background-color: #045752;" >25%</div>
            </div> --}}

            <div class="progress" style="  overflow-y:; margin-bottom:20px;margin-top:20px">
                <div class="progress-bar" role="progressbar" style="width: {{ $percen }}%;" aria-valuenow="25"
                    aria-valuemin="0" aria-valuemax="100">{{ $percen }}%</div>
            </div>

            @foreach ($videos as $videoo)
                <div class="list {{ $videoo->id == $video->id ? 'active' : '' }}">


                    <input id="videoId" class="list-id" type="hidden" value="{{ $videoo->id }}">
                    <img src="{{ Storage::url($videoo->image_path) }}" class="list-video" alt="">
                    <div>
                        <h4 class="list-part">{{ $videoo->part->title }}</h4>
                        <span class="list-title">{{ $videoo->title }}</span>
                    </div>



                </div>
            @endforeach





        </div>

    </div>
    <div class="container">
        <div class="mt-4 px-2">
            <div class="comments">
                <div class="mb-3">
                    <span>التعليقات</span>
                </div>
                <div>
                    <textarea class="form-control" id="comment" name="comment" rows="4" placeholder="إضافة تعليق عام"></textarea>
                    <button type="submit" class=" btn-buy mt-3 saveComment" style="width: 200px">تعليق</button>

                    <div class="commentAlert mt-5">

                    </div>

                    <div class="commentBody">
                        @foreach ($comments as $comment)
                            <div class="card mt-5 mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <img src="{{ $comment->user->profile_photo_url }}" width="150px"
                                                class="rounded-circle" />
                                        </div>
                                        <div class="col-sm-10">
                                            @if (Auth::check())
                                                @if ($comment->user_id == auth()->user()->id || auth()->user()->administration_level > 0)
                                                    @if (!auth()->user()->block)
                                                        <form method="GET"
                                                            action="{{ route('comment.destroy', $comment->id) }}"
                                                            onsubmit="return confirm('هل أنت متأكد أنك تريد حذف التعليق هذا؟')">
                                                            {{-- <form method="GET"
                                                        action=""
                                                        onsubmit="return confirm('هل أنت متأكد أنك تريد حذف التعليق هذا؟')"> --}}
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="float-left btn "><i
                                                                    class="far fa-trash-alt text-danger fa-lg"></i></button>
                                                        </form>

                                                        <form method="GET"
                                                            action="{{ route('comment.edit', $comment->id) }}">
                                                            {{-- <form method="GET" action=""> --}}
                                                            @csrf
                                                            @method('PATCH')
                                                            <button type="submit" class="float-left btn"><i
                                                                    class="far fa-edit text-success fa-lg ml-3"></i></button>
                                                        </form>
                                                    @endif
                                                @endif
                                            @endif
                                            <p class="mt-3 mb-2"><strong>{{ $comment->user->name }}</strong></p>
                                            <i class="far fa-clock"></i> <span
                                                class="comment_date text-secondary">{{ $comment->created_at->diffForHumans() }}</span>
                                            <p class="mt-3">{{ $comment->body }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>





    {{-- <div class="container2">
        <div class="row">
            <div class="mx-auto col-9">
                <input id="videoId" type="hidden" value="{{ $video->id }}">

                <div class='vidcontainer2'>
                    @foreach ($video->convertedvideos as $video_converted)
                        <video id="videoPlayer" controls
                            style='{{ $video->Longitudinal == '0' ? 'width: 100%; height: 90%;' : 'width: 900px; height: 510px;' }}'>
                            @if ($video->quality == 1080)
                                <source id="webm_source" src="{{ Storage::url($video_converted->webm_Format_1080) }}"
                                    type="video/webm">
                                <source id="mp4_source" src="{{ Storage::url($video_converted->mp4_Format_1080) }}"
                                    type="video/mp4">
                            @elseif($video->quality == 720)
                                <source id="webm_source" src="{{ Storage::url($video_converted->webm_Format_720) }}"
                                    type="video/webm">
                                <source id="mp4_source" src="{{ Storage::url($video_converted->mp4_Format_720) }}"
                                    type="video/mp4">
                            @elseif($video->quality == 480)
                                <source id="webm_source" src="{{ Storage::url($video_converted->webm_Format_480) }}"
                                    type="video/webm">
                                <source id="mp4_source" src="{{ Storage::url($video_converted->mp4_Format_480) }}"
                                    type="video/mp4">
                            @elseif($video->quality == 360)
                                <source id="webm_source" src="{{ Storage::url($video_converted->webm_Format_360) }}"
                                    type="video/webm">
                                <source id="mp4_source" src="{{ Storage::url($video_converted->mp4_Format_360) }}"
                                    type="video/mp4">
                            @else
                                <source id="webm_source" src="{{ Storage::url($video_converted->webm_Format_240) }}"
                                    type="video/webm">
                                <source id="mp4_source" src="{{ Storage::url($video_converted->mp4_Format_240) }}"
                                    type="video/mp4">
                            @endif
                        </video>
                    @endforeach
                </div>
                <select id='qualityPick'>
                    <option value="1080" {{ $video->quality == 1080 ? 'selected' : '' }}
                        {{ $video->quality < 1080 ? 'hidden' : '' }}>1080p</option>
                    <option value="720" {{ $video->quality == 720 ? 'selected' : '' }}
                        {{ $video->quality < 720 ? 'hidden' : '' }}>720p</option>
                    <option value="480" {{ $video->quality == 480 ? 'selected' : '' }}
                        {{ $video->quality < 480 ? 'hidden' : '' }}>480p</option>
                    <option value="360" {{ $video->quality == 360 ? 'selected' : '' }}
                        {{ $video->quality < 360 ? 'hidden' : '' }}>360p</option>
                    <option value="240" {{ $video->quality == 240 ? 'selected' : '' }}>240p</option>
                </select>
                <div class="title mt-3">
                    <h5>
                        {{ $video->title }}
                    </h5>
                </div>

                <div class="mt-4 px-2">
                    <div class="comments">
                        <div class="mb-3">
                            <span>التعليقات</span>
                        </div>
                        <div>
                            <textarea class="form-control" id="comment" name="comment" rows="4" placeholder="إضافة تعليق عام"></textarea>
                            <button type="submit" class=" btn-buy mt-3 saveComment" style="width: 200px">تعليق</button>

                            <div class="commentAlert mt-5">

                            </div>

                            <div class="commentBody">
                                @foreach ($comments as $comment)
                                    <div class="card mt-5 mb-3">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <img src="{{ $comment->user->profile_photo_url }}" width="150px"
                                                        class="rounded-circle" />
                                                </div>
                                                <div class="col-sm-10">
                                                    @if (Auth::check())
                                                        @if ($comment->user_id == auth()->user()->id || auth()->user()->administration_level > 0)
                                                            @if (!auth()->user()->block)
                                                                <form method="GET"
                                                                    action="{{ route('comment.destroy', $comment->id) }}"
                                                                    onsubmit="return confirm('هل أنت متأكد أنك تريد حذف التعليق هذا؟')">

                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="float-left btn "><i
                                                                            class="far fa-trash-alt text-danger fa-lg"></i></button>
                                                                </form>

                                                                <form method="GET" action="{{route('comment.edit', $comment->id)}}">

                                                                    @csrf
                                                                    @method('PATCH')
                                                                    <button type="submit" class="float-left btn"><i
                                                                            class="far fa-edit text-success fa-lg ml-3"></i></button>
                                                                </form>
                                                            @endif
                                                        @endif
                                                    @endif
                                                    <p class="mt-3 mb-2"><strong>{{ $comment->user->name }}</strong></p>
                                                    <i class="far fa-clock"></i> <span
                                                        class="comment_date text-secondary">{{ $comment->created_at->diffForHumans() }}</span>
                                                    <p class="mt-3">{{ $comment->body }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div> --}}









    {{-- <div class="interaction text-center mt-5">
                <a href="#" class="like ml-3">
                    @if ($userLike)
                        @if ($userLike->like == 1)
                        <i class="far fa-thumbs-up fa-2x liked"></i> <span id="likeNumber">{{$countLike}}</span>
                        @else
                            <i class="far fa-thumbs-up fa-2x"></i> <span id="likeNumber">{{$countLike}}</span>
                        @endif
                    @else
                        <i class="far fa-thumbs-up fa-2x"></i> <span id="likeNumber">{{$countLike}}</span>
                    @endif

                </a> |
                <a href="#" class="like mr-3">
                    @if ($userLike)
                        @if ($userLike->like == 0)
                            <i id="like_down" class="far fa-thumbs-down fa-2x liked"></i> <span id="dislikeNumber">{{$countDislike}}</span>
                        @else
                            <i id="like_down" class="far fa-thumbs-down fa-2x"></i> <span id="dislikeNumber">{{$countDislike}}</span>
                        @endif
                    @else
                        <i id="like_down" class="far fa-thumbs-down fa-2x"></i> <span id="dislikeNumber">{{$countDislike}}</span>
                    @endif
                </a>

                @foreach ($video->views as $view)
                    <span class="float-right">عدد المشاهدات <span class="viewsNumber">{{$view->views_number}}</span></span>
                @endforeach

                <div class="loginAlert mt-5">

                </div>
            </div> --}}

    {{-- <div class="mt-4 px-2">
                <div class="comments">
                    <div class="mb-3">
                        <span>التعليقات</span>
                    </div>
                    <div>
                        <textarea class="form-control" id="comment" name="comment" rows="4" placeholder="إضافة تعليق عام"></textarea>
                        <button type="submit" class="btn btn-info mt-3 saveComment">تعليق</button>

                        <div class="commentAlert mt-5">

                        </div>

                        <div class="commentBody">
                            @foreach ($comments as $comment)
                                <div class="card mt-5 mb-3">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="{{$comment->user->profile_photo_url}}" width="150px" class="rounded-full"/>
                                            </div>
                                            <div class="col-10">
                                                @if (Auth::check())
                                                    @if ($comment->user_id == auth()->user()->id || auth()->user()->administration_level > 0)
                                                        @if (!auth()->user()->block)
                                                            <form method="GET" action="{{route('comment.destroy', $comment->id)}}" onsubmit="return confirm('هل أنت متأكد أنك تريد حذف التعليق هذا؟')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="float-left"><i class="far fa-trash-alt text-danger fa-lg"></i></button>
                                                            </form>

                                                            <form method="GET" action="{{route('comment.edit', $comment->id)}}">
                                                                @csrf
                                                                @method('PATCH')
                                                                <button type="submit" class="float-left"><i class="far fa-edit text-success fa-lg ml-3"></i></button>
                                                            </form>
                                                        @endif
                                                    @endif
                                                @endif
                                                <p class="mt-3 mb-2"><strong>{{$comment->user->name}}</strong></p>
                                                <i class="far fa-clock"></i> <span class="comment_date text-secondary">{{$comment->created_at->diffForHumans()}}</span>
                                                <p class="mt-3" >{{$comment->body}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div> --}}

    </div>
    </div>
    </div>

    <script>
        let videoList = document.querySelectorAll('.video-list-container2 .list');
        videoList.forEach(vid => {
            vid.onclick = () => {
                videoList.forEach(remove => {
                    remove.classList.remove('active')
                });
                vid.classList.add('active');
                var src = vid.querySelector('.list-id').value;
                let title = vid.querySelector('.list-title').innerHTML;
                videoId = $("#videoId").val();
                console.log(src);
                var urlComment = "https://www.lowkalo.com/videos/" + src;
                console.log(urlComment);

                window.location.href = urlComment;
                // console.log(videoId);

                // console.log(src);
                // document.querySelector('.main-video-container2 .main-video').src = src;
                // document.querySelector('.main-video-container2 .main-video').play();
                // document.querySelector('.main-video-container2 .main-vid-title').innerHTML = title;
            };
        });
    </script>




    <script>
        document.getElementById("qualityPick").onchange = function() {
            changeQulity()
        };

        function changeQulity() {
            var video = document.getElementById("videoPlayer");
            curTime = video.currentTime;
            var selected = document.getElementById("qualityPick").value;
            if (selected == '1080') {
                source = document.getElementById("webm_source").src =
                    "{{ Storage::url($video_converted->webm_Format_1080) }}";
                source = document.getElementById("mp4_source").src =
                    "{{ Storage::url($video_converted->mp4_Format_1080) }}";
            } else if (selected == '720') {
                source = document.getElementById("webm_source").src =
                    "{{ Storage::url($video_converted->webm_Format_720) }}";
                source = document.getElementById("mp4_source").src =
                    "{{ Storage::url($video_converted->mp4_Format_720) }}";
            } else if (selected == '480') {
                source = document.getElementById("webm_source").src =
                    "{{ Storage::url($video_converted->webm_Format_480) }}";
                source = document.getElementById("mp4_source").src =
                    "{{ Storage::url($video_converted->mp4_Format_480) }}";
            } else if (selected == '360') {
                source = document.getElementById("webm_source").src =
                    "{{ Storage::url($video_converted->webm_Format_360) }}";
                source = document.getElementById("mp4_source").src =
                    "{{ Storage::url($video_converted->mp4_Format_360) }}";
            } else if (selected == '240') {
                source = document.getElementById("webm_source").src =
                    "{{ Storage::url($video_converted->webm_Format_240) }}";
                source = document.getElementById("mp4_source").src =
                    "{{ Storage::url($video_converted->mp4_Format_240) }}";
            }

            video.load();
            video.play();
            video.currentTime = curTime;

        }
    </script>
@endSection

{{-- @section('script') --}}
{{-- <script>
    document.getElementById("qualityPick").onchange = function() {changeQulity()};
    function changeQulity() {
        var video = document.getElementById("videoPlayer");
        curTime = video.currentTime;
        var selected = document.getElementById("qualityPick").value;
        if (selected == '1080') {
            source = document.getElementById("webm_source").src = "{{ Storage::url($video_converted->webm_Format_1080) }}";
            source = document.getElementById("mp4_source").src = "{{ Storage::url($video_converted->mp4_Format_1080) }}";
        }

        else if (selected == '720') {
            source = document.getElementById("webm_source").src = "{{ Storage::url($video_converted->webm_Format_720) }}";
            source = document.getElementById("mp4_source").src = "{{ Storage::url($video_converted->mp4_Format_720) }}";
        }

        else if (selected == '480') {
            source = document.getElementById("webm_source").src = "{{ Storage::url($video_converted->webm_Format_480) }}";
            source = document.getElementById("mp4_source").src = "{{ Storage::url($video_converted->mp4_Format_480) }}";
        }
        else if (selected == '360') {
            source = document.getElementById("webm_source").src = "{{ Storage::url($video_converted->webm_Format_360) }}";
            source = document.getElementById("mp4_source").src = "{{ Storage::url($video_converted->mp4_Format_360) }}";
        }
        else if (selected == '240') {
            source = document.getElementById("webm_source").src = "{{ Storage::url($video_converted->webm_Format_240) }}";
            source = document.getElementById("mp4_source").src = "{{ Storage::url($video_converted->mp4_Format_240) }}";
        }

        video.load();
        video.play();
        video.currentTime = curTime;

    }
</script> --}}

{{-- <script>
    $('.like').on('click', function(event) {
        var token = '{{ Session::token() }}';
        var urlLike = '{{ route('like') }}';
        var videoId = 0;
        var AuthUser = "{{{ (Auth::user()) ? 0 : 1 }}}";
        var blocked = "{{{ (Auth::user()) ? (Auth::user()->block) ? 1 : 0 : 2}}}";
        if (AuthUser == '1') {
            event.preventDefault();
            var html='<div class="alert alert-danger">\
                        <ul>\
                            <li class="loginAlert">يجب تسجيل الدخول لكي تستطيع الإعجاب بالفيديو</li>\
                        </ul>\
                    </div>';
            $(".loginAlert").html(html);
        }
        else if (blocked == '1') {
            event.preventDefault();
            var html='<div class="alert alert-danger">\
                        <ul>\
                            <li class="loginAlert">أنت ممنوع من الإعجاب</li>\
                        </ul>\
                    </div>';
            $(".loginAlert").html(html);

        }
        else {
            event.preventDefault();
            videoId = $("#videoId").val();
            var isLike = event.target.parentNode.previousElementSibling == null;
            $.ajax({
                method: 'POST',
                url: urlLike,
                data: {
                    isLike: isLike,
                    videoId: videoId,
                    _token: token
                },
                success : function(data) {
                    if ($(event.target).hasClass('fa-thumbs-up')) {
                        if($(event.target).hasClass('liked')) {
                            $(event.target).removeClass("liked");
                        }
                        else {
                            $(event.target).addClass("liked");
                        }
                        $('#likeNumber').html(data.countLike);
                        $('#dislikeNumber').html(data.countDislike);
                    }

                    if ($(event.target).hasClass('fa-thumbs-down')) {
                        if($(event.target).hasClass('liked')) {
                            $(event.target).removeClass("liked");
                        }
                        else {
                            $(event.target).addClass("liked");
                        }
                        $('#likeNumber').html(data.countLike);
                        $('#dislikeNumber').html(data.countDislike);
                    }
                    if (isLike) {
                        $(".fa-thumbs-down").removeClass("liked");
                    } else {
                        $(".fa-thumbs-up").removeClass("liked");
                    }
                }
            })
        }
    });
</script> --}}

{{-- <script>
	$('#videoPlayer').on('ended', function(e) {
		var token = '{{ Session::token() }}';
        var urlComment = '{{ route('view') }}';
        event.preventDefault();
        videoId = $("#videoId").val();

        $.ajax({
                method: 'POST',
                url: urlComment,
                data: {
                    videoId: videoId,
                    _token: token
                },
                success : function(data) {
                    $(".viewsNumber").html(data.viewsNumbers);
                }
        })
	});
</script> --}}

{{-- <script>
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
</script> --}}
{{-- @endSection --}}
