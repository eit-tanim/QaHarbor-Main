@extends('admin.admin_master')

@section('admin-main')
{{-- <div>
    @if($banner)
        <h1>{{ $banner->title }}</h1>
        @if($banner->image)
            <img src="{{ asset('storage/' . $banner->image) }}" alt="Banner Image">
        @else
            <p>No image available</p>
        @endif
        <p>{{ $banner->description }}</p>
        <a href="{{ route('about.banner.edit', $banner->id) }}">Edit Banner</a>
    @else
        <p>No banner found. <a href="{{ route('about.banner.create') }}">Create a new banner</a></p>
    @endif
</div> --}}
<h1>hello world</h1>
@endsection
