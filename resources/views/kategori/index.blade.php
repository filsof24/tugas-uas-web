@extends('layouts.app')
@section('title', 'Data Kategori')

@section('content')
<div class="card border-0 shadow-sm">
    <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
        <h5 class="mb-0 fw-bold">Daftar Kategori</h5>
        <a href="{{ route('kategori.create') }}" class="btn btn-primary"><i class="bi bi-plus-lg"></i> Tambah Kategori</a>
    </div>
    <div class="card-body">
        <form action="{{ route('kategori.index') }}" method="GET" class="mb-4">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Cari nama kategori..." value="{{ request('search') }}">
                <button class="btn btn-outline-secondary" type="submit"><i class="bi bi-search"></i> Cari</button>
            </div>
        </form>

        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th width="50" class="text-center">No</th>
                        <th>Nama Kategori</th>
                        <th>Jumlah Buku</th>
                        <th width="150" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($kategoris as $kategori)
                    <tr>
                        <td class="text-center">{{ $kategoris->firstItem() + $loop->index }}</td>
                        <td class="fw-semibold">{{ $kategori->nama_kategori }}</td>
                        <td><span class="badge bg-secondary">{{ $kategori->buku_count }} Buku</span></td>
                        <td class="text-center">
                            <div class="d-flex justify-content-center gap-2">
                                <a href="{{ route('kategori.edit', $kategori->id) }}" class="btn btn-sm btn-info text-white"><i class="bi bi-pencil-square"></i></a>
                                <button type="button" class="btn btn-sm btn-danger" onclick="confirmDelete({{ $kategori->id }})"><i class="bi bi-trash"></i></button>
                                <form id="delete-form-{{ $kategori->id }}" action="{{ route('kategori.destroy', $kategori->id) }}" method="POST" class="d-none">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="text-center py-4 text-muted">Data kategori tidak ditemukan.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        <div class="mt-4">
            {{ $kategoris->links('pagination::bootstrap-5') }}
        </div>
    </div>
</div>
@endsection
