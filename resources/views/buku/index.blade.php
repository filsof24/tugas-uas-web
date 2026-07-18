@extends('layouts.app')
@section('title', 'Data Buku')

@section('content')
<div class="card border-0 shadow-sm">
    <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
        <h5 class="mb-0 fw-bold">Daftar Buku</h5>
        <a href="{{ route('buku.create') }}" class="btn btn-primary"><i class="bi bi-plus-lg"></i> Tambah Buku</a>
    </div>
    <div class="card-body">
        <form action="{{ route('buku.index') }}" method="GET" class="mb-4">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Cari judul, penulis, atau kategori..." value="{{ request('search') }}">
                <button class="btn btn-outline-secondary" type="submit"><i class="bi bi-search"></i> Cari</button>
            </div>
        </form>

        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th width="50" class="text-center">No</th>
                        <th>Kategori</th>
                        <th>Judul Buku</th>
                        <th>Penulis</th>
                        <th>Penerbit</th>
                        <th>Tahun</th>
                        <th>Stok</th>
                        <th width="150" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($bukus as $buku)
                    <tr>
                        <td class="text-center">{{ $bukus->firstItem() + $loop->index }}</td>
                        <td><span class="badge bg-info text-dark">{{ $buku->kategori->nama_kategori }}</span></td>
                        <td class="fw-semibold">{{ $buku->judul }}</td>
                        <td>{{ $buku->penulis }}</td>
                        <td>{{ $buku->penerbit }}</td>
                        <td>{{ $buku->tahun_terbit }}</td>
                        <td>
                            @if($buku->stok > 0)
                                <span class="badge bg-success">{{ $buku->stok }}</span>
                            @else
                                <span class="badge bg-danger">Habis</span>
                            @endif
                        </td>
                        <td class="text-center">
                            <div class="d-flex justify-content-center gap-2">
                                <a href="{{ route('buku.edit', $buku->id) }}" class="btn btn-sm btn-info text-white"><i class="bi bi-pencil-square"></i></a>
                                <button type="button" class="btn btn-sm btn-danger" onclick="confirmDelete({{ $buku->id }})"><i class="bi bi-trash"></i></button>
                                <form id="delete-form-{{ $buku->id }}" action="{{ route('buku.destroy', $buku->id) }}" method="POST" class="d-none">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="8" class="text-center py-4 text-muted">Data buku tidak ditemukan.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        <div class="mt-4">
            {{ $bukus->links('pagination::bootstrap-5') }}
        </div>
    </div>
</div>
@endsection
