@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{-- {{ __('You are logged in!') }} --}}
                        <form method="post" action="{{}}">
                            <div class="form-group">
                                <label>Post Title</label>
                                <input type="text" name="title" class="form-control mt-2 mb-2" id="exampleInputEmail1"
                                    placeholder="Enter Post Title">
                            </div>

                            <div class="form-group">
                                <label>Post Discription</label>

                                <textarea name="description" class="form-control  placeholder="Enter Post Discription"
                                    rows="10"></textarea>

                            </div>

                            <button type="submit" class="btn btn-primary mt-2">Post</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
