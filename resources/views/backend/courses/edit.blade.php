@extends('backend.layouts.app')

@section('content')

<h1>Edit Course</h1>

<form action="{{ route('admin.courses.update', $course->id) }}" 
method="POST"
enctype="multipart/form-data">

    @csrf
    @if ($errors->any())
    <div style="color:red">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    @method('PUT')

    <div>
        <label>Title</label>
        <br>
        <input type="text" name="title" value="{{ $course->title }}">
    </div>

    <br>

    <div>
        <label>Description</label>
        <br>
        <textarea name="description" rows="5">{{ $course->description }}</textarea>
    </div>

    <br>

    <div>
        <label>Duration</label>
        <br>
        <input type="text" name="duration" value="{{ $course->duration }}">
    </div>

    <br>

    <div>
        <label>weekly_lessons</label>
        <br>
        <input type="number" name="weekly_lessons" value="{{ $course->weekly_lessons }}">
    </div>

    <br>

     <div>
        <label>lesson_hours</label>
        <br>
        <input type="number" name="lesson_hours" value="{{ $course->lesson_hours }}">
    </div>

    <br>

    @if($course->photo)
    <div>
        <img src="{{ asset('storage/'.$course->photo) }}"
             width="150">
    </div>
    <br>
@endif

     <div>
        <label>new photo</label>
        <br>
        <input type="file" name="photo" value="{{ $course->photo }}">
    </div>

    <br>

    <button type="submit">Update Course</button>

</form>

@endsection