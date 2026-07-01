@extends('layouts.frontend')

@section('content')

<div class="page-heading">
    <h1>Məqalələr</h1>
</div>

<div id="contents">

    <div id="articles" class="featured">

        <ul>

            @forelse($articles as $article)

                <li>

                    <h3>
                        {{ $article->title }}
                    </h3>

                    <small>
                        {{ $article->created_at->format('d.m.Y') }}
                    </small>

                    <p>
                        {{ Str::limit($article->content, 150) }}
                    </p>

                    <a
                        href="{{ route('frontend.article.show', $article->id) }}"
                        class="more">

                        Davamını oxu

                    </a>

                </li>

            @empty

                <p>Hələ ki heç bir məqalə əlavə edilməyib.</p>

            @endforelse

        </ul>

        {{ $articles->links('partials.pagination') }}

    </div>

</div>

@endsection
