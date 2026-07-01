

<div id="contents">
    <div id="faq" class="featured">
        <h2>Tez-tez verilən suallar</h2>

        <!-- Təmiz Accordion dizaynı üçün daxili CSS -->
        <style>
            .faq-container {
                max-width: 960px;
                margin: 0 auto;
                padding: 10px 0;
            }

            .faq-item {
                background: #fff;
                border: 1px solid #e0e0e0;
                border-radius: 8px;
                margin-bottom: 15px;
                overflow: hidden;
                box-shadow: 0 2px 5px rgba(0,0,0,0.02);
                transition: all 0.3s ease;
            }

            /* Sualın basıla bilən hissəsi */
            .faq-question {
                padding: 20px;
                margin: 0;
                font-size: 18px;
                font-weight: 600;
                color: #2c3e50;
                cursor: pointer;
                display: flex;
                justify-content: space-between;
                align-items: center;
                user-select: none;
                background-color: #ffffff;
                transition: background-color 0.2s ease;
            }

            .faq-question:hover {
                background-color: #fcfcfc;
            }

            /* Sağ tərəfdəki ox işarəsi */
            .faq-icon {
                font-size: 16px;
                transition: transform 0.3s ease;
                color: #4caf50; /* Sizin yaşıl rənginiz */
            }

            /* Cavab hissəsi (ilkin olaraq gizlidir) */
            .faq-answer {
                max-height: 0;
                overflow: hidden;
                transition: max-height 0.3s ease-out, padding 0.3s ease;
                background-color: #fafafa;
                border-top: 1px solid transparent;
            }

            .faq-answer p {
                padding: 0 20px 20px 20px;
                margin: 0;
                color: #555;
                line-height: 1.6;
                font-size: 15px;
            }

            /* Aktiv (açıq) vəziyyət üçün siniflər */
            .faq-item.active {
                border-color: #4caf50;
                box-shadow: 0 4px 12px rgba(0,0,0,0.05);
            }

            .faq-item.active .faq-icon {
                transform: rotate(180deg);
            }

            .faq-item.active .faq-answer {
                border-top: 1px solid #eeeeee;
                /* Padding aktiv olanda görünür */
            }
        </style>

        <div class="faq-container">
            @foreach($faqs as $faq)
                <div class="faq-item">
                    <!-- Sual başlığı -->
                    <div class="faq-question">
                        <span>{{ $faq->question }}</span>
                        <span class="faq-icon">&#9662;</span> <!-- Aşağı baxan kiçik ox -->
                    </div>
                    
                    <!-- Cavab bloku -->
                    <div class="faq-answer">
                        <!-- Kontentin daxili boşluğu üçün əlavə div -->
                        <div style="padding-top: 15px;">
                            <p>{{ $faq->answer }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Açılıb-bağlanmanı təmin edən yüngül JavaScript -->
        <script>
            document.querySelectorAll('.faq-question').forEach(question => {
                question.addEventListener('click', () => {
                    const item = question.parentElement;
                    const answer = item.querySelector('.faq-answer');

                    // Əgər kliklənən sual artıq açıqdırsa, bağla
                    if (item.classList.contains('active')) {
                        item.classList.remove('active');
                        answer.style.maxHeight = null;
                    } else {
                        // Digər bütün açıq sualları bağlamaq istəyirsinizsə, bu 3 sətri saxlayın:
                        document.querySelectorAll('.faq-item').forEach(i => {
                            i.classList.remove('active');
                            i.querySelector('.faq-answer').style.maxHeight = null;
                        });

                        // Seçilən sualı aç
                        item.classList.add('active');
                        answer.style.maxHeight = answer.scrollHeight + "px";
                    }
                });
            });
        </script>

    </div>
</div>

<!-- <div id="contents">

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

</div> -->

