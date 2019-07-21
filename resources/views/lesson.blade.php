@extends('layouts.app')

@section('content')
    <div class="container-fluid">

        <div class="container bg-white border-dark border p-4">
            <div class="row py-2">
                <div class="col-9">
                    <h1 class="h1">{{ $lesson->name }}</h1>
                </div>
                <div class="col-3 p-0">
                    <div class="m-0">
                        <img class="star-img" src="/imgs/-favourite-star.svg" alt="">
                        <img class="star-img" src="/imgs/-favourite-star.svg" alt="">
                        <img class="star-img" src="/imgs/-favourite-star.svg" alt="">
                        <img class="star-img" src="/imgs/-favourite-star.svg" alt="">
                        <img class="star-img" src="/imgs/-favourite-star.svg" alt="">
                    </div>
                </div>
            </div>
            <div class="row py-2">

                <video id='my-video' class='w-50 mx-auto' controls preload='auto' width='640' height='264'>
                    <source src='{{url('storage/'.$lesson->video)}}' type='video/mp4'>
                    <source src='{{url('storage/'.$lesson->video)}}' type='video/webm'>
                    <p class='vjs-no-js'>
                        To view this video please enable JavaScript, and consider upgrading to a web browser that
                        <a href='https://videojs.com/html5-video-support/' target='_blank'>supports HTML5 video</a>
                    </p>
                </video>

            </div>
            <div class="row p-2">
                <p class="lessons-description h4">{{$lesson->description}}</p>
            </div>
        </div>

    </div>

@endsection