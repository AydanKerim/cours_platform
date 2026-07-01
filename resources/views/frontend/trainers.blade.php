@extends('layouts.frontend')

@section('content')

<div class="page-heading">
    <h1>Təlimçilərimiz</h1>
</div>

<div id="contents">

    <div id="trainers" class="featured">

        <ul class="clearfix">

            @forelse($trainers as $trainer)

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

            @empty

                <p>Hələ ki heç bir təlimçi əlavə edilməyib.</p>

            @endforelse

        </ul>

        {{ $trainers->links('partials.pagination') }}

    </div>

</div>

@endsection
