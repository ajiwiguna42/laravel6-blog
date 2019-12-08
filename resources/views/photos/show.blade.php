@extends('layouts.app')

@section('content')

<div class="row d-flex justify-content-center">
	    <div class="col-md-8">
          <div class="card mb-4 shadow-sm">
            <img src="{{ asset($photo->url) }}" class="card-img-top">
            <div class="card-body">
              <p class="card-text">
              <h4>{{ $photo->title }}</h4>
              <p class="card-text">{!! $photo->description !!}</p>
              <div class="d-flex justify-content-between align-items-center">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <small class="text-muted">{{ $photo->created_at->diffForHumans() }}</small>
              </div>
            </div>
          </div>
        </div>
</div>

@endsection