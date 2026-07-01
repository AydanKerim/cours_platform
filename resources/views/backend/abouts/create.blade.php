@extends('backend.layouts.app')

@section('content')

<h1>Create About</h1>

<form action="{{ route('admin.abouts.store') }}" 
 method="POST"
 enctype="multipart/form-data">

    @csrf

    <div>
        <label>title</label>
        <br>
        <input type="text" name="title">
    </div>

    <br>

    <div>
        <label>Description</label>
        <br>
         <input type="text" name="description">
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