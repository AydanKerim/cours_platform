@extends('layouts.frontend')

@section('content')

<div id="contents">

    <div class="featured">

        <h1>

            {{ $article->title }}

        </h1>

        <p style="color:gray;">

            {{ $article->created_at->format('d.m.Y') }}

        </p>

        <hr>

        <div
            style="line-height:32px;
                   font-size:17px;
                   white-space:pre-line;">

            {{ $article->content }}

        </div>

        <br>

        <a
            href="{{ route('frontend.articles.index') }}"
            class="more">

            ← Bütün məqalələr

        </a>

    </div>

</div>

@endsection