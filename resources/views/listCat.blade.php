@extends('layout')
@section('content')
    <div class="alert alert-warning" role="alert" style="width: 700px;height: 200px;margin: auto">
       <h4 style="text-align: center">Danh Sách các hoàng thượng của quán !</h4>
        <p>Quán hiện có 40 nhân viên mèo cần chờ được nựng</p>
        <hr>
        <p>Ngoài ra mỗi ca đều có các sen luôn sẵn sàng hướng dẫn khách chăm sóc các hoàng thượng !</p>
    </div>
    <div class="style-list-cat">
        @foreach($list_cat as $cat)
            <div class="cat-img">
                <div class="layer-1">
                    <img src="{{$cat->image}}" alt="">
                </div>
                <div class="layer-2">
                    <img
                        src="https://genk.mediacdn.vn/thumb_w/600/2016/11349324-1685331671706633-667022670-n-1457155607213-crop-1457155622873.jpg"
                        alt="">
                </div>
                <div class="layer-3">
                    <div style=""><b>{{$cat->name}} :</b></div>
                    <div><b><i>"{{$cat->description}}"</i></b></div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
