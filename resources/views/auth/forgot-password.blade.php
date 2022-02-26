@extends('auth.template')

@section('section')
    <div class="col-lg-5">
        <div class="card shadow-lg border-0 rounded-lg mt-5">
            <div class="card-header">
                <h3 class="text-center font-weight-light my-4">Password Recovery</h3>
            </div>
            <div class="card-body">
                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="small mb-3 text-muted">Enter your email address and we will send you a link to reset your
                    password.</div>
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="form-floating mb-3">
                        <input class="form-control @error('email') is-invalid @enderror" id="inputEmail" type="email"
                            placeholder="name@example.com" name="email" value="{{ old('email') }}" />
                        <label for="inputEmail">Email address</label>
                        @error('email')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror

                    </div>
                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                        <a class="small" href="{{ route('login') }}">Return to login</a>
                        <button class="btn btn-primary" type="submit">Reset Password</button>
                    </div>
                </form>
            </div>
            <div class="card-footer text-center py-3">
                <div class="small"><a href="{{ route('register') }}">Need an account? Sign up!</a></div>
            </div>
        </div>
    </div>
@endsection
