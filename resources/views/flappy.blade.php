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
<a href="/home">Quay lại</a>
<canvas  id="gamezone" width="900" height="500"></canvas>
<p  id="score"> Score: 0</p>
</body>
<script src="{{asset('js/flappy.js')}}"></script>
</html>
