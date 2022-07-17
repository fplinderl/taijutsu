@extends('layout')
@section('content')
    <h1 class = "list-title">AS-2022</h1>
    <div class = "row ">
        <section class = "col-lg-6 mg_bt">
            <div id = "carouselExampleIndicators" class = "carousel slide" data-bs-ride = "true">
                <div class = "carousel-indicators">
                    <button type = "button" data-bs-target = "#carouselExampleIndicators" data-bs-slide-to = "0"
                            class = "active" aria-current = "true" aria-label = "Slide 1">
                        <img src = "{{ asset('as2022-img/l1-500x500.jpg') }}" class = "d-block w-100" alt = "...">
                    </button>
                    <button type = "button" data-bs-target = "#carouselExampleIndicators" data-bs-slide-to = "1"
                            aria-label = "Slide 2">
                        <img src = "{{ asset('as2022-img/l2-500x500.jpg') }}" class = "d-block w-100" alt = "...">
                    </button>
                    <button type = "button" data-bs-target = "#carouselExampleIndicators" data-bs-slide-to = "2"
                            aria-label = "Slide 3">
                        <img src = "{{ asset('as2022-img/l3-500x500.jpg') }}" class = "d-block w-100" alt = "...">
                    </button>
                </div>
                <div class = "carousel-inner">
                    <div class = "carousel-item active">
                        <img src = "{{ asset('as2022-img/l1-500x500.jpg') }}" class = "d-block w-100" alt = "...">
                    </div>
                    <div class = "carousel-item">
                        <img src = "{{ asset('as2022-img/l2-500x500.jpg') }}" class = "d-block w-100" alt = "...">
                    </div>
                    <div class = "carousel-item">
                        <img src = "{{ asset('as2022-img/l3-500x500.jpg') }}" class = "d-block w-100" alt = "...">
                    </div>
                </div>
                <button class = "carousel-control-prev" type = "button" data-bs-target = "#carouselExampleIndicators"
                        data-bs-slide = "prev">
                    <span class = "carousel-control-prev-icon" aria-hidden = "true"></span>
                    <span class = "visually-hidden">Previous</span>
                </button>
                <button class = "carousel-control-next" type = "button" data-bs-target = "#carouselExampleIndicators"
                        data-bs-slide = "next">
                    <span class = "carousel-control-next-icon" aria-hidden = "true"></span>
                    <span class = "visually-hidden">Next</span>
                </button>
            </div>

        </section>

        <div class = "col-lg-6">
            <table class = "table table-striped table-bordered table-bordered table-hover table-responsive ">
                <tr class = "hidden">
                    <td colspan = "2">
                        <h2 class = "tensanpham ">Taijutsu AS - 2022</h2>
                        Ghế massage BỀN NHẤT THẾ GIỚI
                    </td>
                </tr>
                <tr>
                    <td colspan = "2">
                        <p>ĐẲNG CẤP GIỚI THƯỢNG LƯU</p>
                        <p>Tự hào là dòng Ghế Massage đến từ Nhật Bản đầu tiên trang bị hệ thống siêu cảm biến S-OPTICS hiểu điều cơ thể bạn muốn.</p>
                        <p>⚙ Trang bị hệ thống vi xử lý đa tầng Multi-Processor ™ độc quyền từ hãng Taijutsu Nhật Bản, tăng khả năng linh hoạt của khối động cơ và đem lại cảm giác massage thoải mái nhất.</p>
                        <p>☑️ 06 chức năng Massage được thiết lập sẵn trên thiết bị giúp cho việc vận hành trở lên đơn giản hơn cho người sử dụng.</p>
                        <p>☑️ Hơn 20 kỹ thuật Massage có thể được tùy biến theo sở thích.</p>
                        <p>☑️ Kỹ thuật Massage không trọng lực thế hệ mới thoải mái hơn.</p>
                        <p>☑️ Kết nối âm thành vòm T-Sound™ với thiết bị sử dụng Bluetooth</p>
                        <p>☑️ Chất liệu da microfiber mềm mại và có độ bền cao.</p>
                        <p>☑️ Cơ chế lùi tường tiết kiệm không gian sống.</p>
                        <p>AS-2200 NEW 2021 ưu đãi luôn top đầu</p>
                        <p>✴️ Bảo hành tại nhà miễn phí 06 Năm</p>
                        <p>✴️ Miễn phí vận chuyển lắp đặt toàn quốc</p>
                        <p>✴️ Lỗi đổi mới 30 ngày miễn phí</p>
                        <p>✴️ Miễn phí nâng cấp sản phẩm từ hãng Taijutsu</p>
                        <p>📌 LIÊN HỆ NGAY ĐỂ ĐƯỢC TƯ VẤN VÀ HỖ TRỢ #MIỄN #PHÍ</p>
                        <p>🏠🏠524 Lê Thanh Nghị - TP Hải Dương</p>
                        <p>☎️☎️HOTLINE:  <a href = "tel:+84972.613.613">0972.613.613</a></p>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class = "row">
        <img alt = "" src = "{{ asset('as2022-img/1.jpg') }}"/><br/>
        <img alt = "" src = "{{ asset('as2022-img/2.jpg') }}"/><br/>
        <img alt = "" src = "{{ asset('as2022-img/3.jpg') }}"/><br/>
        <img alt = "" src = "{{ asset('as2022-img/4.jpg') }}"/><br/>
        <img alt = "" src = "{{ asset('as2022-img/5.jpg') }}"/>
    </div>
@endsection
