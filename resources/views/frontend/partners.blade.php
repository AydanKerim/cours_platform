

<div id="contents">

    <div class="featured">

        <h2>Akademik Partnyorlarımız</h2>

        <ul class="clearfix">

            @foreach($partners as $partner)

                <li>

                    <div class="frame1">

                        <div class="box">

                            @if($partner->logo)

                                <img
                                    src="{{ asset('storage/'.$partner->logo) }}"
                                    alt="{{ $partner->name }}"
                                    width="180">

                            @endif

                        </div>

                    </div>

                    <p>

                        <b>{{ $partner->name }}</b>

                    </p>

                </li>

            @endforeach

        </ul>

    </div>

</div>

