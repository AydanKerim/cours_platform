@extends('backend.layouts.app')

@section('content')

<h1>Əlaqəni Redaktə Et</h1>

<form action="{{ route('admin.contacts.update',$contact->id) }}" method="POST">

    @csrf

    @method('PUT')

    <p>

        <label>Başlıq</label>

        <br>

        <input
            type="text"
            name="title"
            value="{{ $contact->title }}">

    </p>

    <p>

        <label>Ünvan</label>

        <br>

        <input
            type="text"
            name="address"
            value="{{ $contact->address }}">

    </p>

    <p>

        <label>Telefon</label>

        <br>

        <input
            type="text"
            name="phone"
            value="{{ $contact->phone }}">

    </p>

    <p>

        <label>Email</label>

        <br>

        <input
            type="email"
            name="email"
            value="{{ $contact->email }}">

    </p>

    <p>

        <label>İş saatları</label>

        <br>

        <input
            type="text"
            name="working_hours"
            value="{{ $contact->working_hours }}">

    </p>

    <p>

        <label>Google Map</label>

        <br>

        <textarea
            name="map"
            rows="6">{{ $contact->map }}</textarea>

    </p>

    <button>

        Yenilə

    </button>

</form>

@endsection