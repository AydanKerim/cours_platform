@extends('backend.layouts.app')

@section('content')

<h1>Create Graduate</h1>

<form action="{{ route('admin.graduates.store') }}" 
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
        <label>Course</label>
        <br>
         <input type="text" name="course">
    </div>
    <br>

    <div>
        <label>Company</label>
        <br>
        <input type="text" name="company">
    </div>
    <br>

    <div>
        <label>Position</label>
        <br>
        <input type="text" name="position">
    </div>

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