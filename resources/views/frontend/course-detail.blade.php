@extends('layouts.frontend')
@section('content')

<div id="contents">
<div style="padding:20px;">

    <h1>{{ $course->title }}</h1>

    <hr>

    @if($course->photo)

        <img
            src="{{ asset('storage/'.$course->photo) }}"
            alt="{{ $course->title }}"
            width="500"
            style="margin-bottom:20px;object-fit:cover;">

    @endif

    <h3>Kurs haqqında</h3>

    <p>

        {{ $course->description }}

    </p>

    <br>

    <div style="background:#f5f5f5;padding:15px;border-radius:5px;">

        <p>
            <strong>Müddət:</strong>
            {{ $course->duration }}
        </p>

        <p>
            <strong>Həftəlik dərs sayı:</strong>
            {{ $course->weekly_lessons }}
        </p>

        <p>
            <strong>Dərs saatı:</strong>
            {{ $course->lesson_hours }}
        </p>

        <p>
            <strong>Ümumi dərs sayı:</strong>
            {{ $course->lessons->count() }}
        </p>

    </div>

    <br>

    <h2>Dərslər</h2>

    <ul>

        @forelse($course->lessons as $lesson)

            <li style="margin-bottom:10px;">

                <a href="{{ route('frontend.lesson.show', $lesson->id) }}">
                    {{ $lesson->title }}
                </a>

            </li>

        @empty

            <li>Bu kurs üçün dərs əlavə edilməyib.</li>

        @endforelse

    </ul>

</div>

@endsection