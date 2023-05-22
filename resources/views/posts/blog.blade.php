@extends('layouts.app')

@section('content')
    {{-- sub-header --}}
    <div style="background-image: url('{{ asset('image/subheader.png') }}'); height: 150px;">
        <div class="sub-header-overlay d-flex align-items-center">
            <div class=" ms-4">

                    <p class="sub-header-heading">{{($blog->category)->name}}</p>

                    <p class="sub-header-text"><a href="{{ route('home') }}" class="sub-header-link">Home</a> &rarr; {{($blog->category)->name}}</p>

            </div>
        </div>
    </div>

    <div class="container-fluid">
        {{-- <h1 class="text-center mt-5">{{ $blog->title }}</h1> --}}

        {{-- large devices --}}
        <div class="row mt-5 mb-5 d-md-flex d-sm-none d-none d-lg-flex d-xl-flex">
            <div class="offset-lg-2 offset-xl-2 col-md-10 offset-md-1 col-lg-8 col-xl-8 col-sm-12 col-xs-12">
                <div id="main-news-col" class="mb-3">
                    <img class="img-fluid" width="100%" src="{{ asset('storage/'.$blog->image)}}" alt="">
                    <div id="news1-desc">
                        <h2>
                            {{ $blog->title }}
                        </h2>
                    </div>
                </div>
                <p class="text mb-5">{{ $blog->details }}</p>

                <p>Leave a Reply</p>
                <p>Your email will not be published</p>
                <form action="{{ route('comment.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    {{-- name --}}
                    <div class="mb-3">
                        <input type="text" class="form-control" name="name" placeholder="Name" value="{{ old('name') }}" required>

                        {{-- @error('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror --}}

                    </div>


                    <div class="mb-3">
                        <input type="hidden" name="blog_id" class="form-control" value="{{ $blog->id}}">
                    </div>

                    {{-- email --}}
                    <div class="mb-3">
                        <input type="email" class="form-control" name="email" placeholder="Email"
                            @error('email') is-invalid @enderror value="{{ old('email') }}">

                        @error('email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror

                    </div>

                    {{-- comments --}}
                    <div class="mb-3">
                        <textarea name="comments" id="" cols="50" rows="5" placeholder="comments..." class="form-control" value="{{ old('comments') }}" required></textarea>

                        {{-- @error('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror --}}

                    </div>

                    <div class="d-flex justify-content-end mb-5">
                        <button class="btn form-btn">Post Comment</button>
                    </div>
                </form>

                <h3>Comments</h3>
                @if ($blog->comment->count() > 0)
                    @foreach($blog->comment as $comments)
                        <hr>
                        <h5>{{ $comments->comments }}</h5>
                        <small class="d-flex justify-content-end"><b>{{ $comments->name}}</b></small><br> <small class="d-flex justify-content-end" style="margin-top: -25px">{{ $comments->email }}</small>
                        <form action="{{ route('comment.delete', $comments->id) }}" method="POST" class=" d-flex justify-content-end">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this comment?')"><i class="bi bi-trash3-fill"></i></button>
                        </form>
                    @endforeach
                    @else
                    <p>No comments yet. Be the first to comment!</p>
                @endif


            </div>
        </div>

        {{-- small devices --}}
        <div class="row mt-5 mb-5 d-xl-none d-lg-none d-md-none d-sm-block d-xs-block ms-2 me-2">
            <div id="main-news-col" class="mb-3">
                <img class="img-fluid" width="100%" src="{{ asset('storage/'.$blog->image)}}" alt="">
                <div id="news1-desc">
                    <h2>
                        {{ $blog->title }}
                    </h2>
                </div>
            </div>
            <div class="col-md-5 col-lg-4 col-xl-4 col-sm-12 col-xs-12">
                <p class="text-small mb-5">{{ $blog->details }}</p>
            </div>

            <p>Leave a Reply</p>
                <p class="text-small">Your email will not be published</p>
                <form action="{{ route('comment.store')}}" method="post" enctype="multipart/form-data" class="text-small">
                    @csrf
                    {{-- name --}}
                    <div class="mb-3">
                        <input type="text" class="form-control" name="name" placeholder="Name" value="{{ old('name') }}" required>

                        {{-- @error('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror --}}

                    </div>


                    <div class="mb-3">
                        <input type="hidden" name="blog_id" class="form-control" value="{{ $blog->id}}">
                    </div>

                    {{-- email --}}
                    <div class="mb-3">
                        <input type="email" class="form-control" name="email" placeholder="Email"
                            @error('email') is-invalid @enderror value="{{ old('email') }}">

                        @error('email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror

                    </div>

                    {{-- comments --}}
                    <div class="mb-3">
                        <textarea name="comments" id="" cols="50" rows="5" class="form-control" value="{{ old('comments') }}" required>comments...</textarea>

                        {{-- @error('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror --}}

                    </div>

                    <div class="d-flex justify-content-end mb-5">
                        <button class="btn form-btn btn-small">Post Comment</button>
                    </div>
                </form>

                <h3 class="text-small">Comments</h3>
                @if ($blog->comment->count() > 0)
                    @foreach($blog->comment as $comments)
                        <hr>
                        <h5 class="text-small">{{ $comments->comments }}</h5>
                        <p class=""><b>{{ $comments->name}}</b></p>
                        <p class="" style="margin-top: -25px">{{ $comments->email }}</p>
                        <form action="{{ route('comment.delete', $comments->id) }}" method="POST" class=" d-flex justify-content-end">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger mb-3" onclick="return confirm('Are you sure you want to delete this comment?')"><i class="bi bi-trash3-fill"></i></button>
                        </form>
                    @endforeach
                    @else
                    <p>No comments yet. Be the first to comment!</p>
                @endif
        </div>
    </div>



@endsection
