@extends('layouts.frontend')

@section('content')

<div class="page-heading">
    <h1>{{ $trainer->name }}</h1>
</div>

<div class="detail-page">
    <div class="detail-card">

        <div class="profile-header">

            @if($trainer->photo && Storage::disk('public')->exists($trainer->photo))
                <img
                    src="{{ asset('storage/'.$trainer->photo) }}"
                    alt="{{ $trainer->name }}"
                    class="profile-photo">
            @else
                <span class="profile-photo-fallback">{{ Str::substr($trainer->name, 0, 1) }}</span>
            @endif

            <span class="profile-badge">{{ $trainer->position }}</span>

        </div>

        <p class="profile-bio">
            {{ $trainer->bio }}
        </p>

        <a href="{{ route('frontend.trainers.index') }}" class="detail-back">
            ← Bütün təlimçilər
        </a>

    </div>
</div>

@endsection
