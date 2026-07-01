@extends('backend.layouts.app')

@section('content')

<h1>Create Trainer</h1>

<form action="{{ route('admin.trainers.store') }}" 
 method="POST"
 enctype="multipart/form-data">

    @csrf

    <div>
        <label>Name</label>
        <br>
        <input type="text" name="name">
    </div>

    <br>

    <div>
        <label>Position</label>
        <br>
         <input type="text" name="position">
    </div>
    <br>

    <div>
        <label>Bio</label>
        <br>
        <textarea name="bio"></textarea>
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