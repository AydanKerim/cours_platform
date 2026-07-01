@extends('layouts.frontend')

@section('content')

<div class="hero">

    <div class="hero-content">

        <h1>OutBox Academy</h1>

        <p>

            Gələcəyin proqramçılarını yetişdirən peşəkar tədris mərkəzi

        </p>

        <a href="#courses" class="hero-btn">

            Kurslara Bax

        </a>

    </div>

</div>

@include('frontend.sections.about')

@include('frontend.sections.courses')

@include('frontend.sections.trainers')

@include('frontend.sections.graduates')

@include('frontend.sections.partners')

@include('frontend.sections.faq')

@include('frontend.sections.articles')

@include('frontend.sections.contacts')

@endsection