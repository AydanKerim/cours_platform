@extends('backend.layouts.app')

@section('content')

<h1>Mesajın Məzmunu</h1>

<hr>

<p>

    <strong>Ad:</strong>

    {{ $contactMessage->name }}

</p>

<p>

    <strong>Email:</strong>

    {{ $contactMessage->email }}

</p>

<p>

    <strong>Telefon:</strong>

    {{ $contactMessage->phone }}

</p>

<p>

    <strong>Mövzu:</strong>

    {{ $contactMessage->subject }}

</p>

<hr>

<h3>Mesaj</h3>

<p>

    {{ $contactMessage->message }}

</p>

<br>

<a
    href="{{ route('admin.contact-messages.index') }}"
    class="btn btn-primary">

    ← Geri

</a>

@endsection