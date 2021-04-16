@extends('admin-page.page.layout')
@section('content')
    <div style="margin: auto;width: 1000px;" class="col-lg-9">
        <form action="/upUserPageAdmin/{{$user->id}}" enctype="multipart/form-data" method="post">
            @csrf
            <div class="form-group row">
                <label for="inputfullName" class="col-sm-2 col-form-label">User Name</label>
                <div class="col-sm-10">
                    <input type="text" name="userName" class="form-control" id="inputuserName">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputfullName" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" name="password" class="form-control" id="inputpassword">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputfullName" class="col-sm-2 col-form-label">Full Name</label>
                <div class="col-sm-10">
                    <input type="text" name="fullName" class="form-control" id="inputfullName">
                </div>
            </div>

            <script>
                function readURL(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function(e) {
                            $('#blah').attr('src', e.target.result);
                        }

                        reader.readAsDataURL(input.files[0]); // convert to base64 string
                    }
                }
            </script>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            {{--form image--}}
            <div class="form-group row">
                <label for="inputImage" class="col-sm-2 col-form-label">Avatar</label>
                <div class="col-sm-10">
                    <input id="image" type="file" name="avatar" class="form-control" required="true">
                    <img style="width: 100px;height: 100px" id="blah" src="" alt="">
                </div>
                <br/>
            </div>
            <script>
                $("#image").change(function() {
                    readURL(this);
                });
            </script>
            {{--Het Script--}}
            <button type="reset" class="btn btn-warning">Reset</button>
            <button type="submit" class="btn btn-warning">Update</button>
        </form>
    </div>



@endsection
