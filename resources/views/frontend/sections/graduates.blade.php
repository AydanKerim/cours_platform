<div id="graduates" class="featured">

    <h2>Məzunlarımız</h2>

    <ul>

        @foreach($graduates as $graduate)

            <li>

                @if($graduate->photo)

                    <img
                        src="{{ asset('storage/'.$graduate->photo) }}"
                        alt="{{ $graduate->name }}">

                @endif

                <h3>

                    {{ $graduate->name }}

                </h3>

                <p>

                    <strong>Kurs:</strong>

                    {{ $graduate->course }}

                </p>

                <p>

                    <strong>Vəzifə:</strong>

                    {{ $graduate->position }}

                </p>

                <a
                    href="{{ route('frontend.graduate.show',$graduate->id) }}"
                    class="more">

                    Ətraflı

                </a>

            </li>

        @endforeach

    </ul>

</div>