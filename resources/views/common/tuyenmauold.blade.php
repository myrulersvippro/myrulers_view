<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $data->title }}</title>
    <meta name="title" content="{{ $data->title }}" />
    <meta name="description" content="{{ $data->description }}">
    <meta property="twitter:title" content="{{ $data->title }}" />
    <meta property="twitter:description" content="{{ $data->description }}" />
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:image" content="{{ $data->image }}" />
    <meta property="og:title" content="{{ $data->title }}" />
    <meta property="og:image" content="{{ $data->image }}" />
    <meta property="og:type" content="article" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Sacramento&display=swap"
        rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <style>
        body {
            font-family: "Oswald", sans-serif;
            font-optical-sizing: auto;
            font-style: normal;
        }

        .list-chup:hover {
            transform: scale(103%);
            transition: all linear .3s;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
        }

        .bottom-line::before {
            background: #555;
            bottom: -5px;
            content: "";
            height: 2px;
            left: 50%;
            margin-left: -20px;
            position: absolute;
            width: 40px;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }

        input {
            box-shadow: none !important;
        }

        .sai-code {
            border-color: var(--bs-form-invalid-border-color) !important;
        }
    </style>
</head>

<body class="mb-5">
    <div id="selectModel">
        <div class="text-center text-light text-uppercase"
            style="background-image: url(https://{{env('APP_CDN_DOMAIN', 'brscdn.io.vn')}}/theme/system/tuyenmauold/header.jpg); padding:25px 0;background-position: center;
    background-size: cover; background-repeat: no-repeat">
            <div class="container">
                <h2 class="mb-0">{{__('common/tuyenmauold.title')}}</h2>
            </div>
        </div>
        <div class="container mt-3">
            <h2 class="text-center text-uppercase text-muted mt-4 bottom-line position-relative">{{__('common/tuyenmauold.list_models')}}</h2>
            <p>{{__('common/tuyenmauold.apply_now', ['year' => date('Y')])}}</p>
            <div class="row">
                <div class="col-sm-12 col-lg-4">
                    <div class="card list-chup mb-3">
                        <div class="card-body">
                            <img src="https://{{env('APP_CDN_DOMAIN', 'brscdn.io.vn')}}/theme/system/tuyenmauold/anh2.jpeg" alt=""
                                class="img-fluid rounded">
                            <h5 class="text-muted mt-2 mb-0">{{__('common/tuyenmauold.model_name')}} 1</h5>
                            <p class="mb-0">Style: {{__('common/tuyenmauold.style.1')}}</p>
                            <p>{{__('common/tuyenmauold.require_text')}}</p>
                            <center>
                                <button class="btn btn-secondary text-uppercase" onclick="slmodel(1)">{{__('common/tuyenmauold.btn_apply_now')}}</button>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4">
                    <div class="card list-chup mb-3">
                        <div class="card-body">
                            <img src="https://{{env('APP_CDN_DOMAIN', 'brscdn.io.vn')}}/theme/system/tuyenmauold/anh1.jpeg" alt=""
                                class="img-fluid rounded">
                            <h5 class="text-muted mt-2 mb-0">{{__('common/tuyenmauold.model_name')}} 2</h5>
                            <p class="mb-0">Style: {{__('common/tuyenmauold.style.2')}}</p>
                            <p>{{__('common/tuyenmauold.require_text')}}</p>
                            <center>
                                <button class="btn btn-secondary text-uppercase" onclick="slmodel(2)">{{__('common/tuyenmauold.btn_apply_now')}}</button>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4">
                    <div class="card list-chup mb-3">
                        <div class="card-body">
                            <img src="https://{{env('APP_CDN_DOMAIN', 'brscdn.io.vn')}}/theme/system/tuyenmauold/anh3.jpeg" alt=""
                                class="img-fluid rounded">
                            <h5 class="text-muted mt-2 mb-0">{{__('common/tuyenmauold.model_name')}} 3</h5>
                            <p class="mb-0">Style: {{__('common/tuyenmauold.style.3')}}</p>
                            <p>{{__('common.tuyenmauold.require_text')}}</p>
                            <center>
                                <button class="btn btn-secondary text-uppercase" onclick="slmodel(3)">{{__('common/tuyenmauold.btn_apply_now')}}</button>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4">
                    <div class="card list-chup mb-3">
                        <div class="card-body">
                            <img src="https://{{env('APP_CDN_DOMAIN', 'brscdn.io.vn')}}/theme/system/tuyenmauold/anh4.jpg" alt=""
                                class="img-fluid rounded">
                            <h5 class="text-muted mt-2 mb-0">{{__('common/tuyenmauold.model_name')}} 4</h5>
                            <p class="mb-0">Style: {{__('common/tuyenmauold.style.4')}}</p>
                            <p>{{__('common/tuyenmauold.require_text')}}</p>
                            <center>
                                <button class="btn btn-secondary text-uppercase" onclick="slmodel(4)">{{__('common/tuyenmauold.btn_apply_now')}}</button>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4">
                    <div class="card list-chup mb-3">
                        <div class="card-body">
                            <img src="https://{{env('APP_CDN_DOMAIN', 'brscdn.io.vn')}}/theme/system/tuyenmauold/anh5.jpg" alt=""
                                class="img-fluid rounded">
                            <h5 class="text-muted mt-2 mb-0">{{__('common/tuyenmauold.model_name')}} 5</h5>
                            <p class="mb-0">Style: {{__('common/tuyenmauold.style.5')}}</p>
                            <p>{{__('common/tuyenmauold.require_text')}}</p>
                            <center>
                                <button class="btn btn-secondary text-uppercase" onclick="slmodel(5)">{{__('common/tuyenmauold.btn_apply_now')}}</button>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4">
                    <div class="card list-chup mb-3">
                        <div class="card-body">
                            <img src="https://{{env('APP_CDN_DOMAIN', 'brscdn.io.vn')}}/theme/system/tuyenmauold/anh6.jpg" alt=""
                                class="img-fluid rounded">
                            <h5 class="text-muted mt-2 mb-0">{{__('common/tuyenmauold.model_name')}} 6</h5>
                            <p class="mb-0">Style: {{__('common/tuyenmauold.style.6')}}</p>
                            <p>{{__('common/tuyenmauold.require_text')}}</p>
                            <center>
                                <button class="btn btn-secondary text-uppercase" onclick="slmodel(6)">{{__('common/tuyenmauold.btn_apply_now')}}</button>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function slmodel(n) {
            window.location = "?a&l"
        }
    </script>
</body>

</html>
