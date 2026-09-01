
@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="mb-1">
            <i class="fas fa-door-open text-primary"></i>
            Data Ruangan
        </h2>
        <p class="text-muted mb-0">
            Kelola data ruangan yang tersedia
        </p>
    </div>

    <a href="{{ route('ruangan.create') }}" class="btn btn-primary">
        <i class="fas fa-plus"></i>
        Tambah Ruangan
    </a>
</div>

@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="fas fa-check-circle"></i>
        {{ session('success') }}

        <button type="button"
                class="btn-close"
                data-bs-dismiss="alert">
        </button>
    </div>
@endif

<div class="card shadow-sm border-0">

    <div class="card-header bg-primary text-white">
        <h5 class="mb-0">
            <i class="fas fa-list"></i>
            Daftar Ruangan
        </h5>
    </div>

    <div class="card-body">

        <div class="table-responsive">

            <table class="table table-bordered table-hover align-middle">

                <thead class="table-light">
                    <tr>
                        <th width="80" class="text-center">No</th>
                        <th>Nama Ruangan</th>
                        <th width="180" class="text-center">Aksi</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse($ruangan as $r)

                        <tr>

                            <td class="text-center">
                                {{ $loop->iteration }}
                            </td>

                            <td>
                                <i class="fas fa-door-open text-primary me-2"></i>
                                {{ $r->nama_ruangan }}
                            </td>

                            <td class="text-center">

                                <a href="{{ route('ruangan.edit', $r->id) }}"
                                   class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>
                                    Edit
                                </a>

                                <form action="{{ route('ruangan.destroy', $r->id) }}"
                                      method="POST"
                                      class="d-inline">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            class="btn btn-danger btn-sm"
                                            onclick="return confirm('Yakin ingin menghapus data ruangan ini?')">
                                        <i class="fas fa-trash"></i>
                                        Hapus
                                    </button>

                                </form>

                            </td>

                        </tr>

                    @empty

                        <tr>
                            <td colspan="3" class="text-center py-5">

                                <i class="fas fa-door-open fa-3x text-muted mb-3"></i>

                                <p class="text-muted mb-0">
                                    Belum ada data ruangan.
                                </p>

                            </td>
                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection
