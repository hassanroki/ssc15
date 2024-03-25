@extends('frontend.layouts.master')

@section('content')
    <div class="meritsShow">
        <div class="container">
            <div class="row">
                <div class="pb-3">
                    <a href="{{ route('merit.index') }}" class="btn btn-info btn-sm d-inline">Back</a>
                </div>
                <hr>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <!-- Profile image -->
                    <img src="{{ asset('uploads/' . $merit->photo) }}" alt="Profile Image"
                        class="profile-img img-fluid mb-3 d-block d-md-none">

                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th class="col-lg-6 col-md-6 col-sm-6">Student Name</th>
                                <td class="col-lg-6 col-md-6 col-sm-6">{{ $merit->name }}</td>
                            </tr>
                            <tr>
                                <th class="col-lg-6 col-md-6 col-sm-6">Father Name</th>
                                <td class="col-lg-6 col-md-6 col-sm-6">{{ $merit->fatherName }}</td>
                            </tr>
                            <tr>
                                <th class="col-lg-6 col-md-6 col-sm-6">Mother Name</th>
                                <td class="col-lg-6 col-md-6 col-sm-6">{{ $merit->motherName }}</td>
                            </tr>
                            <tr>
                                <th class="col-lg-6 col-md-6 col-sm-6">Mobile</th>
                                <td class="col-lg-6 col-md-6 col-sm-6">{{ $merit->mobile }}</td>
                            </tr>
                            <tr>
                                <th class="col-lg-6 col-md-6 col-sm-6">Gender</th>
                                <td class="col-lg-6 col-md-6 col-sm-6">{{ $merit->genders->sex }}</td>
                            </tr>
                            <tr>
                                <th class="col-lg-6 col-md-6 col-sm-6">Address</th>
                                <td class="col-lg-6 col-md-6 col-sm-6">{{ $merit->address }}</td>
                            </tr>
                            <tr>
                                <th class="col-lg-6 col-md-6 col-sm-6">School Name</th>
                                <td class="col-lg-6 col-md-6 col-sm-6">{{ $merit->institutes->instituteName }}</td>
                            </tr>
                            <tr>
                                <th class="col-lg-6 col-md-6 col-sm-6">Class</th>
                                <td class="col-lg-6 col-md-6 col-sm-6">{{ $merit->semesters->semesterName }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 d-none d-md-block">
                    @if ($merit->photo)
                        <!-- Profile image -->
                        <img src="{{ asset('uploads/' . $merit->photo) }}" alt="Profile Image"
                            class="profile-img img-fluid mb-3">
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
