@extends('backend.layouts.app')

@section('content')

 <h1>About</h1>

    <a href="{{ route('admin.abouts.create') }}">
        Add About
    </a>

     <hr>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

     @foreach($abouts as $about)

     <div style="display:flex;justify-content:space-between;align-items:center;border-bottom:1px solid #ddd;padding:20px 0;">

            <div>

                <h3>
                    <a href="{{ route('admin.abouts.show', $about->id) }}">
                    </a>
                    {{ $about->title }}
                </h3>
                <p>{{ $about->description }}</p>

            </div>

            <div>
                 <a href="{{ route('admin.abouts.edit', $about->id) }}"
                    style="color:#3498db;text-decoration:none;margin-right:10px;">
                    Edit
                </a>

                     <form action="{{ route('admin.abouts.destroy', $about->id) }}" method="POST" style="display:inline;">

                    @csrf
                    @method('DELETE')

                    <button type="submit" onclick="return confirm('Mətn silinsin?')"
                        style="background:#e74c3c;color:white;border:none;padding:6px 12px;border-radius:4px;">
                        Delete
                    </button>

                </form>
            </div>
</div>
              @endforeach

@endsection