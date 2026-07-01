@extends('layouts.frontend')

@section('content')

<div class="page-heading">
    <h1>{{ $faq->question }}</h1>
</div>

<div class="detail-page">
    <div class="detail-card">

        <p>
            {{ $faq->answer }}
        </p>

        <a href="{{ route('frontend.faqs.index') }}" class="detail-back">
            ← Bütün suallar
        </a>

    </div>
</div>

@endsection
