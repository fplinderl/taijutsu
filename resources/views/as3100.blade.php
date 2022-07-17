@extends('layout')
@section('content')
    <h1 class = "list-title">AS-3100</h1>
    <div class = "row ">
        <section class = "col-lg-6 mg_bt">
            <div id = "carouselExampleIndicators" class = "carousel slide" data-bs-ride = "true">
                <div class = "carousel-indicators">
                    <button type = "button" data-bs-target = "#carouselExampleIndicators" data-bs-slide-to = "0"
                            class = "active" aria-current = "true" aria-label = "Slide 1">
                        <img src = "{{ asset('as3100-img/top1-500x500.jpeg') }}" class = "d-block w-100"
                             alt = "Ghế massage thông minh: AS-3100">
                    </button>
                    <button type = "button" data-bs-target = "#carouselExampleIndicators" data-bs-slide-to = "1"
                            aria-label = "Slide 2">
                        <img src = "{{ asset('as3100-img/top2-500x500.jpeg') }}" class = "d-block w-100"
                             alt = "Ghế massage thông minh: AS-3100">
                    </button>
                    <button type = "button" data-bs-target = "#carouselExampleIndicators" data-bs-slide-to = "2"
                            aria-label = "Slide 3">
                        <img src = "{{ asset('as3100-img/top3-500x500.jpeg') }}" class = "d-block w-100"
                             alt = "Ghế massage thông minh: AS-3100">
                    </button>
                </div>
                <div class = "carousel-inner">
                    <div class = "carousel-item active">
                        <img src = "{{ asset('as3100-img/top1-500x500.jpeg') }}" class = "d-block w-100"
                             alt = "Ghế massage thông minh: AS-3100">
                    </div>
                    <div class = "carousel-item">
                        <img src = "{{ asset('as3100-img/top2-500x500.jpeg') }}" class = "d-block w-100"
                             alt = "Ghế massage thông minh: AS-3100">
                    </div>
                    <div class = "carousel-item">
                        <img src = "{{ asset('as3100-img/top3-500x500.jpeg') }}" class = "d-block w-100"
                             alt = "Ghế massage thông minh: AS-3100">
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
                        <h2 class = "tensanpham ">Taijutsu AS - 3100</h2>
                        Ghế massage BỀN NHẤT THẾ GIỚI
                    </td>
                </tr>
                <tr>
                    <td colspan = "2">
                        <p>Ghế nội địa Nhật Taijutsu AS3100 gồm các tính năng:</p>
                        <p> ⁃ gồm 10 bài tập tự động (auto)</p>
                        <p> ⁃ 6 thủ thuật massage mô phỏng theo tay người : xoa, bóp, đấm, ấn, vỗ, miết</p>
                        <p> ⁃ chế độ massage dành cho người bị đau đầu mất ngủ</p>
                        <p> ⁃ chế độ massage dành cho người bị thoái hoá đốt sống</p>
                        <p> ⁃ chế độ massage không trọng lượng</p>
                        <p> ⁃ chế độ kéo dãn cơ thể</p>
                        <p> ⁃ khung sườn máy chắc chắn, cấu tạo từ hợp kim thép sơn tĩnh điện (trọng lượng 115kg)</p>
                        <p> ⁃ chất liệu da ghế cao cấp Microfiber</p>
                        <p> ⁃ nhiệt hồng ngoại</p>
                        <p> ⁃ điện áp 100V Chuẩn Nhật</p>
                        <p> ⁃ bảo hành 6 năm, bảo trì bảo dưỡng trọn đời sản phẩm tại nhà</p>
                        <p> ⁃ giấy tờ đi kèm gồm CO-chứng nhận nguồn gốc xuất sứ, giấy chứng nhận thiết bị y tế do bộ y
                            tế Nhật cấp</p>
                        <p>✴️ Bảo hành tại nhà miễn phí 06 Năm</p>
                        <p>✴️ Miễn phí vận chuyển lắp đặt toàn quốc</p>
                        <p>✴️ Lỗi đổi mới 30 ngày miễn phí</p>
                        <p>✴️ Miễn phí nâng cấp sản phẩm từ hãng Taijutsu</p>
                        <p>📌 LIÊN HỆ NGAY ĐỂ ĐƯỢC TƯ VẤN VÀ HỖ TRỢ #MIỄN #PHÍ</p>
                        <p>🏠🏠524 Lê Thanh Nghị - TP Hải Dương</p>
                        <p>☎️☎️HOTLINE: <a href = "tel:+84972.613.613">0972.613.613</a></p>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class = "row">
        <img alt = "" src = "{{ asset('as3100-img/5.jpeg') }}" alt = "Ghế massage thông minh: AS-3100"/>
        <img alt = "" src = "{{ asset('as3100-img/1.jpg') }}" alt = "Ghế massage thông minh: AS-3100"/><br/>
        <img alt = "" src = "{{ asset('as3100-img/2.jpg') }}" alt = "Ghế massage thông minh: AS-3100"/><br/>
        <img alt = "" src = "{{ asset('as3100-img/3.jpg') }}" alt = "Ghế massage thông minh: AS-3100"/><br/>
        <img alt = "" src = "{{ asset('as3100-img/4.jpg') }}" alt = "Ghế massage thông minh: AS-3100"/><br/>
    </div>
@endsection
