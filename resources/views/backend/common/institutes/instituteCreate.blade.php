@extends('backend.layouts.main')

@section('content')
    <div class="pb-3">
        <a href="{{ route('institute.index') }}" class="btn btn-primary">Back</a>
    </div>
    <hr>
    <div class="instituteCreate">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="text-center">New Institute Add</h2>
                        </div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('institute.store') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="institute" class="col-md-4 col-form-label text-md-right">Institute Name</label>

                                    <div class="col-md-6">
                                        <input type="text" id="institute" placeholder="Enter Institute Name" name="instituteName" class="form-control"
                                            required>
                                    </div>
                                    @error('instituteName')
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
