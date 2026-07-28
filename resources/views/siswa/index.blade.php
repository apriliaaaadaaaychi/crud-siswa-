<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa - Pink Edition</title>
    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Pink CSS -->
    <style>
        body {
            background-color: #fff0f5; /* Light Pink background */
        }
        
        /* Kotak Card Utama */
        .card-pink {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(255, 105, 180, 0.2); /* Soft Pink Shadow */
        }
        
        /* Header Card */
        .card-pink .card-header {
            background-color: #ff69b4; /* Hot Pink */
            color: white;
            border: none;
            padding: 1.5rem;
        }

        /* Tombol Tambah */
        .btn-add-pink {
            background-color: #ff1493; /* Deep Pink */
            color: white;
            border: none;
            border-radius: 20px;
            padding: 8px 20px;
            font-weight: bold;
            transition: all 0.3s;
        }
        .btn-add-pink:hover {
            background-color: white;
            color: #ff1493;
            transform: scale(1.05);
        }

        /* Alert Sukses Pink */
        .alert-pink {
            background-color: #ffb6c1; /* Light Pink */
            color: #8b008b; /* Dark Magenta text */
            border: 2px solid #ff69b4;
            border-radius: 10px;
            font-weight: bold;
        }

        /* Table Styling */
        .table-pink thead {
            background-color: #ff69b4; /* Hot Pink Header */
            color: white;
        }
        .table-pink tbody tr:nth-child(even) {
            background-color: #ffe4e1; /* Misty Rose for striped rows */
        }
        .table-pink tbody tr:hover {
            background-color: #ffd1dc; /* Lighter Pink on hover */
        }

        /* Tombol Aksi */
        .btn-edit-pink {
            background-color: #ff69b4;
            color: white;
            border: none;
        }
        .btn-edit-pink:hover { background-color: #ff1493; color: white; }

        .btn-delete-pink {
            background-color: #db7093; /* Pale Violet Red */
            color: white;
            border: none;
        }
        .btn-delete-pink:hover { background-color: #c71585; color: white; }

        /* Badge Kelas */
        .badge-pink {
            background-color: #ff1493;
            color: white;
            padding: 5px 10px;
            border-radius: 10px;
        }
    </style>
</head>
<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-9">

                <!-- Alert Sukses kalau ada pesan -->
                @if(session('success'))
                    <div class="alert alert-pink alert-dismissible fade show shadow-sm" role="alert">
                        🌸 {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <!-- Kotak Card Utama -->
                <div class="card card-pink shadow">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="mb-0 fw-bold">Daftar Siswa</h4>
                        <a href="{{ route('siswa.create') }}" class="btn btn-add-pink shadow-sm">+ Tambah Siswa</a>
                    </div>
                    
                    <div class="card-body p-0">
                        <table class="table table-pink mb-0 text-center align-middle">
                            <thead>
                                <tr>
                                    <th width="10%">No</th>
                                    <th>Nama</th>
                                    <th>Kelas</th>
                                    <th width="25%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($siswas as $index => $siswa)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td class="fw-semibold text-start ps-4">{{ $siswa->nama }}</td>
                                        <td><span class="badge badge-pink fs-6">{{ $siswa->kelas }}</span></td>
                                        <td>
                                            <a href="{{ route('siswa.edit', $siswa->id) }}" class="btn btn-edit-pink btn-sm me-1 text-white shadow-sm">Edit</a>
                                            
                                            <form action="{{ route('siswa.destroy', $siswa->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-delete-pink btn-sm shadow-sm">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center py-5 text-muted">🌸 Belum ada data siswa. Yuk tambah data!</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Bootstrap JS (Buat nutup alert) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>