@extends('layouts.frontend')

@section('content')

<div id="contents">

    <h1>{{ $trainer->name }}</h1>

    <br>

    @if($trainer->photo)

        <img
            src="{{ asset('storage/'.$trainer->photo) }}"
            alt="{{ $trainer->name }}"
            width="300">

    @endif

    <br><br>

    <p>
        <strong>Vəzifəsi:</strong>
        {{ $trainer->position }}
    </p>

    <br>

    <p>
        {{ $trainer->bio }}
    </p>

</div>

@endsection