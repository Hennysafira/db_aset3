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
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('aset.store') }}"
                          method="POST">
                        @csrf
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

                                <option value="Elektronik">
                                    Elektronik
                                </option>

                                <option value="Furniture">
                                    Furniture
                                </option>

                                <option value="Kendaraan">
                                    Kendaraan
                                </option>

                                <option value="Peralatan">
                                    Peralatan
                                </option>

                                <option value="Lainnya">
                                    Lainnya
                                </option>

                            </select>

                        </div>

                        <div class="mb-3">

                            <label class="form-label">
                                Jumlah
                            </label>

                            <input type="number"
                                   name="jumlah"
                                   class="form-control"
                                   min="1"
                                   value="{{ old('jumlah') }}"
                                   required>

                        </div>

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

                                <option value="Baik">
                                    Baik
                                </option>

                                <option value="Rusak Ringan">
                                    Rusak Ringan
                                </option>

                                <option value="Rusak Berat">
                                    Rusak Berat
                                </option>

                            </select>

                        </div>

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