@extends('admin.admin_master')

@section('admin-main')
{{-- <form action="{{ route('about.banner.update', $banner->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT') <!-- Indicate that this is a PUT request for updating -->
    
    <input type="text" name="title" value="{{ $banner->title }}" required>
    <textarea name="description" required>{{ $banner->description }}</textarea>

    <div>
        <label for="image">Update Image:</label>
        <input type="file" name="image" id="image">
    </div>

    <button type="submit">Update Banner</button>
</form> --}}
@endsection
