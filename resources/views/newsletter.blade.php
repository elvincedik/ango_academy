@extends('layouts.admin')

@section('posts')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 offset-md-1 my-5">

            {{-- alert --}}
            @if (session()->has('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session()->get('message') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" data-bs-delay="5000"></button>
                </div>
            @endif

                <h1 class="text-center mb-5">NEWSLETTER</h1>

                <h2 class="mt-5 mb-3">Submitted Emails</h2>

                <div style="overflow-x:auto">

                    <table class="table table-striped table-responsive{-sm|-md|-lg|-xl|-xxl}">
                        <thead>
                            <tr>
                                <th scope="col">Email</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($newsletters as $newsletter)
                                <tr>
                                    <td><a href="mailto:{{$newsletter->email}}" class="text-decoration-none text-primary">{{ $newsletter->email }}</a></td>
                                    <td>
                                        <a href="{{ route('newsletter.destroy', $newsletter->id) }}" class="btn btn-outline-danger"
                                            onclick="return confirm('Are you sure you want to delete this email?')"><i class="bi bi-trash3-fill"></i> Delete
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="d-flex justify-content-end">
                    {{-- {{!! $blogs->links() !!}} --}}
                </div>
            </div>
        </div>
    </div>
@endsection
