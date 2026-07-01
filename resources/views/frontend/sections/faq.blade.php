

<div id="contents">

    <div id="faq" class="featured">

        <h2>Tez-tez verilən suallar</h2>

        @foreach($faqs as $faq)

            <div style="margin-bottom:30px;">

                <h3>{{ $faq->question }}</h3>

                <p>
                    {{ $faq->answer }}
                </p>

                <a href="{{ route('frontend.faq.show', $faq->id) }}">
                    Ətraflı
                </a>

            </div>

            <hr>

        @endforeach

    </div>

</div>

