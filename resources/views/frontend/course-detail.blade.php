@extends('layouts.frontend')
@section('content')

<div class="page-heading">
    <h1>{{ $course->title }}</h1>
</div>

<div class="detail-page">
    <div class="detail-card">

        @if($course->photo && Storage::disk('public')->exists($course->photo))
            <img
                src="{{ asset('storage/'.$course->photo) }}"
                alt="{{ $course->title }}"
                class="detail-photo">
        @else
            <span class="detail-photo-fallback">{{ Str::substr($course->title, 0, 1) }}</span>
        @endif

        <h3>Kurs haqqında</h3>

        <p>
            {{ $course->description }}
        </p>

        <div class="detail-meta">
            <div>
                <strong>Müddət</strong>
                {{ $course->duration }}
            </div>

            <div>
                <strong>Həftəlik dərs sayı</strong>
                {{ $course->weekly_lessons }}
            </div>

            <div>
                <strong>Dərs saatı</strong>
                {{ $course->lesson_hours }}
            </div>

            <div>
                <strong>Ümumi dərs sayı</strong>
                {{ $course->lessons->count() }}
            </div>
        </div>

        <h3>Dərslər</h3>

        <ul class="detail-lessons">

            @forelse($course->lessons as $lesson)

                <li>
                    <a href="{{ route('frontend.lesson.show', $lesson->id) }}">
                        {{ $lesson->title }}
                    </a>
                </li>

            @empty

                <li>Bu kurs üçün dərs əlavə edilməyib.</li>

            @endforelse

        </ul>

        <a href="{{ route('frontend.courses.index') }}" class="detail-back">
            ← Bütün kurslar
        </a>

    </div>
</div>

@endsection
