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
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12 d-none d-sm-none d-md-flex d-lg-flex d-xl-flex">
                    <img src="{{ asset('storage/'.$gallery->image) }}" alt="" class="w-100 mb-3" height="200px">
                </div>
                {{-- small screen --}}
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12 d-block d-sm-block d-md-none d-lg-none d-xl-none">
                    <img src="{{ asset('storage/'.$gallery->image) }}" alt="" class="w-100 mb-3">
                </div>
            @endforeach

        </div>
    </div>
@endsection
