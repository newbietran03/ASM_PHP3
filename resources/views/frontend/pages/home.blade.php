@extends('frontend.layouts.master')
@section('content')
    <main>
        <!-- Trending Area Start -->
        <div class="trending-area fix">
            <div class="container">
                <div class="trending-main">
                    <!-- Trending Tittle -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="trending-tittle">
                                <strong>Trending now</strong>
                                <!-- <p>Rem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                                <div class="trending-animated">
                                    <ul id="js-news" class="js-hidden">
                                        <li class="news-item">Bị kết tội tham nhũng, thượng nghị sĩ Mỹ từ chức....</li>
                                        <li class="news-item">iPhone 17 Slim sẽ là chiếc iPhone kỳ lạ nhất của Apple.......
                                        </li>
                                        <li class="news-item">Bangladesh giải tán quốc hội theo tối hậu thư của người biểu
                                            tình....</li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            <!-- Trending Top -->
                            <div class="trending-top mb-30">
                                @if ($mainPost)
                                    <div class="trend-top-img">
                                        <img src="{{ asset($mainPost->urlHinh) }}" alt="{{ $mainPost->tieuDe }}">
                                        <div class="trend-top-cap">
                                            <span>{{ App\Models\Category::find($mainPost->idLT)->ten }}</span>
                                            <h2>
                                                <a
                                                    href="{{ url('/single-post', $mainPost->slug) }}">{{ $mainPost->tieuDe }}</a>
                                            </h2>
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <!-- Trending Bottom -->
                            <div class="trending-bottom">
                                <div class="row">
                                    <!-- Hiển thị bài viết chính -->
                                    <div class="col-lg-4">
                                        @if ($mainPost)
                                            <div class="single-bottom mb-35">
                                                <div class="trend-bottom-img mb-30">
                                                    <img src="{{ asset($mainPost->urlHinh) }}"
                                                        alt="{{ $mainPost->tieuDe }}">
                                                </div>
                                                <div class="trend-bottom-cap">
                                                    <span
                                                        class="color1">{{ App\Models\Category::find($mainPost->idLT)->ten }}</span>
                                                    <h4>
                                                        <a
                                                            href="{{ url('/single-post', $mainPost->slug) }}">{{ $mainPost->tieuDe }}</a>
                                                    </h4>
                                                </div>
                                            </div>
                                        @endif
                                    </div>

                                    <!-- Hiển thị các bài viết phụ -->
                                    @php
                                        $subPostsCount = 0;
                                    @endphp

                                    <div class="col-lg-4">
                                        @foreach ($subPostsFirstPart as $subPost)
                                            @if ($subPostsCount < 1)
                                                <!-- Giới hạn hiển thị tối đa 2 bài viết phụ -->
                                                <div class="single-bottom mb-35">
                                                    <div class="trend-bottom-img mb-30">
                                                        <img src="{{ asset($subPost->urlHinh) }}"
                                                            alt="{{ $subPost->tieuDe }}">
                                                    </div>
                                                    <div class="trend-bottom-cap">
                                                        <span
                                                            class="color1">{{ App\Models\Category::find($subPost->idLT)->ten }}</span>
                                                        <h4>
                                                            <a
                                                                href="{{ url('/single-post', $subPost->slug) }}">{{ $subPost->tieuDe }}</a>
                                                        </h4>
                                                    </div>
                                                </div>
                                                @php
                                                    $subPostsCount++;
                                                @endphp
                                            @endif
                                        @endforeach
                                    </div>

                                    <!-- Nếu có nhiều bài viết chính, chỉ hiển thị thêm một bài viết chính khác -->
                                    <div class="col-lg-4">
                                        @if ($mainPost)
                                            <div class="single-bottom mb-35">
                                                <div class="trend-bottom-img mb-30">
                                                    <img src="{{ asset($mainPost->urlHinh) }}"
                                                        alt="{{ $mainPost->tieuDe }}">
                                                </div>
                                                <div class="trend-bottom-cap">
                                                    <span
                                                        class="color1">{{ App\Models\Category::find($mainPost->idLT)->ten }}</span>
                                                    <h4>
                                                        <a
                                                            href="{{ url('/single-post', $mainPost->slug) }}">{{ $mainPost->tieuDe }}</a>
                                                    </h4>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>


                        </div>

                        <!-- Riht content -->
                        <div class="col-lg-4">
                            @if ($mainPost)
                                <div class="trand-right-single d-flex">
                                    <div class="trand-right-img">
                                        <img height="80" src="{{ asset($mainPost->urlHinh) }}"
                                            alt="{{ $mainPost->tieuDe }}">
                                    </div>
                                    <div class="trand-right-cap">
                                        <span class="color1">{{ App\Models\Category::find($mainPost->idLT)->ten }}</span>
                                        <h4>
                                            <a href="{{ url('/single-post', $mainPost->slug) }}">{{ $mainPost->tieuDe }}
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                            @endif

                            @foreach ($subPostsFirstPart as $mainPost)
                                <div class="trand-right-single d-flex">
                                    <div class="trand-right-img">
                                        <img height="80" src="{{ asset($mainPost->urlHinh) }}"
                                            alt="{{ $mainPost->tieuDe }}">
                                    </div>
                                    <div class="trand-right-cap">
                                        <span class="color1">{{ App\Models\Category::find($mainPost->idLT)->ten }}</span>

                                        <h4>
                                            <a
                                                href="{{ url('/single-post', $mainPost->slug) }}">{{ $mainPost->tieuDe }}</a>
                                        </h4>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Trending Area End -->
        <!--   Weekly-News start -->
        <div class="weekly-news-area pt-50">
            <div class="container">
                <div class="weekly-wrapper">
                    <!-- section Title -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title mb-30">
                                <h3>Weekly Top News</h3>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-12">
                            <div class="weekly-news-active dot-style d-flex dot-style">
                                <!-- Main Post -->
                                @if ($mainPost)
                                    <div class="weekly-single">
                                        <div class="weekly-img">
                                            <img src="{{ asset($mainPost->urlHinh) }}" alt="{{ $mainPost->tieuDe }}">
                                        </div>
                                        <div class="weekly-caption">
                                            <span
                                                class="color1">{{ App\Models\Category::find($mainPost->idLT)->ten }}</span>
                                            <h4>
                                                <a
                                                    href="{{ url('/single-post', $mainPost->slug) }}">{{ $mainPost->tieuDe }}</a>
                                            </h4>
                                        </div>
                                    </div>
                                @endif

                                <!-- Sub Posts -->
                                @foreach ($subPostsFirstPart as $mainPost)
                                    <div class="weekly-single">
                                        <div class="weekly-img">
                                            <img src="{{ asset($mainPost->urlHinh) }}" alt="{{ $mainPost->tieuDe }}">
                                        </div>
                                        <div class="weekly-caption">
                                            <span
                                                class="color1">{{ App\Models\Category::find($mainPost->idLT)->ten }}</span>
                                            <h4>
                                                <a
                                                    href="{{ url('/single-post', $mainPost->slug) }}">{{ $mainPost->tieuDe }}</a>
                                            </h4>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- End Weekly-News -->
        <!-- Whats New Start -->
        <section class="whats-news-area pt-50 pb-20">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row d-flex justify-content-between">
                            <div class="col-lg-3 col-md-3">
                                <div class="section-tittle mb-30">
                                    <h3>What's New</h3>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9">
                                <div class="properties__button">
                                    <nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                            @foreach ($categories as $category)
                                                <a class="nav-item nav-link{{ $category->id == $activeTabId ? ' active' : '' }}"
                                                    id="nav-{{ $category->slug }}-tab" data-toggle="tab"
                                                    href="#nav-{{ $category->slug }}" role="tab"
                                                    aria-controls="nav-{{ $category->slug }}"
                                                    aria-selected="{{ $category->id == $activeTabId ? 'true' : 'false' }}">
                                                    {{ $category->ten }}
                                                </a>
                                            @endforeach
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content" id="nav-tabContent">
                            @foreach ($categories as $category)
                                <div class="tab-pane fade{{ $category->id == $activeTabId ? ' show active' : '' }}"
                                    id="nav-{{ $category->slug }}" role="tabpanel"
                                    aria-labelledby="nav-{{ $category->slug }}-tab">
                                    <div class="whats-news-caption">
                                        <div class="row">
                                            @foreach ($posts->where('idLT', $category->id) as $post)
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="{{ asset($post->urlHinh) }}" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">{{ $category->ten }}</span>
                                                            <h4><a
                                                                    href="{{ url('/single-post', $post->slug) }}">{{ $post->tieuDe }}</a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-40">
                            <h3>Follow Us</h3>
                        </div>
                        <!-- Flow Social -->
                        <div class="single-follow mb-45">
                            <div class="single-box">
                                <div class="follow-us d-flex align-items-center">
                                    <div class="follow-social">
                                        <a href="#"><img src="{{ asset('fontend/img/news/icon-fb.png') }}"
                                                alt=""></a>
                                    </div>
                                    <div class="follow-count">
                                        <span>8,045</span>
                                        <p>Fans</p>
                                    </div>
                                </div>
                                <div class="follow-us d-flex align-items-center">
                                    <div class="follow-social">
                                        <a href="#"><img src="{{ asset('fontend/img/news/icon-tw.png') }}"
                                                alt=""></a>
                                    </div>
                                    <div class="follow-count">
                                        <span>8,045</span>
                                        <p>Fans</p>
                                    </div>
                                </div>
                                <div class="follow-us d-flex align-items-center">
                                    <div class="follow-social">
                                        <a href="#"><img src="{{ asset('fontend/img/news/icon-ins.png') }}"
                                                alt=""></a>
                                    </div>
                                    <div class="follow-count">
                                        <span>8,045</span>
                                        <p>Fans</p>
                                    </div>
                                </div>
                                <div class="follow-us d-flex align-items-center">
                                    <div class="follow-social">
                                        <a href="#"><img src="{{ asset('fontend/img/news/icon-yo.png') }}"
                                                alt=""></a>
                                    </div>
                                    <div class="follow-count">
                                        <span>8,045</span>
                                        <p>Fans</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- New Poster -->
                        <div class="news-poster d-none d-lg-block">
                            <img src="{{ asset('fontend/img/news/news_card.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Whats New End -->
        <!--   Weekly2-News start -->
        <div class="weekly2-news-area  weekly2-pading gray-bg">
            <div class="container">
                <div class="weekly2-wrapper">
                    <!-- section Tittle -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-tittle mb-30">
                                <h3>Weekly Top News</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="weekly2-news-active dot-style d-flex dot-style">
                                
                                <!-- Sub Posts -->
                                @foreach ($posts as $post)
                                <div class="weekly2-single">
                                    <div class="weekly2-img">
                                        <img src="{{ asset($post->urlHinh) }}" alt="{{ $post->tieuDe }}">
                                    </div>
                                    <div class="weekly2-caption">
                                        <span class="color1">
                                            {{ App\Models\Category::find($post->idLT)->ten }}
                                        </span>
                                        <h4>
                                            <a href="{{ url('/single-post', $post->slug) }}">
                                                {{ $post->tieuDe }}
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                    
        <!-- End Weekly-News -->
        <!--  Recent Articles start -->
        <div class="recent-articles">
            <div class="container">
                <div class="recent-wrapper">
                    <!-- section Tittle -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-tittle mb-30">
                                <h3>Recent Articles</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="recent-active dot-style d-flex dot-style">
                                @foreach ($randomPosts as $post)
                                <div class="single-recent mb-100">
                                    <div class="what-img">
                                        <img src="{{ asset($post->urlHinh) }}" alt="{{ $post->tieuDe }}">
                                    </div>
                                    <div class="what-cap">
                                        <span class="color1">
                                            {{ App\Models\Category::find($post->idLT)->ten }}
                                        </span>
                                        <h4>
                                            <a href="{{ url('/single-post', $post->slug) }}">
                                                {{ $post->tieuDe }}
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                                @endforeach
                                {{-- <div class="single-recent mb-100">
                                    <div class="what-img">
                                        <img src="{{ asset('fontend/img/news/recent3.jpg') }} " alt="">
                                    </div>
                                    <div class="what-cap">
                                        <span class="color1">Night party</span>
                                        <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                    </div>
                                </div>
                                <div class="single-recent mb-100">
                                    <div class="what-img">
                                        <img src="{{ asset('fontend/img/news/recent2.jpg') }} " alt="">
                                    </div>
                                    <div class="what-cap">
                                        <span class="color1">Night party</span>
                                        <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Recent Articles End -->
        <!--Start pagination -->
        <div class="pagination-area pb-45 text-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="single-wrap d-flex justify-content-center">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-start">
                                    <li class="page-item"><a class="page-link" href="#"><span
                                                class="flaticon-arrow roted"></span></a></li>
                                    <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                    <li class="page-item"><a class="page-link" href="#">02</a></li>
                                    <li class="page-item"><a class="page-link" href="#">03</a></li>
                                    <li class="page-item"><a class="page-link" href="#"><span
                                                class="flaticon-arrow right-arrow"></span></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End pagination  -->
    </main>
@endsection
