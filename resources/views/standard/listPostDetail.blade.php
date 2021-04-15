@extends('standard/homeDetail')
@section('content')
    <div style="border: 0.5px solid grey;width: 500px;margin: auto;border-radius: 20px">
        <div style="    width: 400px;margin: auto;">
            <div style="margin-left: 80px"><h3>Bạn đang nghĩ gì?</h3></div>
            <form action="/addPostStandard" enctype="multipart/form-data" method="post">
                <div class="form-group row">
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" id="inputName" placeholder="Tiêu Đề">
                    </div>
                </div>
                {{--JS Preview Image Before Upload--}}
                <script>
                    function readURL(input) {
                        if (input.files && input.files[0]) {
                            var reader = new FileReader();

                            reader.onload = function (e) {
                                $('#blah').attr('src', e.target.result);
                            }

                            reader.readAsDataURL(input.files[0]); // convert to base64 string
                        }
                    }
                </script>

                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                {{--form image--}}
                <div class="form-group row">
                    <div class="col-sm-10">
                        <input id="image" type="file" name="image" class="form-control" required="true"
                               placeholder="Hình Ảnh">
                        <img style="width: 200px;height: 200px;margin:20px 20px 20px 70px;border-radius: 20px"
                             id="blah"
                             src=""
                             alt="Hình Ảnh">
                    </div>
                    <br/>
                </div>
                <script>
                    $("#image").change(function () {
                        readURL(this);
                    });
                </script>
                {{--Het Script--}}


                <div s class="mb-3" style="width: 330px">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                              placeholder="Nội Dung" name="description"></textarea>
                </div>

                <div class="form-group row">
                    <div class="col-sm-10">
                        <input type="number" name="rate" class="form-control" id="inputCost" placeholder="Rate ★"
                               max="5" min="1">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <input type="number" name="userId" class="form-control" id="inputCost" placeholder="User ID"
                               max="100" min="1">
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
            <div style="border-bottom: 1px solid gray">
                <b>Rate :</b>
                {{RATE_STAR($post->rate)}}
            </div>
        </div>
    @endforeach
@endsection
