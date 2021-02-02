@extends('layout')
@section('content')
    @foreach($list_post as $post)
        <div class="style-post">
            <div>
                <img class="img-avatar" src="{{$post->getUser->avatar}}" alt="">
                <span><b>{{$post->getUser->fullName}}</b></span>
            </div>
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
            <div>
                <b>Rate :</b>
                {{RATE_STAR($post->rate)}}
            </div>

            <div class="style-avt-cmt style-content-cmt style-cmt">
{{--Lay thong tin cmt va user --}}
                @foreach($post->getUserFromComment as $user)
                    <div>
                        <img src="{{$user->avatar}}" alt="">
                        <b style="font-size: 15px">{{$user->fullName}}</b>
                    </div>
                    @foreach($post->getComment as $cmt)
                        <div style="padding-left: 20px">{{$cmt->comment}}</div>
                    @endforeach
                @endforeach


            </div>
        </div>
    @endforeach
@endsection
