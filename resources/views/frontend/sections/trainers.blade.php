<div id="trainers" class="featured">
    <h2>Təlimçilərimiz</h2>

    <ul class="clearfix">

        @foreach($trainers as $trainer)

            <li>
                <div class="trainer-thumb">
                    @if($trainer->photo && Storage::disk('public')->exists($trainer->photo))
                        <img src="{{ asset('storage/' . $trainer->photo) }}" alt="{{ $trainer->name }}" loading="lazy">
                    @else
                        <span class="trainer-thumb-fallback">{{ Str::substr($trainer->name, 0, 1) }}</span>
                    @endif
                </div>

                <h3>
                    {{ $trainer->name }}

                </h3>


                <p>

                    <strong>Vəzifə:</strong>

                    {{ $trainer->position }}

                </p>

                <a href="{{ route('frontend.trainer.show', $trainer->id) }}" class="more">
                    Ətraflı
                </a>

            </li>

        @endforeach

    </ul>

    <div class="section-see-all">
        <a href="{{ route('frontend.trainers.index') }}">Bütün təlimçiləri göstər</a>
    </div>

</div>