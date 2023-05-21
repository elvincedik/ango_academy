@extends('layouts.app')

@section('content')
{{-- Xl screen carousels --}}
    <div id="myCarousel" class="carousel slide d-none d-sm-none d-md-none d-lg-none d-xl-block" data-bs-ride="carousel" data-aos="zoom-out" data-aos-duration="1000" data-aos-delay="200">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" aria-label="Slide 1" class="active"
                aria-current="true"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"
                class=""></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"
                class=""></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"
                class=""></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('image/carousel1.png') }}" height="600px" width="100%" alt="" class="">
                <div class="container">
                    <div class="carousel-caption fs-2">
                        <p class="display-5">A wonderful <span style="color: #F58634">FIRST</span> out of home learning</p>
                        <p class="display-5"> <span style="color: #F58634">Experience</span> For you Child...</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('image/carousel2.png') }}" height="600px" width="100%" alt="">
                <div class="container">
                    <div class="carousel-caption fs-2">
                        <p class="display-5">A wonderful <span style="color: #F58634">FIRST</span> out of home learning</p>
                        <p class="display-5"> <span style="color: #F58634">Experience</span> For you Child...</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('image/carousel3.png') }}" height="600" width="100%" alt="">
                <div class="container">
                    <div class="carousel-caption fs-2">
                        <p class="display-5">A wonderful <span style="color: #F58634">FIRST</span> out of home learning</p>
                        <p class="display-5"> <span style="color: #F58634">Experience</span> For you Child...</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('image/carousel4.png') }}" height="600px" width="100%" alt="">
                <div class="container">
                    <div class="carousel-caption fs-2">
                        <p class="display-5">A wonderful <span style="color: #F58634">FIRST</span> out of home learning</p>
                        <p class="display-5"> <span style="color: #F58634">Experience</span> For you Child...</p>
                    </div>
                </div>
            </div>
        </div>


        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    {{-- lg screen carousels --}}
    <div id="myCarousel" class="carousel slide d-none d-sm-none d-md-none d-lg-block d-xl-none" data-bs-ride="carousel" data-aos="zoom-out" data-aos-duration="1000" data-aos-delay="200">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" aria-label="Slide 1" class="active"
                aria-current="true"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"
                class=""></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"
                class=""></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"
                class=""></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('image/carousel1.png') }}" height="450px" width="100%" alt="">
                <div class="container">
                    <div class="carousel-caption fs-2">
                        <p>A wonderful <span style="color: #F58634">FIRST</span> out of home learning</p>
                        <p> <span style="color: #F58634">Experience</span> For you Child...</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('image/carousel2.png') }}" height="450px" width="100%" alt="">
                <div class="container">
                    <div class="carousel-caption fs-2">
                        <p class="display-6">A wonderful <span style="color: #F58634">FIRST</span> out of home learning</p>
                        <p class="display-6"> <span style="color: #F58634">Experience</span> For you Child...</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('image/carousel3.png') }}" height="450px" width="100%" alt="">
                <div class="container">
                    <div class="carousel-caption fs-2">
                        <p class="display-6">A wonderful <span style="color: #F58634">FIRST</span> out of home learning</p>
                        <p class="display-6"> <span style="color: #F58634">Experience</span> For you Child...</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('image/carousel4.png') }}" height="450px" width="100%" alt="">
                <div class="container">
                    <div class="carousel-caption fs-2">
                        <p class="display-6">A wonderful <span style="color: #F58634">FIRST</span> out of home learning</p>
                        <p class="display-6"> <span style="color: #F58634">Experience</span> For you Child...</p>
                    </div>
                </div>
            </div>
        </div>


        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    {{-- md screen carousels --}}
    <div id="myCarousel" class="carousel slide d-none d-sm-none d-md-block d-lg-none d-xl-none" data-bs-ride="carousel" data-aos="zoom-out" data-aos-duration="1000" data-aos-delay="200">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" aria-label="Slide 1" class="active"
                aria-current="true"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"
                class=""></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"
                class=""></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"
                class=""></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('image/carousel1.png') }}" height="350px" width="100%" alt="">
                <div class="container">
                    <div class="carousel-caption fs-2">
                        <p style="font-size: 16px">A wonderful <span style="color: #F58634">FIRST</span> out of home learning</p>
                        <p style="font-size: 16px"> <span style="color: #F58634">Experience</span> For you Child...</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('image/carousel2.png') }}" height="350px" width="100%" alt="">
                <div class="container">
                    <div class="carousel-caption fs-2">
                        <p style="font-size: 16px">A wonderful <span style="color: #F58634">FIRST</span> out of home learning</p>
                        <p style="font-size: 16px"> <span style="color: #F58634">Experience</span> For you Child...</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('image/carousel3.png') }}" height="350px" width="100%" alt="">
                <div class="container">
                    <div class="carousel-caption fs-2">
                        <p style="font-size: 16px">A wonderful <span style="color: #F58634">FIRST</span> out of home learning</p>
                        <p style="font-size: 16px"> <span style="color: #F58634">Experience</span> For you Child...</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('image/carousel4.png') }}" height="350px" width="100%" alt="">
                <div class="container">
                    <div class="carousel-caption fs-2">
                        <p style="font-size: 16px">A wonderful <span style="color: #F58634">FIRST</span> out of home learning</p>
                        <p style="font-size: 16px"> <span style="color: #F58634">Experience</span> For you Child...</p>
                    </div>
                </div>
            </div>
        </div>


        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    {{-- sm screen carousels --}}
    <div id="myCarousel" class="carousel slide d-none d-sm-block d-md-none d-lg-none d-xl-none" data-bs-ride="carousel" data-aos="zoom-out" data-aos-duration="1000" data-aos-delay="200">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" aria-label="Slide 1" class="active"
                aria-current="true"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"
                class=""></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"
                class=""></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"
                class=""></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('image/carousel1.png') }}" height="300px" width="100%" alt="">
                <div class="container">
                    <div class="carousel-caption fs-2">
                        <p style="font-size: 15px">A wonderful <span style="color: #F58634">FIRST</span> out of home learning</p>
                        <p  style="font-size: 15px"> <span style="color: #F58634">Experience</span> For you Child...</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('image/carousel2.png') }}" height="300px" width="100%" alt="">
                <div class="container">
                    <div class="carousel-caption fs-2">
                        <p  style="font-size: 15px">A wonderful <span style="color: #F58634">FIRST</span> out of home learning</p>
                        <p  style="font-size: 15px"> <span style="color: #F58634">Experience</span> For you Child...</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('image/carousel3.png') }}" height="300px" width="100%" alt="">
                <div class="container">
                    <div class="carousel-caption fs-2">
                        <p  style="font-size: 15px">A wonderful <span style="color: #F58634">FIRST</span> out of home learning</p>
                        <p  style="font-size: 15px"> <span style="color: #F58634">Experience</span> For you Child...</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('image/carousel4.png') }}" height="300px" width="100%" alt="">
                <div class="container">
                    <div class="carousel-caption fs-2">
                        <p  style="font-size: 15px">A wonderful <span style="color: #F58634">FIRST</span> out of home learning</p>
                        <p  style="font-size: 15px"> <span style="color: #F58634">Experience</span> For you Child...</p>
                    </div>
                </div>
            </div>
        </div>


        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    {{-- xs screen carousels --}}
    <div id="myCarousel" class="carousel slide d-block d-sm-none d-md-none d-lg-none d-xl-none" data-bs-ride="carousel" data-aos="zoom-out" data-aos-duration="1000" data-aos-delay="200">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" aria-label="Slide 1" class="active"
                aria-current="true"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"
                class=""></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"
                class=""></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"
                class=""></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('image/carousel1.png') }}" height="250px" width="100%" alt="">
                <div class="container">
                    <div class="carousel-caption fs-2">
                        <p style="font-size: 14px">A wonderful <span style="color: #F58634">FIRST</span> out of home learning</p>
                        <p style="font-size: 14px"> <span style="color: #F58634">Experience</span> For you Child...</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('image/carousel2.png') }}" height="250px" width="100%" alt="">
                <div class="container">
                    <div class="carousel-caption fs-2">
                        <p style="font-size: 14px">A wonderful <span style="color: #F58634">FIRST</span> out of home learning</p>
                        <p style="font-size: 14px"> <span style="color: #F58634">Experience</span> For you Child...</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('image/carousel3.png') }}" height="250px" width="100%" alt="">
                <div class="container">
                    <div class="carousel-caption fs-2">
                        <p style="font-size: 14px">A wonderful <span style="color: #F58634">FIRST</span> out of home learning</p>
                        <p style="font-size: 14px"> <span style="color: #F58634">Experience</span> For you Child...</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('image/carousel4.png') }}" height="250px" width="100%" alt="">
                <div class="container">
                    <div class="carousel-caption fs-2">
                        <p style="font-size: 14px">A wonderful <span style="color: #F58634">FIRST</span> out of home learning</p>
                        <p style="font-size: 14px"> <span style="color: #F58634">Experience</span> For you Child...</p>
                    </div>
                </div>
            </div>
        </div>


        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

{{-- sports arranged in cards --}}
    <section class="container-fluid custom-bg-1 mb-3">
        <h2 class="mt-5 mb-4 ms-3" style="font-weight: 700; font-size: 30px; line-height: 45px;" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">SOME OF OUR <span style="color: #6665B5">ACTIVITIES</span></h2>
        <div class="row ms-2 me-2">
            <div class="col-lg-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <img src="{{ asset('image/sport_icon.png') }}" height="50px" alt="">
                <h2 class="fw-normal my-3">Sport</h2>
                <p class="fs-5 my-3">Sports are games such as football and other leisure activities which need physical effort and skill.</p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                <img src="{{ asset('image/music_icon.png') }}" height="50px" alt="" class="img-fluid">
                <h2 class="fw-normal my-3">Music</h2>
                <p class="fs-5 my-3">Music is expressing ideas and emotions in significant forms through the elements of rhythm and melody.</p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                <img src="{{ asset('image/painting_icon.png') }}" height="50px" alt="">
                <h2 class="fw-normal my-3">Painter</h2>
                <p class="fs-5 my-3">painting is the expression or application of human creative skill and imagination in a visual form.</p>
            </div><!-- /.col-lg-4 -->
        </div>
    </section>

    {{-- latest blogs arranged in cards --}}
        {{-- sub-heading --}}
    <section class="container-fluid">
        <div class="row d-none d-sm-none d-md-flex d-lg-flex d-xl-flex">
            <div class="mx-auto col-xl-6 col-lg-6 col-md-8 col-sm-12 col-xs-12 my-5 text-background" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <img src="{{ asset('image/Pattern.png')}}" alt="" width="45px" height="45px" class="img-fluid blog-bg-pattern">
                <h2 class="blog-sub-heading">Latest Blog</h2>
            </div>
        </div>
            {{-- body --}}
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mx-3 mt-3 d-none d-sm-none d-md-flex d-lg-flex d-xl-flex">
            @foreach ($blogs as $key => $blog)

                <div class="col-lg-4 col-md-6 mx-md-auto col-sm-11 mx-sm-auto mx-auto mx-lg-auto col-12">
                    <a href="{{ route('blog.show', $blog->id)}}" style="text-decoration: none; color:black">
                    <div class="blog-card" style="width: 90%" data-aos="zoom-in" data-aos-duration="1500" @if ($key === 0) data-aos-delay="300" @elseif ($key == 1) data-aos-delay="400" @else data-aos-delay="500" @endif>

                            <div class="blog-img">
                                <img src="{{ asset('storage/'.$blog->image) }}" class="" alt="" height="300px" width="100%">
                            </div>


                            <div class="card-body">
                                <h4 class="card-title">{{$blog->title}}</h4>
                                <p class="card-text">
                                    {{$blog->details = Str::limit($blog->details, 70)}}
                                </p>
                                <h5>
                                    By Admin <i class="fa-solid fa-comments mx-3"></i>{{ $blog->comment->count() }} <i class="fa-sharp fa-solid fa-eye mx-3"></i>{{ $blog->comment->count() }}
                                </h5>
                                <p>{{ $blog->created_at->format('F j, Y, g:i a') }}</p>

                                <p class="read-more">Read More &rarr;</p>

                            </div>

                        </div>
                    </a>

                </div>
            @endforeach

        </div> {{-- end of large devices for blog --}}


        {{-- small devices for blog section--}}
            {{-- sub-heading --}}
        <div class="row d-block d-sm-block d-md-none d-lg-none d-xl-none pt-5">
            <div class="mx-auto col-xl-6 col-lg-6 col-md-8 col-sm-12 col-xs-12 mb-5 text-background" style="" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <img src="{{ asset('image/Pattern.png')}}" alt="" width="45px" height="45px" class="img-fluid small-bg-pattern">
                <h2 class="small-sub-heading">Latest Blog</h2>
            </div>
        </div>

            {{-- body --}}
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mx-3 pt-1 d-block d-sm-block d-md-none d-lg-none d-xl-none">
            @foreach ($blogs as $key => $blog)

                <div class="col-lg-4 col-md-6 mx-md-auto col-sm-11 mx-sm-auto mx-auto mx-lg-auto col-12">
                    <a href="{{ route('blog.show', $blog->id)}}" style="text-decoration: none; color:black">
                    <div class="blog-card" style="width: 95%" data-aos="zoom-in" data-aos-duration="1500" @if ($key === 0) data-aos-delay="300" @elseif ($key == 1) data-aos-delay="400" @else data-aos-delay="500" @endif>

                            <div class="blog-img">
                                <img src="{{ asset('storage/'.$blog->image) }}" class="" alt="" height="" width="100%">
                            </div>


                            <div class="card-body">
                                <h4 class="card-title">{{$blog->title}}</h4>
                                <p class="card-text">
                                    {{$blog->details = Str::limit($blog->details, 70)}}
                                </p>
                                <h5>
                                    By Admin <i class="fa-solid fa-comments mx-3"></i>{{ $blog->comment->count() }} <i class="fa-sharp fa-solid fa-eye mx-3"></i>{{ $blog->comment->count() }}
                                </h5>
                                <p>{{ $blog->created_at->format('F j, Y, g:i a') }}</p>

                                <p class="read-more">Read More &rarr;</p>

                            </div>

                        </div>
                    </a>

                </div>
            @endforeach

        </div> {{-- end of small devices for blog --}}

    </section>

    {{-- button for more blogs--}}
    <div class="container-fluid d-flex justify-content-end" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
        <a class="btn btn-lg my-5 text-light mx-4" href="{{ route('news-blog')}}" style="background-color: #6665B5">
            more articles <i class="fa-sharp fa-solid fa-arrow-right"></i>
        </a>
    </div>

    {{-- teams --}}
    <section class="container-fluid custom-team-section">
        <div class="row d-none d-sm-none d-md-flex d-lg-flex d-xl-flex" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
            <div class="mx-auto col-xl-6 col-lg-6 col-md-8 col-sm-12 col-xs-12 mt-5 mb-5 text-background">
                <img src="{{ asset('image/Pattern.png')}}" alt="" width="45px" height="45px" class="img-fluid team-bg-pattern">
                <h2 id="team-head" class="team-sub-heading">Meet Our Team</h2>
            </div>
        </div>

        {{-- small devices subheading--}}
        <div class="row d-block d-sm-block d-md-none d-lg-none d-xl-none">
            <div class="mx-auto col-xl-6 col-lg-6 col-md-8 col-sm-12 col-xs-12 mt-5 mb-5 text-background" style="" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <img src="{{ asset('image/Pattern.png')}}" alt="" width="45px" height="45px" class="img-fluid small-team-bg-pattern">
                <h2 class="small-team-heading">Meet Our Team</h2>
            </div>
        </div>

        {{-- teams slider --}}
        <div class="row" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
            <div class="col-lg-1 col-md-2 col-sm-1 d-flex justify-content-center align-items-center d-none d-sm-flex">
                <div class="team-slider">
                    <img src="{{asset('image/team_Slider.png')}}" height="50px" alt="">
                </div>
            </div>
            <div class="col-lg-10 col-md-8 col-sm-10">
                <div class="testimonials-slider swiper">
                    <div class="swiper-wrapper my-5">

                            <div class="swiper-slide">
                                <div class="cards custom-cards shadow-lg">
                                    <div class="d-flex justify-content-center">
                                        <div class="team-image-frame d-flex justify-content-center align-items-center">
                                            <img class="img-fluid" src="{{asset('image/team_image1.png')}}" alt="">
                                        </div>
                                    </div>
                                    <h3 class="d-flex justify-content-center team-name">Afuwape J. Abiodun</h3>
                                    <p class="d-flex justify-content-center team-position">Headmaster</p>
                                    <div class="d-flex justify-content-center">
                                        <a href=""><i class="fa-brands fa-facebook px-3 text-primary"></i></a>
                                        <a href=""><i class="fa-brands fa-whatsapp px-3 text-success"></i></a>
                                        <a href=""><i class="fa-brands fa-instagram px-3 text-warning"></i></a>
                                    </div>
                                </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                                <div class="cards custom-cards shadow-lg">
                                    <div class="d-flex justify-content-center">
                                        <div class="team-image-frame d-flex justify-content-center align-items-center">
                                            <img class="img-fluid" src="{{asset('image/team_image2.png')}}" alt="">
                                        </div>
                                    </div>
                                    <h3 class="d-flex justify-content-center team-name">Afuwape J. Abiodun</h3>
                                    <p class="d-flex justify-content-center team-position">Headmaster</p>
                                    <div class="d-flex justify-content-center">
                                        <a href=""><i class="fa-brands fa-facebook px-3 text-primary"></i></a>
                                        <a href=""><i class="fa-brands fa-whatsapp px-3 text-success"></i></a>
                                        <a href=""><i class="fa-brands fa-instagram px-3 text-warning"></i></a>
                                    </div>
                                </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                                <div class="cards custom-cards shadow-lg">
                                    <div class="d-flex justify-content-center">
                                        <div class="team-image-frame d-flex justify-content-center align-items-center">
                                            <img class="img-fluid" src="{{asset('image/team_image3.png')}}" alt="">
                                        </div>
                                    </div>
                                    <h3 class="d-flex justify-content-center team-name">Afuwape J. Abiodun</h3>
                                    <p class="d-flex justify-content-center team-position">Headmaster</p>
                                    <div class="d-flex justify-content-center">
                                        <a href=""><i class="fa-brands fa-facebook px-3 text-primary"></i></a>
                                        <a href=""><i class="fa-brands fa-whatsapp px-3 text-success"></i></a>
                                        <a href=""><i class="fa-brands fa-instagram px-3 text-warning"></i></a>
                                    </div>
                                </div>
                            </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                  </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-1 d-flex justify-content-center align-items-center d-none d-sm-flex">
                <div class="team-slider">
                    <img src="{{asset('image/team_Slider2.png')}}" height="50px" alt="">
                </div>
            </div>
        </div>
    </section>

    {{-- copied card carousel --}}



{{-- gallery --}}
    <section class="container-fluid custom-gallery-section">
        <div class="row d-none d-sm-none d-md-flex d-lg-flex d-xl-flex">
            <div class="mx-auto col-xl-6 col-lg-6 col-md-8 col-sm-12 col-xs-12 mt-5 mb-5 text-background" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <img src="{{ asset('image/Pattern.png')}}" alt="" width="45px" height="45px" class="img-fluid team-bg-pattern">
                <h2 id="team-head" class="team-sub-heading">Our Gallery</h2>
            </div>
        </div>
        {{-- body --}}
        <div class="row d-none d-sm-none d-md-flex d-lg-flex d-xl-flex">
            @foreach ($galleries as $key => $gallery)

            <div class="col-lg-4 mb-3 col-md-6 mx-md-auto" data-aos="zoom-in" data-aos-duration="1000" @if ($key === 0) data-aos-delay="300" @elseif ($key === 1) data-aos-delay="400" @else data-aos-delay="500" @endif>
                <div class="card gallery-home">
                    <img src="{{ asset('storage/'.$gallery->image )}}" alt="" height="350px">
                </div>
            </div>

            @endforeach
        </div>

        {{-- small devices subheading--}}
            {{-- sub-heading --}}
        <div class="row d-block d-sm-block d-md-none d-lg-none d-xl-none pt-3">
            <div class="mx-auto col-xl-6 col-lg-6 col-md-8 col-sm-12 col-xs-12 mt-5 mb-5 text-background" style="" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <img src="{{ asset('image/Pattern.png')}}" alt="" width="45px" height="45px" class="img-fluid small-team-bg-pattern">
                <h2 class="small-team-heading">Our Gallery</h2>
            </div>
        </div>
            {{-- body --}}
        <div class="row d-block d-sm-block d-md-none d-lg-none d-xl-none pt-3">
            @foreach ($galleries as $key => $gallery)

            <div class="col-lg-4 mb-3 col-md-6 mx-md-auto" data-aos="zoom-in" data-aos-duration="1000" @if ($key === 0) data-aos-delay="400" @elseif ($key === 1) data-aos-delay="400" @else data-aos-delay="400" @endif>
                <div class="card gallery-home">
                    <img src="{{ asset('storage/'.$gallery->image )}}" alt="" height="">
                </div>
            </div>

            @endforeach
        </div>
    </section>

    {{-- button --}}
    <div class="container-fluid d-flex justify-content-end" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
        <a href="{{ route('gallery')}}" class="btn btn-lg mb-5 text-light mx-4" style="background-color: #6665B5">
            More pictures <i class="fa-sharp fa-solid fa-arrow-right"></i>
        </a>
    </div>

@endsection
