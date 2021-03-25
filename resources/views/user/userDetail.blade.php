@extends('user.layout')
@section('content')

    <div class="deltail">
        <div class="left">
            <img class="style-img-deltail" src="{{$user->avatar}}" alt="">
            <div style="text-align: center">
                <h3>{{$user->fullName}}</h3>
            </div>
        </div>
        <div class="right">
            <div>
                <b style="padding-right: 50px">Facebook </b>
                <a style="color:blue;" target="_blank" href="{{$user->facebook}} ">
                    {{$user->facebook}}
                </a>
            </div>
            <div>
                <b style="padding-right: 55px">Birthday </b>
                {{date('d/m/y',$user->birthday)}}
            </div>
            <div>
                <b style="padding-right: 95px"> Job </b>
                <td style="max-width: 100px;">{{$user->job}}</td>
            </div>
            <div>
                <b style="padding-right: 8px">Phone Number</b>
                {{$user->phoneNumber}}
            </div>
            <div>
                <b style="padding-right: 68px">Gender</b>
                @if($user->gender==1)
                    Male
                @else
                    Female
                @endif
            </div>
            <div>
                <b style="padding-right: 90px">Role </b>
                @if($user->role==ROLE_USER_ADMIN)
                    Admin
                @else
                    Course
                @endif
            </div>
            <div class="status-style-{{$user->status}}">
                <b style="color: black;padding-right: 78px">Status </b>
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
            </div>
        </div>
    </div>
@endsection
