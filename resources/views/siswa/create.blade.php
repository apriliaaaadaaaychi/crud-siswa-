<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Siswa - Pink Edition</title>
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
            box-shadow: 0 10px 30px rgba(255, 105, 180, 0.2);
        }
        
        /* Header Card */
        .card-pink .card-header {
            background-color: #ff69b4; /* Hot Pink */
            color: white;
            border: none;
            padding: 1.2rem;
        }

        /* Label Form */
        .form-label {
            color: #8b008b;
            font-weight: bold;
        }

        /* Input Form Focus */
        .form-control:focus {
            border-color: #ff69b4;
            box-shadow: 0 0 0 0.25rem rgba(255, 105, 180, 0.25);
        }

        /* Tombol Simpan */
        .btn-save-pink {
            background-color: #ff1493; /* Deep Pink */
            color: white;
            border: none;
            border-radius: 20px;
            padding: 8px 25px;
            font-weight: bold;
            transition: all 0.3s;
        }
        .btn-save-pink:hover {
            background-color: #ff69b4;
            color: white;
            transform: scale(1.03);
        }

        /* Tombol Kembali */
        .btn-back-pink {
            background-color: #db7093;
            color: white;
            border: none;
            border-radius: 20px;
            padding: 8px 20px;
            font-weight: bold;
            transition: all 0.3s;
        }
        .btn-back-pink:hover {
            background-color: #c71585;
            color: white;
        }
    </style>
</head>
<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card card-pink shadow">
                    <div class="card-header text-center">
                        <h4 class="mb-0 fw-bold">🌸 Tambah Data Siswa</h4>
                    </div>
                    <div class="card-body p-4">
                        <form action="{{ route('siswa.store') }}" method="POST">
                            @csrf
                            
                            <div class="mb-3">
                                <label class="form-label">Nama Lengkap</label>
                                <input type="text" name="nama" class="form-control" placeholder="Masukkan nama siswa" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Kelas</label>
                                <input type="text" name="kelas" class="form-control" placeholder="Masukkan kelas (misal: 10 RPL 1)" required>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mt-4">
                                <a href="{{ route('siswa.index') }}" class="btn btn-back-pink shadow-sm">← Kembali</a>
                                <button type="submit" class="btn btn-save-pink shadow-sm">Simpan Data 💖</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>