@extends('layout')
@section('content')
    @foreach($list_post as $post)
        <div class="style-post">
            <div>
                {{$post->userId}}
            </div>
            <div>
                <b>{{$post->name}}</b>
            </div>
            <div>
                <i class="style-time-post">{{$post->created_at}}</i>
            </div>
            <div>
                <img src="{{$post->image}}" alt="">
            </div>
            <div>
                <b>Review :</b>
                {{$post->description}}
            </div>
            <div>
                <b>Rate :</b>
                {{RATE_STAR($post->rate)}}
            </div>
        </div>
    @endforeach
@endsection
