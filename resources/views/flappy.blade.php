<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style-flappy.css')}}">
    <link rel="icon" type="image/png" href="{{asset('login/images/icons/icon.jpg')}}"/>
    <title>Bastet's Home</title>

</head>
<body>
<a href="/homeStandard">Quay lại</a>
<canvas id="gamezone" width="900" height="500"></canvas>
<div>
    <img style="width: 50px;height: 50px;border-radius: 50%" src="{{$user->avatar}}" alt="">
</div>
<div style="color: white">
    {{$user->fullName}}
    <p id="score"> Score: 0</p>
</div>

</body>
<script src="{{asset('js/flappy.js')}}"></script>
</html>
