

<div id="contents">

    <div class="featured">

        <h2>Məqalələr</h2>

        <ul class="clearfix">

            @foreach($articles as $article)

                <li style="margin-bottom:30px;">

                    <h3>

                        {{ $article->title }}

                    </h3>

                    <p>

                        {{ Str::limit($article->content, 150) }}

                    </p>

                    <small>

                        {{ $article->created_at->format('d.m.Y') }}

                    </small>

                    <br><br>

                    <a
                        href="{{ route('frontend.article.show', $article->id) }}"
                        class="more">

                        Ətraflı oxu

                    </a>

                </li>

            @endforeach

        </ul>

    </div>

</div>

