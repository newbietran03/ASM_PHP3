@extends('frontend.layouts.master')
@section('content')
    <main>
        <!-- Whats New Start -->
        <section class="whats-news-area pt-50 pb-20">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row d-flex justify-content-between">
                            <div class="col-lg-3 col-md-3">
                                <div class="section-tittle mb-30">
                                    <h3>{{$category_arr->ten}}</h3>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-12">
                                <!-- Nav Card -->
                                <div class="tab-content" id="nav-tabContent">
                                    <!-- card one -->
                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                        aria-labelledby="nav-home-tab">
                                        <div class="whats-news-caption">
                                            <div class="row">
                                                @foreach ($list_news as $news)
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="single-what-news mb-100">
                                                            <div class="what-img">
                                                                <a href="{{ url('/single-post', $news->tieuDe) }}">
                                                                    <img src="{{ asset('/' . $news->urlHinh) }}"
                                                                        alt="">
                                                                </a>
                                                            </div>
                                                            <div class="what-cap">
                                                                <span
                                                                    class="color1">{{ $category_arr->ten ?? 'Category' }}</span>
                                                                <h4>
                                                                    <a
                                                                        href="{{ url('/single-post', $news->slug) }}">{{ $news->tieuDe }}</a>
                                                                </h4>
                                                                {{-- <p>{{ $news->tomTat }}</p> --}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card two -->
                                    <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                        aria-labelledby="nav-profile-tab">
                                        <div class="whats-news-caption">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="{{ asset('fontend/img/news/whatNews1.jpg') }}"
                                                                alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner
                                                                    Contest</a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="{{ asset('fontend/img/news/whatNews2.jpg') }}"
                                                                alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner
                                                                    Contest</a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="{{ asset('fontend/img/news/whatNews3.jpg') }}"
                                                                alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner
                                                                    Contest</a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="{{ asset('fontend/img/news/whatNews4.jpg') }}"
                                                                alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner
                                                                    Contest</a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card three -->
                                    <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                        aria-labelledby="nav-contact-tab">
                                        <div class="whats-news-caption">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="{{ asset('fontend/img/news/whatNews1.jpg') }}"
                                                                alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner
                                                                    Contest</a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="{{ asset('fontend/img/news/whatNews2.jpg') }}"
                                                                alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner
                                                                    Contest</a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="{{ asset('fontend/img/news/whatNews3.jpg') }}"
                                                                alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner
                                                                    Contest</a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="{{ asset('fontend/img/news/whatNews4.jpg') }}"
                                                                alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner
                                                                    Contest</a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- card fure -->
                                    <div class="tab-pane fade" id="nav-last" role="tabpanel"
                                        aria-labelledby="nav-last-tab">
                                        <div class="whats-news-caption">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="{{ asset('fontend/img/news/whatNews1.jpg') }}"
                                                                alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner
                                                                    Contest</a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="{{ asset('fontend/img/news/whatNews2.jpg') }}"
                                                                alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner
                                                                    Contest</a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="{{ asset('fontend/img/news/whatNews3.jpg') }}"
                                                                alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner
                                                                    Contest</a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="{{ asset('fontend/img/news/whatNews4.jpg') }}"
                                                                alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner
                                                                    Contest</a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- card Five -->
                                    <div class="tab-pane fade" id="nav-nav-Sport" role="tabpanel"
                                        aria-labelledby="nav-Sports">
                                        <div class="whats-news-caption">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="{{ asset('fontend/img/news/whatNews1.jpg') }}"
                                                                alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner
                                                                    Contest</a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="{{ asset('fontend/img/news/whatNews2.jpg') }}"
                                                                alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner
                                                                    Contest</a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="{{ asset('fontend/img/news/whatNews3.jpg') }}"
                                                                alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner
                                                                    Contest</a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="{{ asset('fontend/img/news/whatNews4.jpg') }}"
                                                                alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner
                                                                    Contest</a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- card Six -->
                                    <div class="tab-pane fade" id="nav-techno" role="tabpanel"
                                        aria-labelledby="nav-technology">
                                        <div class="whats-news-caption">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="{{ asset('fontend/img/news/whatNews1.jpg') }}"
                                                                alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner
                                                                    Contest</a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="{{ asset('fontend/img/news/whatNews2.jpg') }}"
                                                                alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner
                                                                    Contest</a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="{{ asset('fontend/img/news/whatNews3.jpg') }}"
                                                                alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner
                                                                    Contest</a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="{{ asset('fontend/img/news/whatNews4.jpg') }}"
                                                                alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner
                                                                    Contest</a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Nav Card -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-40">
                            <h3>Follow Us</h3>
                        </div>
                        <!-- Flow Socail -->
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

        <!--Start pagination -->
        <!-- resources/views/vendor/pagination/custom.blade.php -->
<!-- View chính của bạn -->
<div class="pagination-area pb-45 text-center">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="single-wrap d-flex justify-content-center">
                    <nav aria-label="Page navigation example">
                        <!-- Sử dụng template phân trang tùy chỉnh -->
                        {{ $list_news->links('components.custome-page') }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>


        <!-- End pagination  -->
    </main>
@endsection
