{{-- @extends('admin.admin_master')

@section('admin-main')
<div class="container">
    <h1 class="p-4">Blog Card</h1>
    <a href="{{ route('admin.blog.create') }}" class="mx-4 mb-4 btn btn-primary">Add Blog Card</a>
    
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Content</th>
                <th>Image</th>
                <th>Slug</th>
                <th>Action</th>
            </tr>
        </thead>
        @foreach ($blogs as $blog)
            <tr>
                <td>{{$blog->title}}</td>
                <td>{{$blog->description}}</td>
                <td>{{$blog->image}}</td>
                <td>{{$blog->slug}}</td>
                <td class="gap-4 d-flex">
                    <a href="" class="btn btn-warning">Edit</a>
                    <form action="">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    
</div>
@endsection --}}