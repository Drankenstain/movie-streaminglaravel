@extends('layouts.app')

@section('content')
<h1>Add New Movie</h1>
<form action="{{ route('movies.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" name="title" class="form-control" maxlength="30" required>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea name="description" class="form-control" maxlength="50" required></textarea>
    </div>
    <div class="mb-3">
        <label for="genre" class="form-label">Genre</label>
        <select name="genre_id" class="form-control" required>
            @foreach($genres as $genre)
                <option value="{{ $genre->id }}">{{ $genre->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="publish_date" class="form-label">Publish Date</label>
        <input type="date" name="publish_date" class="form-control" max="{{ date('Y-m-d') }}" required>
    </div>
    <div class="mb-3">
        <label for="photo" class="form-label">Photo</label>
        <input type="file" name="photo" class="form-control" accept="image/*" required>
    </div>
    <button type="submit" class="btn btn-success">Save</button>
</form>
@endsection
