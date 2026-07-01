@extends('backend.layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Məqalələr Siyahısı</h2>
        <a href="{{ route('admin.articles.create') }}" class="btn btn-primary">Yeni Məqalə</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Başlıq</th>
                <th>Yaradılma Tarixi</th>
                <th>Əməliyyatlar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($articles as $article)
            <tr>
                <td>{{ $article->id }}</td>
                <td>{{ $article->title }}</td>
                <td>

{{ optional($article->created_at)->format('d.m.Y') }}

</td>
                <td>
                    <a href="{{ route('admin.articles.edit', $article->id) }}" class="btn btn-sm btn-warning">Redaktə</a>
                    <form action="{{ route('admin.articles.destroy', $article->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Silmək istədiyinizdən əminsiniz?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Sil</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection