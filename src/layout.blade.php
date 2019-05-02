<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{url('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/common.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('frontend/css/font-awesome.min.css')}}" media="all">

    <title>{{$meta_title}}</title>

    <meta property="og:title" content="{{$meta_title}}">
    <meta property="og:description" content="{{$meta_desc}}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{$meta_url}}">
    <meta property="og:image" content="{{$meta_image}}">
    <meta property="og:site_name" content="{{$meta_title}}">
    <meta property="fb:app_id" content="2379700942069801" />

    <meta name="twitter:card" content="Card">
    <meta name="twitter:url" content="{{$meta_url}}">
    <meta name="twitter:title" content="{{$meta_title}}">
    <meta name="twitter:description" content="{{$meta_desc}}">
    <meta name="twitter:image" content="{{$meta_image}}">


    <meta itemprop="name" content="{{$meta_title}}">
    <meta itemprop="description" content="{{$meta_desc}}">
    <meta itemprop="image" content="{{$meta_image}}">

    <meta name="ABSTRACT" content="{{$meta_desc}}"/>
    <meta http-equiv="REFRESH" content="1200"/>
    <meta name="REVISIT-AFTER" content="1 DAYS"/>
    <meta name="DESCRIPTION" content="{{$meta_desc}}"/>
    <meta name="KEYWORDS" content="{{$meta_keywords}}"/>
    <meta name="ROBOTS" content="index,follow"/>
    <meta name="AUTHOR" content="{{$meta_title}}"/>
    <meta name="RESOURCE-TYPE" content="DOCUMENT"/>
    <meta name="DISTRIBUTION" content="GLOBAL"/>
    <meta name="COPYRIGHT" content="Copyright 2013 by Goethe"/>
    <meta name="Googlebot" content="index,follow,archive" />
    <meta name="RATING" content="GENERAL"/>

    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black"/>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-137906432-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-137906432-1');
</script>


</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<div class="wrapper home pr">
    <div class="widget-wrap">
        <div class="hide-form-phone">
            <p>Đăng ký nhận tư vấn miễn phí</p>
        </div>
        <div class="show-form-phone">
            <h4>Đăng ký nhận tư vấn miễn phí</h4>
            <div class="box-show">
                <p>Chỉ cần đặt câu hỏi, chuyên gia sẽ gọi lại tư vấn cụ thể cho bạn</p>
                <form id="getQues" method="post" action="{{url('saveContact')}}">
                    {{ csrf_field() }}
                    <input name="phone" type="number" placeholder="Số điện thoại của bạn">
                    <textarea name="content" placeholder="Tình trạng của bạn"></textarea>
                    <input name="email" type="text" placeholder="Tên/ Email của bạn">
                    <button id="submitQues">Gửi đi</button>
                </form>
            </div>
        </div>
    </div>
    @foreach (\App\Models\Banner::where('status', true)->where('position', 'banner-ads-left')->get() as $banner)
        <div class="banner-ads left">
            <a href="{{$banner->link}}" title="" target="_blank">
                <img src="{{ url($banner->image) }}" alt="" width="150px" height="auto">
            </a>
        </div>
    @endforeach

    @foreach (\App\Models\Banner::where('status', true)->where('position', 'banner-ads-right')->get() as $banner)
        <div class="banner-ads right">
            <a href="{{$banner->link}}" title="" target="_blank">
                <img src="{{ url($banner->image) }}" alt="" width="150px" height="auto">
            </a>
        </div>
    @endforeach

    <header class="pr">
        <div class="fixCen hidden-sm hidden-xs">
            <div class ="col-lg-6 col-sm-6 col-sx-12 padding-left-0">
            </div>
            <div class ="col-lg-6 col-sm-6 col-sx-12 padding-right-0">
                <div class="hotline">

                    <div class="block block-search pull-right">
                        <form class="form-inline mt-2 mt-md-0" method="get" action="{{url('tim-kiem')}}">
                            <input name="q" class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                            <button type="submit"> <i class="fa fa-search"> </i></button>
                        </form>
                    </div>

                    <div class="block-dk pull-right">
                        <a href="{{url('dang-bai-viet')}}" title="Đăng bài viết"> <i class="fa fa-edit"></i> Đăng bài viết </a>
                    </div>

                    <div class="block-login pull-right">
                        <a href="javascript:void(0)" class="btn-regis" title="Đăng ký">Đăng ký</a> | <a href="javascript:void(0)" class="btn-login" title="Đăng nhập">Đăng nhập </a>
                    </div>
                </div>
            </div>

        </div>

        @php
          $categories = \App\Models\Category::where('status', true)->whereNull('parent_id')->orderBy('menu_order')->get();
        @endphp

        <div class="fixCen head-info">
            <div class ="col-lg-5 col-md-4 col-sm-12 col-sx-12 padding-left-0">
                <nav id="main-nav" class="menu-mb hidden-sm hidden-xs">
                    <ul class="pr rs">
                        <li>
                            <a class="{{ ($page == 'index')? 'active': '' }}" href="{{url('/')}}" title="Trang chủ">
                                Home
                            </a>
                        </li>
                        @foreach($categories as $cate)
                            @if ($cate->menu_order < 3)
                                <li>
                                <a class="{{ ($page == $cate->slug)? 'active': '' }}" href="{{url($cate->slug)}}" title="{{ $cate->name }}">
                                    @if(strlen($cate->name) > 14)
                                      @php
                                          $display = explode(" ", $cate->name);
                                          array_splice($display, 2, 0, '<br/>');
                                          $displayStr = implode(" ", $display);
                                      @endphp
                                        {!! $displayStr !!}
                                    @else
                                    {{$cate->name}}
                                    @endif
                                </a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </nav>
            </div>

            <div class ="col-lg-2 col-md-4 col-sm-4 col-sx-12">
                <h1 class="rs"><a href="{{url('/')}}" class="logo" title="Viêm gan" target="_blank">
                        <img src="{{url('frontend/images/logo.png')}}" alt="Viêm gan" class="imgFull">
                    </a></h1>
            </div>

            <div class ="col-lg-5 col-sm-5 col-sx-12 padding-right-0 hidden-sm hidden-xs">
                <nav id="main-nav" class="menu-mb">
                    <ul class="pr rs">
                        @foreach($categories as $cate)
                            @if ($cate->menu_order >= 3)
                                <li>
                                <a class="{{ ($page == $cate->slug)? 'active': '' }}" href="{{url($cate->slug)}}" title="{{ $cate->name }}">
                                    {{$cate->name}}
                                </a>
                                </li>
                            @endif
                        @endforeach
                        <li><a href="{{url('video')}}" class="{{ ($page == 'video')? 'active': '' }}" title="Góc Media">
                                Góc Media
                            </a></li>
                        <li><a href="{{url('lien-he')}}" class="{{ ($page == 'lien-he')? 'active': '' }}" title="Liên hệ">
                                Liên hệ
                            </a></li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="fixCen head-info visible-sm visible-xs">
            <div class="bg-top">
                <a href="javascript:void(0)" class="miniMenu-btn pa open-main-nav" data-menu="#main-nav-mobile"></a>
                <span class="hotline" id="hotline">
                <form action="{{url('tim-kiem')}}" class="search-on-top">
                        <input name="q" type="text" placeholder="Tìm kiếm">
                </form>
            </span>
            </div>

            <nav id="main-nav-mobile" class="menu-mb">
                <ul class="pr rs">
                    <li><a href="{{url('/')}}" title="Trang chủ"> Home</a></li>
                    @foreach ($categories as $cate)
                    <li><a href="{{url($cate->slug)}}" title="{{$cate->name}}">{{$cate->name}}</a></li>
                    @endforeach
                    <li><a href="{{url('video')}}" title="Góc Media">Góc Media</a></li>
                    <li><a href="{{url('lien-he')}}" title="Liên hệ">Liên hệ</a></li>
                </ul>
            </nav>
        </div>

    </header>

     @yield('content')

    <!-- Start footer -->
    <footer>
        <div class="fixCen">
            <div class="listSocial">
                <div> <a href="#"> <i class="fa fa-facebook"> </i></a> </div>
                <div> <a href="#"> <i class="fa fa-google-plus"> </i></a></div>
                <div> <a href="#"> <i class="fa fa-youtube"> </i></a> </div>
                <div> <a href="#"> <i class="fa fa-phone"> </i></a> </div>
                <div> <a href="#"> <i class="fa fa-map-marker"> </i></a> </div>
            </div>
        </div>
    </footer>
    <div class="others">
        <div class="fixCen">
            <div class="content-footer">
                <p><span style="color:#fff200">viettiepuocmo.vn</span> là diễn đàn chia sẻ, trao đổi và tương tác chia sẻ kinh nghiệm về viêm gan virut và xơ gan</p>
                <p>Cơ quan chủ quản: Công ty TNHH Truyền thông Sức  khỏe là Vàng</p>
                <p>Trụ sở chính: Thôn 3, xã Phù Lưu Tế, Huyện Mỹ Đức, thành phố Hà Nội.</p>
                <ul>
                    <li>* Các thông tin trên website dùng để tham khảo, khi áp dụng nên hỏi ý kiến Bác sĩ chuyên khoa.</li>
                    <li>* Chúng tôi không chịu bất cứ trách nhiệm nào do việc tujwj ý áp dụng các thông tin trên website gây ra.</li>
                    <li>* Email: phongbenhgan.fb@gmail.com</li>
                    <li>* <a href="tel: 18001190">Số điện thoại: 0243991436</a></li>
                    <li>* Chịu trách nhiệm nội dung: Bà Đàm Thị Xuyến</li>
                    <li>* GP MXH: 253/GP-BTTTT do Bộ TTTH cấp ngày 28/06/2018</li>
                    <li>* Website đang trong quá trình thử nghiệm và hoàn thiện hệ thống kỹ thuật</li>
                    <li>* <a href="{{url('dieu-khoan')}}">Điều khoản sử dụng</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End footer -->
</div>
@include('frontend.popup')
</body>
<!-- Facebook Code Comment-->
<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId      : '2379700942069801',
            xfbml      : true,
            version    : 'v3.2'
        });
    };

    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

<div id="fb-root"></div>
<script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.6&appId=2084164801908023";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<!-- Facebook Code Comment-->
<script src="{{url('frontend/js/jquery-1.11.1.min.js')}}" type="text/javascript"></script>
<script src="{{url('frontend/js/SmoothScroll.js')}}" type="text/javascript"></script>
<script src="{{url('frontend/js/owl.carousel.min.js')}}" type="text/javascript"></script>
<script src="{{url('frontend/js/jquery.easing.min.js')}}" type="text/javascript"></script>
<script src="{{url('frontend/js/common.js')}}" type="text/javascript"></script>
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
<script src="{{url('frontend/js/quan.js')}}" type="text/javascript"></script>
</html>