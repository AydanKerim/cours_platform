@extends('backend.layouts.app')

@section('content')

<h1>Create Partner</h1>

<form
    action="{{ route('admin.partners.store') }}"
    method="POST"
    enctype="multipart/form-data">

    @csrf

    <div>

        <label>Name</label>

        <br>

        <input
            type="text"
            name="name">

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

    <button type="submit">

        Save

    </button>

</form>

@endsection