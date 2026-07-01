@extends('backend.layouts.app')

@section('content')

<h1>Gələn Mesajlar</h1>

@if(session('success'))

    <p style="color:green;">
        {{ session('success') }}
    </p>

@endif

<table border="1" cellpadding="10" cellspacing="0" width="100%">

    <tr>

        <th>ID</th>

        <th>Ad</th>

        <th>Email</th>

        <th>Telefon</th>

        <th>Mövzu</th>

        <th>Tarix</th>

        <th>Əməliyyat</th>

    </tr>

    @foreach($messages as $message)

    <tr>

        <td>{{ $message->id }}</td>

        <td>{{ $message->name }}</td>

        <td>{{ $message->email }}</td>

        <td>{{ $message->phone }}</td>

        <td>{{ $message->subject }}</td>

        <td>{{ $message->created_at->format('d.m.Y H:i') }}</td>

        <td>

            <a
                href="{{ route('admin.contact-messages.show',$message->id) }}">

                Bax

            </a>

            |

            <form
                action="{{ route('admin.contact-messages.destroy',$message->id) }}"
                method="POST"
                style="display:inline;">

                @csrf

                @method('DELETE')

                <button
                    onclick="return confirm('Mesaj silinsin?')">

                    Sil

                </button>

            </form>

        </td>

    </tr>

    @endforeach

</table>

@endsection