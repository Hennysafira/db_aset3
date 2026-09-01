@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="card shadow">

                <div class="card-header bg-warning">
                    <h4 class="mb-0">Edit Data Aset</h4>
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

                    <form action="{{ route('aset.update', $aset->id) }}"
                          method="POST">

                        @csrf

                        @method('PUT')

                        <div class="mb-3">

                            <label class="form-label">
                                Nama Aset
                            </label>

                            <input type="text"
                                   name="nama_aset"
                                   class="form-control"
                                   value="{{ old('nama_aset', $aset->nama_aset) }}"
                                   required>

                        </div>

                        <div class="mb-3">

                            <label class="form-label">
                                Kategori
                            </label>

                            <select name="kategori"
                                    class="form-select"
                                    required>

                                <option value="Elektronik"
                                    {{ $aset->kategori == 'Elektronik' ? 'selected' : '' }}>
                                    Elektronik
                                </option>

                                <option value="Furniture"
                                    {{ $aset->kategori == 'Furniture' ? 'selected' : '' }}>
                                    Furniture
                                </option>

                                <option value="Kendaraan"
                                    {{ $aset->kategori == 'Kendaraan' ? 'selected' : '' }}>
                                    Kendaraan
                                </option>

                                <option value="Peralatan"
                                    {{ $aset->kategori == 'Peralatan' ? 'selected' : '' }}>
                                    Peralatan
                                </option>

                                <option value="Lainnya"
                                    {{ $aset->kategori == 'Lainnya' ? 'selected' : '' }}>
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
                                   value="{{ old('jumlah', $aset->jumlah) }}"
                                   min="1"
                                   required>

                        </div>

                        <div class="mb-3">

                            <label class="form-label">
                                Kondisi
                            </label>

                            <select name="kondisi"
                                    class="form-select"
                                    required>

                                <option value="Baik"
                                    {{ $aset->kondisi == 'Baik' ? 'selected' : '' }}>
                                    Baik
                                </option>

                                <option value="Rusak Ringan"
                                    {{ $aset->kondisi == 'Rusak Ringan' ? 'selected' : '' }}>
                                    Rusak Ringan
                                </option>

                                <option value="Rusak Berat"
                                    {{ $aset->kondisi == 'Rusak Berat' ? 'selected' : '' }}>
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
                                   value="{{ old('lokasi', $aset->lokasi) }}"
                                   required>

                        </div>

                        <div class="mb-3">

                            <label class="form-label">
                                Tanggal Perolehan
                            </label>

                            <input type="date"
                                   name="tanggal_perolehan"
                                   class="form-control"
                                   value="{{ old('tanggal_perolehan', $aset->tanggal_perolehan) }}"
                                   required>

                        </div>

                        <div class="d-flex justify-content-between">

                            <a href="{{ route('aset.index') }}"
                               class="btn btn-secondary">
                                Kembali
                            </a>

                            <button type="submit"
                                    class="btn btn-warning">
                                Update
                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection