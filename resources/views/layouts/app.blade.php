<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Skote</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
</head>
<body data-sidebar="dark">
<div id="layout-wrapper">

@include('layouts.componets.navbar')
@include('layouts.componets.sidebar')

    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
   @include('layouts.componets.footer')
    </div>
</div>
@include('layouts.componets.aside')
<div class="rightbar-overlay"></div>

<script src="{{ url('js/app.js') }}"></script>
</body>
</html>
