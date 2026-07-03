@extends('layouts.frontend')

@section('content')

<div id="contents">

    <div class="featured">

        <h2>Kurslarımız</h2>

        <ul class="clearfix">

            @foreach($courses as $course)

                <li>

                    <div class="frame1">
                        <div class="box">

                            @if($course->photo)

                                <img
                                    src="{{ asset('storage/'.$course->photo) }}"
                                    alt="{{ $course->title }}"
                                    width="197"
                                    height="130"
                                    style="object-fit:cover;">

                            @endif

                        </div>
                    </div>

                    <h3 style="height:34px;">

                        {{ $course->title }}

                    </h3>

                    <p>

                        <strong>Müddət:</strong>

                        {{ $course->duration }}

                    </p>

                    <p>

                        <strong>Dərs sayı:</strong>

                        {{ $course->lessons->count() }}

                    </p>

                    <a
                        href="{{ route('frontend.course.show', $course->id) }}"
                        class="more">

                        Ətraflı

                    </a>

                </li>

            @endforeach

        </ul>

 <div class="flex justify-center mt-6">
    {{ $courses->links('partials.pagination') }}
</div>

    </div>

</div>

@endsection