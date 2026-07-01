@extends('backend.layouts.app')

@section('content')

<h1>Edit Partner</h1>

<form
    action="{{ route('admin.partners.update',$partner->id) }}"
    method="POST"
    enctype="multipart/form-data">

    @csrf
    @method('PUT')

    <div>

        <label>Name</label>

        <br>

        <input
            type="text"
            name="name"
            value="{{ $partner->name }}">

    </div>

    <br>

    <div>

        <label>Logo</label>

        <br>

        <input
            type="file"
            name="logo">

    </div>

    <br>

    @if($partner->logo)

        <img
            src="{{ asset('storage/'.$partner->logo) }}"
            width="150">

        <br><br>

    @endif

    <button type="submit">

        Update

    </button>

</form>

@endsection