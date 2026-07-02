@extends('backend.layouts.app')

@section('content')

<h1>Dashboard</h1>

<div class="dashboard">

    <div class="dashboard-card">
        <h3>Kurslar</h3>
        <span>{{ \App\Models\Course::count() }}</span>
    </div>

    <div class="dashboard-card">
        <h3>Təlimçilər</h3>
        <span>{{ \App\Models\Trainer::count() }}</span>
    </div>

    <div class="dashboard-card">
        <h3>Məzunlar</h3>
        <span>{{ \App\Models\Graduate::count() }}</span>
    </div>

    <div class="dashboard-card">
        <h3>Partnyorlar</h3>
        <span>{{ \App\Models\Partner::count() }}</span>
    </div>

    <div class="dashboard-card">
        <h3>Məqalələr</h3>
        <span>{{ \App\Models\Article::count() }}</span>
    </div>

    <div class="dashboard-card">
        <h3>FAQ</h3>
        <span>{{ \App\Models\Faq::count() }}</span>
    </div>

</div>

@endsection