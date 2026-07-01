@extends('layouts.frontend')

@section('content')

<div id="contents">

    <h1>{{ $about->title }}</h1>

    <br>


    <br><br>

    <p>
        <strong>Haqqında:</strong>
        {{ $about->position }}
    </p>

    <br>

    <p>
        {{ $about->description }}
    </p>

</div>

@endsection