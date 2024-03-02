@extends('frontend.layouts.master')

@section('content')
    <div class="profile">
        <div class="container">
            <div class="row">
                {{-- Top Guideline --}}
                <div class="col-md-12 top-content">
                    <h2>Applicant Profile</h2>
                    <p>**Note: After the completion of the registration processes, including confirmation from the author, your registration will be confirmed. These processes may require at least 48 hours. All of you are requested to co-operate.</p>
                </div>
                <!-- Left Side Navbar -->
                <nav class="col-md-4 col-lg-2 d-md-block bg-light sidebar">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <!-- Top Profile Picture -->
                        <div class="profile-picture">
                            <img src="{{ asset('frontend/images/profile.jpeg') }}" alt="Profile Picture" class="img-fluid rounded-circle mx-auto d-block" style="width: 150px; height: 150px;">
                        </div>
                    </div>
                    <div class="position-sticky">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link active" href="/profile">
                                    My Profile
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/profileStatus">
                                    Status
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/login">
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
        
                <!-- Right Side Content -->
                <main class="col-md-4 ms-sm-auto col-lg-10 px-md-4 rightSide">

                    <!-- Personal Information Table -->
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Personal Information</h4>
                            <table class="table">
                                <tr>
                                    <th>Student:</th>
                                    <td>[User's Roll]</td>
                                </tr>
                                <tr>
                                    <th>Name:</th>
                                    <td>[User Full Name]</td>
                                </tr>
                                <tr>
                                    <th>Father Name:</th>
                                    <td>[User Father Name]</td>
                                </tr>
                                <tr>
                                    <th>Mother Name:</th>
                                    <td>[User Mother Name]</td>
                                </tr>
                                <tr>
                                    <th>Department:</th>
                                    <td>[User Department Name]</td>
                                </tr>
                                <tr>
                                    <th>Mobile:</th>
                                    <td>[User Mobile Number]</td>
                                </tr>
                                <tr>
                                    <th>Email:</th>
                                    <td>[User's Email]</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <h4>Employment Information</h4>
                            <table class="table">
                                <tr>
                                    <th>Employment Status:</th>
                                    <td>[Industry/Company]</td>
                                </tr>
                                <tr>
                                    <th>Name of the Organization/University:</th>
                                    <td>[Organization Name]</td>
                                </tr>
                                <tr>
                                    <th>Designation:</th>
                                    <td>[Designation]</td>
                                </tr>
                                <tr>
                                    <th>Joined Since:</th>
                                    <td>[Join Date]</td>
                                </tr>
                            </table>
                            <h4>Payment Information</h4>
                            <table class="table">
                                <tr>
                                    <th>Number of Guest:</th>
                                    <td>[Number of Guest]</td>
                                </tr>
                                <tr>
                                    <th>Total Ammount:</th>
                                    <td>[Total Ammount]</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
@endsection