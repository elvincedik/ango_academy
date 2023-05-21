@extends('layouts.app')

@section('content')

    {{-- sub-header --}}
    <div style="background-image: url('{{ asset('image/subheader.png')}}'); height: 150px;">
        <div class="sub-header-overlay d-flex align-items-center">
            <div class=" ms-4">
                <p class="sub-header-heading">Gallery</p>
                <p  class="sub-header-text"><a href="{{ route('home')}}" class="sub-header-link">Home</a> &rarr; Gallery</p>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row mt-5 ms-2 me-2">
            @foreach ($galleries as $gallery)
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12 d-none d-sm-none d-md-block d-lg-block d-xl-block mb-3" data-aos="zoom-out" data-aos-duration="1000" data-aos-delay="300">
                    <div>
                        <a href="{{ asset('storage/'.$gallery->image) }}"><img src="{{ asset('storage/'.$gallery->image) }}" alt="" class="w-100 gallery-card position-relative" height="250px"></a>
                    </div>



                        @auth
                            <form action="{{ route('gallery.delete', $gallery->id) }}" method="POST" class=" d-flex justify-content-end">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-light position-absolute top-0" onclick="return confirm('Are you sure you want to delete this image?')"><i class="bi bi-trash3-fill text-danger"></i></button>
                            </form>
                        @endauth


                </div>
                {{-- small screen --}}
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12 d-block d-sm-block d-md-none d-lg-none d-xl-none" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    <img src="{{ asset('storage/'.$gallery->image) }}" alt="" class="img-fluid w-100 mb-3 position-relative">

                    @auth
                        <form action="{{ route('gallery.delete', $gallery->id) }}" method="POST" class=" d-flex justify-content-end">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-light position-absolute top-0" onclick="return confirm('Are you sure you want to delete this image?')"><i class="bi bi-trash3-fill text-danger"></i></button>
                        </form>
                    @endauth
                </div>
            @endforeach

        </div>
    </div>
@endsection
