@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row">
        @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message')}}
        </div>
        @endif
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="col-md-6 offset-md-3">
            <div class="card p-5 m-3 sm-shadow">


                <form action="{{ route('login')}}" class="form-control" method="post">
                    @csrf


                    <div class="mb-3">
                        <label for="email" class="form-label">enter email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email')}}">
                        @error('email')
                        <small class="alert alert-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">enter password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" value="{{ old('password')}}">
                        @error('password')
                        <small class="alert alert-danger">{{ $message }}</small>
                        @enderror
                    </div>


                    <button type="submit" class="btn btn-outline-primary btn-lg w-100">login</button>

                    <p>or</p>

                    <a href="{{ route('register')}}" class="btn btn-primary text-light">Sign up</a>




                </form>
         </div>
        </div>
    </div>
</div>


@endsection
