@extends('backend.layouts.app')

@section('content')

<h1>Partners</h1>

<a href="{{ route('admin.partners.create') }}">
    Add Partner
</a>

<hr>

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

@foreach($partners as $partner)

<div style="display:flex;justify-content:space-between;align-items:center;border-bottom:1px solid #ddd;padding:20px 0;">

    <div>

        <h3>

            <a href="{{ route('admin.partners.show', $partner->id) }}">
                {{ $partner->name }}
            </a>

        </h3>

    </div>

    <div>

        @if($partner->logo)

            <img
                src="{{ asset('storage/'.$partner->logo) }}"
                width="120">

            <br><br>

        @endif

        <a
            href="{{ route('admin.partners.edit',$partner->id) }}"
            style="color:#3498db;text-decoration:none;margin-right:10px;">

            Edit

        </a>

        <form
            action="{{ route('admin.partners.destroy',$partner->id) }}"
            method="POST"
            style="display:inline;">

            @csrf
            @method('DELETE')

            <button
                type="submit"
                onclick="return confirm('Partnyor silinsin?')"
                style="background:#e74c3c;color:white;border:none;padding:6px 12px;border-radius:4px;">

                Delete

            </button>

        </form>

    </div>

</div>

@endforeach

@endsection