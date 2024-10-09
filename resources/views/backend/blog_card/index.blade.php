@extends('admin.admin_master')

@section('admin-main')
<div class="container">
    <h1>Blog Cards</h1>
    <a href="{{ route('blog_card.create') }}" class="mb-3 btn btn-primary">Add New Blog Card</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($blog_card as $card)
                <tr>
                    <td>{{ $card->id }}</td>
                    <td>{{ $card->title }}</td>
                    <td>{{ $card->description }}</td>
                    {{-- <td><img src="{{asset($card->image)}}" alt=""></td> --}}
                    <td>
                        <img src="{{ $card->image }}" width="50" alt="Blog Image">
                    </td>
                    <td>
                        <a href="{{ route('blog_card.edit', $card->id) }}" class="btn btn-info">Edit</a>
                        <form action="{{ route('blog_card.destroy', $card->id) }}" method="POST" style="display:inline;">
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
