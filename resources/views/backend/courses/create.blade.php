@extends('backend.layouts.app')

@section('content')

<h1>Create Course</h1>

<form action="{{ route('admin.courses.store') }}" 
 method="POST"
 enctype="multipart/form-data">

    @csrf

    <div>
        <label>Title</label>
        <br>
        <input type="text" name="title">
    </div>

    <br>

    <div>
        <label>Description</label>
        <br>
        <textarea name="description"></textarea>
    </div>
    <br>

    <div>
        <label>Duration</label>
        <br>
        <input type="text" name="duration">
    </div>
    <br>

    <div>
    <label>Weekly</label>
    <br>
    <input type="number" name="weekly_lessons">
</div>
<br>

<div>
    <label>Photo</label>
    <br>
    <input type="file" name="photo">
</div>

<br>
<div>
    <label>Lesson_hours</label>
    <br>
    <input type="number" name="lesson_hours">
</div>

<br>
    <button type="submit">
        Save
    </button>

</form>

@endsection