@extends('backend.layouts.app')

@section('content')

<h1>Edit Trainer</h1>

<form action="{{ route('admin.trainers.update', $trainer->id) }}" 
 method="POST"
 enctype="multipart/form-data">

    @csrf
@method('PUT')

    <div>
        <label>Name</label>
        <br>
        <input type="text" name="name" value="{{ $trainer->name }}">
    </div>

    <br>

    <div>
        <label>Position</label>
        <br>
         <input type="text" name="position" value="{{ $trainer->position }}">
    </div>
    <br>

    <div>
        <label>Bio</label>
        <br>
        <textarea name="bio">{{ $trainer->bio }}</textarea>
    </div>
    <br>
<br>

<div>
    <label>Photo</label>
    <br>
    <input type="file" name="photo">
</div>

<br>


<br>
    <button type="submit">
        Save
    </button>

</form>

@endsection