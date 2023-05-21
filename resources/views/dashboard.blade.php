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

                <h1 class="text-center mb-5">DASHBOARD</h1>

                <h2 class="mt-5 mb-3">All Posts</h2>

                {{-- <div style="overflow:scroll; height: 300px"> --}}
                <div style="overflow-x:auto;">

                    <table class="table table-striped table-responsive{-sm|-md|-lg|-xl|-xxl}">
                        <thead>
                            <tr>
                                <th scope="col">S/N</th>
                                <th scope="col">Title</th>
                                <th scope="col">Details</th>
                                <th scope="col">Category</th>
                                <th scope="col">Created</th>
                                <th scope="col">Updated</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $serial = 1; ?>
                            @foreach ($blogs as $blog)
                                <tr>
                                    <td>{{$serial++}}.</td>
                                    <td>{{ $blog->title }}</td>
                                    <td>{{ $blog->details = Str::limit($blog->details, 40) }}</td>
                                    <td>{{ optional($blog->category)->name }}</td>
                                    <td>{{ $blog->created_at->format('F j, Y, g:i a') }}</td>
                                    <td>
                                        {{ optional($blog->updated_at)->format('F j, Y, g:i a') ?? 'N/A' }}
                                    </td>

                                    <td>
                                        <a href="{{ route('blog.edit', $blog->id) }}" title="Edit"><i class="bi bi-pencil-square text-success fs-5"></i></a> &nbsp;
                                            <a href="{{ route('blog.destroy', $blog->id) }}" onclick="return confirm('Are you sure you want to delete this post?')" title="Delete"><i class="bi bi-trash3-fill text-danger fs-5"></i> </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="mt-3 offset-md-8 col-md-4 justify-content-end">
                    <a href="{{ route('blog.create') }}" class="btn btn-success">Create News & Blog</a>
                </div>


            </div>
        </div>

        <div class="d-flex justify-content-end">
            {{ $blogs->links() }}
        </div>

    </div>
@endsection
