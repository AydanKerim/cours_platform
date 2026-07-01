@extends('backend.layouts.app')

@section('content')

<h1>{{ $about->title }}</h1>

<hr>

<p>

{{ $about->description }}

</p>

@endsection