@section('layout.app')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center">
        <h1>Movies</h1>
        <a href="{{ route('movies.create') }}" class="btn btn-primary btn-lg">Add New Movie</a>
    </div>

    <table class="table table-bordered table-striped mt-4">
        <thead class="table-dark">
            <tr>
                <th>Title</th>
                <th>Photo</th>
                <th>Genre</th>
                <th>Publish Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($movies as $movie)
            <tr>
                <td>{{ $movie->title }}</td>
                <td><img src="{{ asset($movie->photo_path) }}" alt="{{ $movie->title }}" class="img-fluid" style="max-width: 100px;"></td>
                <td>{{ $movie->genre->name }}</td>
                <td>{{ $movie->publish_date}}</td>
                <td>
                    <a href="{{ route('movies.edit', $movie->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('movies.destroy', $movie->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this movie?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection