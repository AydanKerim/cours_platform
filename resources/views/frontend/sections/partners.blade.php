<div id="partners" class="featured">

    <h2>Akademik Partnyorlarımız</h2>

    <ul>

        @foreach($partners as $partner)

            <li>

                @if($partner->logo)

                    <img
                        src="{{ asset('storage/'.$partner->logo) }}"
                        alt="{{ $partner->name }}">

                @endif

                <h3>

                    {{ $partner->name }}

                </h3>

            </li>

        @endforeach

    </ul>

</div>