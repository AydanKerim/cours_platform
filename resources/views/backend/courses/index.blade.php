@extends('backend.layouts.app')

@section('content')

    <h1>Courses</h1>

    <a href="{{ route('admin.courses.create') }}">
        Add Course
    </a>

    <hr>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif



    @foreach($courses as $course)

        <div style="display:flex;justify-content:space-between;align-items:center;border-bottom:1px solid #ddd;padding:20px 0;">

            <div>

                <h3>
                    <a href="{{ route('admin.courses.show', $course->id) }}">
                    </a>
                    {{ $course->title }}
                </h3>

                <p>{{ $course->description }}</p>

                <p><strong>Müddət:</strong> {{ $course->duration }}</p>

                <p><strong>Həftədə:</strong> {{ $course->weekly_lessons }} dəfə</p>

                <p><strong>Dərs saatı:</strong> {{ $course->lesson_hours }} saat</p>

            </div>

            <div>

                @if($course->photo)
                    <img src="{{ asset('storage/' . $course->photo) }}" width="150">
                    <br><br>
                @endif

                <a href="{{ route('admin.courses.edit', $course->id) }}"
                    style="color:#3498db;text-decoration:none;margin-right:10px;">
                    Edit
                </a>

                <form action="{{ route('admin.courses.destroy', $course->id) }}" method="POST" style="display:inline;">

                    @csrf
                    @method('DELETE')

                    <button type="submit" onclick="return confirm('Kurs silinsin?')"
                        style="background:#e74c3c;color:white;border:none;padding:6px 12px;border-radius:4px;">
                        Delete
                    </button>

                </form>

            </div>

        </div>

    @endforeach

@endsection