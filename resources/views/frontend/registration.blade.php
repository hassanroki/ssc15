@extends('frontend.layouts.master')

@section('content')
    {{-- Registration Form Section Start --}}
    <div class="registration">
        <div class="container">
            <div class="row">
                <h4 class="bg-success p-3 text-white">"Exclusively for those who completed their SSC in the year 2015 and
                    studied at Rasulpur Mahtabia School & College batch 2015, a simplified registration process awaits.
                    Enroll now"</h4>
                <form class="row g-3 border p-3">
                    <h2>Personal Information</h2>
                    <div class="col-md-6">
                        <label for="studentInfoId" class="form-label">Roll</label>
                        <input list="studentId" class="form-control" name="studentInfoId" id="studentInfoId">

                        <datalist id="studentId">
                            @foreach ($studentInfos as $studentInfo)
                                <option value="{{ $studentInfo->roll }}"></option>
                            @endforeach
                        </datalist>
                    </div>
                    <div class="col-md-6">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name"
                            placeholder="Enter Your Name" readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="fatherName" class="form-label">Father Name</label>
                        <input type="text" class="form-control" id="fatherName" name="fatherName"
                            placeholder="Enter Your Father Name" readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="motherName" class="form-label">Mother Name</label>
                        <input type="text" class="form-control" id="motherName" name="motherName"
                            placeholder="Enter Your Mother Name" readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="departmentId" class="form-label">Department</label>
                        <select class="form-select" aria-label="Default" id="departmentId">
                            <option value="">Select Department</option>
                            @foreach ($departments as $department)
                                <option value="{{ $department->id }}">{{ $department->departmentName }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email"
                            placeholder="Enter Your Email">
                    </div>
                    <div class="col-md-6">
                        <label for="mobile" class="form-label">Mobile Number</label>
                        <input type="number" class="form-control" id="mobile" name="mobile"
                            placeholder="Enter Your Mobile Number">
                    </div>
                    <div class="col-md-6">
                        <label for="genderId" class="form-label">Gender</label>
                        <select class="form-select" aria-label="Default" id="genderId">
                            <option selected>Select Your Gender</option>
                            @foreach ($genders as $gender)
                                <option value="{{ $gender->id }}">{{ $gender->sex }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-12">
                        <label for="presentAddress" class="form-label">Present Address</label>
                        <input type="text" class="form-control" id="presentAddress" name="presentAddress"
                            placeholder="Enter Your Present Address">
                    </div>
                    <div class="col-12">
                        <label for="permanentAddress" class="form-label">Permanent Address</label>
                        <input type="text" class="form-control" id="permanentAddress" name="permanentAddress"
                            placeholder="Enter Your Permanent Address">
                    </div>
                    <div class="col-12">
                        <label for="photo" class="form-label">Upload Passport Size Formal Photo</label>
                        <input class="form-control" type="file" id="photo" name="photo">
                    </div>

                    <h2>Employment Status</h2>
                    <div class="col-md-6">
                        <label for="occupation" class="form-label">Department</label>
                        <select class="form-select" aria-label="Default" id="occupation">
                            <option selected>Select Your Department</option>
                            <option value="1" name="studies">Higher Studies/Training</option>
                            <option value="2" name="company">Industry/Company</option>
                            <option value="3" name="business">Business</option>
                            <option value="4" name="others">Others</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="organizationName" class="form-label">Name of the Organization/University</label>
                        <input type="text" class="form-control" id="organizationName"
                            placeholder="Enter Your Organization/University" name="organizationName">
                    </div>
                    <div class="col-12">
                        <label for="designation" class="form-label">Designation</label>
                        <input type="text" class="form-control" id="designation" placeholder="Enter Your Designation"
                            name="designation">
                    </div>

                    <h2>Guest & Payment Information</h2>
                    <ul class="ps-5 list-group list-group-flush text-white">
                        <li class="list-group-item bg-warning text-white">Must Read Then Filup</li>
                        <li class="list-group-item bg-danger text-white">Per Person Only 1,000 Tk</li>
                        <li class="list-group-item bg-danger text-white">Accompanying Guest Tk 500 per person (Maximum 2
                            Persons)</li>
                    </ul>
                    <div class="col-md-6">
                        <label for="guest" class="form-label">Guest Or Only Single</label>
                        <select class="form-select" aria-label="Default" id="guest">
                            <option selected value="1000" name="1000">Single</option>
                            <option value="1" name="1500">One Guest</option>
                            <option value="1" name="2000">Two Guest</option>
                        </select>
                    </div>

                    <h2>Set Password</h2>
                    <div class="col-md-6">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter Password"
                            name="password">
                    </div>
                    <div class="col-md-6">
                        <label for="confirmPassword" class="form-label">Confirm Password</label>
                        <input type="confirmPassword" class="form-control" id="confirmPassword"
                            placeholder="Enter Confirm Password" name="confirmPassword">
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">REGISTER</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- Registration Form Section End --}}


@endsection
