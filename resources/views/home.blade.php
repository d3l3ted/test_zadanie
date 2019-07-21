@extends('layouts.app')

@section('content')
<div class="container-fluid p-3">

    <div class="row my-4 justify-content-center">
        @foreach($lessons as $lesson)
                <div class="lesson my-2 p-2 bg-light shadow-lg rounded">
                    <img class="lessons-picture rounded" src="{{url('storage/'. $lesson->image)}}" alt="">
                    <a href="lesson/{{$lesson->id}}"><h2>{{ $lesson->name }}</h2></a>
                    <p class="w-100 lessons-description">{{mb_strimwidth($lesson->description,0,100)}}</p>
                    <hr>
                    <div class="row">
                        <div class="col-7 d-flex">
                            <img class="star-img" src="/imgs/-favourite-star.svg" alt="">
                            <img class="star-img" src="/imgs/-favourite-star.svg" alt="">
                            <img class="star-img" src="/imgs/-favourite-star.svg" alt="">
                            <img class="star-img" src="/imgs/-favourite-star.svg" alt="">
                            <img class="star-img" src="/imgs/-favourite-star.svg" alt="">
                        </div>
                        <div class="col-5 d-flex"><p>01.01.2000</p></div>
                    </div>
                </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center">{{$lessons->links()}}</div>
</div>
@endsection
