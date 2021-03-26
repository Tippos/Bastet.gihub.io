@extends('admin.admin')
@section('table')

    @if (session('key'))
        <div style="margin: auto;text-align: center" class="alert alert-success" role="alert">
            {{ session('key') }}
        </div>
    @endif
    {{--    @if ($validate->any())--}}
    {{--        <div class="alert alert-danger">--}}
    {{--            <ul style="list-style: none; padding: 0">--}}
    {{--                @foreach ($validate->all() as $error)--}}
    {{--                    <li><strong>{{ $error }}</strong></li>--}}
    {{--                @endforeach--}}
    {{--            </ul>--}}
    {{--        </div>--}}
    {{--    @endif--}}
    {{$i=1}}
    <table style="width: 1000px;margin:auto " class="table table-striped table-hover">
        <th>STT</th>
        <th>Name</th>
        <th>Image</th>
        <th>Description</th>
        <th>Cost</th>
        <th>Edit</th>
        <th>Del</th>
        @foreach($list_pr_food as $pr)
            @if($pr->class==1)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$pr->name}}</td>
                    <td>
                        <img style="width: 50px;height: 50px" src="{{$pr->image}}" alt="">
                    </td>
                    <td>{{$pr->description}}</td>
                    <td>{{$pr->cost}}.000VND</td>
                    <td>
                        <a href="/updateProduct/{{$pr->id}}">
                            <i class="fa fa-edit "></i>
                        </a>
                    </td>
                    <td>
                        <a href="/delProduct/{{$pr->id}}">
                            <i class="fa fa-trash" onclick="return confirm('Are you sure?')"></i>
                        </a>
                    </td>
                </tr
            @endif
        @endforeach
    </table>

@endsection
