<!DOCTYPE html>
<html lang="zh-cmn-Hans">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="{{ URL::asset('/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('/assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('/assets/css/style.css') }}" rel="stylesheet">
    <script src="{{ URL::asset('/assets/js/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/script.js') }}"></script>
    @yield('css_js_extra_file')
</head>
<body>
    @yield('body')

    <script>
        $(document).ready(function() {
            $('.todo').click(function () {
                alert("暂未完成该功能...");
            });
        });
    </script>
</body>
</html>