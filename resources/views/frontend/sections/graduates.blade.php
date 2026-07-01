<div id="graduates" class="featured">

    <h2>Məzunlarımız</h2>

    <ul>

        @foreach($graduates as $graduate)

            <li>

                <div class="graduate-thumb">
                    @if($graduate->photo && Storage::disk('public')->exists($graduate->photo))
                        <img
                            src="{{ asset('storage/'.$graduate->photo) }}"
                            alt="{{ $graduate->name }}"
                            loading="lazy">
                    @else
                        <span class="graduate-thumb-fallback">{{ Str::substr($graduate->name, 0, 1) }}</span>
                    @endif
                </div>

                <h3>

                    {{ $graduate->name }}

                </h3>

                <div class="graduate-meta">
                    <span><strong>Kurs:</strong> {{ $graduate->course }}</span>
                    <span><strong>Vəzifə:</strong> {{ $graduate->position }}</span>
                </div>

                <a
                    href="{{ route('frontend.graduate.show',$graduate->id) }}"
                    class="more">

                    Ətraflı

                </a>

            </li>

        @endforeach

    </ul>

    <div class="section-see-all">
        <a href="{{ route('frontend.graduates.index') }}">Bütün məzunları göstər</a>
    </div>

</div>