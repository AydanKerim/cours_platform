@extends('backend.layouts.app')

@section('content')

<h1>{{ $trainer->name }}</h1>

@if($trainer->photo)
    <img src="{{ asset('storage/'.$trainer->photo) }}" width="200">
@endif

<p><strong>Position:</strong> {{ $trainer->position }}</p>

<p>{{ $trainer->bio }}</p>

@endsection