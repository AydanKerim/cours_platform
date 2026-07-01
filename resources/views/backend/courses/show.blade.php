<!-- kurs siyahisinda istenilen kursa klik edende bu sehife acilacaq -->

@extends('backend.layouts.app')
@section('content')




<h1>{{ $course->title}}</h1>
<p>{{ $course->duration}}</p>
<h2>Lessons</h2>
<p>Müddət: {{ $course->duration }}</p>
<p>Həftədə: {{ $course->weekly_lessons }} dəfə</p>
<p>Dərs saatı:{{ $course->lesson_hours }} saat</p>

@foreach ($course->lessons as $lesson)
<h3>{{$lesson->title}}</h3>
<p>{{ $lesson->content }}</p>
@endforeach
@endsection