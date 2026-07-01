@extends('backend.layouts.app')

@section('content')

    <h1>Graduates</h1>

    <a href="{{ route('admin.graduates.create') }}">
        Add Graduate
    </a>

    <hr>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif



    @foreach($graduates as $graduate)

        <div style="display:flex;justify-content:space-between;align-items:center;border-bottom:1px solid #ddd;padding:20px 0;">

            <div>

                <h3>
                    <a href="{{ route('admin.graduates.show', $graduate->id) }}">
                    </a>
                    {{ $graduate->name }}
                </h3>
                <p>{{ $graduate->course }}</p>
                <p>{{ $graduate->company }}</p>
                <p>{{ $graduate->position }}</p>
                

            </div>

            <div>

                @if($graduate->photo)
                    <img src="{{ asset('storage/' . $graduate->photo) }}" width="150">
                    <br><br>
                @endif

                <a href="{{ route('admin.graduates.edit', $graduate->id) }}"
                    style="color:#3498db;text-decoration:none;margin-right:10px;">
                    Edit
                </a>

                <form action="{{ route('admin.graduates.destroy', $graduate->id) }}" method="POST" style="display:inline;">

                    @csrf
                    @method('DELETE')

                    <button type="submit" onclick="return confirm('Məzun silinsin?')"
                        style="background:#e74c3c;color:white;border:none;padding:6px 12px;border-radius:4px;">
                        Delete
                    </button>

                </form>

            </div>

        </div>

    @endforeach

@endsection