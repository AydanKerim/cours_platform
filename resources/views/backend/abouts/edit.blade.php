@extends('backend.layouts.app')

@section('content')

<h1>Edit About</h1>

<form action="{{ route('admin.abouts.update', $about->id) }}" 
 method="POST"
 enctype="multipart/form-data">

    @csrf
@method('PUT')

    <div>
        <label>Title</label>
        <br>
        <input type="text" name="title" value="{{ $about->title }}">
    </div>

    <br>

    <div>
        <label>Description</label>
        <br>
         <textarea name="description">{{ $about->description }}</textarea>
    </div>
    <br>

  
    <br>


<br>


<br>
    <button type="submit">
        Save
    </button>

</form>

@endsection