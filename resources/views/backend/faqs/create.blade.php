@extends('backend.layouts.app')

@section('content')

<h1>Create FAQ</h1>

<form action="{{ route('admin.faqs.store') }}"
      method="POST">

    @csrf

    <div>

        <label>Question</label>

        <br>

        <input type="text"
               name="question">

    </div>

    <br>

    <div>

        <label>Answer</label>

        <br>

        <textarea name="answer"
                  rows="8"></textarea>

    </div>

    <br>

    <button type="submit">

        Save

    </button>

</form>

@endsection