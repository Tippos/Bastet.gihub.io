<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bastet's Home</title>
    <link rel="icon" type="image/png" href="{{asset('login/images/icons/icon.jpg')}}"/>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('signUp/fonts/material-icon/css/material-design-iconic-font.min.css')}}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('signUp/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('login/css/util.css')}}">

</head>
<body>

<div class="main">
    <div class="container">
        <div class="signup-content">
            <div class="signup-img">
                <img src="{{asset('signUp/images/signup-img.jpg')}}" alt="">
            </div>

            <div class="signup-form">
                <form method="POST" class="register-form" id="register-form" action="/regisUser" enctype="multipart/form-data">
                    <h2>Bastet Registration Form</h2>

                    <div class="form-group">
                        <label for="userName">User Name </label>
                        <input id="userName" class="input100" type="text" name="userName" placeholder="User name"
                               required>
                    </div>
                    <div class="form-group">
                        <label for="userName">Password </label>

                        <input class="input100" type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <label for="fullName">Full Name </label>
                        <input type="text" name="fullName" id="fullName" required/>
                    </div>
                    <div class="form-group">
                        <label for="birthDay">Day Of Birth </label>
                        <input type="text" name="birthday" id="birthday">
                    </div>
                    <div class="form-group">
                        <label for="email">Email :</label>
                        <input type="email" name="email" id="email"/>
                    </div>
                    <div class="form-group">
                        <label for="phoneNumber">Phone Number </label>
                        <input type="text" name="phoneNumber" id="phoneNumber" required/>
                    </div>
                    <div class="form-group">
                        <label for="job">Job :</label>
                        <input type="text" name="job" id="job" required/>
                    </div>
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
                            <img style="width: 100px;height: 100px;border-radius: 50%" id="blah" src="" alt="">
                        </div>
                        <br/>
                    </div>
                    <script>
                        $("#image").change(function() {
                            readURL(this);
                        });
                    </script>
                    {{--Het Script--}}
                    <div class="form-group">
                        <label for="facebook">Faceook </label>
                        <input type="text" name="facebook" id="facebook" required/>
                    </div>
                    <div class="form-radio">
                        <label for="gender" class="radio-label">Gender :</label>
                        <div class="form-radio-item">
                            <input type="radio" name="gender" id="male" value="1" checked>
                            <label for="male">Male</label>
                            <span class="check"></span>
                        </div>
                        <div class="form-radio-item">
                            <input type="radio" name="gender" id="female" value="2">
                            <label for="female">Female</label>
                            <span class="check"></span>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="state">Country</label>
                            <div class="form-select">
                                <select name="country" id="state">
                                    <option value=""></option>
                                    <option value="America">America</option>
                                    <option value="England">England</option>
                                    <option value="Việt Nam">Việt Nam</option>
                                </select>
                                <span class="s  elect-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="state">Role</label>
                            <div class="form-select">
                                <select name="role" id="role">
                                    <option value=""></option>
                                    <option value="2">Standard</option>
                                </select>
                                <span class="s  elect-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="state">Status</label>
                            <div class="form-select">
                                <select name="status" id="status">
                                    <option value=""></option>
                                    <option value="4">Pendding</option>
                                </select>
                                <span class="s  elect-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                            </div>
                        </div>
                        <div class="form-submit">
                            <input type="submit" value="Submit Form" class="submit" name="submit" id="submit"/>
                        </div>

                    </div>
                </form>
            </div>
        </div>

        <div style="font-size:20px;text-decoration: none; " class="w-full text-center">
            <a href="/log" class="txt3">
                Log in
            </a>
        </div>
    </div>

    <!-- JS -->
    <script src="{{asset('signUp/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('signUp/js/main.js')}}"></script>
</body>
</html>
