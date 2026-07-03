@extends('layouts.frontend')

@section('content')

    <div id="contents">

        <div class="featured">
            <h2>Haqqımızda</h2>

           <div class="about-content">

@foreach($abouts as $about)

<div class="about-box">

    <h2>{{ $about->title }}</h2>

    <p>{{ $about->description }}</p>

</div>

@endforeach

<!-- faq hissesini elave etdik -->
<hr>

<h2>Tez-tez verilən suallar</h2>

@foreach($faqs as $faq)

<div class="faq-item">

    <button class="faq-question">

        {{ $faq->question }}

    </button>

    <div class="faq-answer">

        <p>{{ $faq->answer }}</p>

    </div>

</div>

@endforeach
</div>

        </div>

    </div>



<!-- Partner hissesini elave etdik -->
 <hr>

<h2>Akademik Partnyorlarımız</h2>

<div class="partners">

    @foreach($partners as $partner)

        <div class="partner-item">

            @if($partner->logo)

                <img
                    src="{{ asset('storage/'.$partner->logo) }}"
                    alt="{{ $partner->name }}">

            @endif

            <h4>{{ $partner->name }}</h4>

        </div>

    @endforeach

</div>


<script>

document.querySelectorAll('.faq-question').forEach(button => {

    button.addEventListener('click', function(){

        let answer = this.nextElementSibling;

        if(answer.style.display === 'block'){

            answer.style.display = 'none';

        }else{

            answer.style.display = 'block';

        }

    });

});

</script>

@endsection