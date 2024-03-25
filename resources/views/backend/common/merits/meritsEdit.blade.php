@extends('backend.layouts.main')

@section('content')
    <div class="meritsCreate">
        <div class="pb-3">
            <a href="{{ route('merit.index') }}" class="btn btn-info btn-sm d-inline">Back</a>
        </div>
        <hr>
        <div class="container mt-5">
            <h2>Update Data</h2>
            <form action="{{ route('merit.update', $merit->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">
                    <!-- Left Column -->
                    <div class="col-md-6">
                        <!-- Name -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ $merit->name }}" required>
                        </div>
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <!-- Father's Name -->
                        <div class="mb-3">
                            <label for="fatherName" class="form-label">Father's Name</label>
                            <input type="text" class="form-control" id="fatherName" name="fatherName"
                                value="{{ $merit->fatherName }}" required>
                        </div>
                        @error('fatherName')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <!-- Mother's Name -->
                        <div class="mb-3">
                            <label for="motherName" class="form-label">Mother's Name</label>
                            <input type="text" class="form-control" id="motherName" name="motherName"
                                value="{{ $merit->motherName }}" required>
                        </div>
                        @error('motherName')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <!-- Gender -->
                        <div class="mb-3">
                            <label for="gender" class="form-label">Gender</label>
                            <select class="form-select form-control" id="gender" name="genderId" required>
                                <!-- Populate options dynamically based on your database -->
                                @foreach ($genders as $gender)
                                    <option value="{{ $gender->id }}"
                                        {{ $gender->id == $merit->genderId ? 'selected' : '' }}>
                                        {{ $gender->sex }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        @error('genderId')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Right Column -->
                    <div class="col-md-6">
                        <!-- Address -->
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <textarea class="form-control" id="address" name="address" rows="3" required>{{ $merit->address }}</textarea>
                        </div>
                        @error('address')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <!-- School -->
                        <div class="col-md-6 mb-3">
                            <label for="schoolName" class="form-label">School Name</label>
                            <input list="instituteNameList" class="form-control" name="schoolName" id="schoolName"
                                placeholder="Select Your School Name" required>
                            <input type="hidden" name="schoolId" id="schoolId">

                            <datalist id="instituteNameList">
                                @foreach ($institutes as $institute)
                                    <option value="{{ $institute->instituteName }}" data-school-id="{{ $institute->id }}">
                                @endforeach
                            </datalist>
                        </div>
                        @error('schoolId')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <!-- Semester -->
                        <div class="mb-3">
                            <label for="semester" class="form-label">Class</label>
                            <select class="form-select form-control" id="semester" name="semesterId" required>
                                <!-- Populate options dynamically based on your database -->
                                <option value="">Select Your Class</option>
                                @foreach ($semesters as $semester)
                                    <option value="{{ $semester->id }}""
                                        {{ $semester->id == $merit->semesterId ? 'selected' : '' }}>
                                        {{ $semester->semesterName }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('semesterId')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <div class="mb-3">
                            <label for="photo" class="form-label">New Photo</label>
                            <input type="file" class="form-control" id="photo" name="photo" accept="image/*"
                                onchange="previewImage(event)">
                            <img id="currentPhoto" src="{{ asset('uploads/' . $merit->photo) }}" alt="Current Photo"
                                style="max-width: 200px;">
                            <img id="preview" src="#" alt="Preview" style="max-width: 200px; display: none;">
                        </div>
                        @error('photo')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror


                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>

    </div>
@endsection
