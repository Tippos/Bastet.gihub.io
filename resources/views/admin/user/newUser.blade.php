@extends('admin.admin')
@section('table')
    <div style="margin: auto;width: 1000px;" class="col-lg-9">
        <form action="/addUser" enctype="multipart/form-data" method="post">
            @csrf

            <div class="form-group row">
                <label for="inputfullName" class="col-sm-2 col-form-label">Full Name</label>
                <div class="col-sm-10">
                    <input type="text" name="fullName" class="form-control" id="inputfullName">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputBirthday" class="col-sm-2 col-form-label">Day Of Birth</label>
                <div class="col-sm-10">
                    <input type="text" name="birthday" class="form-control" id="inputBirthday" placeholder="Integer">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" name="email" class="form-control" id="inputEmail">
                </div>
            </div>
            <div class="form-group row">
                <label for="inpuPhoneNumber" class="col-sm-2 col-form-label">Phone Number</label>
                <div class="col-sm-10">
                    <input type="text" name="phoneNumber" class="form-control" id="inputphoneNumber">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputJob" class="col-sm-2 col-form-label">Job</label>
                <div class="col-sm-10">
                    <input type="text" name="job" class="form-control" id="inputJob">
                </div>
            </div>
{{--            <div class="form-group row">--}}
{{--                <label for="inputAvatar" class="col-sm-2 col-form-label">Avatar </label>--}}
{{--                <div class="col-sm-10">--}}
{{--                    <input type="file" name="avatar" class="form-control" required="true">--}}
{{--                </div>--}}
{{--                <br/>--}}
{{--            </div>--}}
            {{--JS Preview Image Before Upload--}}
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

            <div class="form-group row">
                <label for="inputFacebook" class="col-sm-2 col-form-label">Facebook</label>
                <div class="col-sm-10">
                    <input type="text" name="facebook" class="form-control" id="inputFacebook" placeholder="URL">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputGender" class="col-sm-2 col-form-label">Gender</label>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="inputGender" value=1>
                        <label class="form-check-label" for="inputGender">Male</label>
                    </div>
                    <div class="form-check">

                        <input class="form-check-input" type="radio" name="gender" id="inputGender" value=2>
                        <label class="form-check-label" for="inputGender">Female</label>
                    </div>
                </div>
            </div>
                    <div class="form-group row">
                        <label for="inputCountry">Country</label>
                        <div class="col-sm-10">
                            <select name="country" id="inputCountry">
                                <option value=""></option>
                                <option value="America">America</option>
                                <option value="England">England</option>
                                <option value="Việt Nam">Việt Nam</option>
                            </select>
                            <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                        </div>
                    </div>

            <div class="form-group row">
                <label for="inputRole" class="col-sm-2 col-form-label">Role</label>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="role" id="inputRole" value=1>
                        <label class="form-check-label" for="inputRole">Admin</label>
                    </div>
                    <div class="form-check">

                        <input class="form-check-input" type="radio" name="role" id="inputRole" value=2>
                        <label class="form-check-label" for="inputRole">Standard</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputStatus" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" id="inputStatus" value=1>
                        <label class="form-check-label" for="inputStatus">Active</label>
                    </div>
                    <div class="form-check">

                        <input class="form-check-input" type="radio" name="status" id="inputStatus" value=2>
                        <label class="form-check-label" for="inputStatus">Unactive</label>
                    </div>
                    <div class="form-check">

                        <input class="form-check-input" type="radio" name="status" id="inputStatus" value=3>
                        <label class="form-check-label" for="inputStatus">Block</label>
                    </div>
                    <div class="form-check">

                        <input class="form-check-input" type="radio" name="status" id="inputStatus" value=4>
                        <label class="form-check-label" for="inputStatus">New</label>
                    </div>
                </div>
            </div>

            <button type="reset" class="btn btn-warning">Reset</button>
            <button type="submit" class="btn btn-warning">Add</button>
        </form>
    </div>



@endsection
