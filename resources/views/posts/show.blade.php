@extends('layouts.frontend')

@section('content')
<div class="container">
    <div class="card text-center mt-5 mb-5">
        <div class="card-header">
       #  {{$post->id}}
        </div>
        <div class="card-body">
          <h5 class="card-title"> {{$post->title}}</h5>
          <p class="card-text"> {{$post->description}}</p>
          {{--  <a href="#" class="btn btn-primary">Go somewhere</a>  --}}
        </div>
        <div class="card-footer text-muted">
            {{ date('Y-m-d',strtotime($post->created_at)) }}
        </div>
      </div>
</div>


@endsection
