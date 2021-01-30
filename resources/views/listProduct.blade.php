@extends('layout')
@section('content')
    <div class="product-style">
        @foreach($list_pr as $pr)
            <div class="style-div">
                <div>
                    <b>{{$pr->name}}</b>
                </div>
                <div style="font-size: 15px;color: grey">
                    {{$pr->description}}
                </div>
                <div class="product-img">
                    <img src="{{$pr->image}}" alt="">
                </div>
                <div>
                    <div style="padding-top: 10px;text-align: center">{{$pr->cost}}.000VND</div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
