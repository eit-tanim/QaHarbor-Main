@extends('admin.admin_master')

@section('admin-main')
<div class="container">
    <h1 class="p-4">Testimonials</h1>
    <a href="{{ route('admin.testimonials.create') }}" class="mx-4 mb-4 btn btn-primary">Add Testimonial</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Message</th>
                <th>Position</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($testimonials as $testimonial)
                <tr>
                    <td>{{ $testimonial->name }}</td>
                    <td>{{ $testimonial->message }}</td>
                    <td>{{ $testimonial->position }}</td>
                    <td>
                        <a href="{{ route('admin.testimonials.edit', $testimonial->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.testimonials.destroy', $testimonial->id) }}" method="POST" style="display:inline;">
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
@endsection
