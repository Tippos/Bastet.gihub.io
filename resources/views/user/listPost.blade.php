@extends('user.layout')
@section('content')
    {{--Form up post--}}
    <div style="border: 0.5px solid grey;width: 500px;margin: auto;border-radius: 20px">
        <div style="    width: 400px;margin: auto;">
            <div style="margin-left: 80px"><h3>Bạn đang nghĩ gì?</h3></div>
            <form>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" id="inputName" placeholder="Tiêu Đề">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <input type="text" name="image" class="form-control" id="inputName" placeholder="Hình Ảnh">
                    </div>
                </div>


                <div class="form-group row">
                    <div class="col-sm-10">
                        <input type="text" name="description" class="form-control" id="inputDescription"
                               placeholder="Nội Dung">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-10">
                        <input type="number" name="cost" class="form-control" id="inputCost" placeholder="Rate ★"
                               max="5"min="1">
                    </div>
                </div>


                <button style="margin-top: 50px;margin-left: 200px;margin-bottom: 20px" type="reset"
                        class="btn btn-danger">Hủy
                </button>
                <button style="margin-top: 50px;margin-bottom: 20px" type="submit" class="btn btn-warning">Đăng</button>
            </form>
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
                    <a class="user-detail" href="/user/{{$user->id}}">
                        <div>
                            <img src="{{$user->avatar}}" alt="">
                            <span> <b style="font-size: 15px">{{$user->fullName}}</b></span>
                        </div>
                    </a>
                    @foreach($post->getComment as $cmt)
                        <div style="padding-left: 20px">{{$cmt->comment}}</div>
                    @endforeach
                @endforeach
            </div>
        </div>
    @endforeach
@endsection
