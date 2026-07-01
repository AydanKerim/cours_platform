@extends('backend.layouts.app')

@section('content')

<h1>{{ $partner->name }}</h1>

<br>

@if($partner->logo)

    <img
        src="{{ asset('storage/'.$partner->logo) }}"
        width="250">

@endif

@endsection