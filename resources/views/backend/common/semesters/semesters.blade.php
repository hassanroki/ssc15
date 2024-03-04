@extends('backend.layouts.main')

@section('content')
    <div class="pb-3">
        <a href="{{ route('semesters.create') }}" class="btn btn-primary">New Semester Add</a>
    </div>
    <div class="py-3">
        <h2 class="">All Class</h2>
    </div>

    @if (Session::has('success'))
        <div class="alert alert-success" id="session-alert">
            {{ Session::get('success') }}
        </div>
    @endif

    <hr>
    <div class="semester">
        <div class="container mt-4">
            <h2>Class Lists</h2>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">SL</th>
                            <th scope="col">Classes</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($semesters as $key => $semester)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $semester->semesterName }}</td>
                                <td>
                                    <a href="{{ route('semesters.edit', $semester->id) }}" class="btn btn-info btn-sm">Edit</a>
                                    <form class="d-inline-block" action="{{ route('semesters.destroy', $semester->id) }}"
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
