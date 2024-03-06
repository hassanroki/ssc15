@extends('backend.layouts.main')

@section('content')
    <div class="pb-3">
        <a href="{{ route('departments.index') }}" class="btn btn-primary">Back</a>
    </div>
    <hr>
    <div class="departmentEdit">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="text-center">Department Name Edit</h2>
                        </div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('departments.update', $department->id) }}">
                                @csrf
                                @method('PUT')
                                <div class="form-group row">
                                    <label for="department" class="col-md-4 col-form-label text-md-right">Department Name</label>

                                    <div class="col-md-6">
                                        <input type="text" id="department" placeholder="Edit Department" name="departmentName" class="form-control"
                                            value="{{ $department->departmentName }}" required>
                                    </div>
                                    @error('departmentName')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <input type="submit" value="Update" class="btn btn-primary">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
