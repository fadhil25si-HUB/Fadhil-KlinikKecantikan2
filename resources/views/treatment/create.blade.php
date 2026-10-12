@extends('admin.layout')

@section('title', 'Tambah Treatment - Griya Puspita')

@section('content')
    <div class="page-header py-4">
        <h1 class="h4">Tambah Treatment</h1>
        <p>Tambahkan layanan baru Griya Puspita Salon.</p>

        <a href="{{ route('treatment.index') }}" class="btn btn-outline-secondary mb-3">
            Kembali
        </a>
    </div>

    <div class="row">
        <div class="col-12 mb-4">
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

                    <form action="{{ route('treatment.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="nama_treatment" class="form-label">Nama Treatment</label>
                            <input type="text" id="nama_treatment" name="nama_treatment"
                                   class="form-control" value="{{ old('nama_treatment') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="harga" class="form-label">Harga (Rp)</label>
                            <input type="number" id="harga" name="harga"
                                   class="form-control" min="0" step="0.01"
                                   value="{{ old('harga') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea id="deskripsi" name="deskripsi" rows="4"
                                      class="form-control">{{ old('deskripsi') }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">
                            Simpan Treatment
                        </button>

                        <a href="{{ route('treatment.index') }}"
                           class="btn btn-outline-secondary ms-2">
                            Batal
                        </a>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
