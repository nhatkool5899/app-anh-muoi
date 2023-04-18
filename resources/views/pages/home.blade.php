@extends('layout.page')

@section('banner')
<div class="banner">
    <div class="banner__img">
        <div class="slick__banner">
            <div class="banner-item">
                <img src="{{asset('front-end/assets/imgs/banner-demo.png')}}" alt="">
            </div>
            <div class="banner-item">
                <img src="{{asset('front-end/assets/imgs/banner/banner-1.jpg')}}" alt="">
            </div>
            <div class="banner-item">
                <img src="{{asset('front-end/assets/imgs/banner/banner-2.jpg')}}" alt="">
            </div>
        </div>
        <div class="slick-slider-dots"></div>
    </div>
</div>
@endsection

@section('content')
<div class="product"  id="com">
    <div class="container">
        <div class="product__menu">
            <div class="product__head">
                <div class="subtitle">
                    Menu
                </div>
                <div class="title">Các món ăn<span></span></div>
                <div class="desc">Thực phẩm là bất kỳ chất nào được tiêu thụ để cung cấp hỗ trợ dinh dưỡng cho một sinh vật.</div>

            </div>
            <ul class="product__menu-nav">
                <li><a href="#com" class="menu__nav-item">Cơm Heo quay</a></li>
                <li><a href="#ga" class="menu__nav-item">Cơm gà</a></li>
                <li><a href="#canh" class="menu__nav-item">Món canh</a></li>
                <li><a href="#nuoc" class="menu__nav-item">Nước uống</a></li>
            </ul>

            <img src="./assets/imgs/leaf-1.png" class="leaf-shape-1" alt="">
            <img src="./assets/imgs/leaf-2.png" class="leaf-shape-2" alt="">
            <img src="./assets/imgs/tomato.png" class="tomato-shape-1" alt="">
        </div>

        <div class="product__body">
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4 ">
                    <div class="product__item product__home">
                        <span class="product__sales">Hot</span>
                        <a href="./chi-tiet.html" class="product__image">
                            <img src="./assets/imgs/com/heo-quay.png" alt="">
                        </a>
                        <div class="product__info">
                            <div class="product__info-top">
                                <span>Heo</span>
                                <span class="star">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star"></i>
                                </span>
                            </div>
                            <a href="./chi-tiet.html" class="product__info-middle">Cơm heo quay</a>
                            <div class="product__info-bottom">
                                <span>Giá:</span>
                                <span class="new">35.000đ</span>
                                <span class="btn__order-now add__to-cart"><i class="bi bi-cart-plus-fill"></i></span>
                            </div>
                            <div class="progress">
                                <div class="progress-done"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 ">
                    <a href="./chi-tiet.html">
                        <div class="product__item">
                            <span class="product__sales">Hot</span>
                            <div class="product__image">
                                <img src="./assets/imgs/com/heo-quay-tieu-xanh.png" alt="">
                            </div>
                            <div class="product__info">
                                <div class="product__info-top">
                                    <span>Heo</span>
                                    <span class="star">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </span>
                                </div>
                                <div class="product__info-middle">Cơm sốt tiêu xanh</div>
                                <div class="product__info-bottom">
                                    <span>Giá:</span>
                                    <span class="new">35.000đ</span>
                                    
                                </div>
                                <div class="progress">
                                    <div class="progress-done"></div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 ">
                    <a href="./chi-tiet.html">
                        <div class="product__item">
                            <span class="product__sales">Hot</span>
                            <div class="product__image">
                                <img src="./assets/imgs/com/dui-ga-chien.png" alt="">
                            </div>
                            <div class="product__info">
                                <div class="product__info-top">
                                    <span>Gà</span>
                                    <span class="star">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star"></i>
                                    </span>
                                </div>
                                <div class="product__info-middle">Cơm đùi gà chiên</div>
                                <div class="product__info-bottom">
                                    <span>Giá:</span>
                                    <span class="new">35.000đ</span>
                                    
                                </div>
                                <div class="progress">
                                    <div class="progress-done"></div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 ">
                    <a href="./chi-tiet.html">
                        <div class="product__item">
                            <span class="product__sales">Hot</span>
                            <div class="product__image">
                                <img src="./assets/imgs/com/dui-ga-tieu-xanh.png" alt="">
                            </div>
                            <div class="product__info">
                                <div class="product__info-top">
                                    <span>Gà</span>
                                    <span class="star">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </span>
                                </div>
                                <div class="product__info-middle">Cơm đùi gà sốt tiêu xanh</div>
                                <div class="product__info-bottom">
                                    <span>Giá:</span>
                                    <span class="new">35.000đ</span>
                                    
                                </div>
                                <div class="progress">
                                    <div class="progress-done"></div>
                                </div>
                            </div>

                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 ">
                    <a href="./chi-tiet.html">
                        <div class="product__item">
                            <span class="product__sales">Hot</span>
                            <div class="product__image">
                                <img src="./assets/imgs/com/canh-ga-chien.png" alt="">
                            </div>
                            <div class="product__info">
                                <div class="product__info-top">
                                    <span>Gà</span>
                                    <span class="star">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </span>
                                </div>
                                <div class="product__info-middle">Cơm Cánh gà chiên</div>
                                <div class="product__info-bottom">
                                    <span>Giá:</span>
                                    <span class="new">35.000đ</span>
                                    
                                </div>
                                <div class="progress">
                                    <div class="progress-done"></div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 ">
                    <a href="./chi-tiet.html">
                        <div class="product__item">
                            <span class="product__sales">Hot</span>
                            <div class="product__image">
                                <img src="./assets/imgs/com/canh-ga-sot-tieu-sanh.png" alt="">
                            </div>
                            <div class="product__info">
                                <div class="product__info-top">
                                    <span>Gà</span>
                                    <span class="star">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </span>
                                </div>
                                <div class="product__info-middle">Cơm cánh gà sốt tiêu xanh</div>
                                <div class="product__info-bottom">
                                    <span>Giá:</span>
                                    <span class="new">35.000đ</span>
                                    
                                </div>
                                <div class="progress">
                                    <div class="progress-done"></div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <img src="./assets/imgs/svg/asset-svg2.svg" class="svg-shape-1" alt="">
            <img src="./assets/imgs/svg/asset-svg3.svg" class="svg-shape-2" alt="">
        </div>

    </div>
</div>

<div class="product white" id="canh">
    <div class="container">
        <div class="product__menu">
            <div class="product__head">
                <div class="title title-bg">Món canh, cơm thêm<span></span></div>
            </div>
        </div>

        <div class="product__body">
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="product__item">
                        <div class="product__image">
                            <img src="./assets/imgs/mon-them/canh-bap.png" alt="">
                        </div>
                        <div class="product__info">
                            <div class="product__info-top">
                                <span>Soup</span>
                                <span class="star">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star"></i>
                                </span>
                            </div>
                            <div class="product__info-middle">Canh bắp</div>
                            <div class="product__info-bottom">
                                <span>Giá:</span>
                                <span class="new">12.000đ</span>
                            </div>
                            <a href="tel:090977700" class="btn__order-now"><i class="bi bi-cart-plus-fill"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="product__item">
                        <div class="product__image">
                            <img src="./assets/imgs/mon-them/canh-kho-qua.png" alt="">
                        </div>
                        <div class="product__info">
                            <div class="product__info-top">
                                <span>Soup</span>
                                <span class="star">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </span>
                            </div>
                            <div class="product__info-middle">Canh khổ qua</div>
                            <div class="product__info-bottom">
                                <span>Giá:</span>
                                <span class="new">12.000đ</span>
                            </div>
                            <a href="tel:090977700" class="btn__order-now"><i class="bi bi-cart-plus-fill"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="product__item">
                        <div class="product__image">
                            <img src="./assets/imgs/mon-them/canh-cai.png" alt="">
                        </div>
                        <div class="product__info">
                            <div class="product__info-top">
                                <span>Soup</span>
                                <span class="star">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </span>
                            </div>
                            <div class="product__info-middle">Canh cải ngọt</div>
                            <div class="product__info-bottom">
                                <span>Giá:</span>
                                <span class="new">12.000đ</span>
                            </div>
                            <a href="tel:090977700" class="btn__order-now"><i class="bi bi-cart-plus-fill"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="product__item">
                        <div class="product__image">
                            <img src="./assets/imgs/mon-them/canh-cai.png" alt="">
                        </div>
                        <div class="product__info">
                            <div class="product__info-top">
                                <span>Soup</span>
                                <span class="star">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </span>
                            </div>
                            <div class="product__info-middle">Soup rong biển</div>
                            <div class="product__info-bottom">
                                <span>Giá:</span>
                                <span class="new">10.000đ</span>
                            </div>
                            <a href="tel:090977700" class="btn__order-now"><i class="bi bi-cart-plus-fill"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="product__item">
                        <div class="product__image">
                            <img src="./assets/imgs/mon-them/com-trang.png" alt="">
                        </div>
                        <div class="product__info">
                            <div class="product__info-top">
                                <span>Rice</span>
                                <span class="star">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star"></i>
                                </span>
                            </div>
                            <div class="product__info-middle">Cơm trắng</div>
                            <div class="product__info-bottom">
                                <span>Giá:</span>
                                <span class="new">7.000đ</span>
                            </div>
                            <a href="tel:090977700" class="btn__order-now"><i class="bi bi-cart-plus-fill"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="product__item">
                        <div class="product__image">
                            <img src="./assets/imgs/mon-them/com-trang.png" alt="">
                        </div>
                        <div class="product__info">
                            <div class="product__info-top">
                                <span>Rice</span>
                                <span class="star">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star"></i>
                                </span>
                            </div>
                            <div class="product__info-middle">Cơm rang</div>
                            <div class="product__info-bottom">
                                <span>Giá:</span>
                                <span class="new">10.000đ</span>
                            </div>
                            <a href="tel:090977700" class="btn__order-now"><i class="bi bi-cart-plus-fill"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <img src="./assets/imgs/leaf-1.png" style="top: 30px;left: -12px;width: 50px;" class="leaf-shape-1" alt="">
            <img src="./assets/imgs/leaf-3.png" style="top: 10px;left: 60px;" class="leaf-shape-2" alt="">
            <!-- <img src="./assets/imgs/leaf-2.png" style="top: 10px;right: 30px;" class="leaf-shape-3" alt=""> -->
            <img src="./assets/imgs/svg/asset-svg3.svg" class="svg-shape-1" alt="">
            <img src="./assets/imgs/svg/asset-svg2.svg" class="svg-shape-2" alt="">
            <img src="./assets/imgs/svg/asset-svg5.svg" class="svg-shape-3" alt="">
            <img src="./assets/imgs/svg/asset-svg8.svg" class="leaf-shape-3" alt="">
        </div>

    </div>
</div>


<div class="drink" id="nuoc">
    <div class="container">
        <div class="drink__body">
            <div class="product__head">
                <div class="subtitle">
                    Menu
                </div>
                <div class="title">Nước uống<span></span></div>
                <div class="desc" style="max-width: 450px;">Với hương vị tự nhiên và thơm ngon, một ly nước giải khát là sự lựa chọn tuyệt vời giúp xua tan đi cái nóng của mùa hè.</div>

            </div>
            <ul class="promo-list has-scrollbar">
                <li class="promo-item">
                    <div class="promo-card">
                        <div class="card-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="none" xmlns:v="https://vecta.io/nano">
                                <g clip-path="url(#A)" fill="#bf1e2e">
                                <path d="M14.837 40.062c0 3.106 2.528 5.634 5.634 5.634s5.634-2.528 5.634-5.634a5.64 5.64 0 0 0-5.634-5.634c-3.106 0-5.634 2.527-5.634 5.634zm5.634-3.876a3.88 3.88 0 0 1 3.876 3.876 3.88 3.88 0 0 1-3.876 3.876 3.88 3.88 0 0 1-3.876-3.876 3.88 3.88 0 0 1 3.876-3.876zm4.22-20.523l-.2-9.292a1.6 1.6 0 0 0 1.089-1.514V1.599A1.6 1.6 0 0 0 23.981 0H16.96a1.6 1.6 0 0 0-1.599 1.599v3.259a1.6 1.6 0 0 0 1.09 1.514l-.201 9.292a10.3 10.3 0 0 1-2.194 6.117c-1.659 2.107-2.573 4.744-2.573 7.426v27.741A3.06 3.06 0 0 0 14.538 60h11.866a3.06 3.06 0 0 0 3.053-3.053v-27.74a12.06 12.06 0 0 0-2.573-7.426 10.3 10.3 0 0 1-2.194-6.117zM17.119 1.758h6.703v2.941h-6.703V1.758zm5.695 8.398h-4.687l.08-3.7h4.527l.08 3.7zM27.7 56.947a1.3 1.3 0 0 1-1.296 1.295H14.538c-.715 0-1.295-.581-1.295-1.295v-7.978H27.7v7.978zm0-25.703h-8.55a.88.88 0 0 0-.879.878.88.88 0 0 0 .879.879h8.55v14.21H13.242v-14.21h1.819a.88.88 0 0 0 .878-.879.88.88 0 0 0-.878-.878h-1.819v-2.037a10.29 10.29 0 0 1 2.196-6.338c1.602-2.034 2.514-4.579 2.57-7.167l.082-3.787h4.762l.081 3.787a12.08 12.08 0 0 0 2.57 7.167 10.29 10.29 0 0 1 2.196 6.338v2.037zm20.876-12.638c0-1.069-.567-2.026-1.438-2.519-.186-1.394-1.338-2.471-2.727-2.471a2.66 2.66 0 0 0-1.289.334 2.61 2.61 0 0 0-.274-.089c-.193-1.385-1.341-2.453-2.724-2.453-.896 0-1.721.456-2.23 1.188l-.226-.01c-1.262 0-2.34.894-2.658 2.119a2.8 2.8 0 0 0-1.113 1.131c-1.179.329-2.037 1.45-2.037 2.78.001.218.047.432.132.631l-.003.052v1.757a64.33 64.33 0 0 0 1.632 14.388l.141.613c1.294 5.63 1.871 9.946 1.871 13.995v4.586a.54.54 0 0 1-.038.201c-.004.008-.01.016-.013.024a.54.54 0 0 1-.196.23l-1.491.966c-.515.334-.822.899-.822 1.512v.625a1.71 1.71 0 0 0 .007.15c.002.026.005.051.008.077.001.007.001.014.002.022.002.015.005.028.008.043l.016.092a1.66 1.66 0 0 0 .034.133c.014.045.028.083.043.122.006.016.011.032.018.048a1.57 1.57 0 0 0 .055.119c.006.012.012.025.018.038a1.67 1.67 0 0 0 .07.119c.006.01.012.021.018.03.025.038.052.073.079.109.009.01.016.022.025.032.025.031.051.059.078.088.013.015.026.029.039.043a1.42 1.42 0 0 0 .07.065c.024.021.04.038.06.055s.037.028.055.042a1.37 1.37 0 0 0 .086.064c.015.01.031.019.046.028.03.019.059.039.091.056a2.17 2.17 0 0 0 .105.054c.023.011.045.022.066.031a1.83 1.83 0 0 0 .08.031 1.92 1.92 0 0 0 .088.031 1.73 1.73 0 0 0 .086.023c.029.008.059.016.085.021a1.58 1.58 0 0 0 .103.017 1.43 1.43 0 0 0 .076.011 1.94 1.94 0 0 0 .101.006 1.18 1.18 0 0 0 .08.003L45.561 60c.031-.001.058-.001.087-.003s.059-.003.088-.006a1.07 1.07 0 0 0 .087-.011c.034-.005.068-.01.098-.016h0c.035-.008.058-.013.078-.019.032-.008.065-.016.098-.027.02-.006.039-.013.059-.021a1.38 1.38 0 0 0 .103-.039c.015-.006.031-.013.045-.02s.026-.014.04-.021a2.01 2.01 0 0 0 .105-.054c.023-.013.046-.027.069-.042a1.93 1.93 0 0 0 .081-.054 1.46 1.46 0 0 0 .075-.056 2.01 2.01 0 0 0 .064-.053 1.78 1.78 0 0 0 .076-.069c.018-.017.035-.036.052-.054.024-.026.049-.052.071-.079.016-.019.031-.039.047-.059.021-.028.043-.054.062-.083s.033-.052.049-.079.031-.049.045-.074a1.77 1.77 0 0 0 .144-.342 1.62 1.62 0 0 0 .036-.14c.006-.029.011-.059.016-.089.002-.016.006-.031.008-.047l.003-.022.008-.075a1.68 1.68 0 0 0 .008-.15v-.624c0-.613-.307-1.178-.821-1.511l-.553-.358-.94-.609c-.035-.027-.083-.076-.132-.151a1.28 1.28 0 0 1-.047-.084c-.041-.081-.069-.163-.069-.22v-4.585c0-4.048.577-8.364 1.871-13.995l.141-.613a64.33 64.33 0 0 0 1.632-14.388V19.3c0-.018-.002-.035-.003-.052a1.63 1.63 0 0 0 .132-.626v-.016zm-14.012-1.108a.88.88 0 0 0 .792-.617c.108-.352.366-.618.688-.712a.88.88 0 0 0 .63-.79c.035-.58.471-1.033.993-1.033a.9.9 0 0 1 .35.071.88.88 0 0 0 1.174-.527c.145-.425.528-.722.932-.722.549 0 .995.498.995 1.109a1.23 1.23 0 0 1-.021.226.88.88 0 0 0 .968 1.036c.222-.026.438.029.625.159a.88.88 0 0 0 1.095-.073c.178-.163.395-.249.626-.249.549 0 .996.498.996 1.109a1.16 1.16 0 0 1-.005.114.88.88 0 0 0 .65.93c.219.058.408.198.544.386h-12.76c.173-.239.432-.398.728-.414h0zm10.634 39.787l.388.251c.006.004.011.01.015.016l.005.021v.619l-.001.013c-.003.011-.006.016-.009.02l-.052.017H34.892l-.02-.001-.022-.006c-.011-.008-.016-.017-.019-.031l-.001-.63c0-.015.007-.029.02-.037l1.491-.967a2.52 2.52 0 0 0 .135-.095l.023-.018a2.11 2.11 0 0 0 .111-.092c.097-.087.176-.168.248-.254h6.737a3.35 3.35 0 0 0 .102.118l.034.037c.026.026.051.052.078.077.013.013.027.025.041.038a1.97 1.97 0 0 0 .081.07l.039.032a1.81 1.81 0 0 0 .114.081l1.113.722zm1.491-36.227l-.018 1.463h-7.669a.88.88 0 0 0-.879.879.88.88 0 0 0 .879.879h7.603a62.7 62.7 0 0 1-1.502 10.774l-.141.613c-1.325 5.765-1.915 10.202-1.915 14.388v4.299H37.39v-4.299c0-4.187-.591-8.624-1.915-14.388l-.141-.613a62.6 62.6 0 0 1-1.503-10.774h1.08a.88.88 0 0 0 .879-.879.88.88 0 0 0-.879-.879h-1.146l-.019-1.463v-1.387h12.942v1.387z"></path>
                                </g>
                                <defs>
                                <clipPath id="A">
                                    <path fill="#fff" d="M0 0h60v60H0z"></path>
                                </clipPath>
                                </defs>
                            </svg>
                        </div>
        
                        <h3 class="card-title">Trà lipton xí muội</h3>
        
                        <p class="card-text">
                            Hương vị thơm ngon giúp bổ sung vitamin và chất chống oxy hóa
                        </p>
        
                        <img src="./assets/imgs/nuoc/lipton-ximuoi.png" class="card-banner">
                        <div class="promo-price">
                            <span>Giá:</span> 16.000 đ
                        </div>
                    </div>
                </li>
                <li class="promo-item">
                    <div class="promo-card">
                        <div class="card-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="none" xmlns:v="https://vecta.io/nano">
                                <g clip-path="url(#A)" fill="#bf1e2e">
                                  <path d="M14.837 40.062c0 3.106 2.528 5.634 5.634 5.634s5.634-2.528 5.634-5.634a5.64 5.64 0 0 0-5.634-5.634c-3.106 0-5.634 2.527-5.634 5.634zm5.634-3.876a3.88 3.88 0 0 1 3.876 3.876 3.88 3.88 0 0 1-3.876 3.876 3.88 3.88 0 0 1-3.876-3.876 3.88 3.88 0 0 1 3.876-3.876zm4.22-20.523l-.2-9.292a1.6 1.6 0 0 0 1.089-1.514V1.599A1.6 1.6 0 0 0 23.981 0H16.96a1.6 1.6 0 0 0-1.599 1.599v3.259a1.6 1.6 0 0 0 1.09 1.514l-.201 9.292a10.3 10.3 0 0 1-2.194 6.117c-1.659 2.107-2.573 4.744-2.573 7.426v27.741A3.06 3.06 0 0 0 14.538 60h11.866a3.06 3.06 0 0 0 3.053-3.053v-27.74a12.06 12.06 0 0 0-2.573-7.426 10.3 10.3 0 0 1-2.194-6.117zM17.119 1.758h6.703v2.941h-6.703V1.758zm5.695 8.398h-4.687l.08-3.7h4.527l.08 3.7zM27.7 56.947a1.3 1.3 0 0 1-1.296 1.295H14.538c-.715 0-1.295-.581-1.295-1.295v-7.978H27.7v7.978zm0-25.703h-8.55a.88.88 0 0 0-.879.878.88.88 0 0 0 .879.879h8.55v14.21H13.242v-14.21h1.819a.88.88 0 0 0 .878-.879.88.88 0 0 0-.878-.878h-1.819v-2.037a10.29 10.29 0 0 1 2.196-6.338c1.602-2.034 2.514-4.579 2.57-7.167l.082-3.787h4.762l.081 3.787a12.08 12.08 0 0 0 2.57 7.167 10.29 10.29 0 0 1 2.196 6.338v2.037zm20.876-12.638c0-1.069-.567-2.026-1.438-2.519-.186-1.394-1.338-2.471-2.727-2.471a2.66 2.66 0 0 0-1.289.334 2.61 2.61 0 0 0-.274-.089c-.193-1.385-1.341-2.453-2.724-2.453-.896 0-1.721.456-2.23 1.188l-.226-.01c-1.262 0-2.34.894-2.658 2.119a2.8 2.8 0 0 0-1.113 1.131c-1.179.329-2.037 1.45-2.037 2.78.001.218.047.432.132.631l-.003.052v1.757a64.33 64.33 0 0 0 1.632 14.388l.141.613c1.294 5.63 1.871 9.946 1.871 13.995v4.586a.54.54 0 0 1-.038.201c-.004.008-.01.016-.013.024a.54.54 0 0 1-.196.23l-1.491.966c-.515.334-.822.899-.822 1.512v.625a1.71 1.71 0 0 0 .007.15c.002.026.005.051.008.077.001.007.001.014.002.022.002.015.005.028.008.043l.016.092a1.66 1.66 0 0 0 .034.133c.014.045.028.083.043.122.006.016.011.032.018.048a1.57 1.57 0 0 0 .055.119c.006.012.012.025.018.038a1.67 1.67 0 0 0 .07.119c.006.01.012.021.018.03.025.038.052.073.079.109.009.01.016.022.025.032.025.031.051.059.078.088.013.015.026.029.039.043a1.42 1.42 0 0 0 .07.065c.024.021.04.038.06.055s.037.028.055.042a1.37 1.37 0 0 0 .086.064c.015.01.031.019.046.028.03.019.059.039.091.056a2.17 2.17 0 0 0 .105.054c.023.011.045.022.066.031a1.83 1.83 0 0 0 .08.031 1.92 1.92 0 0 0 .088.031 1.73 1.73 0 0 0 .086.023c.029.008.059.016.085.021a1.58 1.58 0 0 0 .103.017 1.43 1.43 0 0 0 .076.011 1.94 1.94 0 0 0 .101.006 1.18 1.18 0 0 0 .08.003L45.561 60c.031-.001.058-.001.087-.003s.059-.003.088-.006a1.07 1.07 0 0 0 .087-.011c.034-.005.068-.01.098-.016h0c.035-.008.058-.013.078-.019.032-.008.065-.016.098-.027.02-.006.039-.013.059-.021a1.38 1.38 0 0 0 .103-.039c.015-.006.031-.013.045-.02s.026-.014.04-.021a2.01 2.01 0 0 0 .105-.054c.023-.013.046-.027.069-.042a1.93 1.93 0 0 0 .081-.054 1.46 1.46 0 0 0 .075-.056 2.01 2.01 0 0 0 .064-.053 1.78 1.78 0 0 0 .076-.069c.018-.017.035-.036.052-.054.024-.026.049-.052.071-.079.016-.019.031-.039.047-.059.021-.028.043-.054.062-.083s.033-.052.049-.079.031-.049.045-.074a1.77 1.77 0 0 0 .144-.342 1.62 1.62 0 0 0 .036-.14c.006-.029.011-.059.016-.089.002-.016.006-.031.008-.047l.003-.022.008-.075a1.68 1.68 0 0 0 .008-.15v-.624c0-.613-.307-1.178-.821-1.511l-.553-.358-.94-.609c-.035-.027-.083-.076-.132-.151a1.28 1.28 0 0 1-.047-.084c-.041-.081-.069-.163-.069-.22v-4.585c0-4.048.577-8.364 1.871-13.995l.141-.613a64.33 64.33 0 0 0 1.632-14.388V19.3c0-.018-.002-.035-.003-.052a1.63 1.63 0 0 0 .132-.626v-.016zm-14.012-1.108a.88.88 0 0 0 .792-.617c.108-.352.366-.618.688-.712a.88.88 0 0 0 .63-.79c.035-.58.471-1.033.993-1.033a.9.9 0 0 1 .35.071.88.88 0 0 0 1.174-.527c.145-.425.528-.722.932-.722.549 0 .995.498.995 1.109a1.23 1.23 0 0 1-.021.226.88.88 0 0 0 .968 1.036c.222-.026.438.029.625.159a.88.88 0 0 0 1.095-.073c.178-.163.395-.249.626-.249.549 0 .996.498.996 1.109a1.16 1.16 0 0 1-.005.114.88.88 0 0 0 .65.93c.219.058.408.198.544.386h-12.76c.173-.239.432-.398.728-.414h0zm10.634 39.787l.388.251c.006.004.011.01.015.016l.005.021v.619l-.001.013c-.003.011-.006.016-.009.02l-.052.017H34.892l-.02-.001-.022-.006c-.011-.008-.016-.017-.019-.031l-.001-.63c0-.015.007-.029.02-.037l1.491-.967a2.52 2.52 0 0 0 .135-.095l.023-.018a2.11 2.11 0 0 0 .111-.092c.097-.087.176-.168.248-.254h6.737a3.35 3.35 0 0 0 .102.118l.034.037c.026.026.051.052.078.077.013.013.027.025.041.038a1.97 1.97 0 0 0 .081.07l.039.032a1.81 1.81 0 0 0 .114.081l1.113.722zm1.491-36.227l-.018 1.463h-7.669a.88.88 0 0 0-.879.879.88.88 0 0 0 .879.879h7.603a62.7 62.7 0 0 1-1.502 10.774l-.141.613c-1.325 5.765-1.915 10.202-1.915 14.388v4.299H37.39v-4.299c0-4.187-.591-8.624-1.915-14.388l-.141-.613a62.6 62.6 0 0 1-1.503-10.774h1.08a.88.88 0 0 0 .879-.879.88.88 0 0 0-.879-.879h-1.146l-.019-1.463v-1.387h12.942v1.387z"></path>
                                </g>
                                <defs>
                                  <clipPath id="A">
                                    <path fill="#fff" d="M0 0h60v60H0z"></path>
                                  </clipPath>
                                </defs>
                            </svg>
                        </div>
        
                        <h3 class="card-title">Trà ô long dưa lưới</h3>
        
                        <p class="card-text">
                          Hương thơm ngọt nhẹ, kết hợp thêm vị dưa đậm đà và thanh mát.
                        </p>
        
                        <img src="./assets/imgs/nuoc/o-long.png" class="card-banner">
                        <div class="promo-price">
                            <span>Giá:</span> 16.000 đ
                        </div>
                    </div>
                </li>
                <li class="promo-item">
                    <div class="promo-card">
                        <div class="card-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="none" xmlns:v="https://vecta.io/nano">
                                <g clip-path="url(#A)" fill="#bf1e2e">
                                  <path d="M14.837 40.062c0 3.106 2.528 5.634 5.634 5.634s5.634-2.528 5.634-5.634a5.64 5.64 0 0 0-5.634-5.634c-3.106 0-5.634 2.527-5.634 5.634zm5.634-3.876a3.88 3.88 0 0 1 3.876 3.876 3.88 3.88 0 0 1-3.876 3.876 3.88 3.88 0 0 1-3.876-3.876 3.88 3.88 0 0 1 3.876-3.876zm4.22-20.523l-.2-9.292a1.6 1.6 0 0 0 1.089-1.514V1.599A1.6 1.6 0 0 0 23.981 0H16.96a1.6 1.6 0 0 0-1.599 1.599v3.259a1.6 1.6 0 0 0 1.09 1.514l-.201 9.292a10.3 10.3 0 0 1-2.194 6.117c-1.659 2.107-2.573 4.744-2.573 7.426v27.741A3.06 3.06 0 0 0 14.538 60h11.866a3.06 3.06 0 0 0 3.053-3.053v-27.74a12.06 12.06 0 0 0-2.573-7.426 10.3 10.3 0 0 1-2.194-6.117zM17.119 1.758h6.703v2.941h-6.703V1.758zm5.695 8.398h-4.687l.08-3.7h4.527l.08 3.7zM27.7 56.947a1.3 1.3 0 0 1-1.296 1.295H14.538c-.715 0-1.295-.581-1.295-1.295v-7.978H27.7v7.978zm0-25.703h-8.55a.88.88 0 0 0-.879.878.88.88 0 0 0 .879.879h8.55v14.21H13.242v-14.21h1.819a.88.88 0 0 0 .878-.879.88.88 0 0 0-.878-.878h-1.819v-2.037a10.29 10.29 0 0 1 2.196-6.338c1.602-2.034 2.514-4.579 2.57-7.167l.082-3.787h4.762l.081 3.787a12.08 12.08 0 0 0 2.57 7.167 10.29 10.29 0 0 1 2.196 6.338v2.037zm20.876-12.638c0-1.069-.567-2.026-1.438-2.519-.186-1.394-1.338-2.471-2.727-2.471a2.66 2.66 0 0 0-1.289.334 2.61 2.61 0 0 0-.274-.089c-.193-1.385-1.341-2.453-2.724-2.453-.896 0-1.721.456-2.23 1.188l-.226-.01c-1.262 0-2.34.894-2.658 2.119a2.8 2.8 0 0 0-1.113 1.131c-1.179.329-2.037 1.45-2.037 2.78.001.218.047.432.132.631l-.003.052v1.757a64.33 64.33 0 0 0 1.632 14.388l.141.613c1.294 5.63 1.871 9.946 1.871 13.995v4.586a.54.54 0 0 1-.038.201c-.004.008-.01.016-.013.024a.54.54 0 0 1-.196.23l-1.491.966c-.515.334-.822.899-.822 1.512v.625a1.71 1.71 0 0 0 .007.15c.002.026.005.051.008.077.001.007.001.014.002.022.002.015.005.028.008.043l.016.092a1.66 1.66 0 0 0 .034.133c.014.045.028.083.043.122.006.016.011.032.018.048a1.57 1.57 0 0 0 .055.119c.006.012.012.025.018.038a1.67 1.67 0 0 0 .07.119c.006.01.012.021.018.03.025.038.052.073.079.109.009.01.016.022.025.032.025.031.051.059.078.088.013.015.026.029.039.043a1.42 1.42 0 0 0 .07.065c.024.021.04.038.06.055s.037.028.055.042a1.37 1.37 0 0 0 .086.064c.015.01.031.019.046.028.03.019.059.039.091.056a2.17 2.17 0 0 0 .105.054c.023.011.045.022.066.031a1.83 1.83 0 0 0 .08.031 1.92 1.92 0 0 0 .088.031 1.73 1.73 0 0 0 .086.023c.029.008.059.016.085.021a1.58 1.58 0 0 0 .103.017 1.43 1.43 0 0 0 .076.011 1.94 1.94 0 0 0 .101.006 1.18 1.18 0 0 0 .08.003L45.561 60c.031-.001.058-.001.087-.003s.059-.003.088-.006a1.07 1.07 0 0 0 .087-.011c.034-.005.068-.01.098-.016h0c.035-.008.058-.013.078-.019.032-.008.065-.016.098-.027.02-.006.039-.013.059-.021a1.38 1.38 0 0 0 .103-.039c.015-.006.031-.013.045-.02s.026-.014.04-.021a2.01 2.01 0 0 0 .105-.054c.023-.013.046-.027.069-.042a1.93 1.93 0 0 0 .081-.054 1.46 1.46 0 0 0 .075-.056 2.01 2.01 0 0 0 .064-.053 1.78 1.78 0 0 0 .076-.069c.018-.017.035-.036.052-.054.024-.026.049-.052.071-.079.016-.019.031-.039.047-.059.021-.028.043-.054.062-.083s.033-.052.049-.079.031-.049.045-.074a1.77 1.77 0 0 0 .144-.342 1.62 1.62 0 0 0 .036-.14c.006-.029.011-.059.016-.089.002-.016.006-.031.008-.047l.003-.022.008-.075a1.68 1.68 0 0 0 .008-.15v-.624c0-.613-.307-1.178-.821-1.511l-.553-.358-.94-.609c-.035-.027-.083-.076-.132-.151a1.28 1.28 0 0 1-.047-.084c-.041-.081-.069-.163-.069-.22v-4.585c0-4.048.577-8.364 1.871-13.995l.141-.613a64.33 64.33 0 0 0 1.632-14.388V19.3c0-.018-.002-.035-.003-.052a1.63 1.63 0 0 0 .132-.626v-.016zm-14.012-1.108a.88.88 0 0 0 .792-.617c.108-.352.366-.618.688-.712a.88.88 0 0 0 .63-.79c.035-.58.471-1.033.993-1.033a.9.9 0 0 1 .35.071.88.88 0 0 0 1.174-.527c.145-.425.528-.722.932-.722.549 0 .995.498.995 1.109a1.23 1.23 0 0 1-.021.226.88.88 0 0 0 .968 1.036c.222-.026.438.029.625.159a.88.88 0 0 0 1.095-.073c.178-.163.395-.249.626-.249.549 0 .996.498.996 1.109a1.16 1.16 0 0 1-.005.114.88.88 0 0 0 .65.93c.219.058.408.198.544.386h-12.76c.173-.239.432-.398.728-.414h0zm10.634 39.787l.388.251c.006.004.011.01.015.016l.005.021v.619l-.001.013c-.003.011-.006.016-.009.02l-.052.017H34.892l-.02-.001-.022-.006c-.011-.008-.016-.017-.019-.031l-.001-.63c0-.015.007-.029.02-.037l1.491-.967a2.52 2.52 0 0 0 .135-.095l.023-.018a2.11 2.11 0 0 0 .111-.092c.097-.087.176-.168.248-.254h6.737a3.35 3.35 0 0 0 .102.118l.034.037c.026.026.051.052.078.077.013.013.027.025.041.038a1.97 1.97 0 0 0 .081.07l.039.032a1.81 1.81 0 0 0 .114.081l1.113.722zm1.491-36.227l-.018 1.463h-7.669a.88.88 0 0 0-.879.879.88.88 0 0 0 .879.879h7.603a62.7 62.7 0 0 1-1.502 10.774l-.141.613c-1.325 5.765-1.915 10.202-1.915 14.388v4.299H37.39v-4.299c0-4.187-.591-8.624-1.915-14.388l-.141-.613a62.6 62.6 0 0 1-1.503-10.774h1.08a.88.88 0 0 0 .879-.879.88.88 0 0 0-.879-.879h-1.146l-.019-1.463v-1.387h12.942v1.387z"></path>
                                </g>
                                <defs>
                                  <clipPath id="A">
                                    <path fill="#fff" d="M0 0h60v60H0z"></path>
                                  </clipPath>
                                </defs>
                            </svg>
                        </div>
        
                        <h3 class="card-title">Trà đào cam xả</h3>
        
                        <p class="card-text">
                          Hương vị tự nhiên, the mát giúp giải tỏa căng thăng và tăng cường hệ miễn dịch.
                        </p>
        
                        <img src="./assets/imgs/nuoc/tra-dao-cam-xa.png" class="card-banner">
                        <div class="promo-price">
                            <span>Giá:</span> 18.000 đ
                        </div>
                    </div>
                </li>
                <li class="promo-item">
                    <div class="promo-card">
                        <div class="card-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="none" xmlns:v="https://vecta.io/nano">
                                <g clip-path="url(#A)" fill="#bf1e2e">
                                  <path d="M14.837 40.062c0 3.106 2.528 5.634 5.634 5.634s5.634-2.528 5.634-5.634a5.64 5.64 0 0 0-5.634-5.634c-3.106 0-5.634 2.527-5.634 5.634zm5.634-3.876a3.88 3.88 0 0 1 3.876 3.876 3.88 3.88 0 0 1-3.876 3.876 3.88 3.88 0 0 1-3.876-3.876 3.88 3.88 0 0 1 3.876-3.876zm4.22-20.523l-.2-9.292a1.6 1.6 0 0 0 1.089-1.514V1.599A1.6 1.6 0 0 0 23.981 0H16.96a1.6 1.6 0 0 0-1.599 1.599v3.259a1.6 1.6 0 0 0 1.09 1.514l-.201 9.292a10.3 10.3 0 0 1-2.194 6.117c-1.659 2.107-2.573 4.744-2.573 7.426v27.741A3.06 3.06 0 0 0 14.538 60h11.866a3.06 3.06 0 0 0 3.053-3.053v-27.74a12.06 12.06 0 0 0-2.573-7.426 10.3 10.3 0 0 1-2.194-6.117zM17.119 1.758h6.703v2.941h-6.703V1.758zm5.695 8.398h-4.687l.08-3.7h4.527l.08 3.7zM27.7 56.947a1.3 1.3 0 0 1-1.296 1.295H14.538c-.715 0-1.295-.581-1.295-1.295v-7.978H27.7v7.978zm0-25.703h-8.55a.88.88 0 0 0-.879.878.88.88 0 0 0 .879.879h8.55v14.21H13.242v-14.21h1.819a.88.88 0 0 0 .878-.879.88.88 0 0 0-.878-.878h-1.819v-2.037a10.29 10.29 0 0 1 2.196-6.338c1.602-2.034 2.514-4.579 2.57-7.167l.082-3.787h4.762l.081 3.787a12.08 12.08 0 0 0 2.57 7.167 10.29 10.29 0 0 1 2.196 6.338v2.037zm20.876-12.638c0-1.069-.567-2.026-1.438-2.519-.186-1.394-1.338-2.471-2.727-2.471a2.66 2.66 0 0 0-1.289.334 2.61 2.61 0 0 0-.274-.089c-.193-1.385-1.341-2.453-2.724-2.453-.896 0-1.721.456-2.23 1.188l-.226-.01c-1.262 0-2.34.894-2.658 2.119a2.8 2.8 0 0 0-1.113 1.131c-1.179.329-2.037 1.45-2.037 2.78.001.218.047.432.132.631l-.003.052v1.757a64.33 64.33 0 0 0 1.632 14.388l.141.613c1.294 5.63 1.871 9.946 1.871 13.995v4.586a.54.54 0 0 1-.038.201c-.004.008-.01.016-.013.024a.54.54 0 0 1-.196.23l-1.491.966c-.515.334-.822.899-.822 1.512v.625a1.71 1.71 0 0 0 .007.15c.002.026.005.051.008.077.001.007.001.014.002.022.002.015.005.028.008.043l.016.092a1.66 1.66 0 0 0 .034.133c.014.045.028.083.043.122.006.016.011.032.018.048a1.57 1.57 0 0 0 .055.119c.006.012.012.025.018.038a1.67 1.67 0 0 0 .07.119c.006.01.012.021.018.03.025.038.052.073.079.109.009.01.016.022.025.032.025.031.051.059.078.088.013.015.026.029.039.043a1.42 1.42 0 0 0 .07.065c.024.021.04.038.06.055s.037.028.055.042a1.37 1.37 0 0 0 .086.064c.015.01.031.019.046.028.03.019.059.039.091.056a2.17 2.17 0 0 0 .105.054c.023.011.045.022.066.031a1.83 1.83 0 0 0 .08.031 1.92 1.92 0 0 0 .088.031 1.73 1.73 0 0 0 .086.023c.029.008.059.016.085.021a1.58 1.58 0 0 0 .103.017 1.43 1.43 0 0 0 .076.011 1.94 1.94 0 0 0 .101.006 1.18 1.18 0 0 0 .08.003L45.561 60c.031-.001.058-.001.087-.003s.059-.003.088-.006a1.07 1.07 0 0 0 .087-.011c.034-.005.068-.01.098-.016h0c.035-.008.058-.013.078-.019.032-.008.065-.016.098-.027.02-.006.039-.013.059-.021a1.38 1.38 0 0 0 .103-.039c.015-.006.031-.013.045-.02s.026-.014.04-.021a2.01 2.01 0 0 0 .105-.054c.023-.013.046-.027.069-.042a1.93 1.93 0 0 0 .081-.054 1.46 1.46 0 0 0 .075-.056 2.01 2.01 0 0 0 .064-.053 1.78 1.78 0 0 0 .076-.069c.018-.017.035-.036.052-.054.024-.026.049-.052.071-.079.016-.019.031-.039.047-.059.021-.028.043-.054.062-.083s.033-.052.049-.079.031-.049.045-.074a1.77 1.77 0 0 0 .144-.342 1.62 1.62 0 0 0 .036-.14c.006-.029.011-.059.016-.089.002-.016.006-.031.008-.047l.003-.022.008-.075a1.68 1.68 0 0 0 .008-.15v-.624c0-.613-.307-1.178-.821-1.511l-.553-.358-.94-.609c-.035-.027-.083-.076-.132-.151a1.28 1.28 0 0 1-.047-.084c-.041-.081-.069-.163-.069-.22v-4.585c0-4.048.577-8.364 1.871-13.995l.141-.613a64.33 64.33 0 0 0 1.632-14.388V19.3c0-.018-.002-.035-.003-.052a1.63 1.63 0 0 0 .132-.626v-.016zm-14.012-1.108a.88.88 0 0 0 .792-.617c.108-.352.366-.618.688-.712a.88.88 0 0 0 .63-.79c.035-.58.471-1.033.993-1.033a.9.9 0 0 1 .35.071.88.88 0 0 0 1.174-.527c.145-.425.528-.722.932-.722.549 0 .995.498.995 1.109a1.23 1.23 0 0 1-.021.226.88.88 0 0 0 .968 1.036c.222-.026.438.029.625.159a.88.88 0 0 0 1.095-.073c.178-.163.395-.249.626-.249.549 0 .996.498.996 1.109a1.16 1.16 0 0 1-.005.114.88.88 0 0 0 .65.93c.219.058.408.198.544.386h-12.76c.173-.239.432-.398.728-.414h0zm10.634 39.787l.388.251c.006.004.011.01.015.016l.005.021v.619l-.001.013c-.003.011-.006.016-.009.02l-.052.017H34.892l-.02-.001-.022-.006c-.011-.008-.016-.017-.019-.031l-.001-.63c0-.015.007-.029.02-.037l1.491-.967a2.52 2.52 0 0 0 .135-.095l.023-.018a2.11 2.11 0 0 0 .111-.092c.097-.087.176-.168.248-.254h6.737a3.35 3.35 0 0 0 .102.118l.034.037c.026.026.051.052.078.077.013.013.027.025.041.038a1.97 1.97 0 0 0 .081.07l.039.032a1.81 1.81 0 0 0 .114.081l1.113.722zm1.491-36.227l-.018 1.463h-7.669a.88.88 0 0 0-.879.879.88.88 0 0 0 .879.879h7.603a62.7 62.7 0 0 1-1.502 10.774l-.141.613c-1.325 5.765-1.915 10.202-1.915 14.388v4.299H37.39v-4.299c0-4.187-.591-8.624-1.915-14.388l-.141-.613a62.6 62.6 0 0 1-1.503-10.774h1.08a.88.88 0 0 0 .879-.879.88.88 0 0 0-.879-.879h-1.146l-.019-1.463v-1.387h12.942v1.387z"></path>
                                </g>
                                <defs>
                                  <clipPath id="A">
                                    <path fill="#fff" d="M0 0h60v60H0z"></path>
                                  </clipPath>
                                </defs>
                            </svg>
                        </div>
        
                        <h3 class="card-title">Trà tứ quý ngọc trai</h3>
        
                        <p class="card-text">
                          Hương vị độc lạ, quyến rũ mang đến cảm giác lan tỏa, thanh mát khi thưởng thức.
                        </p>
        
                        <img src="./assets/imgs/nuoc/tra-tu-quy.png" class="card-banner">
                        <div class="promo-price">
                            <span>Giá:</span> 16.000 đ
                        </div>
                    </div>
                </li>
                <li class="promo-item">
                    <div class="promo-card">
                        <div class="card-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="none" xmlns:v="https://vecta.io/nano">
                                <g clip-path="url(#A)" fill="#bf1e2e">
                                  <path d="M14.837 40.062c0 3.106 2.528 5.634 5.634 5.634s5.634-2.528 5.634-5.634a5.64 5.64 0 0 0-5.634-5.634c-3.106 0-5.634 2.527-5.634 5.634zm5.634-3.876a3.88 3.88 0 0 1 3.876 3.876 3.88 3.88 0 0 1-3.876 3.876 3.88 3.88 0 0 1-3.876-3.876 3.88 3.88 0 0 1 3.876-3.876zm4.22-20.523l-.2-9.292a1.6 1.6 0 0 0 1.089-1.514V1.599A1.6 1.6 0 0 0 23.981 0H16.96a1.6 1.6 0 0 0-1.599 1.599v3.259a1.6 1.6 0 0 0 1.09 1.514l-.201 9.292a10.3 10.3 0 0 1-2.194 6.117c-1.659 2.107-2.573 4.744-2.573 7.426v27.741A3.06 3.06 0 0 0 14.538 60h11.866a3.06 3.06 0 0 0 3.053-3.053v-27.74a12.06 12.06 0 0 0-2.573-7.426 10.3 10.3 0 0 1-2.194-6.117zM17.119 1.758h6.703v2.941h-6.703V1.758zm5.695 8.398h-4.687l.08-3.7h4.527l.08 3.7zM27.7 56.947a1.3 1.3 0 0 1-1.296 1.295H14.538c-.715 0-1.295-.581-1.295-1.295v-7.978H27.7v7.978zm0-25.703h-8.55a.88.88 0 0 0-.879.878.88.88 0 0 0 .879.879h8.55v14.21H13.242v-14.21h1.819a.88.88 0 0 0 .878-.879.88.88 0 0 0-.878-.878h-1.819v-2.037a10.29 10.29 0 0 1 2.196-6.338c1.602-2.034 2.514-4.579 2.57-7.167l.082-3.787h4.762l.081 3.787a12.08 12.08 0 0 0 2.57 7.167 10.29 10.29 0 0 1 2.196 6.338v2.037zm20.876-12.638c0-1.069-.567-2.026-1.438-2.519-.186-1.394-1.338-2.471-2.727-2.471a2.66 2.66 0 0 0-1.289.334 2.61 2.61 0 0 0-.274-.089c-.193-1.385-1.341-2.453-2.724-2.453-.896 0-1.721.456-2.23 1.188l-.226-.01c-1.262 0-2.34.894-2.658 2.119a2.8 2.8 0 0 0-1.113 1.131c-1.179.329-2.037 1.45-2.037 2.78.001.218.047.432.132.631l-.003.052v1.757a64.33 64.33 0 0 0 1.632 14.388l.141.613c1.294 5.63 1.871 9.946 1.871 13.995v4.586a.54.54 0 0 1-.038.201c-.004.008-.01.016-.013.024a.54.54 0 0 1-.196.23l-1.491.966c-.515.334-.822.899-.822 1.512v.625a1.71 1.71 0 0 0 .007.15c.002.026.005.051.008.077.001.007.001.014.002.022.002.015.005.028.008.043l.016.092a1.66 1.66 0 0 0 .034.133c.014.045.028.083.043.122.006.016.011.032.018.048a1.57 1.57 0 0 0 .055.119c.006.012.012.025.018.038a1.67 1.67 0 0 0 .07.119c.006.01.012.021.018.03.025.038.052.073.079.109.009.01.016.022.025.032.025.031.051.059.078.088.013.015.026.029.039.043a1.42 1.42 0 0 0 .07.065c.024.021.04.038.06.055s.037.028.055.042a1.37 1.37 0 0 0 .086.064c.015.01.031.019.046.028.03.019.059.039.091.056a2.17 2.17 0 0 0 .105.054c.023.011.045.022.066.031a1.83 1.83 0 0 0 .08.031 1.92 1.92 0 0 0 .088.031 1.73 1.73 0 0 0 .086.023c.029.008.059.016.085.021a1.58 1.58 0 0 0 .103.017 1.43 1.43 0 0 0 .076.011 1.94 1.94 0 0 0 .101.006 1.18 1.18 0 0 0 .08.003L45.561 60c.031-.001.058-.001.087-.003s.059-.003.088-.006a1.07 1.07 0 0 0 .087-.011c.034-.005.068-.01.098-.016h0c.035-.008.058-.013.078-.019.032-.008.065-.016.098-.027.02-.006.039-.013.059-.021a1.38 1.38 0 0 0 .103-.039c.015-.006.031-.013.045-.02s.026-.014.04-.021a2.01 2.01 0 0 0 .105-.054c.023-.013.046-.027.069-.042a1.93 1.93 0 0 0 .081-.054 1.46 1.46 0 0 0 .075-.056 2.01 2.01 0 0 0 .064-.053 1.78 1.78 0 0 0 .076-.069c.018-.017.035-.036.052-.054.024-.026.049-.052.071-.079.016-.019.031-.039.047-.059.021-.028.043-.054.062-.083s.033-.052.049-.079.031-.049.045-.074a1.77 1.77 0 0 0 .144-.342 1.62 1.62 0 0 0 .036-.14c.006-.029.011-.059.016-.089.002-.016.006-.031.008-.047l.003-.022.008-.075a1.68 1.68 0 0 0 .008-.15v-.624c0-.613-.307-1.178-.821-1.511l-.553-.358-.94-.609c-.035-.027-.083-.076-.132-.151a1.28 1.28 0 0 1-.047-.084c-.041-.081-.069-.163-.069-.22v-4.585c0-4.048.577-8.364 1.871-13.995l.141-.613a64.33 64.33 0 0 0 1.632-14.388V19.3c0-.018-.002-.035-.003-.052a1.63 1.63 0 0 0 .132-.626v-.016zm-14.012-1.108a.88.88 0 0 0 .792-.617c.108-.352.366-.618.688-.712a.88.88 0 0 0 .63-.79c.035-.58.471-1.033.993-1.033a.9.9 0 0 1 .35.071.88.88 0 0 0 1.174-.527c.145-.425.528-.722.932-.722.549 0 .995.498.995 1.109a1.23 1.23 0 0 1-.021.226.88.88 0 0 0 .968 1.036c.222-.026.438.029.625.159a.88.88 0 0 0 1.095-.073c.178-.163.395-.249.626-.249.549 0 .996.498.996 1.109a1.16 1.16 0 0 1-.005.114.88.88 0 0 0 .65.93c.219.058.408.198.544.386h-12.76c.173-.239.432-.398.728-.414h0zm10.634 39.787l.388.251c.006.004.011.01.015.016l.005.021v.619l-.001.013c-.003.011-.006.016-.009.02l-.052.017H34.892l-.02-.001-.022-.006c-.011-.008-.016-.017-.019-.031l-.001-.63c0-.015.007-.029.02-.037l1.491-.967a2.52 2.52 0 0 0 .135-.095l.023-.018a2.11 2.11 0 0 0 .111-.092c.097-.087.176-.168.248-.254h6.737a3.35 3.35 0 0 0 .102.118l.034.037c.026.026.051.052.078.077.013.013.027.025.041.038a1.97 1.97 0 0 0 .081.07l.039.032a1.81 1.81 0 0 0 .114.081l1.113.722zm1.491-36.227l-.018 1.463h-7.669a.88.88 0 0 0-.879.879.88.88 0 0 0 .879.879h7.603a62.7 62.7 0 0 1-1.502 10.774l-.141.613c-1.325 5.765-1.915 10.202-1.915 14.388v4.299H37.39v-4.299c0-4.187-.591-8.624-1.915-14.388l-.141-.613a62.6 62.6 0 0 1-1.503-10.774h1.08a.88.88 0 0 0 .879-.879.88.88 0 0 0-.879-.879h-1.146l-.019-1.463v-1.387h12.942v1.387z"></path>
                                </g>
                                <defs>
                                  <clipPath id="A">
                                    <path fill="#fff" d="M0 0h60v60H0z"></path>
                                  </clipPath>
                                </defs>
                            </svg>
                        </div>
        
                        <h3 class="card-title">Trà vải</h3>
        
                        <p class="card-text">
                          Hương vị đặc trưng, tươi mát mang lại cảm giác thư giãn và sảng khoái.
                        </p>
        
                        <img src="./assets/imgs/nuoc/tra-vai.png" class="card-banner">
                        <div class="promo-price">
                            <span>Giá:</span> 18.000 đ
                        </div>
                    </div>
                </li>
                <li class="promo-item">
                    <div class="promo-card">
                        <div class="card-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="none" xmlns:v="https://vecta.io/nano">
                                <g clip-path="url(#A)" fill="#bf1e2e">
                                  <path d="M14.837 40.062c0 3.106 2.528 5.634 5.634 5.634s5.634-2.528 5.634-5.634a5.64 5.64 0 0 0-5.634-5.634c-3.106 0-5.634 2.527-5.634 5.634zm5.634-3.876a3.88 3.88 0 0 1 3.876 3.876 3.88 3.88 0 0 1-3.876 3.876 3.88 3.88 0 0 1-3.876-3.876 3.88 3.88 0 0 1 3.876-3.876zm4.22-20.523l-.2-9.292a1.6 1.6 0 0 0 1.089-1.514V1.599A1.6 1.6 0 0 0 23.981 0H16.96a1.6 1.6 0 0 0-1.599 1.599v3.259a1.6 1.6 0 0 0 1.09 1.514l-.201 9.292a10.3 10.3 0 0 1-2.194 6.117c-1.659 2.107-2.573 4.744-2.573 7.426v27.741A3.06 3.06 0 0 0 14.538 60h11.866a3.06 3.06 0 0 0 3.053-3.053v-27.74a12.06 12.06 0 0 0-2.573-7.426 10.3 10.3 0 0 1-2.194-6.117zM17.119 1.758h6.703v2.941h-6.703V1.758zm5.695 8.398h-4.687l.08-3.7h4.527l.08 3.7zM27.7 56.947a1.3 1.3 0 0 1-1.296 1.295H14.538c-.715 0-1.295-.581-1.295-1.295v-7.978H27.7v7.978zm0-25.703h-8.55a.88.88 0 0 0-.879.878.88.88 0 0 0 .879.879h8.55v14.21H13.242v-14.21h1.819a.88.88 0 0 0 .878-.879.88.88 0 0 0-.878-.878h-1.819v-2.037a10.29 10.29 0 0 1 2.196-6.338c1.602-2.034 2.514-4.579 2.57-7.167l.082-3.787h4.762l.081 3.787a12.08 12.08 0 0 0 2.57 7.167 10.29 10.29 0 0 1 2.196 6.338v2.037zm20.876-12.638c0-1.069-.567-2.026-1.438-2.519-.186-1.394-1.338-2.471-2.727-2.471a2.66 2.66 0 0 0-1.289.334 2.61 2.61 0 0 0-.274-.089c-.193-1.385-1.341-2.453-2.724-2.453-.896 0-1.721.456-2.23 1.188l-.226-.01c-1.262 0-2.34.894-2.658 2.119a2.8 2.8 0 0 0-1.113 1.131c-1.179.329-2.037 1.45-2.037 2.78.001.218.047.432.132.631l-.003.052v1.757a64.33 64.33 0 0 0 1.632 14.388l.141.613c1.294 5.63 1.871 9.946 1.871 13.995v4.586a.54.54 0 0 1-.038.201c-.004.008-.01.016-.013.024a.54.54 0 0 1-.196.23l-1.491.966c-.515.334-.822.899-.822 1.512v.625a1.71 1.71 0 0 0 .007.15c.002.026.005.051.008.077.001.007.001.014.002.022.002.015.005.028.008.043l.016.092a1.66 1.66 0 0 0 .034.133c.014.045.028.083.043.122.006.016.011.032.018.048a1.57 1.57 0 0 0 .055.119c.006.012.012.025.018.038a1.67 1.67 0 0 0 .07.119c.006.01.012.021.018.03.025.038.052.073.079.109.009.01.016.022.025.032.025.031.051.059.078.088.013.015.026.029.039.043a1.42 1.42 0 0 0 .07.065c.024.021.04.038.06.055s.037.028.055.042a1.37 1.37 0 0 0 .086.064c.015.01.031.019.046.028.03.019.059.039.091.056a2.17 2.17 0 0 0 .105.054c.023.011.045.022.066.031a1.83 1.83 0 0 0 .08.031 1.92 1.92 0 0 0 .088.031 1.73 1.73 0 0 0 .086.023c.029.008.059.016.085.021a1.58 1.58 0 0 0 .103.017 1.43 1.43 0 0 0 .076.011 1.94 1.94 0 0 0 .101.006 1.18 1.18 0 0 0 .08.003L45.561 60c.031-.001.058-.001.087-.003s.059-.003.088-.006a1.07 1.07 0 0 0 .087-.011c.034-.005.068-.01.098-.016h0c.035-.008.058-.013.078-.019.032-.008.065-.016.098-.027.02-.006.039-.013.059-.021a1.38 1.38 0 0 0 .103-.039c.015-.006.031-.013.045-.02s.026-.014.04-.021a2.01 2.01 0 0 0 .105-.054c.023-.013.046-.027.069-.042a1.93 1.93 0 0 0 .081-.054 1.46 1.46 0 0 0 .075-.056 2.01 2.01 0 0 0 .064-.053 1.78 1.78 0 0 0 .076-.069c.018-.017.035-.036.052-.054.024-.026.049-.052.071-.079.016-.019.031-.039.047-.059.021-.028.043-.054.062-.083s.033-.052.049-.079.031-.049.045-.074a1.77 1.77 0 0 0 .144-.342 1.62 1.62 0 0 0 .036-.14c.006-.029.011-.059.016-.089.002-.016.006-.031.008-.047l.003-.022.008-.075a1.68 1.68 0 0 0 .008-.15v-.624c0-.613-.307-1.178-.821-1.511l-.553-.358-.94-.609c-.035-.027-.083-.076-.132-.151a1.28 1.28 0 0 1-.047-.084c-.041-.081-.069-.163-.069-.22v-4.585c0-4.048.577-8.364 1.871-13.995l.141-.613a64.33 64.33 0 0 0 1.632-14.388V19.3c0-.018-.002-.035-.003-.052a1.63 1.63 0 0 0 .132-.626v-.016zm-14.012-1.108a.88.88 0 0 0 .792-.617c.108-.352.366-.618.688-.712a.88.88 0 0 0 .63-.79c.035-.58.471-1.033.993-1.033a.9.9 0 0 1 .35.071.88.88 0 0 0 1.174-.527c.145-.425.528-.722.932-.722.549 0 .995.498.995 1.109a1.23 1.23 0 0 1-.021.226.88.88 0 0 0 .968 1.036c.222-.026.438.029.625.159a.88.88 0 0 0 1.095-.073c.178-.163.395-.249.626-.249.549 0 .996.498.996 1.109a1.16 1.16 0 0 1-.005.114.88.88 0 0 0 .65.93c.219.058.408.198.544.386h-12.76c.173-.239.432-.398.728-.414h0zm10.634 39.787l.388.251c.006.004.011.01.015.016l.005.021v.619l-.001.013c-.003.011-.006.016-.009.02l-.052.017H34.892l-.02-.001-.022-.006c-.011-.008-.016-.017-.019-.031l-.001-.63c0-.015.007-.029.02-.037l1.491-.967a2.52 2.52 0 0 0 .135-.095l.023-.018a2.11 2.11 0 0 0 .111-.092c.097-.087.176-.168.248-.254h6.737a3.35 3.35 0 0 0 .102.118l.034.037c.026.026.051.052.078.077.013.013.027.025.041.038a1.97 1.97 0 0 0 .081.07l.039.032a1.81 1.81 0 0 0 .114.081l1.113.722zm1.491-36.227l-.018 1.463h-7.669a.88.88 0 0 0-.879.879.88.88 0 0 0 .879.879h7.603a62.7 62.7 0 0 1-1.502 10.774l-.141.613c-1.325 5.765-1.915 10.202-1.915 14.388v4.299H37.39v-4.299c0-4.187-.591-8.624-1.915-14.388l-.141-.613a62.6 62.6 0 0 1-1.503-10.774h1.08a.88.88 0 0 0 .879-.879.88.88 0 0 0-.879-.879h-1.146l-.019-1.463v-1.387h12.942v1.387z"></path>
                                </g>
                                <defs>
                                  <clipPath id="A">
                                    <path fill="#fff" d="M0 0h60v60H0z"></path>
                                  </clipPath>
                                </defs>
                            </svg>
                        </div>
        
                        <h3 class="card-title">Cà phê đá</h3>
        
                        <p class="card-text">
                          Quy trình pha chế độc đáo, tạo nên một ly cà phê thơm ngon tuyệt với.
                        </p>
        
                        <img src="./assets/imgs/nuoc/ca-phe-den.png" class="card-banner">
                        <div class="promo-price">
                            <span>Giá:</span> 12.000 đ
                        </div>
                    </div>
                </li>
                <li class="promo-item">
                    <div class="promo-card">
                        <div class="card-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="none" xmlns:v="https://vecta.io/nano">
                                <g clip-path="url(#A)" fill="#bf1e2e">
                                  <path d="M14.837 40.062c0 3.106 2.528 5.634 5.634 5.634s5.634-2.528 5.634-5.634a5.64 5.64 0 0 0-5.634-5.634c-3.106 0-5.634 2.527-5.634 5.634zm5.634-3.876a3.88 3.88 0 0 1 3.876 3.876 3.88 3.88 0 0 1-3.876 3.876 3.88 3.88 0 0 1-3.876-3.876 3.88 3.88 0 0 1 3.876-3.876zm4.22-20.523l-.2-9.292a1.6 1.6 0 0 0 1.089-1.514V1.599A1.6 1.6 0 0 0 23.981 0H16.96a1.6 1.6 0 0 0-1.599 1.599v3.259a1.6 1.6 0 0 0 1.09 1.514l-.201 9.292a10.3 10.3 0 0 1-2.194 6.117c-1.659 2.107-2.573 4.744-2.573 7.426v27.741A3.06 3.06 0 0 0 14.538 60h11.866a3.06 3.06 0 0 0 3.053-3.053v-27.74a12.06 12.06 0 0 0-2.573-7.426 10.3 10.3 0 0 1-2.194-6.117zM17.119 1.758h6.703v2.941h-6.703V1.758zm5.695 8.398h-4.687l.08-3.7h4.527l.08 3.7zM27.7 56.947a1.3 1.3 0 0 1-1.296 1.295H14.538c-.715 0-1.295-.581-1.295-1.295v-7.978H27.7v7.978zm0-25.703h-8.55a.88.88 0 0 0-.879.878.88.88 0 0 0 .879.879h8.55v14.21H13.242v-14.21h1.819a.88.88 0 0 0 .878-.879.88.88 0 0 0-.878-.878h-1.819v-2.037a10.29 10.29 0 0 1 2.196-6.338c1.602-2.034 2.514-4.579 2.57-7.167l.082-3.787h4.762l.081 3.787a12.08 12.08 0 0 0 2.57 7.167 10.29 10.29 0 0 1 2.196 6.338v2.037zm20.876-12.638c0-1.069-.567-2.026-1.438-2.519-.186-1.394-1.338-2.471-2.727-2.471a2.66 2.66 0 0 0-1.289.334 2.61 2.61 0 0 0-.274-.089c-.193-1.385-1.341-2.453-2.724-2.453-.896 0-1.721.456-2.23 1.188l-.226-.01c-1.262 0-2.34.894-2.658 2.119a2.8 2.8 0 0 0-1.113 1.131c-1.179.329-2.037 1.45-2.037 2.78.001.218.047.432.132.631l-.003.052v1.757a64.33 64.33 0 0 0 1.632 14.388l.141.613c1.294 5.63 1.871 9.946 1.871 13.995v4.586a.54.54 0 0 1-.038.201c-.004.008-.01.016-.013.024a.54.54 0 0 1-.196.23l-1.491.966c-.515.334-.822.899-.822 1.512v.625a1.71 1.71 0 0 0 .007.15c.002.026.005.051.008.077.001.007.001.014.002.022.002.015.005.028.008.043l.016.092a1.66 1.66 0 0 0 .034.133c.014.045.028.083.043.122.006.016.011.032.018.048a1.57 1.57 0 0 0 .055.119c.006.012.012.025.018.038a1.67 1.67 0 0 0 .07.119c.006.01.012.021.018.03.025.038.052.073.079.109.009.01.016.022.025.032.025.031.051.059.078.088.013.015.026.029.039.043a1.42 1.42 0 0 0 .07.065c.024.021.04.038.06.055s.037.028.055.042a1.37 1.37 0 0 0 .086.064c.015.01.031.019.046.028.03.019.059.039.091.056a2.17 2.17 0 0 0 .105.054c.023.011.045.022.066.031a1.83 1.83 0 0 0 .08.031 1.92 1.92 0 0 0 .088.031 1.73 1.73 0 0 0 .086.023c.029.008.059.016.085.021a1.58 1.58 0 0 0 .103.017 1.43 1.43 0 0 0 .076.011 1.94 1.94 0 0 0 .101.006 1.18 1.18 0 0 0 .08.003L45.561 60c.031-.001.058-.001.087-.003s.059-.003.088-.006a1.07 1.07 0 0 0 .087-.011c.034-.005.068-.01.098-.016h0c.035-.008.058-.013.078-.019.032-.008.065-.016.098-.027.02-.006.039-.013.059-.021a1.38 1.38 0 0 0 .103-.039c.015-.006.031-.013.045-.02s.026-.014.04-.021a2.01 2.01 0 0 0 .105-.054c.023-.013.046-.027.069-.042a1.93 1.93 0 0 0 .081-.054 1.46 1.46 0 0 0 .075-.056 2.01 2.01 0 0 0 .064-.053 1.78 1.78 0 0 0 .076-.069c.018-.017.035-.036.052-.054.024-.026.049-.052.071-.079.016-.019.031-.039.047-.059.021-.028.043-.054.062-.083s.033-.052.049-.079.031-.049.045-.074a1.77 1.77 0 0 0 .144-.342 1.62 1.62 0 0 0 .036-.14c.006-.029.011-.059.016-.089.002-.016.006-.031.008-.047l.003-.022.008-.075a1.68 1.68 0 0 0 .008-.15v-.624c0-.613-.307-1.178-.821-1.511l-.553-.358-.94-.609c-.035-.027-.083-.076-.132-.151a1.28 1.28 0 0 1-.047-.084c-.041-.081-.069-.163-.069-.22v-4.585c0-4.048.577-8.364 1.871-13.995l.141-.613a64.33 64.33 0 0 0 1.632-14.388V19.3c0-.018-.002-.035-.003-.052a1.63 1.63 0 0 0 .132-.626v-.016zm-14.012-1.108a.88.88 0 0 0 .792-.617c.108-.352.366-.618.688-.712a.88.88 0 0 0 .63-.79c.035-.58.471-1.033.993-1.033a.9.9 0 0 1 .35.071.88.88 0 0 0 1.174-.527c.145-.425.528-.722.932-.722.549 0 .995.498.995 1.109a1.23 1.23 0 0 1-.021.226.88.88 0 0 0 .968 1.036c.222-.026.438.029.625.159a.88.88 0 0 0 1.095-.073c.178-.163.395-.249.626-.249.549 0 .996.498.996 1.109a1.16 1.16 0 0 1-.005.114.88.88 0 0 0 .65.93c.219.058.408.198.544.386h-12.76c.173-.239.432-.398.728-.414h0zm10.634 39.787l.388.251c.006.004.011.01.015.016l.005.021v.619l-.001.013c-.003.011-.006.016-.009.02l-.052.017H34.892l-.02-.001-.022-.006c-.011-.008-.016-.017-.019-.031l-.001-.63c0-.015.007-.029.02-.037l1.491-.967a2.52 2.52 0 0 0 .135-.095l.023-.018a2.11 2.11 0 0 0 .111-.092c.097-.087.176-.168.248-.254h6.737a3.35 3.35 0 0 0 .102.118l.034.037c.026.026.051.052.078.077.013.013.027.025.041.038a1.97 1.97 0 0 0 .081.07l.039.032a1.81 1.81 0 0 0 .114.081l1.113.722zm1.491-36.227l-.018 1.463h-7.669a.88.88 0 0 0-.879.879.88.88 0 0 0 .879.879h7.603a62.7 62.7 0 0 1-1.502 10.774l-.141.613c-1.325 5.765-1.915 10.202-1.915 14.388v4.299H37.39v-4.299c0-4.187-.591-8.624-1.915-14.388l-.141-.613a62.6 62.6 0 0 1-1.503-10.774h1.08a.88.88 0 0 0 .879-.879.88.88 0 0 0-.879-.879h-1.146l-.019-1.463v-1.387h12.942v1.387z"></path>
                                </g>
                                <defs>
                                  <clipPath id="A">
                                    <path fill="#fff" d="M0 0h60v60H0z"></path>
                                  </clipPath>
                                </defs>
                            </svg>
                        </div>
        
                        <h3 class="card-title">Cà phê sữa</h3>
        
                        <p class="card-text">
                            Quy trình pha chế độc đáo, tạo nên một ly cà phê thơm ngon tuyệt với.
                        </p>
        
                        <img src="./assets/imgs/nuoc/ca-phe-sua.png" class="card-banner">
                        <div class="promo-price">
                            <span>Giá:</span> 15.000 đ
                        </div>
                    </div>
                </li>
            </ul>
        </div>


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
</div>
@endsection