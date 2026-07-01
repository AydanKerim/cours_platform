

    <div id="contents">

       <div id="about" class="featured">
            <h2>Haqqımızda</h2>

           <div class="about-content">

@foreach($abouts as $about)

<div class="about-box">

    <h2>{{ $about->title }}</h2>

    <p>{{ $about->description }}</p>

</div>

@endforeach

            </div>

        </div>

    </div>
