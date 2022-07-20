@extends('layout')
@section('content')
    <h1 class = "list-title" style="margin-bottom: 0">Danh sách sản phẩm</h1>
    <video id="vid" autoplay muted loop>
        <source src="{{ asset('welcome.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class = "list row">
        <a class = "element col-md-4 col-sm-6 col-xs-6" href = "/as3100">
            <div class = "card" style = "width: 18rem">
                <img src = "{{ asset('as3100-img/AS3100.jpg') }}" class = "card-img-top" alt = "AS-3100"/>
                <div class = "card-body">
                    <h2 class = "card-title">Ghế massage thông minh: AS-3100</h2>
                    <h3 class = "card-title">66.240.000đ</h3>
                </div>
            </div>
        </a>
        <a class = "element col-md-4 col-sm-6 col-xs-6" href = "/as10000">
            <div class = "card" style = "width: 18rem">
                <img src = "{{ asset('as10000-img/AS10000.jpg') }}" class = "card-img-top" alt = "AS-10.000"/>
                <div class = "card-body">
                    <h2 class = "card-title">Ghế massage thông minh: AS-10.000</h2>
                    <h3 class = "card-title">42.340.000đ</h3>
                </div>
            </div>
        </a>
        <a class = "element col-md-4 col-sm-6 col-xs-6" href = "/as2022">
            <div class = "card" style = "width: 18rem">
                <img src = "{{ asset('as2022-img/AS2022.jpg') }}" class = "card-img-top" alt = "AS2022"/>
                <div class = "card-body">
                    <h2 class = "card-title">Ghế massage thông minh: AS-2022</h2>
                    <h3 class = "card-title">58.240.000đ</h3>
                </div>
            </div>
        </a>
        <a class = "element col-md-4 col-sm-6 col-xs-6" href = "/as3000">
            <div class = "card" style = "width: 18rem">
                <img src = "{{ asset('as3000-img/AS3000.jpg') }}" class = "card-img-top" alt = "AS2022"/>
                <div class = "card-body">
                    <h2 class = "card-title">Ghế massage thông minh: AS-3000</h2>
                    <h3 class = "card-title">70.000.000đ</h3>
                </div>
            </div>
        </a>
    </div>
@endsection
