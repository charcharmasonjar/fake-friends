@extends('layouts.app')

@section('content')
<div class="container text-center">
    <h1>Welcome to fake friends</h1>
    <p>recast friends with people that don't exist</p>
    <a href="{{ route('register') }}">Get Started</a>
</div>
@endsection
