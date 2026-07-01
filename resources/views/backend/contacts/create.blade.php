@extends('backend.layouts.app')

@section('content')

<h1>Yeni Əlaqə</h1>

<form action="{{ route('admin.contacts.store') }}" method="POST">

    @csrf

    <p>

        <label>Başlıq</label>

        <br>

        <input type="text" name="title">

    </p>

    <p>

        <label>Ünvan</label>

        <br>

        <input type="text" name="address">

    </p>

    <p>

        <label>Telefon</label>

        <br>

        <input type="text" name="phone">

    </p>

    <p>

        <label>Email</label>

        <br>

        <input type="email" name="email">

    </p>

    <p>

        <label>İş saatları</label>

        <br>

        <input type="text" name="working_hours">

    </p>

    <p>

        <label>Google Map (iframe)</label>

        <br>

        <textarea name="map" rows="6"></textarea>

    </p>

    <button>

        Save

    </button>

</form>

@endsection