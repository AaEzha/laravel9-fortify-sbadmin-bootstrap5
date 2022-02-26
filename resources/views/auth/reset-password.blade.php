@extends('auth.template')

@section('section')
    <div class="col-lg-7">
        <div class="card shadow-lg border-0 rounded-lg mt-5">
            <div class="card-header">
                <h3 class="text-center font-weight-light my-4">Make New Password</h3>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf
                    <input type="hidden" name="token" value="{{ request()->route('token') }}">
                    <div class="form-floating mb-3">
                        <input class="form-control  @error('email') is-invalid @enderror" id="inputEmail" type="email" placeholder="name@example.com"
                            name="email" value="{{ old('email') }}" />
                        <label for="inputEmail">Email address</label>
                        @error('email')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control  @error('password') is-invalid @enderror" id="inputPassword" type="password"
                                    placeholder="Create a password" name="password" />
                                <label for="inputPassword">Password</label>
                                @error('password')
                                    <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control  @error('password_confirmation') is-invalid @enderror" id="inputPasswordConfirm" type="password"
                                    placeholder="Confirm password" name="password_confirmation" />
                                <label for="inputPasswordConfirm">Confirm Password</label>
                                @error('password_confirmation')
                                    <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 mb-0">
                        <div class="d-grid"><button class="btn btn-primary btn-block" type="submit">Reset
                                Password</button></div>
                    </div>
                </form>
            </div>
            <div class="card-footer text-center py-3">
                <div class="small"><a href="{{ route('login') }}">Have an account? Go to login</a></div>
            </div>
        </div>
    </div>
@endsection
