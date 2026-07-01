@extends('backend.layouts.app')

@section('content')

<h1>Edit FAQ</h1>

<form action="{{ route('admin.faqs.update',$faq->id) }}"
      method="POST">

    @csrf
    @method('PUT')

    <div>

        <label>Question</label>

        <br>

        <input type="text"
               name="question"
               value="{{ $faq->question }}">

    </div>

    <br>

    <div>

        <label>Answer</label>

        <br>

        <textarea name="answer"
                  rows="8">{{ $faq->answer }}</textarea>

    </div>

    <br>

    <button type="submit">

        Update

    </button>

</form>

@endsection