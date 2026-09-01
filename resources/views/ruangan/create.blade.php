
@extends('layouts.app')

@section('content')

<div class="row justify-content-center">

    <div class="col-md-7">

        <div class="card shadow-sm border-0">

            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">
                    <i class="fas fa-plus-circle"></i>
                    Tambah Ruangan
                </h5>
            </div>

            <div class="card-body">

                <form action="{{ route('ruangan.store') }}"
                      method="POST">

                    @csrf

                    <div class="mb-3">

                        <label for="nama_ruangan"
                               class="form-label">
                            Nama Ruangan
                        </label>

                        <input type="text"
                               id="nama_ruangan"
                               name="nama_ruangan"
                               class="form-control @error('nama_ruangan') is-invalid @enderror"
                               placeholder="Contoh: Lab Komputer 1"
                               value="{{ old('nama_ruangan') }}"
                               required>

                        @error('nama_ruangan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>

                    <div class="d-flex justify-content-end gap-2">

                        <a href="{{ route('ruangan.index') }}"
                           class="btn btn-secondary">
                            <i class="fas fa-arrow-left"></i>
                            Kembali
                        </a>

                        <button type="submit"
                                class="btn btn-primary">
                            <i class="fas fa-save"></i>
                            Simpan
                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>

@endsection

