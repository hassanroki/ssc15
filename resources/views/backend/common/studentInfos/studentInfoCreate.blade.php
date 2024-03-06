@extends('backend.layouts.main')

@section('content')
    <div class="pb-3">
        <a href="{{ route('studentInfo.index') }}" class="btn btn-primary">Back</a>
    </div>
    <hr>
    <div class="studentinfoCreate">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="text-center">New Student Add</h2>
                        </div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('studentInfo.store') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="roll" class="col-md-4 col-form-label text-md-right">Roll</label>

                                    <div class="col-md-6">
                                        <input type="number" placeholder="Enter Roll" name="roll" class="form-control"
                                            required>
                                    </div>
                                    @error('roll')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group row">
                                    <label for="studentName" class="col-md-4 col-form-label text-md-right">Student Name</label>

                                    <div class="col-md-6">
                                        <input type="text" placeholder="Enter Your Name" name="studentName" class="form-control"
                                            required>
                                    </div>
                                    @error('studentName')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group row">
                                    <label for="fatherName" class="col-md-4 col-form-label text-md-right">Father Name</label>

                                    <div class="col-md-6">
                                        <input type="text" placeholder="Enter Father Name" name="fatherName" class="form-control"
                                            required>
                                    </div>
                                    @error('fatherName')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group row">
                                    <label for="motherName" class="col-md-4 col-form-label text-md-right">Mother Name</label>

                                    <div class="col-md-6">
                                        <input type="text" placeholder="Enter Mother Name" name="motherName" class="form-control"
                                            required>
                                    </div>
                                    @error('motherName')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <input type="submit" value="Submit" class="btn btn-primary">
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
