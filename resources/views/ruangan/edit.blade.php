
@extends('layouts.app')

@section('content')

<div class="row justify-content-center">

    <div class="col-md-7">

        <div class="card shadow-sm border-0">

            <div class="card-header bg-warning">
                <h5 class="mb-0">
                    <i class="fas fa-edit"></i>
                    Edit Ruangan
                </h5>
            </div>

            <div class="card-body">

                <form action="{{ route('ruangan.update', $ruangan->id) }}"
                      method="POST">

                    @csrf
                    @method('PUT')

                    <div class="mb-3">

                        <label for="nama_ruangan"
                               class="form-label">
                            Nama Ruangan
                        </label>

                        <input type="text"
                               id="nama_ruangan"
                               name="nama_ruangan"
                               class="form-control @error('nama_ruangan') is-invalid @enderror"
                               value="{{ old('nama_ruangan', $ruangan->nama_ruangan) }}"
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
                                class="btn btn-warning">
                            <i class="fas fa-save"></i>
                            Update
                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>

@endsection

