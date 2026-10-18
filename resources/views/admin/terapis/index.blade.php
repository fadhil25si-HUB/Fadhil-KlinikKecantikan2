@extends('layout.admin.app')

@section('title', 'Daftar Terapis - Griya Puspita')

@section('content')
    <div class="page-header py-4">
        <h1 class="h4">Daftar Terapis</h1>
        <p>Kelola data terapis Griya Puspita Salon.</p>

        <a href="{{ route('terapis.create') }}" class="btn btn-primary">
            + Tambah Terapis
        </a>
    </div>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card border-0 shadow">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Terapis</th>
                            <th>No. Telepon</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($terapis as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama_terapis }}</td>
                                <td>{{ $item->phone ?? '-' }}</td>
                                <td>{{ $item->status }}</td>
                                <td>
                                    <a href="{{ route('terapis.edit', $item->terapis_id) }}"
                                       class="btn btn-warning btn-sm">
                                        Edit
                                    </a>

                                    <form action="{{ route('terapis.destroy', $item->terapis_id) }}"
                                          method="POST"
                                          class="d-inline"
                                          onsubmit="return confirm('Yakin ingin menghapus data terapis ini?')">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger btn-sm">
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">
                                    Belum ada data terapis.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
