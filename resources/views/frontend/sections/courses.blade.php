

<div id="contents">
    <div id="courses" class="featured">
        <h2>Kurslarımız</h2>

        <!-- Daxili stil əlavə edirik ki, köhnə clearfix/float xətalarını tamamilə əzsin -->
        <style>
            .modern-courses-list {
                display: flex !important;
                flex-wrap: wrap !important;
                justify-content: center !important;
                gap: 30px !important;
                list-style: none !important;
                padding: 0 !important;
                margin: 0 auto !important;
                width: 960px !important;
            }

            .modern-courses-list li {
                width: 280px !important;
                background: #fff !important;
                border-radius: 12px !important;
                padding: 20px !important;
                box-sizing: border-box !important;
                box-shadow: 0 5px 15px rgba(0,0,0,.05) !important;
                
                /* Şaquli Flexbox: hər şeyi alt-alta nizamlayır */
                display: flex !important;
                flex-direction: column !important;
                justify-content: space-between !important;
                align-items: center !important;
                text-align: center !important;
                min-height: 440px !important; /* Kartların hündürlüyünü bərabərləşdirir */
            }

            .modern-courses-list .frame1 {
                margin-bottom: 15px !important;
                display: flex !important;
                justify-content: center !important;
            }

            .modern-courses-list h3 {
                font-size: 20px !important;
                margin: 10px 0 !important;
                color: #000 !important;
                /* Sabit height yerinə flex-grow veririk ki, yazı uzansa da dizaynı sıxmasın */
                flex-grow: 0 !important; 
                width: 100% !important;
            }

            .modern-courses-list p {
                margin: 5px 0 !important;
                font-size: 15px !important;
                color: #555 !important;
                width: 100% !important;
            }

            /* Düyməni absolute vəziyyətindən xilas edirik */
            .modern-courses-list .more {
                position: static !important; 
                display: inline-block !important;
                margin-top: auto !important; /* Mətnlərdən asılı olmayaraq həmişə ən aşağıya yapışır */
                background-color: #4caf50 !important; /* Sizin yaşıl rənginiz */
                color: white !important;
                padding: 10px 25px !important;
                border-radius: 6px !important;
                text-decoration: none !important;
                font-weight: bold !important;
                width: fit-content !important;
            }
        </style>

        <!-- Yenilənmiş sinif adı ilə təmiz siyahı -->
        <ul class="modern-courses-list">
            @foreach($courses as $course)
                <li>
                    <!-- 1. Şəkil Bölməsi -->
                    <div class="frame1">
                        <div class="box">
                            @if($course->photo)
                                <img src="{{ asset('storage/'.$course->photo) }}" 
                                     alt="{{ $course->title }}" 
                                     width="197" 
                                     height="130" 
                                     style="object-fit:cover;">
                            @endif
                        </div>
                    </div>

                    <!-- 2. Kursun Adı (style="height" silindi!) -->
                    <h3>{{ $course->title }}</h3>

                    <!-- 3. Kurs haqqında məlumatlar -->
                    <p><strong>Müddət:</strong> {{ $course->duration }} ay</p>
                    <p><strong>Dərs sayı:</strong> {{ $course->lessons->count() }} dərs</p>

                    <!-- 4. Ətraflı Düyməsi -->
                    <a href="{{ route('frontend.course.show', $course->id) }}" class="more">
                        Ətraflı
                    </a>
                </li>
            @endforeach
        </ul>

    </div>
</div>


<!-- 

    

      <div id="courses" class="featured">

    <h2>Kurslarımız</h2>

    <ul class="clearfix">

        @foreach($courses as $course)

            <li>

                <div class="frame1">
                    <div class="box">

                        @if($course->photo)
                            <img
                                src="{{ asset('storage/'.$course->photo) }}"
                                alt="{{ $course->title }}"
                                width="197"
                                height="130"
                                style="object-fit:cover;">
                        @endif

                    </div>
                </div>

                <h3 style="height:60px;">

                    {{ $course->title }}

                </h3>

                <p>

                    <strong>Müddət:</strong>

                    {{ $course->duration }}

                </p>

                <p>

                    <strong>Dərs sayı:</strong>

                    {{ $course->lessons->count() }}

                </p>

                <a
                    href="{{ route('frontend.course.show', $course->id) }}"
                    class="more">

                    Ətraflı

                </a>

            </li>

        @endforeach

    </ul>

</div>

    </div>
 -->
