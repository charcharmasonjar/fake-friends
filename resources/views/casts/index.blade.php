@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Your casts</h1>
    @foreach($casts as $key => $value)
    <span>{{ $value->id}}</span>
    <span>{{ $value->name}}</span>
    @endforeach
    <a href="/cast/new">Create new cast</a>
</div>
@endsection
