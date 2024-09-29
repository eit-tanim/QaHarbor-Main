@extends('admin.admin_master')

@section('admin-main')
<div class="container">
    <h1>Edit Testimonial</h1>

    <form action="{{ route('admin.testimonials.update', $testimonial->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $testimonial->name }}" required>
        </div>

        <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea name="message" class="form-control" required>{{ $testimonial->message }}</textarea>
        </div>

        <div class="mb-3">
            <label for="position" class="form-label">Position</label>
            <input type="text" name="position" class="form-control" value="{{ $testimonial->position }}">
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" name="image" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Update Testimonial</button>
    </form>
</div>
@endsection
