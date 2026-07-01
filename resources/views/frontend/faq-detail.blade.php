@extends('layouts.frontend')

@section('content')

<div id="contents">

    <h2>{{ $faq->question }}</h2>

    <br>

    <p>

        {{ $faq->answer }}

    </p>

    <br>

    <a href="{{ route('frontend.faqs.index') }}">

        Bütün suallar

    </a>

</div>

@endsection