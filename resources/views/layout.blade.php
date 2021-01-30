<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bastet'Home</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- CSS only BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */

        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *, :after, :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg, video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns:repeat(1, minmax(0, 1fr))
        }

        @media (min-width: 640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width: 768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns:repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width: 1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }
        }
    </style>

    <style>
        {{--Phan anh bia + avt--}}
        .header {
            margin: 30px;
            width: 1300px;
            height: 400px;
            position: relative;
        }

        .top-header {
            margin: auto;
        }

        .big-avt img {
            width: 1300px;
            height: 400px;

        }

        .small-avt img {
            width: 300px;
            height: 300px;
            position: absolute;
            bottom: -100px;
            left: 500px;
            border-radius: 200px;
            opacity: 1;
        }

        .small-avt:hover img {
            transform: scale(1.1);
        }

        {{--Mau chu menu--}}
        .style-color {
            color: lightsalmon;
            font-family: "DejaVu Sans";
            font-size: 20px;
        }

        {{--Noi dung--}}
        .content {
            margin-top: 100px;
        }

        {{--Style cua bai post--}}
        .style-post {
            width: 500px;
            margin: auto;
            padding-top: 50px;
            border-bottom: 1px solid grey;
        }

        .style-post img {
            width: 500px;
            height: 500px;
            border-radius: 20px;
        }

        .style-post b {
            font-size: 20px;
        }

        .style-post .style-time-post {
            font-size: 10px;
            color: grey;
        }

        .style-list-cat {
            width: 600px;
        }


        {{--CSS anh trong cat--}}
         .cat-img img {
            width: 400px;
            height: 300px;
            border-radius: 50px;
        }

        .cat-img {
            position: relative;
        }

        .layer-2 img {
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
            transition: 0.8s;
            transform-origin: 40% 40%;
        }

        .cat-img:hover .layer-2 img {
            opacity: 0.5;
            transform: rotateY(360deg);
        }

        .layer-3 {
            position: absolute;
            top: 70px;
            left: 50px;
            opacity: 0;
            transition: 0.8s;
            transform-origin: 40% 40%;
        }

        .cat-img:hover .layer-3 {
            color: white;
            font-size: 20px;
            opacity: 1;
            transform: rotateY(360deg);
        }

        {{--chia khung cho listcat--}}
        .style-list-cat {
            width: 900px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin: auto;
        }

        .cat-img {
            margin-top: 100px;
        }

        {{--Product style--}}
        .product-style {
            margin: auto;
            display: flex;
            width: 1000px;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .style-div{
            padding-top: 50px;
        }

        .product-img img {
            width: 300px;
            height: 400px;
            border-radius: 20px;
        }
        .footer img{
            padding-top: 50px;
            width: 1360px;
            height: 200px;
            bottom: 0;
        }
    </style>

    </style>
</head>
<body class="Bastet">
<div class="header"> <!-- Ảnh bìa-->
    <div class="top-header">
        <div class="big-avt">
            <img
                src="https://scontent.fhan2-1.fna.fbcdn.net/v/t1.0-9/21761633_1958822234339295_3256710235391501529_n.jpg?_nc_cat=106&ccb=2&_nc_sid=e3f864&_nc_ohc=C6EJOObBtu0AX9dalkc&_nc_ht=scontent.fhan2-1.fna&oh=cd37ab32a82b19ba1823e7e954b7165f&oe=6039048A"
                alt="">
        </div>
        <div class="small-avt">
            <img
                src="https://scontent.fhan2-5.fna.fbcdn.net/v/t1.0-9/56990401_2279272908960891_3090355224330633216_n.jpg?_nc_cat=109&ccb=2&_nc_sid=09cbfe&_nc_ohc=umVVopiHOi4AX8uKgam&_nc_ht=scontent.fhan2-5.fna&oh=d345e60a0269b0e411b3da0642551e9d&oe=603AF740"
                alt="">
        </div>
    </div>
    {{--het div--}}
    <div class="body-web">
        <div class="menu">
            <nav>
                <div class="nav nav-tabs">
                    <a class="nav-link style-color {{checkActiveMenu('/home')}}" href="/home">Home</a>
                    <a class="nav-link style-color {{checkActiveMenu('/cat')}}" href="/cat">Cats</a>
                    <a class="nav-link style-color {{checkActiveMenu('/store')}}" href="/store">Store</a>
                    <a class="nav-link style-color" href="https://www.facebook.com/BastetsHome">Facebook</a>
                    <a class="nav-link style-color" href="">Staff</a>
                </div>
            </nav>
        </div>
        <div class="content">
            @yield('content')
        </div>
    </div>
    {{--het div--}}
    <div class="footer">
        <img src="https://genk.mediacdn.vn/thumb_w/600/2016/11349324-1685331671706633-667022670-n-1457155607213-crop-1457155622873.jpg" alt="">
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
            crossorigin="anonymous"></script>
</body>
</html>
