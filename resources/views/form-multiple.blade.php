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
                            <input type="hidden" name="user" value="user_1">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text"
                                    class="form-control
                                    {{ $errors->user_1->first('name') ? 'is-invalid' : '' }}"
                                    id="name" name="name" value="{{ old('user') == 'user_1' ? old('name') : '' }}">
                                @if ($errors->user_1->first('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->user_1->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="text"
                                    class="form-control {{ $errors->user_1->first('email') ? 'is-invalid' : '' }}"
                                    id="email" name="email" value="{{ old('user') == 'user_1' ? old('email') : '' }}">
                                <div class="invalid-feedback">
                                </div>

                                @if ($errors->user_1->first('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->user_1->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password"
                                    class="form-control {{ $errors->user_1->first('password') ? 'is-invalid' : '' }}"
                                    id="password" name="password">

                                @if ($errors->user_1->first('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->user_1->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="password-confirmation" class="form-label">Password Confirmation</label>
                                <input type="password"
                                    class="form-control {{ $errors->user_1->first('password') ? 'is-invalid' : '' }}"
                                    id="password-confirmation" name="password_confirmation">
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-white bg-primary">{{ __('User 2') }}</div>

                    <div class="card-body">
                        <form action="" method="POST">
                            @csrf
                            <input type="hidden" name="user" value="user_2">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text"
                                    class="form-control {{ $errors->user_2->first('name') ? 'is-invalid' : '' }}"
                                    id="name" name="name" value="{{ old('user') == 'user_2' ? old('name') : '' }}">

                                @if ($errors->user_2->first('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->user_2->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="text"
                                    class="form-control {{ $errors->user_2->first('email') ? 'is-invalid' : '' }}"
                                    id="email" name="email"
                                    value="{{ old('user') == 'user_2' ? old('email') : '' }}">
                                <div class="invalid-feedback">
                                </div>
                                @if ($errors->user_2->first('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->user_2->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password"
                                    class="form-control {{ $errors->user_2->first('password') ? 'is-invalid' : '' }}"
                                    id="password" name="password">
                                @if ($errors->user_2->first('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->user_2->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="password-confirmation" class="form-label">Password Confirmation</label>
                                <input type="password"
                                    class="form-control {{ $errors->user_2->first('password') ? 'is-invalid' : '' }}"
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
