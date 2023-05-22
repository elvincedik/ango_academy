@extends('layouts.app')

@section('content')

        <div style="background-position: center; background-repeat: no-repeat; background-size: cover; height: 100%;">
            <img class="img-fluid" width="100%" src="{{ asset('storage/'.$gallery->image)}}" alt="">
        </div>
    
@endsection