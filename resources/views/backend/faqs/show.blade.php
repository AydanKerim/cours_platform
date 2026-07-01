@extends('backend.layouts.app')

@section('content')

<h1>{{ $faq->question }}</h1>

<hr>

<p>

{{ $faq->answer }}

</p>

@endsection