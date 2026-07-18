@extends('layouts.app')
@section('title', 'Dashboard')

@section('content')
<div class="row mb-4">
    <div class="col-md-6 mb-3">
        <div class="card bg-primary text-white h-100 border-0 shadow-sm">
            <div class="card-body d-flex align-items-center justify-content-between">
                <div>
                    <h6 class="text-uppercase fw-semibold mb-2">Total Buku</h6>
                    <h2 class="mb-0 fw-bold">{{ $totalBuku }}</h2>
                </div>
                <div class="fs-1 opacity-50">
                    <i class="bi bi-book"></i>
                </div>
            </div>
            <a href="{{ route('buku.index') }}" class="card-footer text-white text-decoration-none d-flex justify-content-between align-items-center" style="background-color: rgba(0,0,0,0.1);">
                <span>Lihat Data Buku</span>
                <i class="bi bi-arrow-right-circle"></i>
            </a>
        </div>
    </div>
    <div class="col-md-6 mb-3">
        <div class="card bg-success text-white h-100 border-0 shadow-sm">
            <div class="card-body d-flex align-items-center justify-content-between">
                <div>
                    <h6 class="text-uppercase fw-semibold mb-2">Total Kategori</h6>
                    <h2 class="mb-0 fw-bold">{{ $totalKategori }}</h2>
                </div>
                <div class="fs-1 opacity-50">
                    <i class="bi bi-tags"></i>
                </div>
            </div>
            <a href="{{ route('kategori.index') }}" class="card-footer text-white text-decoration-none d-flex justify-content-between align-items-center" style="background-color: rgba(0,0,0,0.1);">
                <span>Lihat Data Kategori</span>
                <i class="bi bi-arrow-right-circle"></i>
            </a>
        </div>
    </div>
</div>

<div class="card border-0 shadow-sm">
    <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
        <h5 class="mb-0 fw-bold">5 Buku Terbaru</h5>
        <a href="{{ route('buku.index') }}" class="btn btn-sm btn-outline-primary">Lihat Semua</a>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th class="px-4">Judul Buku</th>
                        <th>Penulis</th>
                        <th>Kategori</th>
                        <th>Stok</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($bukuTerbaru as $buku)
                    <tr>
                        <td class="px-4 fw-semibold">{{ $buku->judul }}</td>
                        <td>{{ $buku->penulis }}</td>
                        <td><span class="badge bg-info text-dark">{{ $buku->kategori->nama_kategori }}</span></td>
                        <td>
                            @if($buku->stok > 0)
                                <span class="badge bg-success">{{ $buku->stok }} Tersedia</span>
                            @else
                                <span class="badge bg-danger">Habis</span>
                            @endif
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="text-center py-4 text-muted">Belum ada data buku.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
