@extends('layout.auth')
@section('titlePage', 'Login')

@section('content')
<section class="section">
  <div class="container mt-5">
    <div class="row">
      <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">

        <div class="card card-primary">
          <div class="card-header"><h4>Login</h4></div>

          <div class="card-body">
            <form method="post" action="{{ route('auth.login.action') }}">
              @csrf
              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="masukkan username..." autofocus>
                @error('username')<small class="form-text text-danger">{{ $message }}</small>@enderror
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="masukkan password..." autofocus>
                @error('password')<small class="form-text text-danger">{{ $message }}</small>@enderror
              </div>
              <button type="submit" class="btn btn-primary btn-block">Login</button>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection