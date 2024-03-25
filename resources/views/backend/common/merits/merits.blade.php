@extends('backend.layouts.main')

@section('content')
    @if (Session::has('success'))
        <div class="alert alert-success" id="session-alert">
            {{ Session::get('success') }}
        </div>
    @endif
    
    <div class="meritList">
        <!-- DataTales Users -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Merit lists</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Father Name</th>
                                <th>Mother Name</th>
                                <th>Mobile</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Father Name</th>
                                <th>Mother Name</th>
                                <th>Mobile</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($merits as $key => $merit)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $merit->name }}</td>
                                    <td>{{ $merit->fatherName }}</td>
                                    <td>{{ $merit->motherName }}</td>
                                    <td>{{ $merit->mobile }}</td>
                                    <td>
                                        <a href="{{ route('merit.show', $merit->id) }}"
                                            class="btn btn-success btn-sm">Show</a>
                                        <a href="{{ route('merit.edit', $merit->id) }}" class="btn btn-info btn-sm">Edit</a>
                                        <form action="{{ route('merit.destroy', $merit->id) }}" class="d-inline-block"
                                            method="post">
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
    </div>
@endsection
