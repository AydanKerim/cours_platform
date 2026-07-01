@extends('backend.layouts.app')

@section('content')

<h1>{{ $graduate->name }}</h1>

@if($graduate->photo)
    <img src="{{ asset('storage/'.$graduate->photo) }}" width="200">
@endif

<p><strong>Kurs:</strong> {{ $graduate->course }}</p>

<p><strong>Şirkət:</strong> {{ $graduate->company }}</p>

<p><strong>Vəzifə:</strong> {{ $graduate->position }}</p>

@endsection