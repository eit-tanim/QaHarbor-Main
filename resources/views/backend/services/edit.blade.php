@extends('admin.admin_master')

@section('admin-main')
<div class="container">
    <h3>Edit Service</h3>
    <form action="{{ route('admin.services.update', $service->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Service Title</label>
            <input type="text" name="title" class="form-control" value="{{ $service->title }}" required />
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" required>{{ $service->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="icon">Icon URL</label>
            <input type="text" name="icon" class="form-control" value="{{ $service->icon }}" required />
        </div>
        <button type="submit" class="btn btn-success">Update Service</button>
    </form>
</div>
@endsection
