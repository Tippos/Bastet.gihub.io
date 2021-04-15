@extends('standard.homeDetail')
@section('content')

    <div>
        <nav>
            <div style="margin-left: 500px" class="nav nav-pills mb-3">
                <a class="nav-link style-color {{checkActiveMenu('/gSFood')}}" href="/gSFood">Food</a>
                <a class="nav-link style-color {{checkActiveMenu('/gSToy')}}" href="/gSToy">Toy And Gear</a>
                <a class="nav-link style-color {{checkActiveMenu('/gSMedicine')}}" href="/gSMedicine">Medicine</a>
            </div>
        </nav>
    </div>

    <div class="content-store">
        @yield('content-stores')
    </div>


@endsection
