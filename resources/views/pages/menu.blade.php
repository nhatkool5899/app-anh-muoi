@extends('layout.page')
@section('banner')
<div class="banner">
    <div class="banner__main">
        <img src="./assets/imgs/banner-demo-2.jpg" alt="">
    </div>
    <div class="banner__text">
        <p class="title">Thực đơn tại cửa hàng</p>
        <p class="subtitle">"Với hương vị thơm ngon và quy trình chế biến độc đáo, cơm Anh Mười sẽ mang đến sự trải nghiệm vô cùng mới lạ và tuyệt vời."</p>
        <a href="#" class="btn__banner fill">Đặt cơm ngay</a>
    </div>
</div>
@endsection

@section('content')
<section>
    <div class="menu">
        <div class="container">
            <ul class="menu__menu-nav">
                <li><span class="menu__menu-item active">Tất cả</span></li>
                <li><span class="menu__menu-item">Cơm heo quay</span></li>
                <li><span class="menu__menu-item">Cơm gà</span></li>
                <li><span class="menu__menu-item">Món phụ</span></li>
                <li><span class="menu__menu-item">Nước uống</span></li>
            </ul>

            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4 ">
                    <div class="product__item product__home">

                        <a href="./chi-tiet.html" class="product__image">
                            <img src="./assets/imgs/com/heo-quay.png" alt="">
                        </a>
                        <div class="product__info">
                            <a href="./chi-tiet.html" class="product__info-middle">Cơm heo quay</a>
                            <div class="product__info-bottom">
                                <span>Giá:</span>
                                <span class="new">35.000đ</span>
                                <span class="btn__order-now add__to-cart"><i class="bi bi-cart-plus-fill"></i></span>
                            </div>
                            <div class="buy__now">
                                <span class="btn__buy-now">Mua ngay</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 ">
                    <div class="product__item product__home">

                        <a href="./chi-tiet.html" class="product__image">
                            <img src="./assets/imgs/com/heo-quay.png" alt="">
                        </a>
                        <div class="product__info">
                            <a href="./chi-tiet.html" class="product__info-middle">Cơm heo quay</a>
                            <div class="product__info-bottom">
                                <span>Giá:</span>
                                <span class="new">35.000đ</span>
                                <span class="btn__order-now add__to-cart"><i class="bi bi-cart-plus-fill"></i></span>
                            </div>
                            <div class="buy__now">
                                <span class="btn__buy-now">Mua ngay</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 ">
                    <div class="product__item product__home">

                        <a href="./chi-tiet.html" class="product__image">
                            <img src="./assets/imgs/com/heo-quay.png" alt="">
                        </a>
                        <div class="product__info">
                            <a href="./chi-tiet.html" class="product__info-middle">Cơm heo quay</a>
                            <div class="product__info-bottom">
                                <span>Giá:</span>
                                <span class="new">35.000đ</span>
                                <span class="btn__order-now add__to-cart"><i class="bi bi-cart-plus-fill"></i></span>
                            </div>
                            <div class="buy__now">
                                <span class="btn__buy-now">Mua ngay</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="delivery">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="delivery-title">
                        Giao hàng <span>nhanh chóng</span> & <span>uy tín</span>, cam kết đúng thời gian địa điểm
                    </div>
                    <div class="delivery-subtitle">
                        Thách thức mọi cung đường và ngã rẽ, dù trong bất kỳ thời tiết khi nắng to hay những ngày mưa gió thì đội ngũ shipper của Anh Mười luôn sẵn sàng phục vụ bạn mọi lúc mọi nơi.
                    </div>
                    <a href="" class="booking__link" style="text-transform: capitalize; font-size: 18px;">Đặt hàng ngay</a>
                </div>
                <div class="col-md-6">
                    <figure class="delivery-banner">
                        <img src="./assets/imgs/delivery-banner-bg.png">
            
                        <img src="./assets/imgs/delivery-boy.svg" alt="delivery boy" class="delivery-img">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection