@extends('admin.layouts.main')

@section('content')
    <!-- Main content -->
    <section class="content pt-4 pl-4 pr-4">
        <h2>Add Author</h2>

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

                <form action="{{route('authors.store')}}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input
                            id="name"
                            type="text"
                            name="name"
                            class="form-control"
                        />
                    </div>

                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>
    </section>
@endsection
