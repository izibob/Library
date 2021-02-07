@extends('admin.layouts.main')

@section('content')
    <!-- Main content -->
    <section class="content pt-4 pl-4 pr-4">
        <h2>Edit Book</h2>

        <div class="card">
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Error</strong>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{route('books.update', ['book' => $book->id])}}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input
                            value="{{$book->title}}"
                            id="title"
                            type="text"
                            name="title"
                            class="form-control"
                        />
                    </div>

                    <div class="form-group">
                        <label for="authorId">Author</label>
                        <select
                            id="authorId"
                            name="author_id"
                            class="form-control"
                        >
                            <option value=""></option>
                            @foreach ($authors as $author)
                                <option value="{{$author->id}}" {{$book->author_id === $author->id ? 'selected' : ''}}>{{$author->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </section>
@endsection
