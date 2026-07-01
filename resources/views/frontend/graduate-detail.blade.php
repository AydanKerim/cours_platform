@extends('layouts.frontend')

@section('content')

<div id="contents">

    <h1>{{ $graduate->name }}</h1>

    <br>

    @if($graduate->photo)

        <img
            src="{{ asset('storage/'.$graduate->photo) }}"
            alt="{{ $graduate->name }}"
            width="300">

    @endif

    <br><br>

    <p>
        <strong>Vəzifəsi:</strong>
        {{ $graduate->position }}
    </p>

    <br>

   <p>
    <strong>Kurs:</strong>
    {{ $graduate->course }}
</p>

<p>
    <strong>Şirkət:</strong>
    {{ $graduate->company }}
</p>

</div>

@endsection