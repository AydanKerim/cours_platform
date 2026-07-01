@extends('backend.layouts.app')

@section('content')

<h1>Əlaqə Məlumatları</h1>

<a href="{{ route('admin.contacts.create') }}">
    Yeni Əlaqə
</a>

<hr>

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

@foreach($contacts as $contact)

<div style="display:flex;justify-content:space-between;border-bottom:1px solid #ddd;padding:20px 0;">

    <div>

        <h3>{{ $contact->title }}</h3>

        <p><strong>Ünvan:</strong> {{ $contact->address }}</p>

        <p><strong>Telefon:</strong> {{ $contact->phone }}</p>

        <p><strong>Email:</strong> {{ $contact->email }}</p>

    </div>

    <div>

        <a href="{{ route('admin.contacts.show',$contact->id) }}">
            Bax
        </a>

        |

        <a href="{{ route('admin.contacts.edit',$contact->id) }}">
            Edit
        </a>

        |

        <form
            action="{{ route('admin.contacts.destroy',$contact->id) }}"
            method="POST"
            style="display:inline;">

            @csrf
            @method('DELETE')

            <button onclick="return confirm('Silinsin?')">

                Delete

            </button>

        </form>

    </div>

</div>

@endforeach

@endsection