<div id="contact" class="featured">

    <h2>Əlaqə</h2>

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

        </div>

        <div class="contact-map">

            {!! $contact->map !!}

        </div>

    </div>

    <hr>

    <div class="contact-form-wrap">

        <h2>Bizə Yazın</h2>

        @if(session('success'))

            <div class="alert alert-success">

                {{ session('success') }}

            </div>

        @endif

        <form action="{{ route('frontend.contact.message.store') }}" method="POST" class="contact-form">

            @csrf

            <div class="form-row">

                <input
                    type="text"
                    name="name"
                    placeholder="Ad Soyad"
                    required>

                <input
                    type="email"
                    name="email"
                    placeholder="Email"
                    required>

            </div>

            <div class="form-row">

                <input
                    type="text"
                    name="phone"
                    placeholder="Telefon"
                    required>

                <input
                    type="text"
                    name="subject"
                    placeholder="Mövzu"
                    required>

            </div>

            <textarea
                name="message"
                rows="6"
                placeholder="Mesajınız..."
                required></textarea>

            <button type="submit" class="contact-submit">

                Göndər

            </button>

        </form>

    </div>

</div>
