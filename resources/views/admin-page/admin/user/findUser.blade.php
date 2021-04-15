@extends('admin-page.admin.admin')
@section('table')

    {{$i=1}}
    @if (session('key'))
        <div style="margin: auto;text-align: center" class="alert alert-success" role="alert">
            {{ session('key') }}
        </div>
    @endif
    <table style="margin:auto;max-width: 500px;margin-left: 300px " class="table table-striped table-hover">
        <th>STT</th>
        <th>Full Name</th>
        <th>Avatar</th>
        <th>Day Of Birth</th>
        <th>Email</th>
        <th>Facebook</th>
        <th>Phone Number</th>
        <th>Job</th>
        <th>Gender</th>
        <th>Country</th>
        <th>Status</th>
        <th>Role</th>
        <th>Edit</th>
        <th>Del</th>
        @foreach($list_user as $user)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$user->fullName}}</td>
                    <td>
                        <img style="width: 50px;height: 50px" src="{{$user->avatar}}" alt="">
                    </td>
                    <td>{{date('d/m/y',$user->birthday)}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <a style="color:blue;" target="_blank"  href="{{$user->facebook}} " >
                    <span class="d-inline-block text-truncate" style="max-width: 50px;">
                            {{$user->facebook}}
                    </span>
                        </a >
                    </td>
                    <td>{{$user->phoneNumber}}</td>
                    <td>{{$user->job}}</td>
                    <td>
                        @if($user->gender==GENDER_MALE)
                            MALE
                        @endif
                        @if($user->gender==GENDER_FEMALE)
                            FEMALE
                        @endif
                    </td>

                    <td >{{$user->country}}</td>
                    <td class="status-style-{{$user->status}}">

                        @if($user->status==STATUS_USER_ACTIVE)
                            Active
                        @endif
                        @if($user->status==STATUS_USER_UNACTIVE)
                            Unactive
                        @endif
                        @if($user->status==STATUS_USER_LOCK)
                            Lock
                        @endif
                        @if($user->status==STATUS_USER_PENDING)
                            New
                        @endif
                    </td>
                    <td class="style-role-{{$user->role}}">
                        @if($user->role==ROLE_USER_ADMIN)
                            Admin
                            @endif
                        @if($user->role==ROLE_USER_STANDARD)
                            User Standard
                            @endif
                    </td>
                    <td>
                        <a href="/updateUser/{{$user->id}}">
                            <i class="fa fa-edit "></i>
                        </a>
                    </td>
                    <td>
                        <a href="/delUser/{{$user->id}}">
                            <i class="fa fa-trash" onclick="return confirm('Are you sure?')"></i>
                        </a>
                    </td>
                </tr
        @endforeach
    </table>

@endsection
