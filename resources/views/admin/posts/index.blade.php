@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="nav mb-4">
            <button class="btn btn-primary">Add a new post</button>
        </div>


        @foreach ($posts as $post)
            <div class="col-4">
                {{ $post }}
            </div>
        @endforeach
    </div>
@endsection
