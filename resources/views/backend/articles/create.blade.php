@extends('backend.layouts.app')

@section('content')
<div class="container">
    <h2>Yeni Məqalə Əlavə Et</h2>

    <form action="{{ route('admin.articles.store') }}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label>Məqalə Başlığı</label>
            <input
type="text"
name="title"
class="form-control"
value="{{ old('title') }}"
required>
        </div>

        <div class="form-group mb-3">
            <label>Məzmun</label>
            <textarea
name="content"
rows="6"
class="form-control"
required>{{ old('content') }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Yadda Saxla</button>
        <a href="{{ route('admin.articles.index') }}" class="btn btn-secondary">Geri Dön</a>
    </form>
</div>
@endsection