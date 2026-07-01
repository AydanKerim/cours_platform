@extends('backend.layouts.app')

@section('content')

<h1>FAQ</h1>

<a href="{{ route('admin.faqs.create') }}">
    Add FAQ
</a>

<hr>

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

@foreach($faqs as $faq)

<div style="display:flex;justify-content:space-between;align-items:center;border-bottom:1px solid #ddd;padding:20px 0;">

    <div>

        <h3>{{ $faq->question }}</h3>

        <p>{{ Str::limit($faq->answer,100) }}</p>

    </div>

    <div>

        <a href="{{ route('admin.faqs.edit',$faq->id) }}">
            Edit
        </a>

        |

        <a href="{{ route('admin.faqs.show',$faq->id) }}">
            View
        </a>

        |

        <form action="{{ route('admin.faqs.destroy',$faq->id) }}"
              method="POST"
              style="display:inline;">

            @csrf
            @method('DELETE')

            <button type="submit"
                    onclick="return confirm('Sual silinsin?')">
                Delete
            </button>

        </form>

    </div>

</div>

@endforeach

@endsection