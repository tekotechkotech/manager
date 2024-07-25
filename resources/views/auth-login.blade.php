@extends('layouts.auth')

@section('content')

<div class="card mb-0">
    <div class="card-body">
      <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
        <img src="../assets/images/logos/dark-logo.svg" width="180" alt="">
      </a>
      <p class="text-center">Your Social Campaigns</p>
      <form method="POST" action="/login">
          @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Username</label>
          <input type="email" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-4">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="d-flex align-items-center justify-content-between mb-4">
          <div class="form-check">
            <input class="form-check-input primary" type="checkbox" value="" id="flexCheckChecked" checked>
            <label class="form-check-label text-dark" for="flexCheckChecked">
              Remeber this Device
            </label>
          </div>
          <a class="text-primary fw-bold" href="./index.html">Forgot Password ?</a>
        </div>
        <button type="submit" class="btn btn-primary w-100 py-8 fs-4  rounded-2">Login</button>
        <hr>
        <div class="text-center">
            <a href="{{ url('google-login') }}" class="btn btn-outline-dark w-50 py-1 fs-4 mb-4 rounded-2"><small>Login with</small> Google</a>
        </div>
        {{-- <a href="./index.html" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Sign In</a> --}}
        <div class="d-flex align-items-center justify-content-center">
          <p class="fs-4 mb-0 fw-bold">New to Modernize?</p>
          <a class="text-primary fw-bold ms-2" href="/register">Create an account</a>
        </div>
      </form>
    </div>
  </div>
  
@endsection