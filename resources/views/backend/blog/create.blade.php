@extends('admin.admin_master')

@section('admin-main')
    {{-- <div class="container m-5">
        <h3>Blog</h3>

        <a href="{{ route('admin.blog.create') }}" class="mb-3 btn btn-primary">Add New Blog</a>

        <div class="table-responsive"> <!-- Add table-responsive class -->

            <table class="table table-bordered table-hover"> <!-- Added table-bordered and table-hover classes -->
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($blogs as $blog)
                        <!-- Use a singular name for each item -->
                        <tr>
                            <td>{{ $blog->title }}</td> <!-- Access title on the current item -->
                            <td>{{ $blog->description }}</td> <!-- Access description on the current item -->
                            <td>
                                <a href="{{ route('admin.awesome.edit', $blog->id) }}"
                                    class="m-2 btn btn-warning">Edit</a> <!-- Use a single dollar sign -->
                                <form action="{{ route('admin.awesome.destroy', $blog->id) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div> --}}
    <h1> taire naire na</h1>
@endsection
