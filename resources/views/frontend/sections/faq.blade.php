

<div id="contents">

    <div id="faq" class="featured">

        <h2>Tez-tez verilən suallar</h2>

        <div class="faq-list">

            @foreach($faqs as $faq)

                <div class="faq-item">

                    <h3>{{ $faq->question }}</h3>

                    <p>
                        {{ $faq->answer }}
                    </p>

                    <a href="{{ route('frontend.faq.show', $faq->id) }}" class="faq-link">
                        Ətraflı
                    </a>

                </div>

            @endforeach

        </div>

        <div class="section-see-all">
            <a href="{{ route('frontend.faqs.index') }}">Bütün sualları göstər</a>
        </div>

    </div>

</div>
