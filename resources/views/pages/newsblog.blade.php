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
                <div class="col-lg-8">
                    <div id="main-news-col">
                        <img class="img-fluid" width="100%" src="{{ asset('storage/'.$blog->image)}}" alt="">
                        <div id="news1-desc">
                            <h2>
                                {{ $blog->title }}
                            </h2>
                            <p>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa, corporis?
                            </p>
                        </div>
                    </div>
                    <h5 class="mt-5">RECENT EVENT</h5>
                    <div class="row">
                        <div class="col-lg-3">
                            <h4><i class="fa-solid fa-user-tie mx-2"></i>Admin</h4>
                        </div>
                        <div class="col-lg-5">
                            <h4><i class="fa-solid fa-clock mx-2"></i>{{ $blog->created_at->format('F j, Y, g:i a') }}.</h4>
                        </div>
                        <div class="col-lg-4">
                                <h4><i class="fa-solid fa-comments mx-2"></i>no comments</h4>
                        </div>
                    </div>
                    <p>
                        {{$blog->details = Str::limit($blog->details, 150)}}
                    </p>
                    <button class="btn btn-lg text-light" style="background-color: #6665B5">
                        more articles <i class="fa-sharp fa-solid fa-arrow-right"></i>
                    </button>
                </div>
            @else
                <div class="col-lg-4">
                    <div class="row d-xl-flex d-lg-flex d-md-none d-sm-none d-none">

                        <div class="">
                            <img src="{{ asset('storage/'.$blog->image)}}" class="" alt="" width="100%">
                            <h5 class="mt-4" style="color: #6665B5;">TOP STORY</h5>
                            <p class="card-text">
                                {{$blog->details = Str::limit($blog->details, 70)}}
                            </p>
                            <a href="{{ route('blog.show', $blog->id)}}" id="top-story-link">READMORE &gt;&gt;&gt;</a>
                        </div>

                        {{-- <div class="mt-5">
                            <img src="{{ asset('storage/'.$blog->image)}}" class="img-fluid" alt="" width="100%">
                            <h5 class="mt-4" style="color: #6665B5;">TOP STORY</h5>
                            <p class="card-text">
                                {{$blog->details = Str::limit($blog->details, 70)}}
                            </p>
                            <a href="{{ route('blog.show', $blog->id)}}" id="top-story-link">READMORE &gt;&gt;&gt;</a>
                        </div> --}}
                    </div>
                </div>

    </div>

            <div class="row d-md-block d-sm-block d-block d-xl-none d-lg-none mt-3">
                <div class="col-md-6">
                    <img src="{{ asset('storage/'.$blog->image)}}" class="" alt="" width="100%">
                    <h5 class="mt-4" style="color: #6665B5;">TOP STORY</h5>
                    <p class="card-text">
                        {{$blog->details = Str::limit($blog->details, 70)}}
                    </p>
                    <a href="" id="top-story-link">READMORE &gt;&gt;&gt;</a>
                </div>

                <div class="col-md-6">
                    <img src="{{ asset('image/blog_image1.png') }}" class="img-fluid" alt="" width="100%">
                    <h5 class="mt-4" style="color: #6665B5;">TOP STORY</h5>
                    <p class="card-text">
                        the picture above, the text below and the number of likes and view will originate from the data
                        base, This what you are seing now is just temporal, ...
                    </p>
                    <a href="" id="top-story-link">READMORE &gt;&gt;&gt;</a>
                </div>
            </div>
            @endif
        @endforeach

</section>

{{-- blog session --}}
<section class="container-fluid pt-4" style="background-color: #F2F2F2;" >
    <div class="mb-5 title-div">
        <img src="{{ asset('image/Pattern.png')}}" alt="" width="45px" height="45x">
        <h2 class="text-start title">Latest Blog</h2>
    </div>
        <div class="row">
            @foreach ($blogs as $blog)

            <div class="col-lg-4 mb-3">
                <div class="card">
                    <img src="{{ asset('storage/'.$blog->image) }}" class="" alt="" height="450px" width="100%">

                    <div class="card-body">
                        <p class="card-text">
                            {{$blog->details = Str::limit($blog->details, 70)}}
                        </p>
                        <h5>
                            Headmaster <i class="fa-solid fa-comments mx-3"></i>10 <i class="fa-sharp fa-solid fa-eye mx-3"></i>29
                        </h5>
                        <p>{{ $blog->created_at->format('F j, Y, g:i a') }}</p>
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
