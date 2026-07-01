

    <div id="contents">

        <div class="featured">
            <h2>Məzunlarımız</h2>

            <ul class="clearfix">

                @foreach($graduates as $graduate)

                    <li>
                        <div class="frame1">
                            <div class="box">

                                @if($graduate->photo)
                                    <img src="{{ asset('storage/' . $graduate->photo) }}" alt="{{ $graduate->name }}" width="197"
                                        height="130">
                                @endif

                            </div>
                        </div>

                        <p>
                            <b>{{ $graduate->name }}</b>
                            <br><br>

                            {{ $graduate->position }}
                        </p>
<p>
    <strong>Kurs:</strong>
    {{ $graduate->course }}
</p>

                        <p>
                            <strong>Vəzifəsi:</strong>
                            {{ $graduate->position }}
                        </p>

                        <a href="{{ route('frontend.graduate.show', $graduate->id) }}" class="more">
                            Ətraflı
                        </a>

                    </li>

                @endforeach

            </ul>

        </div>

    </div>

