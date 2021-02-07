@extends('admin.layouts.main')

@section('content')
    <!-- Main content -->
    <section class="content pt-4 pl-4 pr-4">
        <h2>{{$author->name}}'s Books</h2>

        <!-- Default box -->
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($author->books as $book)
                            <tr>
                                <td>{{$book->id}}</td>
                                <td>
                                    <a
                                        href="{{route('books.show', ['book' => $book->id])}}"
                                        title="View book"
                                    >{{$book->title}}</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>
@endsection
