@extends('backend.layouts.app')

@section('content')

<h1>Lessons</h1>

<a href="{{ route('admin.lessons.create') }}">
    Add Lesson
</a>

<hr>

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

@foreach($lessons as $lesson)

<div class="lesson-card">

    <div class="lesson-info">
        <p>
            <strong>Course:</strong>
            {{ $lesson->course->title }}
        </p>

        <h3>{{ $lesson->title }}</h3>

        

        <p>{{ $lesson->content }}</p>

    </div>

    <div class="lesson-actions">

        <a href="{{ route('admin.lessons.edit',$lesson->id) }}">
            Edit
        </a>

        <form action="{{ route('admin.lessons.destroy',$lesson->id) }}"
              method="POST">

            @csrf
            @method('DELETE')

            <button type="submit">
                Delete
            </button>

        </form>

    </div>

</div>

@endforeach
@endsection