@extends('backend.layouts.app')

@section('content')

<h1 style="color: #2c3e50; font-weight: 700; margin-bottom: 5px;">Dashboard</h1>
<p style="color: #7f8c8d; margin: 0 0 20px 0;">Sistemdəki ümumi statistika və cari vəziyyət</p>

<div class="dashboard">

    <div class="dashboard-card card-courses">
        <div class="card-info">
            <h3>Kurslar</h3>
            <span>{{ \App\Models\Course::count() }}</span>
        </div>
    </div>

    <div class="dashboard-card card-trainers">
        <div class="card-info">
            <h3>Təlimçilər</h3>
            <span>{{ \App\Models\Trainer::count() }}</span>
        </div>
    </div>

    <div class="dashboard-card card-graduates">
        <div class="card-info">
            <h3>Məzunlar</h3>
            <span>{{ \App\Models\Graduate::count() }}</span>
        </div>
    </div>

    <div class="dashboard-card card-partners">
        <div class="card-info">
            <h3>Partnyorlar</h3>
            <span>{{ \App\Models\Partner::count() }}</span>
        </div>
    </div>

    <div class="dashboard-card card-articles">
        <div class="card-info">
            <h3>Məqalələr</h3>
            <span>{{ \App\Models\Article::count() }}</span>
        </div>
    </div>

    <div class="dashboard-card card-faq">
        <div class="card-info">
            <h3>FAQ</h3>
            <span>{{ \App\Models\Faq::count() }}</span>
        </div>
    </div>

</div>

@endsection