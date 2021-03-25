@extends('admin.admin')
@section('table')
    {{$i=1}}

    <table style="width: 1000px;margin:auto " class="table table-striped table-hover">
        <th>STT</th>
        <th>Name</th>
        <th>Image</th>
        <th>Description</th>
        <th>Edit</th>
        <th>Del</th>
        @foreach($list_cat as $c)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$c->name}}</td>
                    <td>
                        <img style="width: 50px;height: 50px" src="{{$c->image}}" alt="">
                    </td>
                    <td>{{$c->description}}</td>
                    <td>
                        <a href="#">
                            <i class="fa fa-edit "></i>
                        </a>
                    </td>
                    <td>
                        <a href="#">
                            <i class="fa fa-trash" onclick="return confirm('Are you sure?')"></i>
                        </a>
                    </td>
                </tr
        @endforeach
    </table>

@endsection