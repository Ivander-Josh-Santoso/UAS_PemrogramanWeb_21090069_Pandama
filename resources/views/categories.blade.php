@extends('layouts.main')

@section('container')
    <div class="container">
    <h2>Post Category</h2>
        <div class="row">
            @foreach($categories as $category)
                <div class="col-md-4">
                    <a href="/artikel?category={{ $category->slug }}">
                        <div class="card text-bg-dark">
                            <img src="https://source.unsplash.com/500x400?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
                            <div class="card-img-overlay d-flex align-items-center p-0">
                            <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(0, 0, 0, 0)">{{ $category->name }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection