<div id="contact" class="featured">

    <h2>Əlaqə</h2>

    <h3>{{ $contact->title }}</h3>

    <p>
        <strong>📍 Ünvan:</strong>
        {{ $contact->address }}
    </p>

    <p>
        <strong>☎ Telefon:</strong>
        {{ $contact->phone }}
    </p>

    <p>
        <strong>✉ Email:</strong>
        {{ $contact->email }}
    </p>

    <p>
        <strong>🕒 İş saatları:</strong>
        {{ $contact->working_hours }}
    </p>

    <br>

    <div>

        {!! $contact->map !!}

    </div>

    <hr>

    <h2>Bizə Yazın</h2>

    @if(session('success'))

        <div class="alert alert-success">

            {{ session('success') }}

        </div>

    @endif

    <form action="{{ route('frontend.contact.message.store') }}" method="POST">

        @csrf

        <p>

            <input
                type="text"
                name="name"
                placeholder="Ad Soyad"
                required>

        </p>

        <p>

            <input
                type="email"
                name="email"
                placeholder="Email"
                required>

        </p>

        <p>

            <input
                type="text"
                name="phone"
                placeholder="Telefon"
                required>

        </p>

        <p>

            <input
                type="text"
                name="subject"
                placeholder="Mövzu"
                required>

        </p>

        <p>

            <textarea
                name="message"
                rows="6"
                placeholder="Mesajınız..."
                required></textarea>

        </p>

        <button type="submit" class="more">

            Göndər

        </button>

    </form>

</div>