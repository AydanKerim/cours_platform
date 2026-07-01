@extends('layouts.frontend')

@section('content')

<div class="page-heading">
    <h1>Məzunlarımız</h1>
</div>

<div id="contents">

    <div id="graduates" class="featured">

        <ul>

            @forelse($graduates as $graduate)

                <li>

                    <div class="graduate-thumb">
                        @if($graduate->photo && Storage::disk('public')->exists($graduate->photo))
                            <img
                                src="{{ asset('storage/'.$graduate->photo) }}"
                                alt="{{ $graduate->name }}"
                                loading="lazy">
                        @else
                            <span class="graduate-thumb-fallback">{{ Str::substr($graduate->name, 0, 1) }}</span>
                        @endif
                    </div>

                    <h3>
                        {{ $graduate->name }}
                    </h3>

                    <div class="graduate-meta">
                        <span><strong>Kurs:</strong> {{ $graduate->course }}</span>
                        <span><strong>Vəzifə:</strong> {{ $graduate->position }}</span>
                    </div>

                    <a
                        href="{{ route('frontend.graduate.show', $graduate->id) }}"
                        class="more">

                        Ətraflı

                    </a>

                </li>

            @empty

                <p>Hələ ki heç bir məzun əlavə edilməyib.</p>

            @endforelse

        </ul>

        {{ $graduates->links('partials.pagination') }}

    </div>

</div>

@endsection
