{{-- 
Được viết lại và thiết kế lại web hoàn toàn vào 8.3.2026
--}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $data->title }}</title>
    <meta name="title" content="{{ $data->title }}" />
    <meta property="og:title" content="{{ $data->title }}" />
    <meta property="og:image" content="{{ $data->image }}" />
    <meta property="og:type" content="article" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        .f_l_b {
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            cursor: pointer;
        }

        .f_l_m {
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            background-color: #fff;
            display: none;
            animation: fadeIn .15s linear;
        }

        h1 {
            font-size: 35px;
            margin: 10px 0;
            text-align: center;
        }

        .flex {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .img {
            width: 65vw;
        }

        .img img {
            width: 100%;
        }

        @media only screen and (min-width: 1200px) {
            .img {
                max-width: 30vw;
            }
        }
    </style>
</head>

<body>
    <div class="f_l_b" id="flb"></div>
    <h1 style="margin: 35px;">{{ $data->description }}</h1>
    <div class="flex">
        <div class="img">
            <img src="{{ $data->image }}" alt="">
        </div>
    </div>
    <script>
        $("#flb").click(function(e) {
            window.location = "?a&l"
        });
    </script>
</body>

</html>
