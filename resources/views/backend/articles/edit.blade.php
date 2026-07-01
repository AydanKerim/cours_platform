@extends('backend.layouts.app')

@section('content')
<div class="container">
    <h2>Məqaləni Redaktə Et</h2>

    <form action="{{ route('admin.articles.update', $article->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group mb-3">
            <label>Məqalə Başlığı</label>
            <input type="text" name="title" 
           value="{{ old('title',$article->title) }}" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label>Məzmun</label>
            <textarea name="content" rows="6" class="form-control" required>{{ old('content',$article->content) }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Yenilə</button>
        <a href="{{ route('admin.articles.index') }}" class="btn btn-secondary">Geri Dön</a>
    </form>
</div>
@endsection