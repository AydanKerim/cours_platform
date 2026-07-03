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

                            <p style="margin-top: 10px; font-weight: 500; color: #5a6c7d;">{{ $partner->name }}</p>

                        </li>

                    @endforeach

                </ul>
            </div>

            <button type="button" class="partners-arrow partners-next" aria-label="Növbəti">&#10095;</button>

        </div>

    </div>

</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const track = document.querySelector('.partners-track');
        const nextBtn = document.querySelector('.partners-next');
        const prevBtn = document.querySelector('.partners-prev');
        
        if (!track || !nextBtn || !prevBtn) return;

        let index = 0;

        function updateSlider() {
            const slideWidth = document.querySelector('.partners-slide').getBoundingClientRect().width;
            // Lent-i sola doğru sürüşdürürük
            track.style.transform = `translateX(-${index * slideWidth}px)`;
        }

        nextBtn.addEventListener('click', () => {
            const totalSlides = document.querySelectorAll('.partners-slide').length;
            // Ekranda neçə dənə slayd göstərildiyini CSS-dən alırıq (Məsələn: 4)
            const visibleSlides = window.innerWidth > 992 ? 4 : (window.innerWidth > 768 ? 3 : (window.innerWidth > 480 ? 2 : 1));
            
            if (index < totalSlides - visibleSlides) {
                index++;
            } else {
                index = 0; // Sona çatanda başa qayıtsın
            }
            updateSlider();
        });

        prevBtn.addEventListener('click', () => {
            if (index > 0) {
                index--;
            } else {
                const totalSlides = document.querySelectorAll('.partners-slide').length;
                const visibleSlides = window.innerWidth > 992 ? 4 : (window.innerWidth > 768 ? 3 : (window.innerWidth > 480 ? 2 : 1));
                index = totalSlides - visibleSlides; // Əvvəldədirsə sona keçsin
            }
            updateSlider();
        });

        // Ekran ölçüsü dəyişəndə sürüşmə məsafəsini avtomatik tənzimlə
        window.addEventListener('resize', updateSlider);
    });
</script>