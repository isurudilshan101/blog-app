@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Edit Post') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{-- {{ __('You are logged in!') }} --}}
                        <form method="post" action="{{ route('post.update',$post->id) }}">
                            @csrf
                            <div class="form-group">
                                <label>Post Title</label>
                                <input value="{{ $post->title }}" type="text" name="title" class="form-control mt-2 mb-2"
                                    id="exampleInputEmail1" placeholder="Enter Post Title" required>
                            </div>

                            <div class="form-group">
                                <label>Post Description</label>

                                <textarea type="text" name="description" class="form-control"
                                    placeholder=" Enter Post Discription" rows="10"
                                    required>  {{ $post->description }} </textarea>
                            </div>
                            <button type="submit" class="btn btn-primary mt-2">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
