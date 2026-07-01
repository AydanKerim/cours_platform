@extends('layouts.frontend')

@section('content')

<div id="contents">

    <div style="padding:20px;">

        <h1>{{ $lesson->title }}</h1>

        <hr>

        <h3>Dərsin məzmunu</h3>

        <p>
             {!! nl2br(e($lesson->content)) !!}
        </p>

        <br>

        <a
            href="{{ route('frontend.course.show', $lesson->course_id) }}"
            class="more">
            ← Kursa qayıt
        </a>

    </div>

</div>

@endsection