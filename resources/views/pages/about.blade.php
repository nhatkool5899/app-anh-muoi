@extends('layout.page')
@section('banner')
<div class="banner">
    <div class="banner__main">
        <img src="./assets/imgs/banner-demo-2.jpg" alt="">
    </div>
    <div class="banner__text">
        <p class="title">Cơm Heo quay anh mười</p>
        <p class="subtitle">"Với hương vị thơm ngon và quy trình chế biến độc đáo, cơm Anh Mười sẽ mang đến sự trải nghiệm vô cùng mới lạ và tuyệt vời."</p>
        <a href="#" class="btn__banner fill">Đặt cơm ngay</a>
    </div>
</div>
@endsection

@section('content')
<section>
    <div class="about">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="about__left">
                        <div class="about__title">Về chúng tôi</div>
                        <div class="about__subtitle">Khơi nguồn cảm hứng món ăn nhanh truyền thống</div>
                        <div class="about__content">
                            Hiểu được nỗi lòng của người con xa xứ, <strong>Anh Mười</strong> là một trong những
                            cửa hàng ăn nổi tiếng ở Cần Thơ, với các món ăn nhanh và Cơm thịt heo nóng giòn đã tạo nên nét đặc trưng của thương hiệu
                            cơm Anh Mười. Chỉ cần nghe đến tên thương hiệu cũng đủ thấy sự dẫn dã, trìu mến mà thân thương của người dân 
                            miền Tây sông nước. Thế nên dù ai đi ngược về xuôi cũng nhớ, cũng yêu món cơm heo quay vừa giòn giòn nóng hổi vừa thổi vừa ăn.
                            <br>
                            <br>
                            Thực phẩm <strong>Anh Mười</strong> được sản xuất theo quy trình an toàn vậ sinh thực phẩm.
                            Với các món ăn nhanh nhiều dinh dưỡng và thêm đầy đủ các loại thức uống giàu vitamin tốt cho sức khỏe.
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about__right">
                        <div class="image">
                            <img src="./assets/imgs/about/about-1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="promise">
        <div class="container">
            <div class="promise__body">
                <div class="promise__title">Lý do chọn cơm Anh Mười ?</div>
                <div class="promise__content">
                    <div class="promise__item">
                        <div class="icon">
                            <img src="./assets/imgs/promise/icon-1.png" alt="">
                        </div>
                        <div class="line"></div>
                        <div class="title">Cam kết thực phẩm sạch</div>
                        <div class="desc">Phục vụ sản phẩm với chất lượng tốt nhất, ngon nhất, tạo sự an tâm cho khách hàng.</div>
                    </div>
                    <div class="promise__item">
                        <div class="icon">
                            <img src="./assets/imgs/promise/icon-2.jpg" alt="">
                        </div>
                        <div class="line"></div>
                        <div class="title">Gạo sạch ST25</div>
                        <div class="desc">Mục đích chính của chúng tôi là mang đến một sản phẩm sạch, ngon, chất lượng, xứng tên gọi cơm heo quay Anh Mười.</div>
                    </div>
                    <div class="promise__item">
                        <div class="icon">
                            <img src="./assets/imgs/promise/icon-3.png" alt="">
                        </div>
                        <div class="line"></div>
                        <div class="title">Hương vị sáng tạo trên nền truyền thống</div>
                        <div class="desc">Sản xuất ngay sau khi nhận được đơn hàng. Sự tươi mới, đa dạng và phù hợp nhất với khẩu vị từng khách hàng.</div>
                    </div>
                    <div class="promise__item">
                        <div class="icon">
                            <img src="./assets/imgs/promise/icon-4.png" alt="">
                        </div>
                        <div class="line"></div>
                        <div class="title">Phục vụ tận tâm</div>
                        <div class="desc">Chúng tôi luôn đặt lợi ích của khách hàng lên hàng đầu, sẵn sàng tiếp thu các ý kiến, phản hồi từ họ.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearsection" style="height: 60px;"></div>
</section>

<section>
    <div class="info">
        <div class="info__head">
            <div class="container">
                <div class="info__head-title">Mỗi ngày, chúng tôi làm việc với hy vọng thực hiện sứ mệnh: đem những sản phẩm chất lượng nhất của mình tới khách hàng, bạn bè, gia đình và đồng nghiệp với một tấm lòng nhiệt huyết và đam mê chứa trong từng món ăn.</div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="info__head-img">
                            <img src="./assets/imgs/about/about-2.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="info__head-img">
                            <img src="./assets/imgs/com/heo-quay.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="info__head-img">
                            <img src="./assets/imgs/mon-them/canh-bap.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="info__body">
                <div class="info__top">
                    <div class="info__avatar">
                        <img src="./assets/imgs/logo.jpg" alt="">
                        <p>Anh Mười, người anh đậm chất miền tây</p>
                    </div>
                    <div class="info__title">
                        <h3>"Cơm Heo Quay Anh Mười"</h3>
                        <h5>Sản phẩm được tạo ra từ niềm đam mề và tâm huyết</h5>
                        <p>Trải qua chặng đường 5 năm xây dựng và phát triển trong ngành thực phẩm, <strong>Công ty TNHH Thực Phẩm Anh Mười</strong>
                            đã nhanh chóng khẳng định thương hiệu, trở thành một trong những doanh nghiệp hàng đầu trong lĩnh vực chế biến và sản xuất kinh doanh mặt hàng thực phẩm
                            , đồ uống. Không chỉ nhạy bén nắm bắt nhu cầu thị trường, thị hiếu của người tiêu dùng để kịp thời đáp ứng, <strong>Công ty TNHH Thực Phẩm Anh Mười</strong> còn luôn chú trọng nâng cao chất lượng sản phẩm, vươn lên trở thành doanh nghiệp sản xuất
                             và chế biến uy tín, có thương hiệu vững mạnh tại thị trường trong nước
                            <br><br>
                            Với việc mạnh dạn đầu tư công nghệ mới, không ngừng nâng cao chất lượng sản phẩm, các thành phẩm của CÔNG TY TNHH THỰC PHẨM ANH MƯỜI đã chinh phục và dần dần có được lòng tin từ những khách hàng ở địa phương cũng như là khách du lịch
                        </p>
                    </div>
                </div>
                <div class="info__text">
                    <p>Bằng chiến lược đúng đắn, trong nhiều năm liền, CÔNG TY TNHH THỰC PHẨM ANH MƯỜI liên tục tăng trưởng ổn định, đời sống công nhân viên ngày càng được cải thiện. Công ty luôn nộp đầy đủ các loại thuế, đóng góp thiết thực vào công cuộc phát triển kinh tế – xã hội.</p>
                    <p>Xác định “Kinh doanh là sứ mệnh chứ không phải quyền lợi”, tầm nhìn của CÔNG TY TNHH THỰC PHẨM ANH MƯỜI là trở thành một công ty có nội lực và vị thế lớn mạnh nhất trong ngành sản xuất và chế biến lương thực hàng đầu Việt Nam, đồng thời mang lại giá trị gia tăng cho đối tác, khách hàng, cán bộ nhân viên (CBNV), mang lại giá trị có ích cho cộng đồng xã hội.</p>
                    <p>Trên con đường trở thành doanh nghiệp lớn nhất trong ngành sản xuất và chế biến lương thực Việt Nam, CÔNG TY TNHH THỰC PHẨM ANH MƯỜI luôn xem sự tin yêu, chia sẻ và những thành công của đối tác, cổ đông, khách hàng, người tiêu dùng chính là sứ mệnh, động lực phấn đấu và là phần thưởng của chính mình. Cùng với mục tiêu và kỳ vọng phía trước, với tính năng động sáng tạo và ý chí vượt lên chính mình của đội ngũ Lãnh đạo và CBNV, CÔNG TY TNHH THỰC PHẨM ANH MƯỜI đang vững tiến về phía trước, nỗ lực cống hiến xứng đáng hơn vào sự phát triển của Thành Phố Cần Thơ nói riêng và nền kinh tế của đất nước nói chung.</p>
                    <p>Công ty TNHH Thực Phẩm Anh Mười chuyên về sản xuất kinh doanh mặt hàng thực phẩm, đồ uống với phương châm:” Chất Lượng Tạo Nên Thương Hiệu”
                        “Anh Mười” luôn hướng tới các tiêu chuẩn phù hợp nhất với thị trường nhằm mang lại sự tiện lợi, an toàn cho quý khách khi trải nghiệm các sản phẩm.
                    </p>
                    <p><strong>“Anh Mười Food” rất hân hạnh phục vụ quý khách!</strong></p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection