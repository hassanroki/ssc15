@extends('backend.layouts.main')

@section('content')
    <div class="pb-3">
        <a href="{{ route('departments.create') }}" class="btn btn-primary">New Department Add</a>
    </div>
    <div class="py-3">
        <h2 class="">All Department Name</h2>
    </div>

    @if (Session::has('success'))
        <div class="alert alert-success" id="session-alert">
            {{ Session::get('success') }}
        </div>
    @endif

    <hr>
    <div class="container mt-4">
        <h2>Department Lists</h2>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">SL</th>
                        <th scope="col">Department Name</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($departments as $key => $department)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $department->departmentName }}</td>
                            <td>
                                <a href="{{ route('departments.edit', $department->id) }}" class="btn btn-info btn-sm">Edit</a>
                                <form class="d-inline-block" action="{{ route('departments.destroy', $department->id) }}"
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
@endsection
