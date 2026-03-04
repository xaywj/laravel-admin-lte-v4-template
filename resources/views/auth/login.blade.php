@extends('layouts.app')
@section('content')
    <div class="login-box">
        <div class="login-logo">
            {{-- <a href="#"><b>Halo</b>-Trust</a> --}}
            {{-- <img src="{{ asset('images/logo.png') }}" alt="Halo Trust Logo" class="img-fluid" width="100" height="100"> --}}
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body rounded login-card-body">
                <div class="text-center">
                    <img src="{{ asset('images/logo.png') }}" alt="Halo Trust Logo" class="img-fluid" width="100" height="100">
                </div>
                <p class="login-box-msg">Sign in to start your session</p>
                <form action="#" method="post">
                    <label for="email">Username / Email</label>
                    <div class="input-group mb-3">
                        <div class="input-group-text"><span class="bi bi-envelope"></span></div>
                        <input type="email" class="form-control" placeholder="Email" />
                    </div>
                    <label for="password">Password</label>
                    <div class="input-group mb-3">
                        <div class="input-group-text"><div class="bi bi-person"></div></div>
                        <input type="password" class="form-control" placeholder="Password" />
                        {{-- <div class="input-group-text"><span class="bi bi-lock-fill"></span></div> --}}
                    </div>
                    <!--begin::Row-->
                    <div class="row">
                        <div class="col-8">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                <label class="form-check-label" for="flexCheckDefault"> Remember Me </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!--end::Row-->
                </form>
                <div class="social-auth-links text-center mb-3 d-grid gap-2">
                    <p>- OR -</p> 
                    <a href="#" class="btn btn-danger">
                        <i class="bi bi-envelope"></i> Sign in using outlook
                    </a>
                </div> 
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->
@endsection
