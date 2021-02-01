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
                <b>Review :</b>
                {{$post->description}}
            </div>
            <div>
                <b>Rate :</b>
                {{RATE_STAR($post->rate)}}
            </div>
            <div class="style-avt-cmt style-content-cmt style-cmt" >
                <img  src="{{$post->getUserFromComment->first()->avatar}}}}" alt="">
                <span>
                   <b style="font-size: 15px">{{$post->getUserFromComment->first()->fullName}}</b> : {{$post->getComment->content}}
               </span>

            </div>
        </div>
    @endforeach
@endsection
