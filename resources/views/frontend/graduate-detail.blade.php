@extends('layouts.frontend')

@section('content')

<div class="page-heading">
    <h1>{{ $graduate->name }}</h1>
</div>

<div class="detail-page">
    <div class="detail-card">

        <div class="profile-header">

            @if($graduate->photo && Storage::disk('public')->exists($graduate->photo))
                <img
                    src="{{ asset('storage/'.$graduate->photo) }}"
                    alt="{{ $graduate->name }}"
                    class="profile-photo">
            @else
                <span class="profile-photo-fallback">{{ Str::substr($graduate->name, 0, 1) }}</span>
            @endif

            <span class="profile-badge">{{ $graduate->position }}</span>

        </div>

        <div class="profile-meta">

            <div>
                <strong>Kurs</strong>
                {{ $graduate->course }}
            </div>

            <div>
                <strong>Şirkət</strong>
                {{ $graduate->company }}
            </div>

        </div>

        <a href="{{ route('frontend.graduates.index') }}" class="detail-back">
            ← Bütün məzunlar
        </a>

    </div>
</div>

@endsection
