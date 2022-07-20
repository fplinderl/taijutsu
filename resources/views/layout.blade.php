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
    <link rel = "stylesheet" href = "https://cdn.leanhduc.pro.vn/utilities/animation/shake-effect/style.css"/>
<!--<script src = "{{ asset('app.js') }}"></script>-->
</head>
<body>
<header class = "header d-flex justify-content-center align-items-center">
    <a href = "http://taijutsu.info">
        <img src = "{{ asset('logo.png') }}" alt = "logo"/>
    </a>
    <div class = "madeIn">MADE IN JAPAN</div>
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
<button id = "chat" type = "button" class = "btn" data-bs-toggle = "modal" data-bs-target = "#adduser">
    <svg class = "rung" version = "1.1" id = "Layer_1" xmlns = "http://www.w3.org/2000/svg"
         xmlns:xlink = "http://www.w3.org/1999/xlink" x = "0px" y = "0px"
         viewBox = "0 0 502 502" style = "enable-background:new 0 0 502 502;" xml:space = "preserve">
        <g>
            <rect x = "72.74" y = "215.149" style = "fill:#FF2E3D;" width = "356.521" height = "276.851"/>
            <rect x = "26.93" y = "109.587" style = "fill:#FF2E3D;" width = "448.141" height = "105.562"/>
            <g>
                <path d = "M475.07,99.587H345.372c9.453-10.579,15.214-24.523,15.214-39.793C360.587,26.823,333.764,0,300.793,0
                    C280.038,0,261.725,10.635,251,26.737C240.275,10.635,221.962,0,201.207,0c-32.971,0-59.794,26.823-59.794,59.793
                    c0,15.27,5.761,29.215,15.214,39.793H26.93c-5.522,0-10,4.477-10,10v105.562c0,5.523,4.478,10,10,10h35.81V492
                    c0,5.523,4.478,10,10,10H429.26c5.522,0,10-4.477,10-10V225.149h35.81c5.522,0,10-4.477,10-10V109.587
                    C485.07,104.064,480.592,99.587,475.07,99.587z M300.793,20c21.942,0,39.794,17.851,39.794,39.793s-17.852,39.793-39.794,39.793
                    H261V59.793C261,37.851,278.851,20,300.793,20z M161.413,59.793c0-21.942,17.852-39.793,39.794-39.793S241,37.851,241,59.793
                    v39.793h-39.793C179.265,99.587,161.413,81.736,161.413,59.793z M36.93,205.149v-85.562H241v85.562H36.93z M82.739,362.579h36.806
                    c5.522,0,10-4.477,10-10s-4.478-10-10-10H82.739v-117.43H241V482H82.739V362.579z M419.26,342.579H289c-5.522,0-10,4.477-10,10
                    s4.478,10,10,10H419.26V482H261V225.149H419.26V342.579z M465.07,119.587v85.562H261v-85.562
                    C261,119.587,465.07,119.587,465.07,119.587z"/>
                <path
                    d = "M211,342.579h-43c-5.522,0-10,4.477-10,10s4.478,10,10,10h43c5.522,0,10-4.477,10-10S216.522,342.579,211,342.579z"/>
            </g>
        </g>
    </svg>
    <div>Liên hệ để nhận thêm ưu đãi</div>
</button>

<div class = "modal fade" id = "adduser" tabindex = "-1" aria-labelledby = "exampleModalLabel" aria-hidden = "true">
    <div class = "modal-dialog">
        <div class = "modal-content">
            <div class = "modal-header">
                <button type = "button" class = "btn-close" data-bs-dismiss = "modal" aria-label = "Close"></button>
            </div>
            <form onsubmit = "addUser()">
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
                    <button type = "button" class = "btn btn-primary" id = "submit" onclick = "addUser()">
                        Lưu thông tin tư vấn
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    let api_user = "/api/user"

    function addUser() {
        $.ajax({
            url: api_user,
            method: 'post',
            data: {
                name: $('#name').val(),
                phone: $('#phone').val(),
                address: $('#address').val(),
                url: window.location.href,
            }
        })
            .then(() => {
            })
            .catch(() => {
            })
            .done(() => {
                $('#adduser').modal('hide');
            })
    }

    function checkPhone(e) {
        let pattern = /^(09|01|08|03|07|05)[0-9]{8}$/;
        let phone = $('#phone')
        if (!pattern.test(e.value)) {
            if (!phone.hasClass("is-invalid"))
                phone.addClass("is-invalid")
            $('#submit').prop('disabled', true);
        } else {
            if (phone.hasClass("is-invalid"))
                phone.removeClass("is-invalid")
            $('#submit').prop('disabled', false);
        }
    }
</script>
</body>
</html>
