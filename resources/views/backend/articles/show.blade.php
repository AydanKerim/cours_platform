@extends('backend.layouts.app')

@section('content')

<div class="container">

    <div class="card">

        <div class="card-header d-flex justify-content-between align-items-center">

            <h2>{{ $article->title }}</h2>

            <div>

                <a href="{{ route('admin.articles.index') }}"
                   class="btn btn-secondary">
                    Geri
                </a>

                <a href="{{ route('admin.articles.edit', $article->id) }}"
                   class="btn btn-warning">
                    Redaktə et
                </a>

            </div>

        </div>

        <div class="card-body">

            <p>

                <strong>ID:</strong>

                {{ $article->id }}

            </p>

            <p>

                <strong>Yaradılıb:</strong>

                {{ optional($article->created_at)->format('d.m.Y H:i') }}

            </p>

            <p>

                <strong>Son yenilənmə:</strong>

                {{ optional($article->updated_at)->format('d.m.Y H:i') }}

            </p>

            <hr>

            <h4>Məqalənin mətni</h4>

            <div
                style="white-space:pre-line;
                       line-height:1.8;
                       font-size:16px;">

                {{ $article->content }}

            </div>

        </div>

    </div>

</div>

@endsection