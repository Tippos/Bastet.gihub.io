@extends('layout')
@section('content')
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
