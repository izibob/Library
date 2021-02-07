@extends('admin.layouts.main')

@section('content')
    <!-- Main content -->
    <section class="content pt-4 pl-4 pr-4">
        <h2>{{$book->title}}</h2>

        <!-- Default box -->
        <div class="card">
            <div class="card-body">
                <label>Author:</label>
                <a
                    href="{{route('authors.show', ['author' => $book->author->id])}}"
                    title="View author"
                >{{$book->author->name}}</a>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>
@endsection
