<section class="">
    <div class="container">
        <div class="banner-section">
            <div class="banner-left">
                <h1>{{ $home_banner->title }}</h1>
                <p>{{ $home_banner->sub_title }}</p>
                <button class="btn btn-primary btn-lg me-5 mb-3">Get Services</button>
                <button class="btn btn-primary btn-lg mb-3">Hire Experts</button>
            </div>

            <div class="banner-right">
                <img class="w-100" src="{{ asset($home_banner->photo) }}" alt="banner">
            </div>
        </div>

    </div>
</section>
