@extends('admin-page.admin.admin')
@section('table')
{{--    {{$i=1}}--}}
    @if (session('key'))
            <div style="margin: auto;text-align: center" class="alert alert-success" role="alert"   >
                {{ session('key') }}
            </div>
    @endif
    <div style="margin-left: 200px" id="app">
        <get-medicine></get-medicine>
    </div>

    <script src="{{asset('/js/app.js')}}"></script>
@endsection
