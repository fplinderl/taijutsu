<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "UTF-8"/>
    <meta http-equiv = "X-UA-Compatible" content = "IE=edge"/>
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0"/>
    <link rel = "icon" href = "{{ asset('ico-36x36.png') }}">
    <link rel = "preconnect" href = "https://fonts.googleapis.com"/>
    <link rel = "preconnect" href = "https://fonts.gstatic.com" crossorigin/>
    <link
        href = "https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap"
        rel = "stylesheet"
    />
    <link
        href = "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel = "stylesheet"
        integrity = "sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin = "anonymous"
    />
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel = "stylesheet" href = "{{ asset('app.css') }}"/>
    <title>Taijutsu</title>
</head>
<body>
<header class="header d-flex justify-content-center">
    <a href="http://taijutsu.info">
        <img src="{{ asset('logo.png') }}" alt="logo" />
    </a>
</header>
<div class="content container">
    @yield('content')
</div>
<footer class="footer">
    <div class="row">
        <div class="title  col-xs-12 col-md-6">
            TAIJUTSU-THƯƠNG HIỆU GHẾ MASSAGE HÀNG ĐẦU NHẬT BẢN
        </div>
        <div class="info col-xs-12 col-md-6">
            <div>524 Lê Thanh Nghị - TP Hải Dương</div>
            <span></span>
            <a href="tel:+84972.613.613">0972.613.613</a>
        </div>
    </div>
</footer>
<script
    src = "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity = "sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin = "anonymous"
></script>
<script src = "{{ asset('app.js') }}"></script>
</body>
</html>
