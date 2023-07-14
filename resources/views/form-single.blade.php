@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @if (session()->has('success'))
                <div class="col-12">
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                </div>
            @endif

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header  text-white bg-primary ">{{ __('User 1') }}</div>

                    <div class="card-body">
                        <form action="" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    id="name" name="name" value="{{ old('name') }}">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror"
                                    id="email" name="email" value="{{ old('email') }}">
                                <div class="invalid-feedback">
                                </div>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    id="password" name="password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password-confirmation" class="form-label">Password Confirmation</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    id="password-confirmation" name="password_confirmation">
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
