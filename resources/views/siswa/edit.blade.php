<!DOCTYPE html>
<html>
<head>
    <title>Edit Siswa</title>
</head>
<body>
    <h2>Edit Data Siswa</h2>
    <a href="{{ route('siswa.index') }}">Kembali</a><br><br>

    <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <label>Nama:</label><br>
        <input type="text" name="nama" value="{{ $siswa->nama }}" required><br><br>
        
        <label>Kelas:</label><br>
        <input type="text" name="kelas" value="{{ $siswa->kelas }}" required><br><br>

        <button type="submit">Update</button>
    </form>
</body>
</html>