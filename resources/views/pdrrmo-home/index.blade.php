@extends('layouts.app')

@section('content')

<!-- Banner Section -->
<div class="container-fluid mt-0 mb-4 p-0" style="overflow-x: hidden;">
    <div class="row">
        <div class="col-12 text-center">
            <img src="{{ asset('assets/img/banner.png') }}" alt="Banner Image" class="banner-image img-fluid">
        </div>
    </div>
</div>

<!-- Hero Carousel Section -->
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
    <div class="carousel-inner">
        @foreach(\App\Models\HeroCarousel::all() as $index => $carousel)
            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                <img src="{{ asset('storage/' . $carousel->image_path) }}" class="d-block w-100" alt="Hero Carousel Image"
                    style="max-height: 540px; object-fit: cover;">
            </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<div class="container my-3">
    <a href="{{ route('hero-carousel.index') }}" class="btn btn-warning">Edit Carousel</a>
</div>

<hr class="my-4 border-3 w-100" style="color: black;">

<div class="container mt-4">
    <h3 class="fw-bold">Latest Updates</h3>
</div>

<div class="container mt-4">
    <div class="row gx-4">
        <!-- LEFT COLUMN: ISSUANCE + ACTIVITIES -->
        <div class="col-md-6 d-flex flex-column">
            <!-- ISSUANCE SECTION -->
            <div class="mb-4">
                <h5 class="fw-semibold">Issuance</h5>
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <a href="#" class="text-decoration-none text-primary">NDRRMC Memorandum No. 14, s.
                                    2025</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#" class="text-decoration-none text-primary">NDRRMC Memorandum No. 02, s.
                                    2025</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#" class="text-decoration-none text-primary">NDRRMC Memorandum No. 01, s.
                                    2025</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#" class="text-decoration-none text-primary">NDRRMC Memorandum No. 388, s.
                                    2024</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- ACTIVITIES SECTION FIXED -->
            <div class="mt-3">
                <h5 class="fw-semibold mb-3">Activities</h5>
                <div class="card shadow-sm">
                    <div id="hero-carousel-card" class="carousel slide carousel-fade" data-bs-ride="carousel"
                        data-bs-interval="5000">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('assets/img/hero-carousel/hero-carousel-1.jpg') }}"
                                    class="d-block w-100 rounded" alt="First Slide">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/img/hero-carousel/hero-carousel-2.jpg') }}"
                                    class="d-block w-100 rounded" alt="Second Slide">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/img/hero-carousel/hero-carousel-3.jpg') }}"
                                    class="d-block w-100 rounded" alt="Third Slide">
                            </div>
                        </div>

                        <!-- Carousel Controls -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel-card"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel-card"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>

                        <!-- Carousel Indicators -->
                        <div class="carousel-indicators"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- RIGHT COLUMN: DISASTER & CALAMITY UPDATES -->
        <div class="col-md-6 d-flex flex-column">
            <h5 class="fw-semibold">Disasters and Calamity Updates</h5>
            <div class="card shadow-sm d-flex flex-column flex-grow-1">
                <div class="card-body d-flex flex-column">
                    <div class="alert alert-warning text-white text-center" style="background-color: #ff9A00;">
                        As of <span id="timestamp"></span>
                    </div>
                    <div class="fb-page"
                        data-href="https://www.facebook.com/p/Operation-Center-Pdrrmo-Iloilo-61570456584511/"
                        data-tabs="timeline" data-width="500" data-height="600" data-small-header="false"
                        data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false">
                        <blockquote cite="https://www.facebook.com/p/Operation-Center-Pdrrmo-Iloilo-61570456584511/"
                            class="fb-xfbml-parse-ignore">
                            <a href="https://www.facebook.com/p/Operation-Center-Pdrrmo-Iloilo-61570456584511/">Your
                                Page Name</a>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Function to format and display the current time
    function updateTime() {
        const now = new Date();
        const formattedTime = now.toLocaleString(); // Customize the format as needed
        document.getElementById('timestamp').textContent = formattedTime;
    }

    // Update the time immediately and then every second
    updateTime(); // Initial call to show time right away
    setInterval(updateTime, 1000); // Update every second
</script>

<script async defer crossorigin="anonymous" 
    src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v17.0">
</script>

@endsection