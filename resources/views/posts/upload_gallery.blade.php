@extends('layouts.admin')

@section('posts')
<div class="row mt-5 mb-5">

    {{-- alert --}}
    @if (session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session()->get('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" data-bs-delay="5000"></button>
        </div>
    @endif

    <div class="col-xl-8 col-lg-8 col-md-10 offset-xl-2 offset-lg-2 offset-md-1">
        <div class="shadow p-3">


            <h1 class="text-center mb-3">UPLOAD IMAGE</h1>
            <form action="{{ route('gallery.store') }}" class="form-control" method="post" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" name="image" id="image" @error('image') is-invalid @enderror>

                    @error('image')
                    <small class="text-danger">{{ $message}}</small>
                    @enderror
                </div>

                <div class=" mb-3">
                    <button class="btn btn-outline-primary w-100"><i class="bi bi-check-square-fill"></i> Upload</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
