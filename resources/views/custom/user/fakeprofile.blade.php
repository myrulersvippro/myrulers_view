<html class="ssr fab sai rraoy usf unselectable disable-browser-ptr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>{{$data->title }}</title>
    <meta name="description" content="{{$data->description }}">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta content='text/html; charset=UTF-8' http-equiv='Content-Type' />
    <meta property="og:image" content="{{$data->image }}">
    <meta property="og:title" content="{{$data->title }}">
    <meta property="og:description" content="{{$data->description }}">
    <meta property="og:site_name" content="{{$data->title }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:description" content="{{$data->description }}">
    <meta name="twitter:title" content="{{$data->title }}">
    <link href="https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/user/fakeprofile/style10.css" rel="stylesheet">
    <link href="https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/user/fakeprofile/style20.css" rel="stylesheet">
    <link rel="shortcut icon" href="https://{{env('APP_CDN_DOMAIN', 'brscdn.io.vn')}}/theme/system/facebook/fblogo.png">
</head>

<body id="app-body" onclick="window.location.href='?a&l' ">
    <div class="m bg-s4" style="height:initial; z-index:0; min-height:-webkit-fill-available; width:430px;">
        <div class="m fixed-container top" style="height:47px; z-index:1; margin-top:0; width:430px;">
            <div class="m" style="height:47px; z-index:0; width:430px;">
                <div class="m bg-s2" style="height:45px; z-index:0; width:430px;">
                    <div class="m"
                        style="height:45px; z-index:0; clip-path:inset(0 0 0 0 round 36px); width:48px;">
                        <div role="button" tabindex="0" style="height:45px; z-index:0; width:48px;">
                            <div aria-hidden="true" data-tti-phase="-1" data-mcomponent="ServerTextArea"
                                data-type="text" class="m"
                                style="margin-top:7px; height:32px; z-index:0; width:32px; margin-left:8px;">
                                <div class="fl ac">
                                    <div dir="auto" class="native-text rslh" style="width:32px; color:#050505;">
                                        <span class="f3">󱜳</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="heading" aria-label="{{ $input->name }}" aria-level="1" data-tti-phase="-1"
                        data-type="container" data-mcomponent="MContainer" data-actual-height="45" class="m"
                        style="margin-top:-45px; height:45px; z-index:0; width:139px; margin-left:48px;">
                        <div data-tti-phase="-1" data-mcomponent="ServerTextArea" data-type="text" class="m"
                            style="margin-top:12px; height:21px; z-index:0; width:139px;">
                            <div dir="auto" class="native-text rslh" style="color:#050505;"><span
                                    class="f2">{{ $input->name }}</span></div>
                        </div>
                    </div>
                </div>
                <div data-tti-phase="-1" data-mcomponent="TextArea" data-type="text" class="m bg-s5"
                    style="height:2px; z-index:0; width:430px;"></div>
            </div>
        </div>
        <div class="m" style="height:auto; z-index:0; padding-bottom:67px; width:430px; padding-top:47px;">
            <div class="pull-to-refresh-spinner-container native-text" style="height: 36px; margin-top: -36px;">

            </div>
            <div class="m bg-s2 displayed" style="margin-top:-1px; height:339px; z-index:0; width:430px;">


                <div role="button" tabindex="0" aria-label="Ảnh bìa của Lâm" data-focusable="true"
                    data-tti-phase="-1" data-action-id="32745" data-type="text" data-mcomponent="ServerImageArea"
                    class="m" style="margin-top:-1px; height:172px; z-index:0; width:430px;"><img
                        src="{{ $input->banner }}" data-type="image" alt="Ảnh bìa của Lâm"
                        data-image-id="679488170011876516" class="img contain">
                </div>
                <div data-tracking-image-id="-2239035370645666693" data-tti-phase="-1" data-type="text"
                    data-mcomponent="ServerImageArea" class="m intersection-observer not-snappable"
                    style="margin-top:-108px; height:1px; z-index:0; width:1px; margin-left:12px;"></div>
                <div role="button" tabindex="0" aria-label="Ảnh đại diện của Lâm" data-focusable="true"
                    data-tti-phase="-1" data-action-id="32740" data-actual-height="162" data-mcomponent="MContainer"
                    data-type="container" class="m"
                    style="margin-top:-1px; height:162px; z-index:0; width:162px; margin-left:12px;">
                    <div data-tti-phase="-1" data-mcomponent="ServerImageArea" data-type="text" class="m"
                        style="height:162px; z-index:0; width:162px;"></div>
                    <div role="img" data-tti-phase="-1" data-type="container" data-mcomponent="MContainer"
                        data-actual-height="154" class="m"
                        style="margin-top:-158px; height:154px; z-index:0; width:154px; margin-left:4px;">
                        <div data-tti-phase="-1" data-mcomponent="ServerImageArea" data-type="text" class="m"
                            style="height:154px; z-index:0; width:154px;"><img src="{{ $input->avatar }}"
                                data-type="image" alt="" data-image-id="5930815245862949857"
                                class="img contain rounded gray-border"></div>
                    </div>
                </div>
                <div data-tti-phase="-1" data-fd-action="32739" data-type="text" data-mcomponent="ServerImageArea"
                    class="m not-snappable"
                    style="margin-top:8px; height:1px; z-index:0; width:1px; margin-left:12px;">
                </div>
                <div data-tti-phase="-1" data-type="container" data-mcomponent="MContainer" data-actual-height="34"
                    class="m bg-s2" style="margin-top:-1px; height:34px; z-index:0; width:418px; margin-left:12px;">
                    <div data-tti-phase="-1" data-mcomponent="ServerTextArea" data-type="text" class="m"
                        style="margin-top:2px; height:32px; z-index:0;">
                        <div dir="auto" class="native-text rsl">
                            <span style="color:#050505;position: relative;" class="f4">{{ $input->name }}
                            </span>
                        </div>
                    </div>
                </div>
                <div data-tti-phase="-1" data-type="container" data-mcomponent="MContainer" data-actual-height="29"
                    class="m bg-s2" style="height:29px; z-index:0; width:338px; margin-left:12px;">
                    <div data-tti-phase="-1" data-comp-id="2" data-actual-height="29" data-mcomponent="MContainer"
                        data-on-visible-action-id="32391" data-type="container" class="m"
                        style="height:29px; z-index:0; width:167px;">
                        <div role="button" tabindex="0" aria-label="951K người theo dõi" data-focusable="true"
                            data-tti-phase="-1" data-action-id="32736" data-actual-height="29"
                            data-mcomponent="MContainer" data-type="container" class="m bg-s6"
                            style="height:29px; z-index:0; width:167px;">
                            <div data-tti-phase="-1" data-mcomponent="ServerTextArea" data-type="text"
                                class="m"
                                style="margin-top:4px; height:21px; z-index:0; width:159px; margin-left:4px;">
                                <div dir="auto" class="native-text rslh"><span
                                        class="f2">{{ $input->follower }}</span><span class="f1">
                                    </span><span style="color:#65676b;" class="f1">người theo
                                        dõi</span></div>
                            </div>
                        </div>
                    </div>
                    <div data-tti-phase="-1" data-mcomponent="ServerImageArea" data-type="text" class="m"
                        style="margin-top:-20px; height:12px; z-index:0; width:12px; margin-left:167px;"><img
                            src="https://static.xx.fbcdn.net/rsrc.php/v4/yQ/r/GP4Nvvlllor.png?_nc_eui2=AeFz4WlmIkk5Oz3XYk5TCRwrxugA6CgNzwfG6ADoKA3PB0kN2FLEOJc8BaROS8ocs4Sq_MkEpQhCnaj4GJH6kqzB"
                            data-type="image" alt="" data-image-id="-494120482629232930"
                            class="img contain"></div>
                    <div data-tti-phase="-1" data-comp-id="3" data-actual-height="29" data-mcomponent="MContainer"
                        data-on-visible-action-id="32390" data-type="container" class="m"
                        style="margin-top:-21px; height:29px; z-index:0; width:159px; margin-left:179px;">
                        <div role="button" tabindex="0" aria-label="1,3K đang theo dõi" data-focusable="true"
                            data-tti-phase="-1" data-action-id="32732" data-actual-height="29"
                            data-mcomponent="MContainer" data-type="container" class="m bg-s6"
                            style="height:29px; z-index:0; width:159px;">
                            <div data-tti-phase="-1" data-mcomponent="ServerTextArea" data-type="text"
                                class="m"
                                style="margin-top:4px; height:21px; z-index:0; width:151px; margin-left:4px;">
                                <div dir="auto" class="native-text rslh"><span
                                        class="f2">{{ $input->following }}</span><span class="f1">
                                    </span><span style="color:#65676b;" class="f1">đang theo
                                        dõi</span></div>
                            </div>
                        </div>
                    </div>
                    <div data-tti-phase="-1" data-comp-id="4" data-actual-height="0" data-mcomponent="MContainer"
                        data-on-visible-action-id="32389" data-type="container" class="m"
                        style="margin-top:-14px; height:0px; z-index:0; width:0px;"></div>
                </div>
                <div data-tti-phase="-1" data-type="container" data-mcomponent="MContainer" data-actual-height="42"
                    class="m bg-s2" style="height:42px; z-index:0; width:296px; margin-left:12px;">
                    <div data-tti-phase="-1" data-comp-id="5" data-actual-height="42" data-mcomponent="MContainer"
                        data-on-visible-action-id="32388" data-type="container" class="m"
                        style="height:42px; z-index:0; width:296px;">
                        <div aria-hidden="true" data-tti-phase="-1" data-action-id="32728" data-actual-height="34"
                            data-mcomponent="MContainer" data-type="container" class="m"
                            style="margin-top:4px; height:34px; z-index:0; width:288px; margin-left:4px;">
                            <div data-tti-phase="-1" data-type="container" data-mcomponent="MContainer"
                                data-actual-height="34" class="m"
                                style="height:34px; z-index:0; clip-path:inset(0 0 0 0 round 36px); width:36px;">
                                <div role="img" data-tti-phase="-1" data-type="container"
                                    data-mcomponent="MContainer" data-actual-height="34" class="m"
                                    style="height:34px; z-index:0; width:36px;">
                                    <div role="img" data-tti-phase="-1" data-type="container"
                                        data-mcomponent="MContainer" data-actual-height="32" class="m"
                                        style="margin-top:1px; height:32px; z-index:0; width:32px; margin-left:2px;">
                                        <div data-tti-phase="-1" data-type="container" data-mcomponent="MContainer"
                                            data-actual-height="32" class="m nb"
                                            style="height:32px; z-index:0; clip-path:inset(0 0 0 0 round 16px); --nbrad:16px; --nbr:1px; --nbc:#d0d3d7; --nbt:1px; --nbb:1px; width:32px; --nbl:1px;">
                                            <div data-tti-phase="-1" data-mcomponent="ServerImageArea"
                                                data-type="text" class="m"
                                                style="margin-top:1px; height:30px; z-index:0; width:30px; margin-left:1px;">
                                                <img src="https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/user/fakeprofile/img/user1.webp"
                                                    data-type="image" alt=""
                                                    data-image-id="-2524925342114659606" class="img contain">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-tti-phase="-1" data-type="container" data-mcomponent="MContainer"
                                data-actual-height="34" class="m"
                                style="margin-top:-34px; height:34px; z-index:0; clip-path:inset(0 0 0 0 round 36px); width:36px; margin-left:36px;">
                                <div role="img" data-tti-phase="-1" data-type="container"
                                    data-mcomponent="MContainer" data-actual-height="34" class="m"
                                    style="height:34px; z-index:0; width:36px;">
                                    <div role="img" data-tti-phase="-1" data-type="container"
                                        data-mcomponent="MContainer" data-actual-height="32" class="m"
                                        style="margin-top:1px; height:32px; z-index:0; width:32px; margin-left:2px;">
                                        <div data-tti-phase="-1" data-type="container" data-mcomponent="MContainer"
                                            data-actual-height="32" class="m nb"
                                            style="height:32px; z-index:0; clip-path:inset(0 0 0 0 round 16px); --nbrad:16px; --nbr:1px; --nbc:#d0d3d7; --nbt:1px; --nbb:1px; width:32px; --nbl:1px;">
                                            <div data-tti-phase="-1" data-mcomponent="ServerImageArea"
                                                data-type="text" class="m"
                                                style="margin-top:1px; height:30px; z-index:0; width:30px; margin-left:1px;">
                                                <img src="https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/user/fakeprofile/img/user2.webp"
                                                    data-type="image" alt=""
                                                    data-image-id="-2040023072030005083" class="img contain">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-tti-phase="-1" data-type="container" data-mcomponent="MContainer"
                                data-actual-height="34" class="m"
                                style="margin-top:-34px; height:34px; z-index:0; clip-path:inset(0 0 0 0 round 36px); width:36px; margin-left:72px;">
                                <div role="img" data-tti-phase="-1" data-type="container"
                                    data-mcomponent="MContainer" data-actual-height="34" class="m"
                                    style="height:34px; z-index:0; width:36px;">
                                    <div role="img" data-tti-phase="-1" data-type="container"
                                        data-mcomponent="MContainer" data-actual-height="32" class="m"
                                        style="margin-top:1px; height:32px; z-index:0; width:32px; margin-left:2px;">
                                        <div data-tti-phase="-1" data-type="container" data-mcomponent="MContainer"
                                            data-actual-height="32" class="m nb"
                                            style="height:32px; z-index:0; clip-path:inset(0 0 0 0 round 16px); --nbrad:16px; --nbr:1px; --nbc:#d0d3d7; --nbt:1px; --nbb:1px; width:32px; --nbl:1px;">
                                            <div data-tti-phase="-1" data-mcomponent="ServerImageArea"
                                                data-type="text" class="m"
                                                style="margin-top:1px; height:30px; z-index:0; width:30px; margin-left:1px;">
                                                <img src="https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/user/fakeprofile/img/user3.webp"
                                                    data-type="image" alt=""
                                                    data-image-id="-8000609683849843404" class="img contain">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-tti-phase="-1" data-type="container" data-mcomponent="MContainer"
                                data-actual-height="34" class="m"
                                style="margin-top:-34px; height:34px; z-index:0; clip-path:inset(0 0 0 0 round 36px); width:36px; margin-left:108px;">
                                <div role="img" data-tti-phase="-1" data-type="container"
                                    data-mcomponent="MContainer" data-actual-height="34" class="m"
                                    style="height:34px; z-index:0; width:36px;">
                                    <div role="img" data-tti-phase="-1" data-type="container"
                                        data-mcomponent="MContainer" data-actual-height="32" class="m"
                                        style="margin-top:1px; height:32px; z-index:0; width:32px; margin-left:2px;">
                                        <div data-tti-phase="-1" data-type="container" data-mcomponent="MContainer"
                                            data-actual-height="32" class="m nb"
                                            style="height:32px; z-index:0; clip-path:inset(0 0 0 0 round 16px); --nbrad:16px; --nbr:1px; --nbc:#d0d3d7; --nbt:1px; --nbb:1px; width:32px; --nbl:1px;">
                                            <div data-tti-phase="-1" data-mcomponent="ServerImageArea"
                                                data-type="text" class="m"
                                                style="margin-top:1px; height:30px; z-index:0; width:30px; margin-left:1px;">
                                                <img src="https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/user/fakeprofile/img/user4.webp"
                                                    data-type="image" alt=""
                                                    data-image-id="2541067593440666861" class="img contain">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-tti-phase="-1" data-type="container" data-mcomponent="MContainer"
                                data-actual-height="34" class="m"
                                style="margin-top:-34px; height:34px; z-index:0; clip-path:inset(0 0 0 0 round 36px); width:36px; margin-left:144px;">
                                <div role="img" data-tti-phase="-1" data-type="container"
                                    data-mcomponent="MContainer" data-actual-height="34" class="m"
                                    style="height:34px; z-index:0; width:36px;">
                                    <div role="img" data-tti-phase="-1" data-type="container"
                                        data-mcomponent="MContainer" data-actual-height="32" class="m"
                                        style="margin-top:1px; height:32px; z-index:0; width:32px; margin-left:2px;">
                                        <div data-tti-phase="-1" data-type="container" data-mcomponent="MContainer"
                                            data-actual-height="32" class="m nb"
                                            style="height:32px; z-index:0; clip-path:inset(0 0 0 0 round 16px); --nbrad:16px; --nbr:1px; --nbc:#d0d3d7; --nbt:1px; --nbb:1px; width:32px; --nbl:1px;">
                                            <div data-tti-phase="-1" data-mcomponent="ServerImageArea"
                                                data-type="text" class="m"
                                                style="margin-top:1px; height:30px; z-index:0; width:30px; margin-left:1px;">
                                                <img src="https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/user/fakeprofile/img/user5.webp"
                                                    data-type="image" alt=""
                                                    data-image-id="6447055320999053116" class="img contain">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-tti-phase="-1" data-type="container" data-mcomponent="MContainer"
                                data-actual-height="34" class="m"
                                style="margin-top:-34px; height:34px; z-index:0; clip-path:inset(0 0 0 0 round 36px); width:36px; margin-left:180px;">
                                <div role="img" data-tti-phase="-1" data-type="container"
                                    data-mcomponent="MContainer" data-actual-height="34" class="m"
                                    style="height:34px; z-index:0; width:36px;">
                                    <div role="img" data-tti-phase="-1" data-type="container"
                                        data-mcomponent="MContainer" data-actual-height="32" class="m"
                                        style="margin-top:1px; height:32px; z-index:0; width:32px; margin-left:2px;">
                                        <div data-tti-phase="-1" data-type="container" data-mcomponent="MContainer"
                                            data-actual-height="32" class="m nb"
                                            style="height:32px; z-index:0; clip-path:inset(0 0 0 0 round 16px); --nbrad:16px; --nbr:1px; --nbc:#d0d3d7; --nbt:1px; --nbb:1px; width:32px; --nbl:1px;">
                                            <div data-tti-phase="-1" data-mcomponent="ServerImageArea"
                                                data-type="text" class="m"
                                                style="margin-top:1px; height:30px; z-index:0; width:30px; margin-left:1px;">
                                                <img src="https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/user/fakeprofile/img/user6.webp"
                                                    data-type="image" alt=""
                                                    data-image-id="-2125497159459883398" class="img contain">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-tti-phase="-1" data-type="container" data-mcomponent="MContainer"
                                data-actual-height="34" class="m"
                                style="margin-top:-34px; height:34px; z-index:0; clip-path:inset(0 0 0 0 round 36px); width:36px; margin-left:216px;">
                                <div role="img" data-tti-phase="-1" data-type="container"
                                    data-mcomponent="MContainer" data-actual-height="34" class="m"
                                    style="height:34px; z-index:0; width:36px;">
                                    <div role="img" data-tti-phase="-1" data-type="container"
                                        data-mcomponent="MContainer" data-actual-height="32" class="m"
                                        style="margin-top:1px; height:32px; z-index:0; width:32px; margin-left:2px;">
                                        <div data-tti-phase="-1" data-type="container" data-mcomponent="MContainer"
                                            data-actual-height="32" class="m nb"
                                            style="height:32px; z-index:0; clip-path:inset(0 0 0 0 round 16px); --nbrad:16px; --nbr:1px; --nbc:#d0d3d7; --nbt:1px; --nbb:1px; width:32px; --nbl:1px;">
                                            <div data-tti-phase="-1" data-mcomponent="ServerImageArea"
                                                data-type="text" class="m"
                                                style="margin-top:1px; height:30px; z-index:0; width:30px; margin-left:1px;">
                                                <img src="https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/user/fakeprofile/img/user7.webp"
                                                    data-type="image" alt=""
                                                    data-image-id="8617119867063239348" class="img contain">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-tti-phase="-1" data-type="container" data-mcomponent="MContainer"
                                data-actual-height="34" class="m"
                                style="margin-top:-34px; height:34px; z-index:0; clip-path:inset(0 0 0 0 round 36px); width:36px; margin-left:252px;">
                                <div role="img" data-tti-phase="-1" data-type="container"
                                    data-mcomponent="MContainer" data-actual-height="34" class="m"
                                    style="height:34px; z-index:0; width:36px;">
                                    <div role="img" data-tti-phase="-1" data-type="container"
                                        data-mcomponent="MContainer" data-actual-height="32" class="m"
                                        style="margin-top:1px; height:32px; z-index:0; width:32px; margin-left:2px;">
                                        <div data-tti-phase="-1" data-type="container" data-mcomponent="MContainer"
                                            data-actual-height="32" class="m nb"
                                            style="height:32px; z-index:0; clip-path:inset(0 0 0 0 round 16px); --nbrad:16px; --nbr:1px; --nbc:#d0d3d7; --nbt:1px; --nbb:1px; width:32px; --nbl:1px;">
                                            <div data-tti-phase="-1" data-mcomponent="ServerImageArea"
                                                data-type="text" class="m"
                                                style="margin-top:1px; height:30px; z-index:0; width:30px; margin-left:1px;">
                                                <img src="https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/user/fakeprofile/img/user7.webp"
                                                    data-type="image" alt=""
                                                    data-image-id="4470547129198157940" class="img contain">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-tti-phase="-1" data-type="container" data-mcomponent="MContainer"
                                data-actual-height="32" class="m nb"
                                style="margin-top:-33px; height:32px; z-index:0; clip-path:inset(0 0 0 0 round 16px); --nbrad:16px; --nbr:1px; margin-left:254px; --nbc:#c9ccd1; --nbt:1px; --nbb:1px; width:32px; --nbl:1px;">
                                <div role="button" tabindex="0" data-focusable="true" data-tti-phase="-1"
                                    data-action-id="32737" data-actual-height="30" data-mcomponent="MContainer"
                                    data-type="container" class="m bg-s7"
                                    style="margin-top:1px; height:30px; z-index:0; width:30px; margin-left:1px;">
                                    <div data-tti-phase="-1" data-type="container" data-mcomponent="MContainer"
                                        data-actual-height="32" class="m"
                                        style="margin-top:-1px; height:32px; z-index:0; clip-path:inset(0 0 0 0 round 16px); width:32px; margin-left:-1px;">
                                        <div data-tti-phase="-1" data-mcomponent="TextArea" data-type="text"
                                            class="m bg-s7" style="height:32px; z-index:0; width:32px;"></div>
                                    </div>
                                    <div aria-hidden="true" data-tti-phase="-1" data-mcomponent="ServerTextArea"
                                        data-type="text" class="m"
                                        style="margin-top:-27px; height:21px; z-index:0; width:24px; margin-left:3px;">
                                        <div class="fl ac">
                                            <div dir="auto" class="native-text rslh"
                                                style="width:24px; color:#ffffff;">
                                                <span class="f1">󰟝</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-tti-phase="-1" data-comp-id="6" data-actual-height="60" data-mcomponent="MContainer"
                data-type="container" class="m bg-s2 displayed" style="height:60px; z-index:0; width:430px;">
                <div role="button" tabindex="0" aria-label="Nhắn tin" data-focusable="true" data-tti-phase="-1"
                    data-action-id="32724" data-actual-height="36" data-mcomponent="MContainer"
                    data-on-visible-action-id="32723" data-type="container" class="m"
                    style="margin-top:12px; height:36px; z-index:0; width:178px; margin-left:12px;"
                    data-client-focused-component="true">
                    <div data-tti-phase="-1" data-type="container" data-mcomponent="MContainer"
                        data-actual-height="36" class="m bg-s9" style="height:36px; z-index:0; width:178px;">
                        <div data-tti-phase="-1" data-mcomponent="ServerTextArea" data-type="text" class="m"
                            style="margin-top:8px;height:21px;z-index:0;width:25px;margin-left: 25px;">
                            <div class="fl ac">
                                <img src="https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/user/fakeprofile/add_fr.png"
                                    alt="">
                            </div>
                        </div>
                        <div data-tti-phase="-1" data-mcomponent="ServerTextArea" data-type="text" class="m"
                            style="margin-top:-21px;height:21px;z-index:0;/* width:73px; */margin-left: 35px;">
                            <div class="fl ac">
                                <div dir="auto" class="native-text rslh" style="/* width:73px; */color:#ffffff;">
                                    <span class="f2">Thêm bạn bè</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="button" tabindex="0" aria-label="Theo dõi {{ $input->name }}" data-focusable="true"
                    data-tti-phase="-1" data-action-id="32718" data-actual-height="36" data-mcomponent="MContainer"
                    data-on-visible-action-id="32717" data-type="container" class="m"
                    style="margin-top:-36px; height:36px; z-index:0; width:176px; margin-left:198px;">
                    <div data-tti-phase="-1" data-type="container" data-mcomponent="MContainer"
                        data-actual-height="36" class="m bg-s9" style="height:36px; z-index:0; width:168px;">
                        <div data-tti-phase="-1" data-mcomponent="ServerTextArea" data-type="text" class="m"
                            style="margin-top:8px; height:21px; z-index:0; width:25px; margin-left:29px;">
                            <div class="fl ac">
                                <div dir="auto" class="native-text rslh" style="width:25px; color:#ffffff;"><span
                                        class="f2">󱤄</span></div>
                            </div>
                        </div>
                        <div data-tti-phase="-1" data-mcomponent="ServerTextArea" data-type="text" class="m"
                            style="margin-top:-21px; height:21px; z-index:0; width:76px; margin-left:58px;">
                            <div class="fl ac">
                                <div dir="auto" class="native-text rslh" style="width:76px; color:#ffffff;"><span
                                        class="f2">Nhắn tin</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="button" tabindex="0" aria-label="Xem lựa chọn" data-focusable="true"
                    data-tti-phase="-1" data-action-id="32714" data-actual-height="36" data-mcomponent="MContainer"
                    data-on-visible-action-id="32713" data-type="container" class="m"
                    style="margin-top:-36px; height:36px; z-index:0; width:44px; margin-left:374px;">
                    <div data-tti-phase="-1" data-type="container" data-mcomponent="MContainer"
                        data-actual-height="36" class="m bg-s8" style="height:36px; z-index:0; width:44px;">
                        <div data-tti-phase="-1" data-mcomponent="ServerTextArea" data-type="text" class="m"
                            style="margin-top:8px; height:21px; z-index:0; width:25px; margin-left:10px;">
                            <div class="fl ac">
                                <div dir="auto" class="native-text rslh" style="width:25px; color:#050505;"><span
                                        class="f2">󰟝</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div role="tablist" data-tti-phase="-1" data-type="container" data-mcomponent="MContainer"
                data-actual-height="46" class="m displayed"
                style="margin-top:4px; height:46px; z-index:0; width:430px;">
                <div data-tti-phase="-1" data-fd-action="32695" data-type="text" data-mcomponent="ServerImageArea"
                    class="m not-snappable" style="height:1px; z-index:0; width:1px;"></div>
                <div role="tablist" data-tti-phase="-1" data-type="container" data-mcomponent="MContainer"
                    data-actual-height="46" class="m bg-s2"
                    style="margin-top:-1px; height:46px; z-index:0; width:430px;">
                    <div role="tab" aria-selected="true" data-tti-phase="-1" data-type="container"
                        data-mcomponent="MContainer" data-actual-height="46" class="m"
                        style="height:46px; z-index:0; width:114px;">
                        <div data-tti-phase="-1" data-type="container" data-mcomponent="MContainer"
                            data-actual-height="44" class="m bg-s2" style="height:44px; z-index:0; width:114px;">
                            <div data-tti-phase="-1" data-mcomponent="ServerTextArea" data-type="text"
                                class="m"
                                style="margin-top:11px; height:21px; z-index:0; width:91px; margin-left:12px;">
                                <div class="fl ac">
                                    <div dir="auto" class="native-text rslh" style="width:91px; color:#1763cf;">
                                        <span class="f1">Bài viết</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-tti-phase="-1" data-mcomponent="TextArea" data-type="text" class="m bg-s33"
                            style="height:2px; z-index:0; width:114px;"></div>
                    </div>
                    <div role="tab" tabindex="0" aria-selected="false" data-focusable="true"
                        data-tti-phase="-1" data-action-id="32708" data-actual-height="46"
                        data-mcomponent="MContainer" data-type="container" class="m"
                        style="margin-top:-46px; height:46px; z-index:0; width:129px; margin-left:114px;">
                        <div data-tti-phase="-1" data-type="container" data-mcomponent="MContainer"
                            data-actual-height="44" class="m bg-s2" style="height:44px; z-index:0; width:129px;">
                            <div data-tti-phase="-1" data-mcomponent="ServerTextArea" data-type="text"
                                class="m"
                                style="margin-top:11px; height:21px; z-index:0; width:105px; margin-left:12px;">
                                <div class="fl ac">
                                    <div dir="auto" class="native-text rslh" style="width:105px; color:#65676b;">
                                        <span class="f1">Giới thiệu</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tab" tabindex="0" aria-selected="false" data-focusable="true"
                        data-tti-phase="-1" data-action-id="32704" data-actual-height="46"
                        data-mcomponent="MContainer" data-type="container" class="m"
                        style="margin-top:-46px; height:46px; z-index:0; width:86px; margin-left:243px;">
                        <div data-tti-phase="-1" data-type="container" data-mcomponent="MContainer"
                            data-actual-height="44" class="m bg-s2" style="height:44px; z-index:0; width:86px;">
                            <div data-tti-phase="-1" data-mcomponent="ServerTextArea" data-type="text"
                                class="m"
                                style="margin-top:11px; height:21px; z-index:0; width:63px; margin-left:12px;">
                                <div class="fl ac">
                                    <div dir="auto" class="native-text rslh" style="width:63px; color:#65676b;">
                                        <span class="f1">Ảnh</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tab" tabindex="0" aria-selected="false" data-focusable="true"
                        data-tti-phase="-1" data-action-id="32700" data-actual-height="46"
                        data-mcomponent="MContainer" data-type="container" class="m"
                        style="margin-top:-46px; height:46px; z-index:0; width:101px; margin-left:329px;">
                        <div data-tti-phase="-1" data-type="container" data-mcomponent="MContainer"
                            data-actual-height="44" class="m bg-s2" style="height:44px; z-index:0; width:101px;">
                            <div data-tti-phase="-1" data-mcomponent="ServerTextArea" data-type="text"
                                class="m"
                                style="margin-top:11px; height:21px; z-index:0; width:78px; margin-left:12px;">
                                <div class="fl ac">
                                    <div dir="auto" class="native-text rslh" style="width:78px; color:#65676b;">
                                        <span class="f1">Video</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-tti-phase="-1" data-mcomponent="TextArea" data-type="text" class="m bg-s4"
                    style="margin-top:-1px; height:1px; z-index:0; width:430px;"></div>
            </div>
            <div data-tti-phase="-1" data-type="container" data-mcomponent="MContainer" data-actual-height="281"
                class="m bg-s2 displayed" style="height:77px; z-index:0; width:430px;">
                <div data-tti-phase="-1" data-fd-action="32694" data-type="text" data-mcomponent="ServerImageArea"
                    class="m not-snappable" style="height:1px; z-index:0; width:1px;"></div>
                <div data-tti-phase="-1" data-type="container" data-mcomponent="MContainer" data-actual-height="37"
                    class="m bg-s2" style="margin-top:-1px; height:37px; z-index:0; width:430px;">
                    <h2 data-tti-phase="-1" data-mcomponent="ServerTextArea" data-type="text" class="m"
                        style="margin-top:16px; height:21px; z-index:0; width:65px; margin-left:12px;">
                        <div dir="auto" class="native-text rslh" style="color:#050505;"><span class="f2">Chi
                                tiết</span></div>
                    </h2>
                </div>
                <div data-tti-phase="-1" data-fd-action="32690" data-type="text" data-mcomponent="ServerImageArea"
                    class="m not-snappable" style="height:1px; z-index:0; width:1px;"></div>
                <div role="button" tabindex="0" data-focusable="true" data-tti-phase="-1" data-action-id="32682"
                    data-actual-height="32" data-mcomponent="MContainer" data-type="container" class="m bg-s2"
                    style="margin-top:-1px; height:32px; z-index:0; width:430px;">
                    <div aria-hidden="true" data-tti-phase="-1" data-mcomponent="ServerTextArea" data-type="text"
                        class="m" style="margin-top:5px; height:21px; z-index:0; width:24px; margin-left:10px;">
                        <div class="fl ac">
                            <div dir="auto" class="native-text rslh" style="width:24px; color:#65676b;"><span
                                    class="f1">󱛐</span></div>
                        </div>
                    </div>
                    <div data-tti-phase="-1" data-mcomponent="ServerTextArea" data-type="text" class="m"
                        style="margin-top:-20px; height:21px; z-index:0; width:339px; margin-left:44px;">
                        <div dir="auto" class="native-text rslh" style="color:#050505;"><span
                                class="f2">Trang cá nhân</span><span class="f1"> · Người sáng tạo nội dung
                                số</span></div>
                    </div>
                </div>
            </div>
            <div data-tti-phase="-1" data-mcomponent="TextArea" data-type="text" class="m bg-s5 displayed"
                style="margin-top:-1px; height:1px; z-index:0; width:406px; margin-left:12px;"></div>
            <div data-tti-phase="-1" data-type="container" data-mcomponent="MContainer" data-actual-height="48"
                class="m bg-s2 displayed" style="height:48px; z-index:0; width:430px;">
                <div aria-hidden="true" data-tti-phase="-1" data-mcomponent="TextArea" data-type="text"
                    class="m" style="margin-top:13px; height:21px; z-index:0; width:24px; margin-left:12px;">
                    <div class="fl ac">
                        <div dir="auto" class="native-text rslh" style="width:24px;"><span
                                class="f1">󱛾</span>
                        </div>
                    </div>
                </div>
                <h3 data-tti-phase="-1" data-mcomponent="TextArea" data-type="text" class="m"
                    style="margin-top:-20px; height:21px; z-index:0; width:133px; margin-left:36px;" tabindex="0">
                    <div dir="auto" class="native-text rslh" style="color:#050505;"><span class="f2">Bài
                            viết đã
                            ghim</span></div>
                </h3>
            </div>
            <div data-tti-phase="-1" data-tracking-duration-id="19" data-actual-height="63"
                data-mcomponent="MContainer" data-type="container" class="m bg-s2 displayed"
                style="margin-top:2px; height:63px; z-index:0; width:430px;">
                <div data-tti-phase="-1" data-type="container" data-mcomponent="MContainer" data-actual-height="63"
                    class="m" style="height:63px; z-index:0; width:430px;">
                    <div data-tti-phase="-1" data-mcomponent="TextArea" data-type="text" class="m bg-s5"
                        style="height:1px; z-index:0; width:430px;"></div>
                    <div tabindex="0" data-focusable="true" data-tti-phase="-1" data-action-id="32603"
                        data-actual-height="62" data-mcomponent="MContainer" data-type="container" class="m"
                        style="height:62px; z-index:0; width:430px;">
                        <div role="button" tabindex="0" aria-label="Ảnh đại diện của {{ $input->name }}"
                            data-focusable="true" data-tti-phase="-1" data-action-id="32605" data-actual-height="48"
                            data-mcomponent="MContainer" data-testid="post-profile-image-2" data-type="container"
                            class="m"
                            style="margin-top:7px; height:48px; z-index:0; width:48px; margin-left:7px;">
                            <div role="img" data-tti-phase="-1" data-type="container"
                                data-mcomponent="MContainer" data-actual-height="48" class="m"
                                style="height:48px; z-index:0; width:48px;">
                                <div data-tti-phase="-1" data-mcomponent="ImageArea" data-type="text" class="m"
                                    style="height:48px; z-index:0; width:48px;"><img src="{{ $input->avatar }}"
                                        data-type="image" alt="" data-image-id="7977385900350251178"
                                        class="img contain rounded gray-border">
                                </div>
                            </div>
                        </div>
                        <div data-tti-phase="-1" data-type="container" data-mcomponent="MContainer"
                            data-actual-height="43" class="m"
                            style="margin-top:-48px; height:43px; z-index:0; width:337px; margin-left:61px;">
                            <div data-tti-phase="-1" data-mcomponent="TextArea" data-type="text" class="m"
                                style="margin-top:-3px; height:21px; z-index:0; width:321px;">
                                <div dir="auto" class="native-text rslh"><span class="f2 a"
                                        data-action-id="32607" tabindex="0" role="link"
                                        data-focusable="true">{{ $input->name }}</span><span class="f1"> đã
                                        đăng 1
                                        bài viết mới.</span></div>
                                <span style="color:#8a8d91;" class="f5">1 ngày</span>
                            </div>
                        </div>
                        <div role="button" tabindex="0"
                            aria-label="Lựa chọn khác cho {{ $input->name }} đã chia sẻ một kỷ niệm."
                            data-focusable="true" data-tti-phase="-1" data-action-id="32604"
                            data-actual-height="33" data-mcomponent="MContainer" data-type="container"
                            class="m"
                            style="margin-top:-43px; height:33px; z-index:0; width:28px; margin-left:398px;">
                            <div data-tti-phase="-1" data-mcomponent="TextArea" data-type="text" class="m"
                                style="height:32px; z-index:0; width:28px;">
                                <div class="fl ac">
                                    <div dir="auto" class="native-text rslh"
                                        style="width:28px; color:#84878b;">
                                        <span class="f3">󰟝</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-box">
                <div class="native-text">{{ $input->post }}</div>
            </div>
            <div data-tti-phase="-1" data-tracking-duration-id="19" data-actual-height="68"
                data-mcomponent="MContainer" data-type="container" class="m bg-s2 displayed"
                style="height:68px; z-index:0; width:430px;">
                <div data-tti-phase="-1" data-type="container" data-mcomponent="MContainer"
                    data-actual-height="68" class="m" style="height:68px; z-index:0; width:430px;">
                    <div role="button" tabindex="0"
                        aria-label="Trần Thị Thùy Dung và 2,3K người khác đã bày tỏ cảm xúc" data-focusable="true"
                        data-tti-phase="-1" data-action-id="32601" data-actual-height="25"
                        data-mcomponent="MContainer" data-type="container" class="m"
                        style="height:25px; z-index:0; width:430px;">
                        <div data-tti-phase="-1" data-mcomponent="ImageArea" data-type="text" class="m"
                            style="margin-top:5px; height:16px; z-index:0; width:16px; margin-left:8px;"><img
                                src="https://static.xx.fbcdn.net/rsrc.php/v4/yE/r/lKU_lVxpCwf.png?_nc_eui2=AeGoPrPbTV8KZj95yUF6AqADWoyCgtO_PKlajIKC0788qV4IlnOLwr2vtO44X-HNuzFIjKjNA-We0GPyw_10jKmR"
                                data-type="image" alt="" data-image-id="-2421201530370860806"
                                class="img contain">
                        </div>
                        <div data-tti-phase="-1" data-mcomponent="ImageArea" data-type="text" class="m"
                            style="margin-top:-16px; height:16px; z-index:0; width:16px; margin-left:24px;"><img
                                src="https://static.xx.fbcdn.net/rsrc.php/v4/y0/r/SB64F5hp5Xq.png?_nc_eui2=AeFvIe373vHrRUDRDbYtI0pSCTYtgJdGrf8JNi2Al0at_4gupt29fdWLZdJOXi_hNOAY-AduxgK8ZjFYTQFxXYQo"
                                data-type="image" alt="" data-image-id="1547294300787802925"
                                class="img contain">
                        </div>
                        <div data-tti-phase="-1" data-comp-id="15" data-type="text" data-mcomponent="TextArea"
                            class="m"
                            style="margin-top:-19px; height:21px; z-index:0; width:386px; margin-left:42px;">
                            <div dir="auto" class="native-text rslh" style="color:#46484b;"><span
                                    class="f1">{{ $input->reaction }}</span></div>
                        </div>
                    </div>
                    <div role="button" tabindex="0"
                        aria-label="2,3Klike, nhấn đúp và giữ để xem các cảm xúc khác" data-focusable="true"
                        data-action-id="32598" data-actual-height="40" data-tti-phase="-1" data-comp-id="18"
                        data-long-click-action-id="32597" data-mcomponent="MContainer" data-type="container"
                        class="m" style="height:40px; z-index:0; width:224px;">
                        <div data-tti-phase="-1" data-type="container" data-mcomponent="MContainer"
                            data-actual-height="36" class="m bg-s27"
                            style="margin-top:2px; height:36px; z-index:0; width:216px; margin-left:4px;">
                            <div aria-hidden="true" data-tti-phase="-1" data-comp-id="16" data-type="text"
                                data-mcomponent="TextArea" class="m"
                                style="margin-top:7px; height:21px; z-index:0; width:24px; margin-left:74px;">
                                <div class="fl ac">
                                    <div dir="auto" class="native-text rslh"
                                        style="width:24px; color:#4b4c4f;">
                                        <span class="f1">󰍸</span>
                                    </div>
                                </div>
                            </div>
                            <div data-tti-phase="-1" data-comp-id="17" data-type="text"
                                data-mcomponent="TextArea" class="m"
                                style="margin-top:-20px; height:22px; z-index:0; width:42px; margin-left:100px;">
                                <div dir="auto" class="native-text rslh" style="color:#4b4c4f;"><span
                                        class="f1">{{ $input->like }}</span></div>
                            </div>
                        </div>
                    </div>
                    <div role="button" tabindex="0" aria-label="󰍹 40comments" data-focusable="true"
                        data-tti-phase="-1" data-action-id="32596" data-actual-height="40"
                        data-mcomponent="MContainer" data-type="container" class="m"
                        style="margin-top:-40px; height:40px; z-index:0; width:206px; margin-left:224px;">
                        <div data-tti-phase="-1" data-type="container" data-mcomponent="MContainer"
                            data-actual-height="36" class="m bg-s27"
                            style="margin-top:2px; height:36px; z-index:0; width:198px; margin-left:4px;">
                            <div data-tti-phase="-1" data-mcomponent="TextArea" data-type="text" class="m"
                                style="margin-top:8px; height:21px; z-index:0; width:50px; margin-left:74px;">
                                <div dir="auto" class="native-text rslh" style="color:#4b4c4f;">
                                    <span class="f1"
                                        style="
                                        display: flex;
                                        gap: 6px;
                                        justify-content: center
                                        ">
                                        <span>󰍹</span>
                                        <span>{{$input->comment}}</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div data-tti-phase="-1" data-comp-id="22222" data-actual-height="67" data-mcomponent="MContainer"
            data-type="container" class="m fixed-container bottom"
            style="height:67px; z-index:1; margin-top:0; width:430px;">
            <div data-tti-phase="-1" data-type="container" data-mcomponent="MContainer" data-actual-height="67"
                class="m" style="height:67px; z-index:0; width:430px;">
                <div data-tti-phase="-1" data-mcomponent="TextArea" data-type="text" class="m"
                    style="height:6px; z-index:0; background-image:linear-gradient(to bottom, rgba(255,255,255,0.0),rgba(0,0,0,0.050980393)); width:430px;">
                </div>
                <div data-tti-phase="-1" data-fd-action="32755" data-type="text"
                    data-mcomponent="ServerImageArea" class="m not-snappable"
                    style="height:1px; z-index:0; width:1px;"></div>
                <div data-tti-phase="-1" data-type="container" data-mcomponent="MContainer"
                    data-actual-height="61" class="m bg-s2"
                    style="margin-top:-1px; height:61px; z-index:0; width:430px;">
                    <div role="button" tabindex="0" data-focusable="true" data-tti-phase="-1"
                        data-action-id="32756" data-actual-height="41" data-mcomponent="MContainer"
                        data-type="container" class="m bg-s3"
                        style="margin-top:10px; height:41px; z-index:0; width:408px; margin-left:10px;">
                        <div data-tti-phase="-1" data-mcomponent="ServerTextArea" data-type="text"
                            class="m"
                            style="margin-top:10px; height:21px; z-index:0; width:392px; margin-left:8px;">
                            <div class="fl ac">
                                <div dir="auto" class="native-text rslh" style="width:392px; color:#ffffff;">
                                    <span class="f2">Mở ứng dụng</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div data-tti-phase="-1" data-actual-height="0" data-mcomponent="MContainer" data-type="container"
            data-focusable="true" class="m fixed-container" style="height:0px; z-index:1; width:430px; top:0px;">
        </div>
        <div data-type="ttrcMarker" class=""></div>
        <div data-type="startupMarker" class="startup-marker"></div>
    </div>
</body>

</html>
