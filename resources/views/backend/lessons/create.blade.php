@extends('backend.layouts.app')

@section('content')

<h1>Create Lesson</h1>

<form action="{{ route('admin.lessons.store') }}" 
 method="POST">
  @csrf

  <div>
    <label>Course</label>
    <br>

    <select name="course_id" id="">
        @foreach ($courses as $course)
        <option value="{{ $course->id }}"> 
            {{ $course->title }}           
        </option>
        
        @endforeach
    </select>
  </div>
  <br>
  
<div>
   <label>Title</label>
        <br>
        <input type="text" name="title">
    </div>
 <div>
        <label>Content</label>
        <br>
        <textarea name="content"></textarea>
    </div>
    <br>

    <button type="submit">
        Save
    </button>

    </form>

@endsection