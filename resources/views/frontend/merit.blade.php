@extends('frontend.layouts.master')

@section('content')

    @if (Session::has('success'))
        <div class="alert alert-success" id="session-alert">
            {{ Session::get('success') }}
        </div>
    @endif
    
    {{-- Banner Section Start --}}
    <div class="banner">
        <div class="container banner-content">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <h1 class="display-4 text-white">Your Heading Goes Here</h1>
                    <p class="lead text-white">Your paragraph content goes here. This is a responsive banner created using
                        Bootstrap
                        5.3.2.</p>
                    <a href="{{ route('merit.create') }}" class="btn btn-success" role="button">Registration Now</a>
                </div>
            </div>
        </div>
    </div>
    {{-- Banner Section End --}}

    {{-- Merit Table Section Start --}}
    <div class="meritTable">
        <div class="container mt-4">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col">SL</th>
                        <th scope="col">Name</th>
                        <th scope="col">Mark</th>
                        <th scope="col">Class</th>
                        <th scope="col">School</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>John Doe</td>
                        <td>95</td>
                        <td>12th</td>
                        <td>ABC School</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Jane Smith</td>
                        <td>88</td>
                        <td>11th</td>
                        <td>XYZ School</td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>
    </div>
    {{-- Merit Table Section End --}}
@endsection
