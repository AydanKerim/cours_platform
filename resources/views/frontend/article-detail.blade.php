@extends('layouts.frontend')

@section('content')

<div class="page-heading">
    <h1>{{ $article->title }}</h1>
</div>

<div class="detail-page">
    <div class="detail-card">

        <p class="detail-date">
            {{ $article->created_at->format('d.m.Y') }}
        </p>

        <p class="detail-body">
            {{ $article->content }}
        </p>

        <a href="{{ route('frontend.articles.index') }}" class="detail-back">
            ← Bütün məqalələr
        </a>

    </div>
</div>

@endsection
