@extends('backend.layouts.app')

@section('content')

<h1>Edit Lesson</h1>

<form action="{{ route('admin.lessons.update', $lesson->id) }}"
      method="POST">

    @csrf
    @method('PUT')

    <label>Current Title</label>
    <br>
    <input type="text"
           value="{{ $lesson->title }}"
           readonly>

    <br><br>

    <label>New Title</label>
    <br>
    <input type="text"
           name="title"
           value="{{ $lesson->title }}">

    <br><br>

    <label>Course</label>
    <br>

    <select name="course_id">
        @foreach($courses as $course)
            <option value="{{ $course->id }}"
                {{ $lesson->course_id == $course->id ? 'selected' : '' }}>
                {{ $course->title }}
            </option>
        @endforeach
    </select>

    <br><br>

    <label>Content</label>
    <br>
    <textarea name="content" rows="5">{{ $lesson->content }}</textarea>

    <br><br>

    <button type="submit">
        Update Lesson
    </button>

</form>






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


    <br>

   




</form>

@endsection