@extends('frontend.layouts.master')

@section('content')
    <div class="meritsCreate">
        <div class="container mt-5">
            <h2>Merits Form</h2>
            <form action="{{ route('merit.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <!-- Left Column -->
                    <div class="col-md-6">
                        <!-- Name -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Enter Your Name" required>
                        </div>
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <!-- Father's Name -->
                        <div class="mb-3">
                            <label for="fatherName" class="form-label">Father's Name</label>
                            <input type="text" class="form-control" id="fatherName" name="fatherName"
                                placeholder="Your Father Name" required>
                        </div>
                        @error('fatherName')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <!-- Mother's Name -->
                        <div class="mb-3">
                            <label for="motherName" class="form-label">Mother's Name</label>
                            <input type="text" class="form-control" id="motherName" name="motherName"
                                placeholder="Your Mother Name" required>
                        </div>
                        @error('motherName')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <!-- Mobile -->
                        <div class="mb-3">
                            <label for="mobile" class="form-label">Mobile</label>
                            <input type="tel" class="form-control" id="mobile" name="mobile"
                                placeholder="Enter Mobile Number" required>
                        </div>
                        @error('mobile')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <!-- Gender -->
                        <div class="mb-3">
                            <label for="gender" class="form-label">Gender</label>
                            <select class="form-select" id="gender" name="genderId" required>
                                <!-- Populate options dynamically based on your database -->
                                <option value="" selected>Select Gender</option>
                                @foreach ($genders as $gender)
                                    <option value="{{ $gender->id }}">{{ $gender->sex }}</option>
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
                            <textarea class="form-control" id="address" name="address" rows="3" placeholder="Your Address" required></textarea>
                        </div>
                        @error('address')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <!-- School -->
                        <div class="col-md-6 mb-3">
                            <label for="schoolName" class="form-label">School Name</label>
                            <input list="instituteNameList" class="form-control" name="schoolName" id="schoolName"
                                placeholder="Select Your School Name">
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
                            <select class="form-select" id="semester" name="semesterId" required>
                                <!-- Populate options dynamically based on your database -->
                                <option value="">Select Your Class</option>
                                @foreach ($semesters as $semester)
                                    <option value="{{ $semester->id }}">{{ $semester->semesterName }}</option>
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
                            <img id="preview" src="#" alt="Preview" style="max-width: 200px; display: none;">
                        </div>
                        @error('photo')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <!-- Password -->
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="New Password" required>
                                <button type="button" class="btn btn-outline-secondary" id="togglePassword">
                                    <i class="fa-solid fa-eye"></i>
                                </button>
                            </div>
                        </div>
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <!-- Confirm Password -->
                        <div class="mb-3">
                            <label for="confirm_password" class="form-label">Confirm Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="confirm_password"
                                    name="password_confirmation" placeholder="Confirm Password" required>
                                <button type="button" class="btn btn-outline-secondary" id="toggleConfirmPassword">
                                    <i class="fa-solid fa-eye"></i>
                                </button>
                            </div>
                        </div>
                        @error('password_confirmation')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror


                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Registration</button>
            </form>
        </div>

    </div>
@endsection
