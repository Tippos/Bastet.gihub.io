@extends('admin.admin')
@section('table')

    {{$i=1}}
    <table style="width: 1000px;margin:auto " class="table table-striped table-hover">
        <th>STT</th>
        <th>Name</th>
        <th>Image</th>
        <th>Description</th>
        <th>Cost</th>
        <th>Edit</th>
        <th>Del</th>
        @foreach($arr as $ar)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$ar->name}}</td>
                    <td>
                        <img style="width: 50px;height: 50px" src="{{$ar->image}}" alt="">
                    </td>
                    <td>{{$ar->description}}</td>
                    <td>{{$ar->cost}}</td>
                    <td>
                        <a href="/updateProduct/{{$ar->id}}">
                            <i class="fa fa-edit "></i>
                        </a>
                    </td>
                    <td>
                        <a href="/delProduct/{{$ar->id}}">
                            <i class="fa fa-trash" onclick="return confirm('Are you sure?')"></i>
                        </a>
                    </td>
                </tr
        @endforeach
    </table>

@endsection
