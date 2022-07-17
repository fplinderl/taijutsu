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
    <script
        src = "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity = "sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin = "anonymous"
    ></script>
    <script src = "{{ asset('app.js') }}"></script>
</head>
<body>
<header class = "header d-flex justify-content-center">
    <a href = "http://taijutsu.info">
        <img src = "{{ asset('logo.png') }}" alt = "logo"/>
    </a>
</header>
<div class = "content container">
    @yield('content')
</div>
<footer class = "footer">
    <div class = "row">
        <div class = "title  col-xs-12 col-md-6">
            TAIJUTSU-THƯƠNG HIỆU GHẾ MASSAGE HÀNG ĐẦU NHẬT BẢN
        </div>
        <div class = "info col-xs-12 col-md-6">
            <div>524 Lê Thanh Nghị - TP Hải Dương</div>
            <span></span>
            <a href = "tel:+84972.613.613">0972.613.613</a>
        </div>
    </div>
</footer>
<button id="chat" type = "button" class = "btn btn-primary" data-bs-toggle = "modal" data-bs-target = "#adduser">
    <svg xmlns = "http://www.w3.org/2000/svg" width = "16" height = "16" fill = "currentColor" class = "bi bi-chat"
         viewBox = "0 0 16 16">
        <path
            d = "M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
    </svg>
</button>

<div class = "modal fade" id = "adduser" tabindex = "-1" aria-labelledby = "exampleModalLabel" aria-hidden = "true">
    <div class = "modal-dialog">
        <div class = "modal-content">
            <div class = "modal-header">
                <button type = "button" class = "btn-close" data-bs-dismiss = "modal" aria-label = "Close"></button>
            </div>
            <form onsubmit="addUser()">
                <div class = "modal-body">
                    <div class = "mb-3">
                        <label for = "name" class = "col-form-label">Tên: </label>
                        <input type = "text" class = "form-control" id = "name">
                    </div>
                    <div class = "mb-3">
                        <label for = "phone" class = "col-form-label">Số điện thoại: </label>
                        <input type = "text" class = "form-control" id = "phone" oninput = "checkPhone(this)" required>
                        <div class = "invalid-feedback">
                            Please enter correct phone number
                        </div>
                    </div>
                    <div class = "mb-3">
                        <label for = "address" class = "col-form-label">Địa chỉ: </label>
                        <input type = "text" class = "form-control" id = "address">
                    </div>
                </div>
                <div class = "modal-footer">
                    <button type = "button"  class = "btn btn-primary" id = "submit" onclick = "addUser()">
                        Lưu thông tin tư vấn
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
