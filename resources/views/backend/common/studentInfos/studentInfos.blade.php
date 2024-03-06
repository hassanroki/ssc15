@extends('backend.layouts.main')

@section('content')
    <div class="pb-3">
        <a href="{{ route('studentInfo.create') }}" class="btn btn-primary">New Student Add</a>
    </div>
    <div class="py-3">
        <h2 class="">All Student Information</h2>
    </div>

    @if (Session::has('success'))
        <div class="alert alert-success" id="session-alert">
            {{ Session::get('success') }}
        </div>
    @endif

    <hr>

    <!-- DataTales Student Information -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Student Information</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Roll</th>
                            <th>Name</th>
                            <th>Father Name</th>
                            <th>Mother Name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>SL</th>
                            <th>Roll</th>
                            <th>Name</th>
                            <th>Father Name</th>
                            <th>Mother Name</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($studentInfos as $key => $studentInfo)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $studentInfo->roll }}</td>
                                <td>{{ $studentInfo->studentName }}</td>
                                <td>{{ $studentInfo->fatherName }}</td>
                                <td>{{ $studentInfo->motherName }}</td>
                                <td>
                                    <a href="{{ route('studentInfo.edit', $studentInfo->id) }}"
                                        class="btn btn-info btn-sm">Edit</a>
                                    <form class="d-inline-block" action="{{ route('studentInfo.destroy', $studentInfo->id) }}"
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
