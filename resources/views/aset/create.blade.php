@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="card shadow">

                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Tambah Data Aset</h4>
                </div>

                <div class="card-body">

                    {{-- Pesan Error --}}
                    @if($errors->any())

                        <div class="alert alert-danger">

                            <strong>Terjadi kesalahan!</strong>

                            <ul class="mb-0 mt-2">

                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach

                            </ul>

                        </div>

                    @endif

                    {{-- Form Tambah --}}
                    <form action="{{ route('aset.store') }}"
                          method="POST">

                        @csrf

                        {{-- Nama Aset --}}
                        <div class="mb-3">

                            <label class="form-label">
                                Nama Aset
                            </label>

                            <input type="text"
                                   name="nama_aset"
                                   class="form-control"
                                   value="{{ old('nama_aset') }}"
                                   placeholder="Masukkan nama aset"
                                   required>

                        </div>

                        {{-- Kategori --}}
                        <div class="mb-3">

                            <label class="form-label">
                                Kategori
                            </label>

                            <select name="kategori"
                                    class="form-select"
                                    required>

                                <option value="">
                                    -- Pilih Kategori --
                                </option>

                                <option value="Elektronik"
                                    {{ old('kategori') == 'Elektronik' ? 'selected' : '' }}>
                                    Elektronik
                                </option>

                                <option value="Furniture"
                                    {{ old('kategori') == 'Furniture' ? 'selected' : '' }}>
                                    Furniture
                                </option>

                                <option value="Kendaraan"
                                    {{ old('kategori') == 'Kendaraan' ? 'selected' : '' }}>
                                    Kendaraan
                                </option>

                                <option value="Peralatan"
                                    {{ old('kategori') == 'Peralatan' ? 'selected' : '' }}>
                                    Peralatan
                                </option>

                                <option value="Lainnya"
                                    {{ old('kategori') == 'Lainnya' ? 'selected' : '' }}>
                                    Lainnya
                                </option>

                            </select>

                        </div>

                        {{-- Jumlah --}}
                        <div class="mb-3">

                            <label class="form-label">
                                Jumlah
                            </label>

                            <input type="number"
                                   name="jumlah"
                                   class="form-control"
                                   min="1"
                                   value="{{ old('jumlah') }}"
                                   placeholder="Masukkan jumlah aset"
                                   required>

                        </div>

                        {{-- Kondisi --}}
                        <div class="mb-3">

                            <label class="form-label">
                                Kondisi
                            </label>

                            <select name="kondisi"
                                    class="form-select"
                                    required>

                                <option value="">
                                    -- Pilih Kondisi --
                                </option>

                                <option value="Baik"
                                    {{ old('kondisi') == 'Baik' ? 'selected' : '' }}>
                                    Baik
                                </option>

                                <option value="Rusak Ringan"
                                    {{ old('kondisi') == 'Rusak Ringan' ? 'selected' : '' }}>
                                    Rusak Ringan
                                </option>

                                <option value="Rusak Berat"
                                    {{ old('kondisi') == 'Rusak Berat' ? 'selected' : '' }}>
                                    Rusak Berat
                                </option>

                            </select>

                        </div>

                        {{-- Lokasi --}}
                        <div class="mb-3">

                            <label class="form-label">
                                Lokasi
                            </label>

                            <input type="text"
                                   name="lokasi"
                                   class="form-control"
                                   value="{{ old('lokasi') }}"
                                   placeholder="Contoh: Lab Komputer"
                                   required>

                        </div>

                        {{-- Tanggal Perolehan --}}
                        <div class="mb-3">

                            <label class="form-label">
                                Tanggal Perolehan
                            </label>

                            <input type="date"
                                   name="tanggal_perolehan"
                                   class="form-control"
                                   value="{{ old('tanggal_perolehan') }}"
                                   required>

                        </div>

                        {{-- Tombol --}}
                        <div class="d-flex justify-content-between">

                            <a href="{{ route('aset.index') }}"
                               class="btn btn-secondary">
                                Kembali
                            </a>

                            <button type="submit"
                                    class="btn btn-primary">
                                Simpan
                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection

