@extends('guest/homeDetail')
@section('content')

    {{--Hiển thị các post--}}
    @foreach($list_post as $post)
        <div class="style-post">
            <a class="user-detail" href="/user/{{$post->getUser->id}}">
                <div>
                    <img class="img-avatar" src="{{$post->getUser->avatar}}" alt="">
                    <span><b>{{$post->getUser->fullName}}</b></span>
                </div>
            </a>
            <div>
                <b>{{$post->name}}</b>
            </div>

            <div>
                <i class="style-time-post">{{$post->created_at}}</i>
            </div>
            <div>
                <img class="img-content" src="{{$post->image}}" alt="">
            </div>
            <div>
                {{$post->description}}
            </div>
            <div style="border-bottom: 1px solid gray">
                <b>Rate :</b>
                {{RATE_STAR($post->rate)}}
            </div>
        </div>
    @endforeach
@endsection
