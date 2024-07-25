@extends('layouts.auth')

@section('content')

<div class="col-md-8 col-lg-6 col-xxl-3">
<div class="card mb-0">
  <div class="card-body">
    <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
      <img src="../assets/images/logos/dark-logo.svg" width="180" alt="">
    </a>
    <p class="text-center">Your Social Campaigns</p>
    
    <form method="POST" action="{{ route('register') }}">
      @csrf
      <div class="mb-3">
          <label for="exampleInputtext1" class="form-label">Name</label>
          <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="exampleInputtext1" aria-describedby="textHelp" value="{{ old('name') }}">
          @error('name')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
      </div>
      <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email Address</label>
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('email') }}">
          @error('email')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
      </div>
      <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword1">
          @error('password')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
      </div>
      <div class="mb-4">
          <label for="exampleInputPasswordConfirmation1" class="form-label">Confirm Password</label>
          <input type="password" name="password_confirmation" class="form-control" id="exampleInputPasswordConfirmation1">
      </div>
      <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Register</button>
      <div class="d-flex align-items-center justify-content-center">
          <p class="fs-4 mb-0 fw-bold">Already have an Account?</p>
          <a class="text-primary fw-bold ms-2" href="{{ route('login') }}">Log In</a>
      </div>
  </form>
</div>
</div>
</div>
  
@endsection