@extends('layouts.app')

@section('content')
<div class="container">

      <div class="row">
        @foreach ($photos as $photo)
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
          <img src="{{ asset($photo->url) }}" class="card-img-top">
            <div class="card-body">
              <h1>{{ $photo -> title }}</h1>
              <p class="card-text">{!! $photo -> description !!}</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="{{ route('photo.show', $photo->id) }}" class="btn btn-sm btn-outline-secondary">View</a>
                  <a href="" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">{{ $photo->created_at->diffForHumans() }}</small>
              </div>
            </div>
          </div>
        </div>
        @endforeach
     </div>
</div>
@endsection