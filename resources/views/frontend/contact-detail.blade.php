@extends('layouts.frontend')

@section('content')

<div id="contents">

    <div class="featured">

        <h2>{{ $contact->title }}</h2>

        <hr>

        <p>

            <strong>📍 Ünvan</strong>

            <br>

            {{ $contact->address }}

        </p>

        <br>

        <p>

            <strong>☎ Telefon</strong>

            <br>

            {{ $contact->phone }}

        </p>

        <br>

        <p>

            <strong>✉ Email</strong>

            <br>

            {{ $contact->email }}

        </p>

        <br>

        <p>

            <strong>🕒 İş saatları</strong>

            <br>

            {{ $contact->working_hours }}

        </p>

        <br>

        <h3>Xəritə</h3>

        {!! $contact->map !!}

        <br><br>

        <a
            href="{{ route('frontend.contacts.index') }}"
            class="more">

            ← Geri

        </a>

    </div>

</div>

@endsection