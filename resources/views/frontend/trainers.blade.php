

    <div id="contents">

        <div class="featured">
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

                        <p>
                            <b>{{ $trainer->name }}</b>
                            <br><br>

                            {{ Str::limit($trainer->position, 60) }}
                        </p>


                        <p>
                            Vəzifəsi
                            <strong>Vəzifəsi:</strong>
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

