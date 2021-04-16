@extends('admin-page.admin.admin')
@section('table')
    @if (session('key'))
        <div style="margin: auto;text-align: center" class="alert alert-success" role="alert">
            {{ session('key') }}
        </div>
    @endif
    <div style="margin-left: 300px;;width: 1000px;" class="col-lg-9">
        <form action="/sendMail" method="post">
            @csrf
            <div class="form-group row">
                <label for="inputfullName" class="col-sm-2 col-form-label"> Email Nhận</label>
                <div class="col-sm-10">
                    <input type="text" name="emailAddress" class="form-control" id="inputuserName">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputfullName" class="col-sm-2 col-form-label">Tên Người Gửi</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" id="inputName"">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputfullName" class="col-sm-2 col-form-label">Tiêu Đề </label>
                <div class="col-sm-10">
                    <input type="text" name="title" class="form-control" id="inputName">
                </div>
            </div>

            <div class="form-group row">
                <label for="inputfullName" class="col-sm-2 col-form-label">Nội dung</label>
                <div class="col-sm-10">
                    <input style="height: 200px" type="text" name="cont" class="form-control" id="inputContent">
                </div>
            </div>

            <button type="reset" class="btn btn-warning">Reset</button>
            <button type="submit" class="btn btn-warning">Send</button>
    </div>

@endsection
