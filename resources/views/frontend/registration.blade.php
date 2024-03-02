@extends('frontend.layouts.master')

@section('content')
    {{-- Registration Form Section Start --}}
    <div class="registration">
        <div class="container">
            <div class="row">
                <h4 class="bg-success p-3 text-white">"Exclusively for those who completed their SSC in the year 2015 and studied at Rasulpur Mahtabia School & College batch 2015, a simplified registration process awaits. Enroll now"</h4>
                <form class="row g-3 border p-3">
                    <h2>Personal Information</h2>
                    <div class="col-md-6">
                        <label for="studentRoll" class="form-label">Student Roll</label>
                        <input type="number" class="form-control" id="studentRoll" name="studentRoll"
                            placeholder="Enter Your Roll">
                    </div>
                    <div class="col-md-6">
                        <label for="studentName" class="form-label">Student Name</label>
                        <input type="text" class="form-control" id="studentName" name="studentName"
                            placeholder="Enter Your Name">
                    </div>
                    <div class="col-md-6">
                        <label for="fatherName" class="form-label">Father Name</label>
                        <input type="text" class="form-control" id="fatherName" name="fatherName"
                            placeholder="Enter Your Father Name">
                    </div>
                    <div class="col-md-6">
                        <label for="motherName" class="form-label">Mother Name</label>
                        <input type="text" class="form-control" id="motherName" name="motherName"
                            placeholder="Enter Your Mother Name">
                    </div>
                    <div class="col-md-6">
                        <label for="division" class="form-label">Department</label>
                        <select class="form-select" aria-label="Default" id="division">
                            <option selected>Select Your Department</option>
                            <option value="1" name="science">Science</option>
                            <option value="2" name="arts">Arts</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email"
                            placeholder="Enter Your Email">
                    </div>
                    <div class="col-md-6">
                        <label for="phone" class="form-label">Mobile Number</label>
                        <input type="number" class="form-control" id="phone" name="phone"
                            placeholder="Enter Your Mobile Number">
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
                        <label for="formFile" class="form-label">Upload Passport Size Formal Photo</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>

                    <h2>Employment Status</h2>
                    <div class="col-md-6">
                        <label for="department" class="form-label">Department</label>
                        <select class="form-select" aria-label="Default" id="department">
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
                        <li class="list-group-item bg-danger text-white">Accompanying Guest Tk 500 per person (Maximum 2 Persons)</li>
                    </ul>
                    <div class="col-md-6">
                        <label for="guest" class="form-label">Guest Or Only Single</label>
                        <select class="form-select" aria-label="Default" id="guest">
                            <option selected>Single</option>
                            <option value="1" name="oneGuest">One Guest</option>
                            <option value="1" name="twoGuest">Two Guest</option>
                          </select>
                    </div>

                    <h2>Set Password</h2>
                    <div class="col-md-6">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password"
                            placeholder="Enter Password" name="password">
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
