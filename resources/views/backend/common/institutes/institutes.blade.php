@extends('backend.layouts.main')

@section('content')
    <div class="pb-3">
        <a href="{{ route('institute.create') }}" class="btn btn-primary">New Institute Add</a>
    </div>
    <div class="py-3">
        <h2 class="">All Institute</h2>
    </div>

    @if (Session::has('success'))
        <div class="alert alert-success" id="session-alert">
            {{ Session::get('success') }}
        </div>
    @endif

    <hr>

    <!-- DataTales Institute -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Institute</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>ID</th>
                            <th>Institute Name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>SL</th>
                            <th>ID</th>
                            <th>Institute Name</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($institutes as $key => $institute)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $institute->id }}</td>
                                <td>{{ $institute->instituteName }}</td>
                                <td>
                                    <a href="{{ route('institute.edit', $institute->id) }}"
                                        class="btn btn-info btn-sm">Edit</a>
                                    <form class="d-inline-block" action="{{ route('institute.destroy', $institute->id) }}"
                                        method="Post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm"
                                            onclick="return confirm('Are You Sure?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
