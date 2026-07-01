

<div id="contents">

    <div class="featured">

        <h2>Əlaqə</h2>

        @foreach($contacts as $contact)

            <h3>{{ $contact->title }}</h3>

            <br>

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

            <h3>Xəritə</h3>

            <div>

                {!! $contact->map !!}

            </div>

            <hr>

<h2>Bizə Yazın</h2>

@if(session('success'))

    <div style="color:green;margin-bottom:20px;">

        {{ session('success') }}

    </div>

@endif

<form
    action="{{ route('frontend.contact.message.store') }}"
    method="POST">

    @csrf

    <p>

        <label>Ad Soyad</label>

        <br>

        <input
            type="text"
            name="name"
            style="width:400px;padding:8px;"
            required>

    </p>

    <p>

        <label>Email</label>

        <br>

        <input
            type="email"
            name="email"
            style="width:400px;padding:8px;"
            required>

    </p>

    <p>

        <label>Telefon</label>

        <br>

        <input
            type="text"
            name="phone"
            style="width:400px;padding:8px;"
            required>

    </p>

    <p>

        <label>Mövzu</label>

        <br>

        <input
            type="text"
            name="subject"
            style="width:400px;padding:8px;"
            required>

    </p>

    <p>

        <label>Mesaj</label>

        <br>

        <textarea
            name="message"
            rows="6"
            style="width:400px;padding:8px;"
            required></textarea>

    </p>

    <button
        type="submit"
        class="more">

        Göndər

    </button>

</form>
            <br><br>

            <a
                href="{{ route('frontend.contact.show',$contact->id) }}"
                class="more">

                Ətraflı

            </a>

            <hr>

        @endforeach

    </div>

</div>

