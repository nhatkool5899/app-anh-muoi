<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anh Mười Food</title>

    <!-- Link cdn -->

    <!-- Slick css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.4/font/bootstrap-icons.min.css" integrity="sha512-yU7+yXTc4VUanLSjkZq+buQN3afNA4j2ap/mxvdr440P5aW9np9vIr2JMZ2E5DuYeC9bAoH9CuCR7SJlXAa4pg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- Link custom css -->
    <link rel="stylesheet" href="{{asset('front-end/assets/css/flipdown.css')}}">
    <link rel="stylesheet" href="{{asset('front-end/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('front-end/assets/css/base.css')}}">
    <link rel="stylesheet" href="{{asset('front-end/assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('front-end/assets/css/responsive.css')}}">
</head>
<body>
    
    <div class="app">
        <header>
            <div class="header">
                <div class="container">
                    <div class="header__body">
                        <div class="mobile__menu">
                            <span class="mobile__menu-icon"><i class="bi bi-list"></i></span>
                            <div class="modal__menu">
                                <span class="close__menu-mobile"><i class="bi bi-x"></i></span>
                                <div class="mobile__nav">
                                    <div class="menu__nav-mobile">
                                        <a href="./index.html">Trang chủ</a>
                                    </div>
                                    <div class="menu__nav-mobile">
                                        <a href="./gioi-thieu.html">Giới thiệu</a>
                                    </div>
                                    <div class="menu__nav-mobile">
                                        <a href="./khuyen-mai.html">Khuyến mãi</a>
                                    </div>
                                    <div class="menu__nav-mobile">
                                        <a href="./thuc-don.html">Thực đơn</a>
                                    </div>
                                    <div class="menu__nav-mobile">
                                        <a href="./lien-he.html">Liên hệ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="logo">
                            <a href="#" class="link__logo">
                                <img src="./assets/imgs/logo.jpg" alt="">
                            </a>
                            <span class="logo__text">Anh mười Food<span>.</span></span>
                        </div>
                        <div class="navigation">
                            <div class="menu__nav">
                                <a href="./index.html">Trang chủ</a>
                            </div>
                            <div class="menu__nav">
                                <a href="./gioi-thieu.html">Giới thiệu</a>
                            </div>
                            <div class="menu__nav">
                                <a href="./khuyen-mai.html">Khuyến mãi</a>
                            </div>
                            <div class="menu__nav">
                                <a href="./thuc-don.html">Thực đơn</a>
                            </div>
                            <div class="menu__nav">
                                <a href="./lien-he.html">Liên hệ</a>
                            </div>
                        </div>
                        <div class="box__search">
                            <span href="#" class="btn__search">
                                <i class="bi bi-search"></i>
                            </span>
                            <div class="booking">
                                <a href="tel:09080775" class="booking__link">Giỏ hàng</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section>

            @yield('banner')
            
        </section>

        <main>
            
            @yield('content')

        </main>
        <footer>
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="ft-logo">
                                <a href="#">
                                    <img src="./assets/imgs/logo.jpg" alt="">
                                </a>
                                <span class="logo__text">Anh mười Food<span>.</span></span>
                            </div>
                            <div class="ft-about">
                                Financial experts support or help you to to find out which way you can raise your funds more.
                            </div>
                            <ul class="ft-social">
                                <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                                <li><a href="#"><i class="bi bi-twitter"></i></a></li>
                                <li><a href="#"><i class="bi bi-instagram"></i></a></li>
                                <li><a href="#"><i class="bi bi-tiktok"></i></a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3">
                            <div class="ft-title">Thông tin liên hệ</div>
                            <p class="ft-paragraph">+1 (062) 109-9222</p>
                            <p class="ft-paragraph">Info@YourGmail24.com</p>
                            <p class="ft-paragraph">153 Williamson Plaza, Maggieberg, MT 09514</p>
                        </div>
                        <div class="col-lg-3">
                            <div class="ft-title">Giờ mở cửa</div>
                            <p class="ft-paragraph">Thứ 2 - Thứ 6: <span>08:00-21:00</span></p>
                            <p class="ft-paragraph">Thứ 7 - CN: <span>08:00-20:00</span></p>
                            <p class="ft-paragraph">Thời gian giao hàng: <span>08:00-20:00</span></p>
                        </div>
                        <div class="col-lg-3">
                            <div class="ft-title">Đặt hàng ngay</div>
                            <div class="ft-order">
                                <a href="#">
                                    <img src="./assets/imgs/grab-food.png" alt="">
                                </a>
                                <a href="#">
                                    <img src="./assets/imgs/now-food.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">© 2023 design24, <a href="#">codewithsadee</a> All Rights Reserved.</div>
        </footer>

        <div class="call-fixed">
            <a href="tel:0907977341">
                <img src="./assets/imgs/call-icon.png" alt="">
            </a>
        </div>
    </div>

    <!-- Link cdn -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <!-- Js custom -->
    <script src="{{asset('front-end/assets/js/flipdown.js')}}"></script>
    <script src="{{asset('front-end/assets/js/main.js')}}"></script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            let timer_ = 1681765698//unix timestamp
            let flipdown = new FlipDown(timer_)
                .start()
                .ifEnded(() => {
                    document.querySelector(".flipdown").innerHTML = `<h2>Khuyến mãi kết thúc !</h2>`;
                })
        })
    </script>

    <script>
        let header = document.querySelector('.header');

        window.addEventListener("scroll", function () {
        if (window.scrollY >= 100) {
            header.classList.add("active");
        } else {
            header.classList.remove("active");
        }
        });

        $('.mobile__menu-icon').click(function () {
            $('.modal__menu').addClass('show');
        });

        $('.close__menu-mobile').click(function () {
            $('.modal__menu').removeClass('show');
        })
    </script>

    <script>
        $('.slick__banner').slick({
            dots: true,
            arrows:false,
            infinite: true,
            autoplay: true,
            autoplaySpeed: 2000,
            fade: true,
            cssEase: 'linear',
            appendDots: $('.slick-slider-dots'),
        });
    </script>


</body>
</html>