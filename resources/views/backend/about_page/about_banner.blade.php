@extends('admin.admin_master')

@section('admin-main')
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">About Page Banner</h3>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">About Banner</div>
                        </div>
                        <div class="card-body">
                            <h5>Title: {{ $about_banner->title }}</h5>
                            <h5>Description: {{ $about_banner->description }}</h5>
                            <img src="{{ asset($about_banner->image) }}" alt="Banner Image" style="width: 200px;">

                            <!-- Edit Banner Form -->
                            <form action="{{ route('about.banner.index') }}" method="POST" enctype="multipart/form-data" class="mt-3">
                                @csrf
                                @method('POST')
                                <h4>Edit Banner</h4>
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" class="form-control" id="title"
                                        placeholder="Enter Title" value="{{ $about_banner->title }}" required />
                                </div>

                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <input type="text" name="description" class="form-control" id="description"
                                        placeholder="Enter Description" value="{{ $about_banner->description }}" required />
                                </div>

                                <div class="form-group">
                                    <label for="photo">Existing Photo</label>
                                    <img src="{{ asset($about_banner->image) }}" alt="Banner Image"
                                        style="width: 100px;">
                                </div>

                                <div class="form-group">
                                    <label for="photo">New Photo</label>
                                    <input type="file" name="image" class="form-control-file" id="photo" />
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Save Changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
