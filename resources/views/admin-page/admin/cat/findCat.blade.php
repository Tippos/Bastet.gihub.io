@extends('admin-page.admin.admin')
@section('table')

    {{$i=1}}
    <table style="width: 1000px;margin-left: 300px" class="table table-striped table-hover">
        <th>STT</th>
        <th>Name</th>
        <th>Image</th>
        <th>Description</th>
        <th>Weight</th>
        <th>Edit</th>
        <th>Del</th>
        @foreach($list_cat as $ar)
            <tr>
                <td>{{$i++}}</td>
                <td>{{$ar->name}}</td>
                <td>
                    <img style="width: 50px;height: 50px" src="{{$ar->image}}" alt="">
                </td>
                <td>{{$ar->description}}</td>
                <td>{{$ar->weightCat}}Kg</td>
                <td>
                    <a href="/updateCat/{{$ar->id}}">
                        <i class="fa fa-edit "></i>
                    </a>
                </td>
                <td>
                    <a href="/delCat/{{$ar->id}}">
                        <i class="fa fa-trash" onclick="return confirm('Are you sure?')"></i>
                    </a>
                </td>
            </tr
        @endforeach
    </table>

@endsection

