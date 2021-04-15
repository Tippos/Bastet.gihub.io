@extends('standard.store.viewStore')
@section('content-stores')
    <div class="product-style">
        @foreach($list_pr as $pr)
            @if($pr->class==2)
                <section>
                    <div class="container">
                        <div class="card">
                            <div class="imgBx">
                                <img style="width: 300px; height: 400px;" src="{{$pr->image}}" alt="">
                            </div>
                            <div class="content">
                                <div class="contentBx">
                                    <h3>
                                        {{$pr->name}}
                                        <br>
                                        <span>"{{$pr->description}}"</span>
                                    </h3>
                                </div>
                                <ul class="sci">
                                    <li style="--i:1">
                                        <span style="color: red;font-size: 24px">{{$pr->cost}}.000VND</span>
                                        <div style="display: flex;justify-content: space-between">
                                            <div style="color: black"><a href="#" class=" fa fa-shopping-cart"></a>
                                            </div>
                                            <span style="color: black"><a href="#" class="fa fa-cart-plus"></a></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
            @endif

        @endforeach

    </div>
@endsection
