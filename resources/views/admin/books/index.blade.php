@extends('admin.layouts.main')

@section('content')
    <!-- Main content -->
    <section class="content pt-4 pl-4 pr-4">
        <h2>Books</h2>

        @if ($successMessage = Session::get('success'))
            <div class="alert alert-success">{{$successMessage}}</div>
         @endif

        <!-- Default box -->
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Author</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($books as $book)
                            <tr>
                                <td>{{$book->id}}</td>
                                <td>
                                    <a
                                        href="{{route('books.show', ['book' => $book->id])}}"
                                        title="View"
                                    >{{$book->title}}</a>
                                </td>
                                <td>
                                    <a
                                        href="{{route('authors.show', ['author' => $book->author->id])}}"
                                        title="View author"
                                    >{{$book->author->name}}</a>
                                </td>
                                <td>
                                    <a
                                        href="{{route('books.edit', ['book' => $book->id])}}"
                                        title="Edit"
                                        class="btn btn-xs btn-default"
                                    >
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </td>
                                <td>
                                    <form action="{{route('books.destroy', ['book' => $book->id])}}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            title="Remove"
                                            class="btn btn-xs btn-danger"
                                        >
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <a
                    href="{{route('books.create')}}"
                    class="btn btn-primary"
                >Add Book</a>
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
@endsection
