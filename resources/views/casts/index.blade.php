@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Your casts</h1>
    <div class="row" style="justify-content: space-between">
    @foreach($casts as $key => $value)
        <div class="card" style="width: 10rem; height: 14rem">
            <img src="{{ $value->new_image_url}}" class="card-img-top" alt="ai generated face" style="height: 10rem; object-fit: cover" />
            <div class="card-body text-center">
                <h5 class="card-title">New {{ $value->name}}</h5>
            </div>
        </div>
        @endforeach
    </div>
    <a href="/cast/new">Create new cast</a>
</div>
@endsection
