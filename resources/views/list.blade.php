@extends('layout')
@section('content')
    <h1 class = "list-title">Danh sách sản phẩm</h1>
    <div class = "list row">
        <a class = "element col-md-4 col-sm-6 col-xs-6" href = "/as3100">
            <div class = "card" style = "width: 18rem">
                <img src = "{{ asset('as3100/AS3100.jpg') }}" class = "card-img-top" alt = "AS-3100"/>
                <div class = "card-body">
                    <h2 class = "card-title">Ghế massage thông minh: AS-3100</h2>
                </div>
            </div>
        </a>
        <a class = "element col-md-4 col-sm-6 col-xs-6" href = "/as10000">
            <div class = "card" style = "width: 18rem">
                <img src = "{{ asset('as10000/AS10000.jpg') }}" class = "card-img-top" alt = "AS-10.000"/>
                <div class = "card-body">
                    <h2 class = "card-title">Ghế massage thông minh: AS-10.000</h2>
                </div>
            </div>
        </a>
        <a class = "element col-md-4 col-sm-6 col-xs-6" href = "/as2022">
            <div class = "card" style = "width: 18rem">
                <img src = "{{ asset('as2022/AS2022.jpg') }}" class = "card-img-top" alt = "AS2022"/>
                <div class = "card-body">
                    <h2 class = "card-title">Ghế massage thông minh: AS-2022</h2>
                </div>
            </div>
        </a>
    </div>
@endsection
