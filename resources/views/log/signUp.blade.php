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
</head>
<body>

<div class="main">
    <div class="container">
        <div class="signup-content">
            <div class="signup-img">
                <img src="{{asset('signUp/images/signup-img.jpg')}}" alt="">
            </div>

            <div class="signup-form">
                <form method="POST" class="register-form" id="register-form">
                    <h2>Bastet Registration Form</h2>

                    <div class="form-group">
                        <label for="userName">User Name </label>
                        <input id="userName" class="input100" type="text" name="userName" placeholder="User name"required>
                    </div>
                    <div class="form-group">
                        <label for="userName">Password </label>

                        <input class="input100" type="password" name="password" placeholder="Password"required>
                    </div>
                    <div class="form-group">
                        <label for="fullName">Full Name </label>
                        <input type="text" name="fullName" id="fullName" required/>
                    </div>
                    <div class="form-group">
                        <label for="birthDay">Day Of Birth </label>
                        <input type="text" name="birthDay" id="birthDay">
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
                    <div class="form-group">
                        <label for="avatar">Avatar </label>
                        <input type="text" name="avatar" id="avatar" required/>
                    </div>
                    <div class="form-group">
                        <label for="facebook">Faceook </label>
                        <input type="text" name="facebook" id="facebook" required/>
                    </div>
                    <div class="form-radio">
                        <label for="gender" class="radio-label">Gender :</label>
                        <div class="form-radio-item">
                            <input type="radio" name="gender" id="male" checked>
                            <label for="male">Male</label>
                            <span class="check"></span>
                        </div>
                        <div class="form-radio-item">
                            <input type="radio" name="gender" id="female">
                            <label for="female">Female</label>
                            <span class="check"></span>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="state">Country</label>
                            <div class="form-select">
                                <select name="state" id="state">
                                    <option value=""></option>
                                    <option value="us">America</option>
                                    <option value="uk">English</option>
                                    <option value="uk">Việt Nam</option>
                                </select>
                                <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                            </div>
                        </div>

                        <div class="form-submit">
                            <input type="submit" value="Submit Form" class="submit" name="submit" id="submit"/>
                        </div>

                    </div>
                </form>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="{{asset('signUp/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('signUp/js/main.js')}}"></script>
</body>
</html>
