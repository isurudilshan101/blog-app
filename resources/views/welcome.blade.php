@extends('layouts.frontend')

@section('content')

    <div class="row mb-2">

        @foreach ($posts as $post)
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">World</strong>
                        <h3 class="mb-0">{{ $post->title }}</h3>
                        <div class="mb-1 text-muted">{{ date('Y-m-d',strtotime($post->created_at)) }}</div>
                        <p class="card-text mb-auto"> {{ $post->description }}</p>
                        <a href="#" class="stretched-link">Continue reading</a>
                    </div>
                     
                </div>
            </div>
        @endforeach
    </div>

@endsection
