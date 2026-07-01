@extends('layouts.frontend')

@section('content')

<div class="page-heading">
    <h1>Kurslarımız</h1>
</div>

<div id="contents">

    <div id="courses" class="featured">

        <ul class="clearfix">

            @forelse($courses as $course)

                <li>

                    <div class="course-thumb">
                        @if($course->photo && Storage::disk('public')->exists($course->photo))
                            <img
                                src="{{ asset('storage/'.$course->photo) }}"
                                alt="{{ $course->title }}"
                                loading="lazy">
                        @else
                            <span class="course-thumb-fallback">{{ Str::substr($course->title, 0, 1) }}</span>
                        @endif
                    </div>

                    <div class="course-body">

                        <h3>
                            {{ $course->title }}
                        </h3>

                        <div class="course-meta">
                            <span><strong>Müddət:</strong> {{ $course->duration }}</span>
                            <span><strong>Dərs sayı:</strong> {{ $course->lessons->count() }}</span>
                        </div>

                        <a
                            href="{{ route('frontend.course.show', $course->id) }}"
                            class="more">

                            Ətraflı

                        </a>

                    </div>

                </li>

            @empty

                <p>Hələ ki heç bir kurs əlavə edilməyib.</p>

            @endforelse

        </ul>

        {{ $courses->links('partials.pagination') }}

    </div>

</div>

@endsection
