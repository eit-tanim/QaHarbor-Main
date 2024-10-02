{{-- @extends('admin.admin_master')

@section('admin-main')
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">Edit About Page Banner</h3>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Edit About Banner</div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('about.banner.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-6 col-lg-4">
                                        <!-- Title -->
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <input type="text" name="title" class="form-control" id="title"
                                                placeholder="Enter Title" value="{{ $about_banner->title }}" required />
                                        </div>

                                        <!-- Description -->
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <input type="text" name="description" class="form-control" id="description"
                                                placeholder="Enter Description" value="{{ $about_banner->description }}" required />
                                        </div>

                                        <!-- Existing Image -->
                                        <div class="form-group">
                                            <label for="photo">Existing Photo</label>
                                            <img src="{{ asset($about_banner->image) }}" alt="Banner Image"
                                                style="width: 100px;">
                                        </div>

                                        <!-- New Image Upload -->
                                        <div class="form-group">
                                            <label for="photo">New Photo</label>
                                            <input type="file" name="image" class="form-control-file" id="photo" />
                                        </div>

                                        <!-- Submit -->
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-success">Save Changes</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection --}}
