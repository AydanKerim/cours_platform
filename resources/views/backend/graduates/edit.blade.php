@extends('backend.layouts.app')

@section('content')

    <h1>Edit Graduate</h1>

    <form action="{{ route('admin.graduates.update', $graduate->id) }}" method="POST" enctype="multipart/form-data">

        @csrf
        @method('PUT')

        <div>
            <label>Name</label>
            <br>
            <input type="text" name="name" value="{{ $graduate->name }}">
        </div>

        <br>

        <div>
            <label>Course</label>
            <br>
            <input type="text" name="course" value="{{ $graduate->course }}">
        </div>
        <br>

        <div>
            <label>Company</label>
            <br>
            <input type="text" name="company" value="{{ $graduate->company }}">
            <br>

            <div>
                <label>Position</label>
                <br>
                <input type="text" name="position" value="{{ $graduate->position }}">
            </div>
            <br>
            <br>

            <div>
                <label>Photo</label>
                <br>
                <input type="file" name="photo">
            </div>

            <br>


            <br>
            <button type="submit">
                Save
            </button>

    </form>

@endsection