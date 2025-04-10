@extends('layouts.app')

@section('content')

<div class="page-title accent-background py-4">
    <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Rescue Operations</h1>
        <nav class="breadcrumbs">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                    <a href="{{ route('programs-services.rescue-operations.index') }}">Rescue Operations</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">{{ ucwords(str_replace(['_', '-'], ' ', $category)) }}</li>
            </ol>
        </nav>
    </div>
</div>

<section id="rescue-operation-details" class="rescue-operation-details section">
  <div class="container">
    <h2 class="text-center">{{ ucwords(str_replace(['_', '-'], ' ', $category)) }}</h2>

      @if($latestRescueOperation = $rescueOperations->sortByDesc('created_at')->first())
          @if($latestRescueOperation->description)
             
          @else
              <p class="text-center">No content available for this rescue operation.</p>
          @endif
      @else
          <p class="text-center">No rescue operations found for this category.</p>
      @endif

      @if($rescueOperations->count() > 0)
          <div class="images mt-4">
              <div class="row collage-row">
                  @foreach($rescueOperations as $rescueOperation)
                      @foreach($rescueOperation->images as $image)
                          <div class="col-lg-3 col-md-4 col-sm-6">
                              <div class="image-item">
                                  <img src="{{ asset('storage/' . $image) }}" alt="{{ $rescueOperation->category }}" class="img-fluid" loading="lazy">
                              </div>
                          </div>
                      @endforeach
                  @endforeach
              </div>
          </div>
      @else
          <p class="text-center">No images available for this category.</p>
      @endif
  </div>
</section>
@endsection
