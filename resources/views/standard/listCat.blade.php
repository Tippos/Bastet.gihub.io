@extends('standard.homeDetail')
@section('content')

    <div class="alert alert-warning" role="alert" style="width: 700px;height: 200px;margin: auto">
        <h4 style="text-align: center">Danh Sách các hoàng thượng của quán !</h4>
        <p>Quán hiện có 40 nhân viên mèo cần chờ được nựng</p>
        <hr>
        <p>Ngoài ra mỗi ca đều có các sen luôn sẵn sàng hướng dẫn khách chăm sóc các hoàng thượng !</p>
    </div>
    <div style="margin-left: 400px;width: 700px;" class="navbar-search-block">
        <form class="form-inline" action="/gCat" method="get">
            <div class="input-group input-group-sm">
                <select class="form-select" aria-label="Default select example" type="text" name="key">
                    <option selected>Sort By</option>
                    <option value="1">Name A-Z</option>
                    <option value="2">Name Z-A</option>
                    <option value="3">Weight Low-high</option>
                    <option value="4">Weight High-low</option>
                </select>
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i style="color: black" class="fas fa-sort"></i>
                    </button>

                </div>
            </div>
        </form>
    </div>
    <div class="style-list">
        @foreach($list_cat as $cat)
            <section>
                <div class="container">
                    <div class="card">
                        <div class="imgBx">
                            <img style="width: 300px; height: 400px;" src="{{$cat->image}}" alt="">
                        </div>
                        <div class="content">
                            <div class="contentBx">
                                <h3>
                                    {{$cat->name}}
                                    <br>
                                    <span>"{{$cat->description}}"</span>
                                    <br>
                                    <span >{{$cat->weightCat}}Kg</span>
                                </h3>
                            </div>
                            <ul class="sci">
                                <li style="--i:1">
                                    <a href="https://www.facebook.com/BastetsHome"><i class="fa fa-facebook"
                                                                                      aria-hidden="true"></i> </a>
                                </li>
                                <li style="--i:2">
                                    <a href="https://www.instagram.com/bastetshome/"><i class="fa fa-instagram"
                                                                                        aria-hidden="true"></i></a>
                                </li>
                                <li style="--i:3">
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        @endforeach
    </div>
@endsection
