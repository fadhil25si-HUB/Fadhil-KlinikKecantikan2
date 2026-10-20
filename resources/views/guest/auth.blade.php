
@extends('guest.layout')

@section('title', 'Login - Griya Puspita')

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <h2 class="text-center mb-4">Login</h2>

                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form action="/auth" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="username" class="form-label">
                                Username
                            </label>
                            <input type="text" name="username" id="username"
                                class="form-control" value="{{ old('username') }}"
                                required>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">
                                Password
                            </label>
                            <input type="password" name="password" id="password"
                                class="form-control" required>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">
                            Login
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
