@extends('layouts.app')

@section('content')
    {{-- sub-header --}}
    <div style="background-image: url('{{ asset('image/subheader.png')}}'); height: 150px;">
        <div class="sub-header-overlay d-flex align-items-center">
            <div class=" ms-4">
                <p class="sub-header-heading">News & Events</p>
                <p  class="sub-header-text"><a href="{{ route('home')}}" class="sub-header-link">Home</a> &rarr; News & Events</p>
            </div>
        </div>
    </div>

    {{-- news and events section --}}
<section id="news-and-event" class="container-fluid mb-5">
    <div class="row mt-5">
        @foreach($news as $key => $blog)
            @if($key === 0)
                <div class="col-lg-8" data-aos="slide-right" data-aos-duration="1000" data-aos-delay="300">
                    <div class="position-relative">
                        <img class="img-fluid" width="100%" src="{{ asset('storage/'.$blog->image)}}" alt="">
                        <div class="position-absolute bottom-0 bg-black bg-opacity-50 w-100 text-white p-1 p-lg-4">
                            <h2>
                                {{ $blog->title }}
                            </h2>
                            {{-- <p>
                                {{$blog->details = Str::limit($blog->details, 150)}}
                            </p> --}}
                        </div>
                    </div>
                    <h5 class="mt-5 fw-bold" style="color: #6665B5;" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">RECENT EVENT</h5>
                    <div class="row" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                        <div class="col-lg-3">
                            <h4 class="fw-bold"><i class="fa-solid fa-user-tie mx-2"></i>Admin</h4>
                        </div>
                        <div class="col-lg-5">
                            <h4 class="fw-bold"><i class="fa-solid fa-clock mx-2"></i>{{ $blog->created_at->format('F j, Y, g:i a') }}.</h4>
                        </div>
                        <div class="col-lg-4">
                            @if($blog->comment->count() > 1)
                                <h4 class="fw-bold"><i class="fa-solid fa-comments mx-2"></i>{{$blog->comment->count()}} comments</h4>
                            @elseif ($blog->comment->count() === 1 )
                                <h4 class="fw-bold"><i class="fa-solid fa-comments mx-2"></i>{{$blog->comment->count()}} comment</h4>
                            @else
                                <h4 class="fw-bold"><i class="fa-solid fa-comments mx-2"></i>no comment</h4>
                            @endif
                        </div>
                    </div>
                    <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        {{$blog->details = Str::limit($blog->details, 200)}}<br>
                    </p>
                    <a href="{{ route('blog.show', $blog->id)}}" class="btn btn-lg text-light" style="background-color: #6665B5" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                        more articles <i class="fa-sharp fa-solid fa-arrow-right"></i>
                    </a>
                </div>
                <div class="col-lg-4">
                    <div class="row d-xl-flex d-lg-flex d-md-none d-sm-none d-none">
                        @elseif( $key === 1)

                        <div class="" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                            <img src="{{ asset('storage/'.$blog->image)}}" class="" alt="" width="100%">
                            <h6 class="mt-4 fw-bold" style="color: #6665B5;">TOP STORY</h6>
                            <p class="card-text">
                                {{$blog->details = Str::limit($blog->details, 70)}}
                            </p>
                            <a href="{{ route('blog.show', $blog->id)}}" id="top-story-link"><b>READMORE &gt;&gt;&gt;</b></a>
                        </div>

            @else

                        <div class="mt-5">
                            <img src="{{ asset('storage/'.$blog->image)}}" class="img-fluid" alt="" width="100%" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                            <h6 class="mt-4 fw-bold" style="color: #6665B5;" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">TOP STORY</h6>
                            <p class="card-text" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                                {{$blog->details = Str::limit($blog->details, 70)}}
                            </p>
                            <a href="{{ route('blog.show', $blog->id)}}" id="top-story-link" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500"><b>READMORE &gt;&gt;&gt;</b></a>
                        </div>


                    </div>
                </div>

            @endif


            <div class="row d-md-block d-sm-block d-block d-xl-none d-lg-none mt-5">
                @if ($key === 0)
                    <div class="col-md-6">
                        <img src="{{ asset('storage/'.$blog->image)}}" class="img-fluid" alt="" width="100%">
                        <h5 class="mt-4" style="color: #6665B5;">TOP STORY</h5>
                        <p class="card-text">
                            {{$blog->details = Str::limit($blog->details, 70)}}
                        </p>
                        <a href="{{ route('blog.show', $blog->id)}}" id="top-story-link">READMORE &gt;&gt;&gt;</a>
                    </div>

                @elseif($key === 2)

                    <div class="col-md-6">
                        <img src="{{ asset('storage/'.$blog->image) }}" class="img-fluid" alt="" width="100%">
                        <h5 class="mt-4" style="color: #6665B5;">TOP STORY</h5>
                        <p class="card-text">
                            {{$blog->details = Str::limit($blog->details, 70)}}
                        </p>
                        <a href="{{ route('blog.show', $blog->id)}}" id="top-story-link">READMORE &gt;&gt;&gt;</a>
                    </div>
                @endif



            </div>

        @endforeach
    </div>
</section>

{{-- blog session --}}
<section class="container-fluid pt-4" style="background-color: #F2F2F2;">
    <div class="mb-5 title-div ms-lg-5 ms-xl-5 ms-md-4 ms-sm-3 ms-2" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
        <img src="{{ asset('image/Pattern.png')}}" alt="" width="45px" height="45x">
        <h2 class="text-start title fw-bold">Latest Blog</h2>
    </div>
        <div class="row">
            @foreach ($blogs as $blog)

            <div class="col-lg-4 mb-3 p-3 blog-card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                <img src="{{ asset('storage/'.$blog->image) }}" class="img-fluid w-100" alt="" height="350px">
                <p>{{$blog->details = Str::limit($blog->details, 200)}}</p>
                <h5 class="fw-bold">{{ $blog->created_at->format('F j, Y, g:i a') }} by Admin</h5>
                <div class="row">
                    <div class="col-lg-4">
                        <h5><i class="fa-solid fa-comments mx-3"></i>{{ $blog->comment->count() }}</h5>
                    </div>
                    <div class="offset-lg-3 col-lg-5">
                        <a href="{{ route('blog.show', $blog->id)}}" id="top-story-link"><small>READMORE &gt;&gt;&gt;</small></a>
                    </div>
                </div>
            </div>

            @endforeach

            {{-- <div class="col-lg-4">
                <div class="card">
                    <img src="{{ asset('image/blog_image2.png') }}" class="img-fluid" alt="">

                    <div class="card-body">
                        <p class="card-text">
                            the picture above, the text below and the number of likes and view will originate
                            from the data base, This what you are seing now is just temporal, ...
                        </p>
                        <h5>
                            Headmaster <i class="fa-solid fa-comments mx-3"></i>10 <i class="fa-sharp fa-solid fa-eye mx-3"></i>29
                        </h5>
                        <p>september 10, 2021</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <img src="{{ asset('image/blog_image3.png') }}" class="img-fluid" alt="">

                    <div class="card-body">
                        <p class="card-text">
                            the picture above, the text below and the number of likes and view will originate
                            from the data base, This what you are seing now is just temporal, ...
                        </p>
                        <h5>
                            Headmaster <i class="fa-solid fa-comments mx-3"></i>10 <i class="fa-sharp fa-solid fa-eye mx-3"></i>29
                        </h5>
                        <p>september 10, 2021</p>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
@endsection
