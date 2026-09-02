@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Data Aset</h2>

        <a href="{{ route('aset.create') }}" class="btn btn-primary">
            + Tambah Aset
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card shadow">

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-bordered table-hover">

                    <thead class="table-dark">

                        <tr>
                            <th>No</th>
                            <th>Nama Aset</th>
                            <th>Kategori</th>
                            <th>Jumlah</th>
                            <th>Kondisi</th>
                            <th>Lokasi</th>
                            <th>Tanggal Perolehan</th>
                            <th>Aksi</th>
                        </tr>

                    </thead>

                    <tbody>

                    @forelse($asets as $aset)

                        <tr>

                            <td>{{ $loop->iteration }}</td>

                            <td>{{ $aset->nama_aset }}</td>

                            <td>{{ $aset->kategori }}</td>

                            <td>{{ $aset->jumlah }}</td>

                            <td>

                                @if($aset->kondisi == 'Baik')

                                    <span class="badge bg-success">
                                        Baik
                                    </span>

                                @elseif($aset->kondisi == 'Rusak Ringan')

                                    <span class="badge bg-warning text-dark">
                                        Rusak Ringan
                                    </span>

                                @else

                                    <span class="badge bg-danger">
                                        Rusak Berat
                                    </span>

                                @endif

                            </td>

                            <td>{{ $aset->lokasi }}</td>

                            <td>
                                {{ \Carbon\Carbon::parse($aset->tanggal_perolehan)->format('d-m-Y') }}
                            </td>

                            <td>

                                {{-- Tombol Edit --}}
                                <a href="{{ route('aset.edit', $aset->id) }}"
                                   class="btn btn-warning btn-sm">
                                    Edit
                                </a>

                                {{-- Tombol Hapus --}}
                                <form action="{{ route('aset.destroy', $aset->id) }}"
                                      method="POST"
                                      class="d-inline">

                                    @csrf

                                    @method('DELETE')

                                    <button type="submit"
                                            class="btn btn-danger btn-sm"
                                            onclick="return confirm('Yakin ingin menghapus data ini?')">

                                        Hapus

                                    </button>

                                </form>

                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td colspan="8" class="text-center">
                                Belum ada data aset.
                            </td>

                        </tr>

                    @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

@endsection

