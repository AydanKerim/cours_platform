@extends('backend.layouts.app')

@section('content')

<h1>{{ $contact->title }}</h1>

<hr>

<p>

<strong>Ünvan:</strong>

{{ $contact->address }}

</p>

<p>

<strong>Telefon:</strong>

{{ $contact->phone }}

</p>

<p>

<strong>Email:</strong>

{{ $contact->email }}

</p>

<p>

<strong>İş saatları:</strong>

{{ $contact->working_hours }}

</p>

<hr>

<h3>Google Map</h3>

{!! $contact->map !!}

<br><br>

<a href="{{ route('admin.contacts.index') }}">

Geri

</a>

@endsection