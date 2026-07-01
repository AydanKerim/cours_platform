

<div id="contents">

    <div id="courses" class="featured">

        <h2>Kurslarımız</h2>

        <ul class="clearfix">

            @foreach($courses as $course)

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

            @endforeach

        </ul>

        <div class="section-see-all">
            <a href="{{ route('frontend.courses.index') }}">Bütün kursları göstər</a>
        </div>

    </div>

</div>
