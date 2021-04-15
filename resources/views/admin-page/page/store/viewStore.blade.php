@extends('admin-page.page.layout')
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

    <div class="content-store">
        @yield('content-stores')
    </div>


@endsection
