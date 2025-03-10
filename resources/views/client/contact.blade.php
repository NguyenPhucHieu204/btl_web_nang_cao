@extends('client.layoutclient.master')

@section('title', 'Giới thiệu')

@section('content')
<!-- Bản đồ -->
<div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d111551.9926412813!2d-90.27317134641879!3d38.606612219170856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1svi!2sbd!4v1597926938024!5m2!1svi!2sbd" height="500" style="border:0;" allowfullscreen aria-hidden="false" tabindex="0"></iframe>
</div>

<!-- Phần liên hệ -->
<section class="contact spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="contact__text">
                    <div class="section-title">
                        <span>Thông tin</span>
                        <h2>Liên hệ với chúng tôi</h2>
                        <p>Chúng tôi luôn sẵn sàng hỗ trợ bạn với dịch vụ tận tâm và chuyên nghiệp.</p>
                    </div>
                    <ul>
                        <li>
                            <h4>Mỹ</h4>
                            <p>195 E Parker Square Dr, Parker, CO 801 <br />+43 982-314-0958</p>
                        </li>
                        <li>
                            <h4>Pháp</h4>
                            <p>109 Avenue Léon, 63 Clermont-Ferrand <br />+12 345-423-9893</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="contact__form">
                    <form action="{{ route('contact.submit') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" name="name" placeholder="Họ và tên" required>
                            </div>
                            <div class="col-lg-6">
                                <input type="email" name="email" placeholder="Email" required>
                            </div>
                            <div class="col-lg-12">
                                <textarea name="message" placeholder="Nội dung tin nhắn" required></textarea>
                                <button type="submit" class="site-btn">Gửi tin nhắn</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
