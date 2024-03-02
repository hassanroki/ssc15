@extends('backend.layouts.main')

@section('content')
    <div class="pb-3">
        <a href="{{ route('genders.create') }}" class="btn btn-primary">New Gender Add</a>
    </div>
    <div class="py-3">
        <h2 class="">All Gender</h2>
    </div>

    @if (Session::has('success'))
        <div class="alert alert-success" id="session-alert">
            {{ Session::get('success') }}
        </div>
    @endif

    <hr>
    <div class="container mt-4">
        <h2>Gender Table</h2>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">SL</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($genders as $key => $gender)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $gender->sex }}</td>
                            <td>
                                <a href="{{ route('genders.edit', $gender->id) }}" class="btn btn-info btn-sm">Edit</a>
                                <form class="d-inline-block" action="{{ route('genders.destroy', $gender->id) }}"
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
