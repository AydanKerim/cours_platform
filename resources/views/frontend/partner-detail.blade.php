@extends('layouts.frontend')

@section('content')

<div id="contents">

    <h2>{{ $partner->name }}</h2>

    <br>

    @if($partner->logo)

        <img
            src="{{ asset('storage/'.$partner->logo) }}"
            width="300">

    @endif

</div>

@endsection