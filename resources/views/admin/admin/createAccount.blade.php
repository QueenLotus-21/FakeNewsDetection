@extends('admin.dashboard')

@section('content')

<style>
    h3{
        text-align: center;
        margin-right: 5rem;
    }
</style>
<!-- Sign Up Start -->
<div class="container-fluid">
    <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
        <div class="col-12 col-lg-7 col-md-6 col-lg-5 col-xl-6">
            <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <a href="index.html" class="">
                    </a>
                    <h3>Sign Up</h3>
                </div> 
                <form method="POST" action="{{route('admin.createAdmin') }}">
                    @if (session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif
                    @if (session('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif

                    @csrf
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" required  autofocus id="floatingText" >
                        <label for="floatingText">Username</label>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                       @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"  required autocomplete="email" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                       @enderror
                    </div>
                    <div class="form-floating mb-4">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                       @enderror
                    </div>
                 
                    <div class="form-floating mb-4">
                        <input type="password"class="form-control" name="password_confirmation" required autocomplete="new-password">
                        <label for="floatingPassword">Confirm Password</label>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                       @enderror
                    </div>
                    <div class="form-floating mb-4">
                            <select name="role"  id="role" @error('role') is-invalid @enderror"  required>
                                <option value="Admin" class="col-md-4 col-form-label text-md-end">Admin</option>
                            </select>
                            @error('role')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Sign Up</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Sign Up End -->
@endsection
