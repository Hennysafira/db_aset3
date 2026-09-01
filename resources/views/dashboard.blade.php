@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<div class="container-fluid px-0">

    <h1 class="h3 mb-2">Dashboard</h1>

    <p class="text-muted mb-4">
        Selamat datang di Sistem Manajemen Aset
    </p>

    <div class="row">

        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <h6 class="text-muted">Total Aset</h6>
                    <h2>{{ $totalAset ?? 0 }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <h6 class="text-muted">Total Kategori</h6>
                    <h2>{{ $totalKategori ?? 0 }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <h6 class="text-muted">Total Ruangan</h6>
                    <h2>{{ $totalRuangan ?? 0 }}</h2>
                </div>
            </div>
        </div>

    </div>

</div>

@endsection