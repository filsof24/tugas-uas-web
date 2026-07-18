<!DOCTYPE html>
<html lang="id" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Data Buku</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>
<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-dark text-white p-3" id="sidebar">
            <h4 class="mb-4 text-center mt-2"><i class="bi bi-book"></i> Sistem Data Buku</h4>
            <ul class="nav flex-column gap-2 mt-4">
                <li class="nav-item">
                    <a href="{{ route('dashboard.index') }}" class="nav-link text-white {{ request()->routeIs('dashboard.*') ? 'active bg-primary rounded' : '' }}">
                        <i class="bi bi-speedometer2 me-2"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('kategori.index') }}" class="nav-link text-white {{ request()->routeIs('kategori.*') ? 'active bg-primary rounded' : '' }}">
                        <i class="bi bi-tags me-2"></i> Kategori
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('buku.index') }}" class="nav-link text-white {{ request()->routeIs('buku.*') ? 'active bg-primary rounded' : '' }}">
                        <i class="bi bi-book-half me-2"></i> Buku
                    </a>
                </li>
            </ul>
        </div>

        <!-- Page Content -->
        <div id="page-content-wrapper" class="w-100 bg-light">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom px-4 py-3">
                <div class="container-fluid">
                    <span class="navbar-brand mb-0 h5 fw-bold">@yield('title', 'Dashboard')</span>
                    <div class="d-flex align-items-center">
                        <span class="me-3"><i class="bi bi-person-circle fs-5"></i> Admin</span>
                    </div>
                </div>
            </nav>

            <!-- Main Content -->
            <div class="container-fluid p-4">
                @yield('content')
            </div>
            
            <footer class="text-center py-3 text-muted bg-white border-top">
                <small>&copy; {{ date('Y') }} Sistem Data Buku. All rights reserved.</small>
            </footer>
        </div>
    </div>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <!-- Flash Message SweetAlert -->
    @if(session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Berhasil!',
            text: '{{ session("success") }}',
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true
        });
    </script>
    @endif

    <!-- Delete Confirmation Script -->
    <script>
        function confirmDelete(id, text = "Data ini akan dihapus secara permanen!") {
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: text,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#dc3545',
                cancelButtonColor: '#6c757d',
                confirmButtonText: '<i class="bi bi-trash"></i> Ya, Hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + id).submit();
                }
            })
        }
    </script>
</body>
</html>
