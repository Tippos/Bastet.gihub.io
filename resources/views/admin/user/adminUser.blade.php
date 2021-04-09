@extends('admin.admin')
@section('table')

    @if (session('key'))
        <div style="margin: auto;text-align: center" class="alert alert-success" role="alert">
            {{ session('key') }}
        </div>
    @endif
    <div style="margin-left: 200px" id="app">
        <get-ad></get-ad>
    </div>

    <script src="{{asset('/js/app.js')}}"></script>

@endsection
