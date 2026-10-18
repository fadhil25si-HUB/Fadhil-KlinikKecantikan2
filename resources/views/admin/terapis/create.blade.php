@extends('layout.admin.app')

@section('title', 'Tambah Terapis - Griya Puspita')

@section('content')
    <div class="page-header py-4">
        <h1 class="h4">Tambah Terapis</h1>
        <p>Tambahkan data terapis baru.</p>

        <a href="{{ route('terapis.index') }}"
           class="btn btn-outline-secondary mb-3">
            Kembali
        </a>
    </div>

    <div class="card border-0 shadow">
        <div class="card-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('terapis.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="nama_terapis" class="form-label">
                        Nama Terapis
                    </label>
                    <input type="text" id="nama_terapis"
                           name="nama_terapis" class="form-control"
                           value="{{ old('nama_terapis') }}" required>
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">
                        No. Telepon
                    </label>
                    <input type="text" id="phone" name="phone"
                           class="form-control"
                           value="{{ old('phone') }}">
                </div>

                <div class="mb-3">
                    <label for="status" class="form-label">
                        Status
                    </label>
                    <select id="status" name="status"
                            class="form-select" required>
                        <option value="Aktif"
                            {{ old('status', 'Aktif') == 'Aktif' ? 'selected' : '' }}>
                            Aktif
                        </option>
                        <option value="Nonaktif"
                            {{ old('status') == 'Nonaktif' ? 'selected' : '' }}>
                            Nonaktif
                        </option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">
                    Simpan Terapis
                </button>

                <a href="{{ route('terapis.index') }}"
                   class="btn btn-outline-secondary ms-2">
                    Batal
                </a>
            </form>

        </div>
    </div>
@endsection
