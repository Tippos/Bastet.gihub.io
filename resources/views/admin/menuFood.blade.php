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
        @foreach($list_pr_food as $pr)
            @if($pr->class==1)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$pr->name}}</td>
                    <td>
                        <img style="width: 50px;height: 50px" src="{{$pr->image}}" alt="">
                    </td>
                    <td>{{$pr->description}}</td>
                    <td>{{$pr->cost}}</td>
                    <td>
                        <a href="/updateProduct/{{$pr->id}}">
                            <i class="fa fa-edit "></i>
                        </a>
                    </td>
                    <td>
                        <a href="/delProduct/{{$pr->id}}">
                            <i class="fa fa-trash"></i>
                        </a>
                    </td>
                </tr
            @endif
        @endforeach
    </table>

@endsection
