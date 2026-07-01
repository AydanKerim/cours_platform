@extends('layouts.frontend')

@section('content')

<div class="page-heading">
    <h1>Əlaqə</h1>
</div>

<div id="contents">

    <div id="contact" class="featured">

        @forelse($contacts as $contact)

            <div class="contact-top">

                <div class="contact-info">

                    <h3>{{ $contact->title }}</h3>

                    <ul class="contact-details">

                        <li>
                            <span class="contact-icon">📍</span>
                            <span><strong>Ünvan:</strong> {{ $contact->address }}</span>
                        </li>

                        <li>
                            <span class="contact-icon">☎</span>
                            <span><strong>Telefon:</strong> {{ $contact->phone }}</span>
                        </li>

                        <li>
                            <span class="contact-icon">✉</span>
                            <span><strong>Email:</strong> {{ $contact->email }}</span>
                        </li>

                        <li>
                            <span class="contact-icon">🕒</span>
                            <span><strong>İş saatları:</strong> {{ $contact->working_hours }}</span>
                        </li>

                    </ul>

                    <a
                        href="{{ route('frontend.contact.show', $contact->id) }}"
                        class="faq-link">

                        Ətraflı

                    </a>

                </div>

                <div class="contact-map">

                    {!! $contact->map !!}

                </div>

            </div>

        @empty

            <p>Hələ ki heç bir əlaqə məlumatı əlavə edilməyib.</p>

        @endforelse

    </div>

</div>

@endsection
