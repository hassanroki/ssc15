@extends('frontend.layouts.master')

@section('content')
    <div class="login">
        <div class="container">
            <div class="row justify-content-center align-items-center min-vh-100">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title text-center">Login</h2>
                            <form action="/login" method="post">
                                @csrf

                                <!-- Username Input -->
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="username" name="username" required>
                                </div>

                                <!-- Password Input -->
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>


                                <!-- Login and Registration Buttons -->
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <input type="submit" class="btn btn-primary w-100" value="Login"></input>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="/registration" class="btn btn-link w-100">Not Yet
                                            Registered?</a>
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
