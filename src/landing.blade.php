<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <title>Landing | White</title>
    <link rel="stylesheet" href="{{url('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/flipclock.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/landing.css')}}">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
<div class="wrapper">
    <header>
        <div class="text">
            <h1 class="name">White</h1>
            <span class="slogan">Siêu phẩm trắng da thế kỷ 21</span>
        </div>
        <div class="time-box">
            <div class="captain">
                Bạn muốn nhận ưu đãi cực tốt ngay hôm nay?!
            </div>
            <div class="content">
                <div class="uu-dai">
                    * Mua 1 tặng 1 <br>
                    * Tặng kèm 1 hũ DETOX BODY CẤY TRẮNG <br>
                    * Free ship toàn quốc
                </div>
                <div class="show-time">
                    <div class="flip-counter"></div>
                </div>
                <form id="form1" action="{{ route('frontend.landingSubmit') }}" method="post" class="formInfo">
                    {{ csrf_field() }}
                    <input type="text" name="phone" placeholder="Số điện thoại của bạn *">
                    <div class="error error-phone" style="display: none">Xin nhập vào số điện thoại của bạn!</div>
                    <input type="text" name="name" placeholder="Tên của bạn *">
                    <div class="error error-name" style="display: none">Xin nhập vào họ và tên của bạn!</div>
                    <div class="note">
                        Bạn đang gặp vấn đề gì? Hãy để lại thông tin để được chuyên gia tư vấn nhé.
                    </div>
                    <button id="button1" class="getHelp" type="button">Tư vấn cho tôi</button>
                </form>
                <div class="hotline">Hotline: <a href="tel:09xxxxxxxx">09xxxxxxxx</a></div>
            </div>
            <a href="javascript:void(0)" class="btn-fix">Tư vấn cho tôi</a>
        </div>
    </header>
    <section class="body">
        @include('flash::message')
        <div class="fixCen">
            <div class="camket">
                <div class="logo">
                    <img src="{{url('frontend/images/landing/hona.png')}}" alt="" class="imgFull">
                </div>
                <ul class="intro">
                    <li>Da trắng lên tông chỉ sau 2 liệu trình sử dụng</li>
                    <li>Giảm nếp nhăn rõ rệt, da căng và trẻ ra 5 - 10 tuổi</li>
                    <li>Da căng hơn, mướt mịn hơn, giảm thâm nám rõ rệt</li>
                    <li>Chống oxi hóa, ngăn chặn quá trình lão hóa</li>
                    <li>Điều hòa nội tiết, đẹp từ bên trong</li>
                    <li>Nhập khẩu từ châu Âu</li>
                    <li>Đại diện hình ảnh - nữ diễn viên chính <strong>Quỳnh Búp Bê</strong></li>
                </ul>
            </div>
            <div class="videos">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/GwCUbhE0TY0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="line">Bạn đang có vấn đề về làn da không ưng ý</div>
            <div class="block2">
                <div class="img">
                    <img src="{{url('frontend/images/landing/img1.jpg')}}" alt="">
                </div>
                <div class="problems">
                    <ul>
                        <li>Da không đều màu</li>
                        <li>Da sạm, nám</li>
                        <li>Da tối màu</li>
                        <li>Da xuất hiện nếp nhăn</li>
                        <li>Da khô hoặc bị dầu mụn, không căng bóng</li>
                        <li>Da có dấu hiệu lão hóa, chảy xệ</li>
                        <li>Da nhạy cảm</li>
                        <li>Da có khuyết điểm</li>
                    </ul>
                </div>
            </div>
            <div class="line line3">Cốm uống trắng da "White +" - Tuyệt phẩm trắng da cho phái đẹp</div>
            <div class="block3 pr">
                <div class="left-block">
                    <div class="effect effect1">
                        <div class="big">Trắng thật từ bên trong</div>
                        <div class="small">White + chứa hoạt chất ngăn cản quá trình tổng hợp sắc tố đen <br>
                            và thúc đẩy quá trình tổng hợp sắc tố trắng của da, <br> cho làn da trắng thật từ bên trong.
                        </div>
                    </div>
                    <div class="effect effect2">
                        <div class="big">Bổ sung collagen</div>
                        <div class="small">Tái sinh làn da, trẻ hóa 5 - 10 tuổi</div>
                    </div>
                    <div class="effect effect3">
                        <div class="text">
                            <div class="big">Giảm thâm nám</div>
                            <div class="small">
                                Da căng bóng, giảm mụn, giảm khuyết điểm, <br>
                                tấy đỏ do được Cấp ẩm, bổ sung dưỡng chất<br>
                                Vitamin E, Vitamin C, chiết xuất lô hội từ bên trong.

                            </div>
                        </div>
                    </div>
                </div>
                <div class="right-block">
                    <img src="{{url('frontend/images/landing/img2.jpg')}}" alt="">
                </div>
                <div class="circle circle1 pa">
                    <img src="{{url('frontend/images/landing/img3.jpg')}}" alt="" class="imgFull">
                </div>
                <div class="circle circle2 pa">
                    <img src="{{url('frontend/images/landing/img4.jpg')}}" alt="" class="imgFull">
                </div>
                <div class="circle circle3 pa">
                    <img src="{{url('frontend/images/landing/img5.jpg')}}" alt="" class="imgFull">
                </div>
            </div>
            <div class="before-after">
                <img src="{{url('frontend/images/landing/demo.jpg')}}" alt="" class="imgFull">
            </div>
            <div class="line">
                Cốm uống trắng da "WHITE +" - trắng bật tông ngay sau 2 liệu trình <br>
                an toàn tuyệt đối, trắng thật và bền vững.
            </div>
            <div class="block4">
                <div class="box box1">
                    <div class="caption">
                        <h3 class="name">White</h3>
                        <span class="slogan">Dẫn đầu công nghệ trắng da của thế kỷ 21</span>
                    </div>
                    <div class="line2"></div>
                    <div class="des">
                        <div class="big">
                            <strong>Glutathion</strong> - hoạt chất làm trắng diệu kì giúp làm trắng da tự nhiên, an toàn từ bên trong
                        </div>
                        <p>
                            Glutathion giúp tạo ra các sắc tố melalin sáng, đồng thời ngăn chặn tạo ra các sắc tố melalin đen bằng cách can thiệp vào
                            quá trình chuyển hóa và ngăn ngừa hoạt động của enzyme tyrosinase.
                        </p>
                        <p>
                            Hoạt chất thần kì này kết hợp với những khoáng chất thiết yếu khác có tác dụng thẩm thấu sâu vào da, giúp cân bằng độ ẩm,
                            đảo ngược tiến trình tổng hợp sắc tố melalin sáng, đào thải sắc tố melalin tối. Do đó thúc đẩy sự tái tạo tế bào da mới,
                            cho làn da mịn, rạng rỡ từ bên trong.
                        </p>
                    </div>
                </div>
                <div class="box box2">
                    <div class="caption">
                        <h3 class="name">White</h3>
                        <span class="slogan">Bổ sung chiết xuất dương xỉ - thảo dược chống nắng diệu kì</span>
                    </div>
                    <div class="line2"></div>
                    <div class="des">
                        <p>
                            Thành phần thiên nhiên từ chiết xuất dương xỉ có trong White+ được ví như một loại thảo dược chống nắng vô cùng hoàn hảo.
                        </p>
                        <p>
                            Chiết xuất dương xỉ ( Polypodium Leucotomas ) chứa hợp chất thực vật tự nhiên calagualine, các hợp chất phenol bao gồm axit ferulic,
                            axit vanillic và caffeic. Chiết xuất dương xỉ giúp tạo cho da khả năng chống nắng ngay từ bên trong cơ thể, đem đến cho người dùng một làn da sáng
                            khỏe, căng mịn, trắng hồng.
                        </p>
                    </div>
                </div>
                <div class="box box3">
                    <div class="caption">
                        <h3 class="name">White</h3>
                        <span class="slogan">Tuyệt phẩm trắng da của phái đẹp</span>
                    </div>
                    <div class="line2"></div>
                    <div class="des">
                        <div class="big">
                            <strong>Glutathion</strong> - đa công dụng, siêu phẩm chống lão hóa hàng đầu
                        </div>
                        <ul>
                            <li>Tăng cường sức khỏe cho làn da</li>
                            <li>Chống lão hóa da</li>
                            <li>Giúp đào thải độc tố ra khỏi cơ thể</li>
                            <li>Giúp tái sinh năng lương, ngủ ngon, giảm stress</li>
                            <li>Tăng cường hệ miễn dịch</li>
                        </ul>
                    </div>
                </div>
                <div class="box box4">
                    <div class="caption">
                        <span class="slogan">thành phần</span>
                    </div>
                    <div class="line2"></div>
                    <div class="des">
                        <img src="{{url('frontend/images/landing/img6.jpg')}}" alt="" class="imgFull">
                    </div>
                </div>
            </div>
        </div>
        <div class="block5">
            <div class="fixCen">
                <form id="form2" action="{{ route('frontend.landingSubmit') }}" method="post" class="formInfo">
                    <div class="inner">
                        {{ csrf_field() }}
                        <input type="text" name="name" placeholder="Tên khách hàng">
                        <div class="error error-name" style="display: none">Xin nhập vào họ và tên của bạn!</div>
                        <input type="text" name="phone" placeholder="Số điện thoại">
                        <div class="error error-phone" style="display: none">Xin nhập vào số điện thoại của bạn!</div>
                        <button id="button2" class="getHelp" type="button">Tư vấn cho tôi</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="block6">
            <div class="fixCen">
                <div class="line">
                    Sự khác biệt giữa White+ và những dòng sản phẩm dưỡng trắng da khác
                </div>
                <div class="content">
                    <ul>
                        <li>Nguyên liệu nhập khẩu hoàn toàn từ Châu Âu (Pháp, Đức, Nhật) </li>
                        <li>Sản phẩm uống trắng da an toàn và uy tín nhất Việt Nam</li>
                        <li>Sử dụng Glutathion - Hoạt chất trắng da tốt nhất thế kỉ 21</li>
                        <li>Bổ sung chiết xuất dương xỉ - thảo dược chống nắng diệu kỳ</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="block7">
            <div class="inner">
                <div class="line line2">Ý kiến chuyên gia về "White +"</div>
                <div class="imgBig">
                    <img src="{{url('frontend/images/landing/img8.png')}}" alt="" class="imgFull">
                </div>
                <div class="videos">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/GwCUbhE0TY0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <div class="block8">
            <div class="line">HÀNG LOẠT SAO VIỆT "TRUNG THÀNH" với WHITE+ ĐỂ GIỮ LÀN DA TRẮNG</div>
            <div class="videos">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/GwCUbhE0TY0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="post">
                <div class="left">
                    <img src="{{url('frontend/images/landing/img4.jpg')}}" alt="" class="imgFull">
                </div>
                <div class="right">
                    Sự khác biệt giữa White+ và các dòng sản phẩm dưỡng trắng da khác.Sự khác biệt giữa White+ và các dòng sản phẩm dưỡng trắng da khác.
                    Sự khác biệt giữa White+ và các dòng sản phẩm dưỡng trắng da khác.Sự khác biệt giữa White+ và các dòng sản phẩm dưỡng trắng da khác.
                    <span class="name">Chị: <strong>Trần Thị Hằng</strong></span>
                </div>
            </div>
            <div class="post">
                <div class="left">
                    <img src="{{url('frontend/images/landing/img4.jpg')}}" alt="" class="imgFull">
                </div>
                <div class="right">
                    Sự khác biệt giữa White+ và các dòng sản phẩm dưỡng trắng da khác.Sự khác biệt giữa White+ và các dòng sản phẩm dưỡng trắng da khác.
                    Sự khác biệt giữa White+ và các dòng sản phẩm dưỡng trắng da khác.Sự khác biệt giữa White+ và các dòng sản phẩm dưỡng trắng da khác.
                    <span class="name">Chị: <strong>Trần Thị Hằng</strong></span>
                </div>
            </div>
            <div class="post">
                <div class="left">
                    <img src="{{url('frontend/images/landing/img4.jpg')}}" alt="" class="imgFull">
                </div>
                <div class="right">
                    Sự khác biệt giữa White+ và các dòng sản phẩm dưỡng trắng da khác.Sự khác biệt giữa White+ và các dòng sản phẩm dưỡng trắng da khác.
                    Sự khác biệt giữa White+ và các dòng sản phẩm dưỡng trắng da khác.Sự khác biệt giữa White+ và các dòng sản phẩm dưỡng trắng da khác.
                    <span class="name">Chị: <strong>Trần Thị Hằng</strong></span>
                </div>
            </div>
            <div class="post">
                <div class="left">
                    <img src="{{url('frontend/images/landing/img4.jpg')}}" alt="" class="imgFull">
                </div>
                <div class="right">
                    Sự khác biệt giữa White+ và các dòng sản phẩm dưỡng trắng da khác.Sự khác biệt giữa White+ và các dòng sản phẩm dưỡng trắng da khác.
                    Sự khác biệt giữa White+ và các dòng sản phẩm dưỡng trắng da khác.Sự khác biệt giữa White+ và các dòng sản phẩm dưỡng trắng da khác.
                    <span class="name">Chị: <strong>Trần Thị Hằng</strong></span>
                </div>
            </div>
        </div>
        <div class="block9">
            <form id="form2" action="{{ route('frontend.landingSubmit') }}" method="post" class="formInfo formInfo1">
                <div class="inner">
                    {{ csrf_field() }}
                    <input type="text" name="name" placeholder="Tên khách hàng">
                    <div class="error error-name" style="display: none">Xin nhập vào họ và tên của bạn!</div>
                    <input type="text" name="phone" placeholder="Số điện thoại">
                    <div class="error error-phone" style="display: none">Xin nhập vào số điện thoại của bạn!</div>
                    <button id="button2" class="getHelp" type="button">Tư vấn cho tôi</button>
                </div>
            </form>
            <div class="time-box">
                <div class="captain">
                    Bạn muốn nhận ưu đãi cực tốt ngay hôm nay?!
                </div>
                <div class="content">
                    <div class="uu-dai">
                        * Mua 1 tặng 1 <br>
                        * Tặng kèm 1 hũ DETOX BODY CẤY TRẮNG <br>
                        * Free ship toàn quốc
                    </div>
                    <div class="show-time">
                        <div class="clock"></div>
                    </div>
                    <form id="form3" action="{{ route('frontend.landingSubmit') }}" method="post" class="formInfo">
                        {{ csrf_field() }}
                        <input type="text" name="phone" placeholder="Số điện thoại của bạn *">
                        <div class="error error-phone" style="display: none">Xin nhập vào số điện thoại của bạn!</div>
                        <input type="text" name="name" placeholder="Tên của bạn *">
                        <div class="error error-name" style="display: none">Xin nhập vào họ và tên của bạn!</div>
                        <div class="note">
                            Bạn đang gặp vấn đề gì? Hãy để lại thông tin để được chuyên gia tư vấn nhé.
                        </div>
                        <button id="button3" class="getHelp" type="button">Tư vấn cho tôi</button>
                    </form>
                    <div class="hotline">Hotline: <a href="tel:09xxxxxxxx">09xxxxxxxx</a></div>
                </div>
            </div>
        </div>
    </section>
</div>
</body>
</html>
<script src="{{url('frontend/js/jquery-1.11.1.min.js')}}"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="{{url('frontend/js/SmoothScroll.js')}}"></script>
<script src="{{url('frontend/js/flipclock.js')}}"></script>
<script src="{{url('frontend/js/landing.js')}}"></script>
<script>
    $('#flash-overlay-modal').modal();
</script>
<script type="text/javascript">

    // var clock = $('.clock').FlipClock(3600 * 24 * 5, {
    //     clockFace: 'DailyCounter',
    //     countdown: true,
    //     showSeconds: false
    // });
    // var flipClock = $('.flip-counter').FlipClock(3600 * 24 * 5, {
    //     clockFace: 'DailyCounter',
    //     countdown: true,
    //     showSeconds: false
    // });
    $(function(){
        FlipClock.Lang.Custom = { days:'Ngày', hours:'Giờ', minutes:'Phút', seconds:'Giây' };
        var opts = {
            clockFace: 'DailyCounter',
            countdown: true,
            language: 'Custom',
            showSeconds: false
        };
        var countdown = 1555736400 - ((new Date().getTime())/1000); // from: 04/20/2019 12:00 pm +0700
        countdown = Math.max(1, countdown);
        $('.flip-counter').FlipClock(countdown, opts);
        $('.clock').FlipClock(countdown, opts);
    });

    $(function(){
        $('#button1, #button2, #button3').click(function(){
            let form = $(this).parents('form:first');
            let phone = form.find('input[name=phone]').val();
            let name = form.find('input[name=name]').val();

            if (!phone) {
                form.find('div.error-phone').show();
                $('html, body').animate({
                    scrollTop: form.find('div.error-phone').offset().top
                }, 100);
                return false;
            }
            if (!name) {
                form.find('div.error-name').show();
                $('html, body').animate({
                    scrollTop: form.find('div.error-name').offset().top
                }, 100);
                return false;
            }

            form.submit();
            return false;
        });
    });
</script>