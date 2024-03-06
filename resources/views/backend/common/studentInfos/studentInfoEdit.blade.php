@extends('backend.layouts.main')

@section('content')
    <div class="pb-3">
        <a href="{{ route('studentInfo.index') }}" class="btn btn-primary">Back</a>
    </div>
    <hr>
    <div class="studentInfoEdit">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="text-center">Student Information</h2>
                        </div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('studentInfo.update', $studentInfo->id) }}">
                                @csrf
                                @method('PUT')
                                <div class="form-group row">
                                    <label for="studentName" class="col-md-4 col-form-label text-md-right">Name</label>

                                    <div class="col-md-6">
                                        <input type="text" id="studentName" placeholder="Edit Name" name="studentName" class="form-control"
                                            value="{{ $studentInfo->studentName }}" required>
                                    </div>
                                    @error('studentName')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group row">
                                    <label for="fatherName" class="col-md-4 col-form-label text-md-right">Name</label>

                                    <div class="col-md-6">
                                        <input type="text" id="fatherName" placeholder="Edit Father Name" name="fatherName" class="form-control"
                                            value="{{ $studentInfo->fatherName }}" required>
                                    </div>
                                    @error('fatherName')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group row">
                                    <label for="motherName" class="col-md-4 col-form-label text-md-right">Mother Name</label>

                                    <div class="col-md-6">
                                        <input type="text" id="motherName" placeholder="Edit Mother Name" name="motherName" class="form-control"
                                            value="{{ $studentInfo->motherName }}" required>
                                    </div>
                                    @error('motherName')
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
