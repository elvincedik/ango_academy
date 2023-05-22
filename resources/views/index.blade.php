@extends('layouts.app')

@section('content')
{{-- carousels --}}
    <div id="myCarousel" class="carousel slide d-none d-sm-none d-md-flex d-lg-flex d-xl-flex" data-bs-ride="carousel">
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
                <img src="{{ asset('image/carousel1.png') }}" height="498px" width="100%" alt="">
                <div class="container">
                    <div class="carousel-caption fs-2">
                        <p>A wonderful <span style="color: #F58634">FIRST</span> out of home learning</p>
                        <p> <span style="color: #F58634">Experience</span> For you Child...</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('image/carousel2.png') }}" height="498px" width="100%" alt="">
                <div class="container">
                    <div class="carousel-caption fs-2">
                        <p>A wonderful <span style="color: #F58634">FIRST</span> out of home learning</p>
                        <p> <span style="color: #F58634">Experience</span> For you Child...</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('image/carousel3.png') }}" height="498px" width="100%" alt="">
                <div class="container">
                    <div class="carousel-caption fs-2">
                        <p>A wonderful <span style="color: #F58634">FIRST</span> out of home learning</p>
                        <p> <span style="color: #F58634">Experience</span> For you Child...</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('image/carousel4.png') }}" height="498px" width="100%" alt="">
                <div class="container">
                    <div class="carousel-caption fs-2">
                        <p>A wonderful <span style="color: #F58634">FIRST</span> out of home learning</p>
                        <p> <span style="color: #F58634">Experience</span> For you Child...</p>
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

    {{-- small devices carousels --}}
    <div id="myCarousel" class="carousel slide d-block d-sm-block d-md-none d-lg-none d-xl-none" data-bs-ride="carousel">
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
                        <p>A wonderful <span style="color: #F58634">FIRST</span> out of home learning</p>
                        <p> <span style="color: #F58634">Experience</span> For you Child...</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('image/carousel2.png') }}" height="350px" width="100%" alt="">
                <div class="container">
                    <div class="carousel-caption fs-2">
                        <p>A wonderful <span style="color: #F58634">FIRST</span> out of home learning</p>
                        <p> <span style="color: #F58634">Experience</span> For you Child...</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('image/carousel3.png') }}" height="350px" width="100%" alt="">
                <div class="container">
                    <div class="carousel-caption fs-2">
                        <p>A wonderful <span style="color: #F58634">FIRST</span> out of home learning</p>
                        <p> <span style="color: #F58634">Experience</span> For you Child...</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('image/carousel4.png') }}" height="350px" width="100%" alt="">
                <div class="container">
                    <div class="carousel-caption fs-2">
                        <p>A wonderful <span style="color: #F58634">FIRST</span> out of home learning</p>
                        <p> <span style="color: #F58634">Experience</span> For you Child...</p>
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
        <h2 class="mt-5 mb-4 ms-3" style="font-weight: 700; font-size: 30px; line-height: 45px;">SOME OF OUR <span style="color: #6665B5">ACTIVITIES</span></h2>
        <div class="row ms-2 me-2">
            <div class="col-lg-4">
                <img src="{{ asset('image/sport_icon.png') }}" height="50px" alt="">
                <h2 class="fw-normal my-3">Sport</h2>
                <p class="fs-5 my-3">Sports are games such as football and other leisure activities which need physical effort and skill.</p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img src="{{ asset('image/music_icon.png') }}" height="50px" alt="" class="img-fluid">
                <h2 class="fw-normal my-3">Music</h2>
                <p class="fs-5 my-3">Music is expressing ideas and emotions in significant forms through the elements of rhythm and melody.</p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img src="{{ asset('image/painting_icon.png') }}" height="50px" alt="">
                <h2 class="fw-normal my-3">Painter</h2>
                <p class="fs-5 my-3">painting is the expression or application of human creative skill and imagination in a visual form.</p>
            </div><!-- /.col-lg-4 -->
        </div>
    </section>

{{-- latest blogs arranged in cards --}}
    <section class="container-fluid">
        <div class="row d-none d-sm-none d-md-flex d-lg-flex d-xl-flex">
            <div class="mx-auto col-xl-6 col-lg-6 col-md-8 col-sm-12 col-xs-12 my-5 text-background">
                <img src="{{ asset('image/Pattern.png')}}" alt="" width="45px" height="45px" class="img-fluid blog-bg-pattern">
                <h2 class="blog-sub-heading">Latest Blog</h2>
            </div>
        </div>

        {{-- small devices --}}
        <div class="row d-block d-sm-block d-md-none d-lg-none d-xl-none">
            <div class="mx-auto col-xl-6 col-lg-6 col-md-8 col-sm-12 col-xs-12 mt-5 mb-5 text-background" style="">
                <img src="{{ asset('image/Pattern.png')}}" alt="" width="45px" height="45px" class="img-fluid small-bg-pattern">
                <h2 class="small-sub-heading">Latest Blog</h2>
            </div>
        </div>


        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mx-3 mt-3">
            @foreach ($blogs as $blog)

            <div class="col-lg-4 col-md-6 mx-md-auto col-sm-11 mx-sm-auto col-12">
                <a href="{{ route('blog.show', $blog->id)}}">
                   <div class="card shadow-lg">
                        <img src="{{ asset('storage/'.$blog->image) }}" class="" alt="" height="400px" width="100%">

                        <div class="card-body">
                            <p class="card-text">
                                {{$blog->details = Str::limit($blog->details, 70)}}
                            </p>
                            <h5>
                                Headmaster <i class="fa-solid fa-comments mx-3"></i> <i class="fa-sharp fa-solid fa-eye mx-3"></i>29
                            </h5>
                            <p>{{ $blog->created_at->format('F j, Y, g:i a') }}</p>

                        </div>
                    </div>
                </a>

            </div>
            @endforeach



        </div>
    </section>

    {{-- button --}}
    <div class="container-fluid d-flex justify-content-end">
        <a class="btn btn-lg my-5 text-light mx-4" href="{{ route('news-blog')}}" style="background-color: #6665B5">
            more articles <i class="fa-sharp fa-solid fa-arrow-right"></i>
        </a>
    </div>

    {{-- teams --}}
    <section class="container-fluid custom-team-section">
        <div class="row d-none d-sm-none d-md-flex d-lg-flex d-xl-flex">
            <div class="mx-auto col-xl-6 col-lg-6 col-md-8 col-sm-12 col-xs-12 mt-5 mb-5 text-background">
                <img src="{{ asset('image/Pattern.png')}}" alt="" width="45px" height="45px" class="img-fluid team-bg-pattern">
                <h2 id="team-head" class="team-sub-heading">Meet Our Team</h2>
            </div>
        </div>

        {{-- small devices subheading--}}
        <div class="row d-block d-sm-block d-md-none d-lg-none d-xl-none">
            <div class="mx-auto col-xl-6 col-lg-6 col-md-8 col-sm-12 col-xs-12 mt-5 mb-5 text-background" style="">
                <img src="{{ asset('image/Pattern.png')}}" alt="" width="45px" height="45px" class="img-fluid small-team-bg-pattern">
                <h2 class="small-team-heading">Meet Our Team</h2>
            </div>
        </div>

        {{-- teams slider --}}
        <div class="row">
            <div class="col-lg-1 d-flex justify-content-center align-items-center">
                <div class="team-slider">
                    <img src="{{asset('image/team_Slider.png')}}" height="50px" alt="">
                </div>
            </div>
            <div class="col-lg-10">
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
            <div class="col-lg-1 d-flex justify-content-center align-items-center">
                <div class="team-slider">
                    <img src="{{asset('image/team_Slider2.png')}}" height="50px" alt="">
                </div>
            </div>
        </div>
    </section>



{{-- gallery --}}
    <section class="container-fluid custom-gallery-section">
        <h2 id="gallery-head">Our Gallery</h2>
        <div class="row">
            @foreach ($galleries as $gallery)

            <div class="col-lg-4 mb-3 col-md-6 mx-md-auto">
                <div class="card shadow">
                    <img src="{{ asset('storage/'.$gallery->image )}}" alt="" height="300px">
                </div>
            </div>

            {{-- <div class="col-lg-4 mb-3">
                <div class="card">
                    <img class="img-fluid" src="{{asset('image/gallery_image2.png')}}" alt="">
                </div>
            </div>
            <div class="col-lg-4 mb-3">
                <div class="card">
                    <img class="img-fluid" src="{{asset('image/gallery_image3.png')}}" alt="">
                </div>
            </div> --}}
            @endforeach
        </div>
    </section>

    {{-- button --}}
    <div class="container-fluid d-flex justify-content-end">
        <a href="{{ route('gallery')}}" class="btn btn-lg mb-5 text-light mx-4" style="background-color: #6665B5">
            More pictures <i class="fa-sharp fa-solid fa-arrow-right"></i>
        </a>
    </div>

@endsection
