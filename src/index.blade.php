@extends('frontend.layout')
@section('content')
<section class="body pr">
    <div class="fixCen">
        <div class="block-1 banner-post">
            @php
                $firstTopPost = $topPosts->shift();
            @endphp
            <div class="left">
                <div class="block-new style01">
                    <img src="{{url($firstTopPost->combine)}}" alt="" width="507" height="310">
                    <div class="title">
                        <a href="{{url($firstTopPost->slug.'.html')}}" title="{{$firstTopPost->name}}">
                            {{$firstTopPost->name}}
                        </a>
                    </div>
                    <div class="info">
                        <span class="user"> By {{$firstTopPost->author}}</span>
                        <span class="time"> Posted {{$firstTopPost->created_at->format('l jS \\of F Y')}}</span>
                    </div>
                    <div class="sumary">
                        {{$firstTopPost->desc}}
                    </div>
                    <div class="view-more"> <a href="{{url($firstTopPost->slug.'.html')}}"> Chi tiết </a> </div>
                </div>
            </div>

            <div class="right">
                <ul class="list-post-02">
                    @foreach ($topPosts as $topPost)
                        <li>
                        <!-- bài 01 -->
                        <div class="block-new style02">
                            <div class="image">
                                <img src="{{url($topPost->combine)}}" alt="" width="200" height="150">
                            </div>
                            <div class="content">
                                <div class="title">
                                    <a href="{{url($topPost->slug.'.html')}}" title="{{$topPost->name}}">
                                        {{$topPost->name}}
                                    </a>
                                </div>
                                <div class="info">
                                    <span class="user"> By {{$topPost->author}}</span>
                                    <span class="time"> Posted {{$topPost->created_at->format('l jS \\of F Y')}}</span>
                                </div>
                                <div class="sumary">
                                    {{$topPost->desc}}
                                </div>
                                <div class="view-more"> <a href="{{url($topPost->slug.'.html')}}"> Chi tiết </a> </div>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>


        @if ($stolenCate)
        <!-- Start block 2 -->
        <div class="groups">
            <div class="left-content">
                <div class="block-title"><h2> Kẻ đánh cắp ước mơ</h2> </div>
                <!-- Start post -->
                @php
                   $stolenPosts = $stolenCate->homepagePosts();
                   $firstStolenPost = $stolenPosts->shift();
                @endphp
                @if ($firstStolenPost)
                <div class="block-new style03 padding-bottom-100">

                    <div class="image post-thumbnail "><img src="{{url($firstStolenPost->combine)}}" alt=""> </div>

                    <div class="title">
                        <a href="{{url($firstStolenPost->slug.'.html')}}" title="{{$firstStolenPost->name}}">
                            {{$firstStolenPost->name}}
                        </a>
                    </div>
                    <div class="info">
                        <span class="user"> By {{$firstStolenPost->author}}</span>
                        <span class="time"> Posted {{$firstStolenPost->created_at->format('l jS \\of F Y')}}</span>
                        <span class="view">, {{$firstStolenPost->views}} views</span>
                    </div>
                    <div class="sumary">
                        {{$firstStolenPost->desc}}
                    </div>
                    <div class="view-more"> <a href="{{url($firstStolenPost->slug.'.html')}}"> Chi tiết </a> </div>
                </div>
                @endif

                <div class="block-title">
                    <h2> Người viết tiếp ước mơ</h2>
                    <div class="sub-title">
                        {{$writeDreamCate->desc}}
                    </div>
                </div>

                <ul class="list-post-04">
                    @foreach ($writeDreamCate->homepagePosts(4) as $writePost)
                        <li>
                            <!-- bài 01 -->
                            <div class="block-new style03">
                                <div class="image">
                                    @if (isset($writePost->combine))
                                    <img src="{{url($writePost->combine)}}" alt="">
                                    @endif
                                </div>
                                <div class="content">
                                    <div class="title">
                                        <a href="{{url($writePost->slug.'.html')}}" title="{{$writePost->name}}">
                                            {{$writePost->name}}
                                        </a>
                                    </div>
                                    <div class="info">
                                        <span class="user"> By {{$writePost->author}}</span>
                                        <span class="time"> Posted {{$writePost->created_at->format('l jS \\of F Y')}}</span>
                                        <span class="view">, {{$writePost->views}} views</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="right-content pr">
                <div class="block">
                    @foreach (\App\Models\Banner::where('status', true)->where('position', 'banner-right01')->get() as $banner)
                    <div class="block-banner-right">
                        <img src="{{url($banner->image)}}" alt=""/>
                    </div>
                    @endforeach
                </div>

                <ul class="list-post-03">
                    @foreach ($stolenPosts as $stolenPost)
                    <li>
                        <!-- bài 01 -->
                        <div class="block-new style03">
                            <div class="image">
                                <img src="{{url($stolenPost->combine)}}" alt="">
                            </div>
                            <div class="content">
                                <div class="title">
                                    <a href="{{url($stolenPost->slug.'.html')}}" title="{{$stolenPost->name}}">
                                        {{$stolenPost->name}}
                                    </a>
                                </div>
                                <div class="info">
                                    <span class="user"> By {{$stolenPost->author}}</span>
                                    <span class="time"> Posted {{$stolenPost->created_at->format('l jS \\of F Y')}}</span>
                                    <span class="view">, {{$stolenPost->views}} views</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>

            </div>
        </div>

        @endif

        <!-- Start Blog -->
        <div class="block-3">
            <div class="block-title text-center"><h2> Blog</h2> </div>
            <div class="left">
                <!-- bài 01 -->
                @if ($firstBlogPost = $blogPosts->shift())
                <div class="block-new style04">
                    <div class="image">
                        <img src="{{url($firstBlogPost->combine)}}" alt="">
                    </div>
                    <div class="content">
                        <div class="title">
                            <a href="{{$firstBlogPost->slug.'.html'}}" title="{{$firstBlogPost->name}}">
                                {{$firstBlogPost->name}}
                            </a>
                        </div>
                        <div class="sumary">
                           {{$firstBlogPost->desc}}
                        </div>
                    </div>
                </div>
                @endif
            </div>

            <div class="right">
                <ul class="list-post-05">
                    @foreach ($blogPosts as $blogPost)
                    <li>
                        <!-- bài 01 -->
                        <div class="block-new style04 style05">
                            <div class="image">
                                <img src="{{url($blogPost->combine)}}" alt="">
                            </div>
                            <div class="content">
                                <div class="title">
                                    <a href="{{url($blogPost->slug.'.html')}}" title="{{$blogPost->name}}">
                                        {{$blogPost->name}}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <!--  start block-4 -->
        <div class="block-4">
            <div class="block-title">
                <h2>Đồng hành </h2>
                <div class="sub-title">{{$togetherCate->desc}}</div>
            </div>
            <div class="block-content">
                <ul class="list-post-06">
                    @foreach ($togetherCate->homepagePosts(4) as $togetherPost)
                    <li>
                        <div class="block-new style06">
                            <div class="content">
                                <div class="title">
                                    <a href="{{url($togetherPost->slug.'.html')}}" title="{{$togetherPost->name}}">
                                        {{$togetherPost->name}}
                                    </a>
                                </div>
                                <div class="info">
                                    <span class="user"> By {{$togetherPost->author}}</span>
                                    <span class="time"> Posted {{$togetherPost->created_at->format('l jS \\of F Y')}}</span>
                                </div>
                                <div class="image">
                                    <img src="{{url($togetherPost->combine)}}" alt="">
                                </div>
                                <div class="readmore">
                                    <a href="{{url($togetherPost->slug.'.html')}}">Xem tiếp <i class="fa fa-arrow-right"> </i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <!--  start block-5 -->
        <div class="block-5">
            <div class="block-title text-center">
                <h2>Quỹ vì bệnh nhân viêm gan</h2>
            </div>
            <ul class="list-post-07">
                @foreach ($donationCate->homepagePosts(6) as $donationPost)
                <li>
                    <div class="block-new style03">
                        <div class="image">
                            <img src="{{url($donationPost->combine)}}" alt="">
                        </div>
                        <div class="content">
                            <div class="title">
                                <a href="{{url($donationPost->slug.'.html')}}" title="{{$donationPost->name}}">
                                    {{$donationPost->name}}
                                </a>
                            </div>
                            <div class="info">
                                <span class="user"> By {{$donationPost->author}}</span>
                                <span class="time"> Posted {{$donationPost->created_at->format('l jS \\of F Y')}}</span>
                                <span class="view">, {{$donationPost->views}} views</span>
                            </div>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>

    </div>

</section>
@endsection