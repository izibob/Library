@extends('admin.layouts.main')

@section('content')
    <!-- Main content -->
    <section class="content pt-4 pl-4 pr-4">
        <h2>Authors</h2>

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
                            <th>Books Count</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($authors as $author)
                            <tr>
                                <td>{{$author->id}}</td>
                                <td>

                                    <a
                                        href="{{route('authors.show', ['author' => $author->id])}}"
                                        title="View"
                                    >{{$author->name}}</a>
                                </td>
                                <td>{{count($author->books)}}</td>
                                <td>
                                    <a
                                        href="{{route('authors.edit', ['author' => $author->id])}}"
                                        title="Edit"
                                        class="btn btn-xs btn-default"
                                    >
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </td>
                                <td>
                                    <form action="{{route('authors.destroy', ['author' => $author->id])}}" method="POST">
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
                    href="{{route('authors.create')}}"
                    class="btn btn-primary"
                >Add Author</a>
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
@endsection
