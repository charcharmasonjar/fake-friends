@extends('layouts.app')

@section('content')
<div class="container">
    <create-cast-component v-bind:castid={{$castid}}></create-cast-component>
</div>
@endsection
