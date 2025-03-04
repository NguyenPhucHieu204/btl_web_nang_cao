@extends('client.layoutclient.master')

@section('title', 'Giới thiệu')

@section('content')
<!-- Phần điều hướng -->
<section class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__text">
                    <h4>Về Chúng Tôi</h4>
                    <div class="breadcrumb__links">
                        <a href="{{ url('/') }}">Trang Chủ</a>
                        <span>Về Chúng Tôi</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Giới thiệu -->
<section class="about spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="about__pic">
                    <img src="{{ asset('img/about/about-us.jpg') }}" alt="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="about__item">
                    <h4>Chúng Tôi Là Ai?</h4>
                    <p>Chúng tôi cung cấp các giải pháp sáng tạo và dịch vụ tốt nhất cho khách hàng của mình.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="about__item">
                    <h4>Chúng Tôi Làm Gì?</h4>
                    <p>Chúng tôi tập trung vào việc mang đến những sản phẩm chất lượng cao và trải nghiệm tốt nhất cho khách hàng.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="about__item">
                    <h4>Tại Sao Chọn Chúng Tôi?</h4>
                    <p>Chúng tôi cam kết đem lại giá trị thực sự với dịch vụ chuyên nghiệp và uy tín.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Đối tác & Khách hàng -->
<section class="clients spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>Đối tác</span>
                    <h2>Khách Hàng Hài Lòng</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @for ($i = 1; $i <= 8; $i++)
                <div class="col-lg-3 col-md-4 col-sm-4 col-6">
                    <a href="#" class="client__item"><img src="{{ asset('img/clients/client-' . $i . '.png') }}" alt=""></a>
                </div>
            @endfor
        </div>
    </div>
</section>
@endsection