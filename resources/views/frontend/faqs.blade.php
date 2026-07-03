@extends('layouts.frontend')

@section('content')

<div class="page-heading" style="text-align: center; padding: 40px 0; background-color: #ffffff; border-bottom: 1px solid #eef2f5;">
    <h1 style="margin: 0; color: #2c3e50; font-size: 32px; font-weight: 700; text-transform: uppercase;">Tez-tez verilən suallar</h1>
</div>

<div id="contents" style="background-color: #f8f9fa; padding: 50px 0; min-height: 70vh;">

    <div id="faq" class="featured" style="max-width: 900px; margin: 0 auto; padding: 0 20px;">

        <div class="faq-list" style="display: flex; flex-direction: column; gap: 15px;">

            @forelse($faqs as $faq)

                <div class="faq-accordion-card" style="background: #ffffff; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.03); border: 1px solid #eef2f5; overflow: hidden;">

                    <div class="faq-trigger" style="padding: 22px 25px; cursor: pointer; display: flex; justify-content: space-between; align-items: center; background-color: #ffffff; user-select: none;">
                        
                        <h3 style="margin: 0; color: #2c3e50; font-size: 18px; font-weight: 600; line-height: 1.4; pointer-events: none;">
                            {{ $faq->question }}
                        </h3>
                        
                        <span class="faq-icon" style="font-size: 20px; color: #3498db; font-weight: bold; transition: transform 0.3s ease; pointer-events: none;">+</span>
                    
                    </div>

                    <div class="faq-panel" style="max-height: 0; overflow: hidden; transition: max-height 0.3s ease-out; background-color: #fafbfc;">
                        
                        <div style="padding: 0 25px 22px 25px; color: #5a6c7d; font-size: 15px; line-height: 1.6; border-top: 1px solid #f7f9fa;">
                            {{ $faq->answer }}
                        </div>
                    
                    </div>

                </div>

            @empty

                <div style="text-align: center; padding: 40px; background: #ffffff; border-radius: 10px; color: #7f8c8d;">
                    <p style="margin: 0; font-size: 16px;">Hələ ki heç bir sual əlavə edilməyib.</p>
                </div>

            @endforelse

        </div>

    </div>

</div>

<script>
    document.querySelectorAll('.faq-trigger').forEach(trigger => {
        trigger.addEventListener('click', function() {
            const currentCard = this.parentElement;
            const currentPanel = this.nextElementSibling;
            const currentIcon = this.querySelector('.faq-icon');
            
            // Hazırda kliklənən sualın aktiv olub-olmadığını yoxlayırıq
            const isAlreadyActive = currentCard.classList.contains('active');
            
            // Öncə DİGƏR bütün açıq sualları bağlayırıq (Kliklədiyimizə toxunmuruq)
            document.querySelectorAll('.faq-accordion-card').forEach(card => {
                if (card !== currentCard) {
                    card.classList.remove('active');
                    const panel = card.querySelector('.faq-panel');
                    if (panel) panel.style.maxHeight = 0;
                    const icon = card.querySelector('.faq-icon');
                    if (icon) {
                        icon.innerText = '+';
                        icon.style.transform = 'rotate(0deg)';
                    }
                }
            });

            // Əgər sual əvvəldən açıq idisə, bağlayırıq. Bağlı idisə, açırıq.
            if (isAlreadyActive) {
                currentCard.classList.remove('active');
                currentPanel.style.maxHeight = 0;
                currentIcon.innerText = '+';
                currentIcon.style.transform = 'rotate(0deg)';
            } else {
                currentCard.classList.add('active');
                currentPanel.style.maxHeight = currentPanel.scrollHeight + "px";
                currentIcon.innerText = '−'; // Minus işarəsi
                currentIcon.style.transform = 'rotate(180deg)';
            }
        });
    });
</script>

@endsection