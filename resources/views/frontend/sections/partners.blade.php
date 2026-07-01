

<div id="contents">

 <div id="partners" class="featured">

        <h2>Akademik Partnyorlarımız</h2>

        <div class="partners-slider">

            <button type="button" class="partners-arrow partners-prev" aria-label="Əvvəlki">&#10094;</button>

            <div class="partners-viewport">
                <ul class="partners-track">

                    @foreach($partners as $partner)

                        <li class="partners-slide">

                            <div class="partners-logo">

                                @if($partner->logo && Storage::disk('public')->exists($partner->logo))

                                    <img
                                        src="{{ asset('storage/'.$partner->logo) }}"
                                        alt="{{ $partner->name }}"
                                        loading="lazy">

                                @else

                                    <span class="partners-logo-fallback">{{ $partner->name }}</span>

                                @endif

                            </div>

                            <p>{{ $partner->name }}</p>

                        </li>

                    @endforeach

                </ul>
            </div>

            <button type="button" class="partners-arrow partners-next" aria-label="Növbəti">&#10095;</button>

        </div>

        <div class="partners-dots"></div>

    </div>

</div>
