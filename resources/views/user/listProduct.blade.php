@extends('user.layout')
@section('content')

    <div>
        <nav>
            <div style="margin-left: 500px" class="nav nav-pills mb-3">
                <a class="nav-link style-color {{checkActiveMenu('/sFood')}}" href="/sFood">Food</a>
                <a class="nav-link style-color {{checkActiveMenu('/sToy')}}" href="/sToy">Toy And Gear</a>
                <a class="nav-link style-color {{checkActiveMenu('/sMedicine')}}" href="/sMedicine">Medicine</a>
            </div>
        </nav>
    </div>
    <div class="product-style">
        @foreach($list_pr as $pr)
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
        @endforeach
        <div style="margin-left: 300px;margin-top: 200px ">{{ $list_pr->links() }}</div>


        <style>
            .w-5 {
                display: none;
            }
        </style>
    </div>
    <div class="content-store">
        @yield('content-stores')
    </div>


@endsection
