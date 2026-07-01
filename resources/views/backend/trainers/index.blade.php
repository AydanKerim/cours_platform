@extends('backend.layouts.app')

@section('content')

    <h1>Trainers</h1>

    <a href="{{ route('admin.trainers.create') }}">
        Add Trainer
    </a>

    <hr>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif



    @foreach($trainers as $trainer)

        <div style="display:flex;justify-content:space-between;align-items:center;border-bottom:1px solid #ddd;padding:20px 0;">

            <div>

                <h3>
                    <a href="{{ route('admin.trainers.show', $trainer->id) }}">
                    </a>
                    {{ $trainer->name }}
                </h3>
                <p>{{ $trainer->bio }}</p>

            </div>

            <div>

                @if($trainer->photo)
                    <img src="{{ asset('storage/' . $trainer->photo) }}" width="150">
                    <br><br>
                @endif

                <a href="{{ route('admin.trainers.edit', $trainer->id) }}"
                    style="color:#3498db;text-decoration:none;margin-right:10px;">
                    Edit
                </a>

                <form action="{{ route('admin.trainers.destroy', $trainer->id) }}" method="POST" style="display:inline;">

                    @csrf
                    @method('DELETE')

                    <button type="submit" onclick="return confirm('Təlimçi silinsin?')"
                        style="background:#e74c3c;color:white;border:none;padding:6px 12px;border-radius:4px;">
                        Delete
                    </button>

                </form>

            </div>

        </div>

    @endforeach

@endsection