@extends('master')
@section('title','login')
@section('content')
@if(Session::has('success'))
<div class="alert alert-success">
{{ Session::get('success') }}
@php
Session::forget('success');
@endphp
</div>
@endif

<section class="vh-100 gradient-custom">
<form method="post" action="{{ route('Home1') }}">
                        @csrf
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
              <p class="text-white-50 mb-5">Please enter your login and password!</p>

              <div class="form-outline form-white mb-4">
                <input type="email" placeholder="Email" id="typeEmailX" class=" form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus/>
                @error('email')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                   
                                @enderror
              </div>

              <div class="form-outline form-white mb-4">
                
                <input type="password" placeholder=" password" id="typePasswordX" class="form-control-lg @error('password') is-invalid @enderror" name="password"  autocomplete="current-password"/>
                @error('password')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror   
              </div>
              <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> 
  </form> 
</section>

@endsection
