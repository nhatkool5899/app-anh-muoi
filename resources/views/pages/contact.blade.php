@extends('layout.page')
@section('banner')
<div class="banner">
    <div class="banner__main">
        <img src="./assets/imgs/banner-demo.jpg" alt="">
    </div>
    <div class="banner__text">
        <p class="title" style="font-family: system-ui;">Liên hệ</p>
        <p class="subtitle">Mọi thắc mắc xin vui lòng liên hệ với chúng tôi theo những thông tin dưới đây để được tư vấn kỹ càng hơn,</p>
        <a href="#" class="btn__banner fill">Gọi ngay</a>
    </div>
</div>
@endsection

@section('content')
<section>
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="contact-title">Thông tin liên hệ</div>
                    <div class="contact-address">
                        <h4>Chi nhánh 1</h4>
                        <p>Email: <a href="maito:thucphamanhmuoi@gmail.com">thucphamanhmuoi@gmail.com</a></p>
                        <p>Điện thoại: <a href="tel:0932830929">0932 830 929</a></p>
                        <p>Địa chỉ: 119 đường Trần Hưng Đạo, phường An Phú, quận Ninh Kiều, TP Cần Thơ.</p>
                    </div>
                    <div class="contact-address">
                        <h4>Chi nhánh 2</h4>
                        <p>Email: <a href="maito:thucphamanhmuoi@gmail.com">thucphamanhmuoi@gmail.com</a></p>
                        <p>Điện thoại: <a href="tel:0932830929">0932 830 929</a></p>
                        <p>Địa chỉ: 122/4A, đường Mạc Thiên Tích, quận Ninh Kiều, TP Cần Thơ.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contact-title">Liên hệ với chúng tôi</div>
                    <form action="" class="form-contact">
                        <input type="text" name="name" placeholder="Tên của bạn">
                        <input type="number" name="phone" placeholder="Số điện thoại">
                        <input type="email" name="email" placeholder="Email">
                        <textarea name="message" rows="6" placeholder="Nội dung"></textarea>
                        <button class="btn-contact">Xác nhận</button>
                    </form>
                </div>
            </div>

            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.8582501641777!2d105.7692412110355!3d10.028553990036945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a0897125453efb%3A0x853c9afd159e52ea!2zQ8ahbSBIZW8gUXVheSBBbmggTcaw4budaSBGb29k!5e0!3m2!1svi!2sus!4v1681722122782!5m2!1svi!2sus" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>
@endsection