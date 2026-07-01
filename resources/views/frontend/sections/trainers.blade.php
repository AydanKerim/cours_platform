<div id="trainers" class="featured">
    <h2>Təlimçilərimiz</h2>

    <ul class="clearfix">

        @foreach($trainers as $trainer)

            <li>
                <div class="frame1">
                    <div class="box">

                        @if($trainer->photo)
                            <img src="{{ asset('storage/' . $trainer->photo) }}" alt="{{ $trainer->name }}" width="197"
                                height="130">
                        @endif

                    </div>
                </div>

                <h3>
                    {{ $trainer->name }}

                </h3>


                <p>

                    <strong>Vəzifə:</strong>

                    {{ $trainer->position }}

                </p>

                <a href="{{ route('frontend.trainer.show', $trainer->id) }}" class="more">
                    Ətraflı
                </a>

            </li>

        @endforeach

    </ul>

</div>

</div>