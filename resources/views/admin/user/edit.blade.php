@extends('layout.admin.app')

@section('content')
    <div class="py-4">
        <h1 class="h4">Edit User</h1>
        <p class="mb-0">Form untuk mengubah data user.</p>
    </div>

    <div class="row">
        <div class="col-12 mb-4">
            <div class="card border-0 shadow components-section">
                <div class="card-body">

                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('user.update', $dataUser->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" id="name"
                                class="form-control"
                                value="{{ old('name', $dataUser->name) }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email"
                                class="form-control"
                                value="{{ old('email', $dataUser->email) }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" id="password"
                                class="form-control"
                                placeholder="Kosongkan jika tidak ingin mengubah password">
                        </div>

                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">
                                Confirm Password
                            </label>
                            <input type="password" name="password_confirmation"
                                id="password_confirmation" class="form-control"
                                placeholder="Ulangi password baru">
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>

                        <a href="{{ route('user.index') }}"
                            class="btn btn-outline-secondary ms-2">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
