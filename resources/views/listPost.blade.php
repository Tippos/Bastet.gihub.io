@extends('layout')
@section('content')
    {{--Form up post--}}
    <div style="border: 0.5px solid grey;width: 500px;margin: auto;border-radius: 20px">
        <div style="width: 400px;margin: auto;">
            <div style="margin-left: 100px"><h3>Bạn đang nghĩ gì?</h3></div>
            <input class="form-control" type="text" placeholder="Tiêu đề" aria-label="default input example">
            <div>
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                              style="height: 70px"></textarea>
                    <label for="floatingTextarea2">Nội dung</label>
                </div>
            </div>
            <div>
                <label>Hình ảnh</label>
                <input class="form-control" type="file" placeholder="Hình ảnh">
            </div>
            <div class="rating">
                <label for="customRange2" class="form-label">Đánh giá</label>
                <input type="range" class="form-range" min="0" max="5" id="customRange2">
            </div>
            <div class="d-grid gap-2" style="padding-bottom: 10px">
                <button type="button" class="btn btn-warning">Đăng</button>
            </div>
        </div>
    </div>
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
            <div>
                <b>Rate :</b>
                {{RATE_STAR($post->rate)}}
            </div>
            {{--Form comment--}}
            <div>
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                              style="height: 70px"></textarea>
                    <label for="floatingTextarea2">Viết bình luận</label>
                </div>
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
