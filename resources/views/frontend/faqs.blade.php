@extends('layouts.frontend')

@section('content')

<div class="page-heading">
    <h1>Tez-tez verilən suallar</h1>
</div>

<div id="contents">

    <div id="faq" class="featured">

        <div class="faq-list">

            @forelse($faqs as $faq)

                <div class="faq-item">

                    <h3>{{ $faq->question }}</h3>

                    <p>
                        {{ $faq->answer }}
                    </p>

                    <a href="{{ route('frontend.faq.show', $faq->id) }}" class="faq-link">
                        Ətraflı
                    </a>

                </div>

            @empty

                <p>Hələ ki heç bir sual əlavə edilməyib.</p>

            @endforelse

        </div>

    </div>

</div>

@endsection
