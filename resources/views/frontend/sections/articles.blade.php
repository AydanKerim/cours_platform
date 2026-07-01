<div id="articles" class="featured">

    <h2>Məqalələr</h2>

    <ul>

        @foreach($articles as $article)

            <li>

                <h3>

                    {{ $article->title }}

                </h3>

                <small>

                    {{ $article->created_at->format('d.m.Y') }}

                </small>

                <p>

                    {{ Str::limit($article->content, 120) }}

                </p>

                <a
                    href="{{ route('frontend.article.show',$article->id) }}"
                    class="more">

                    Davamını oxu

                </a>

            </li>

        @endforeach

    </ul>

</div>