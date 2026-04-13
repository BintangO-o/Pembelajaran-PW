<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
</head>
<body>
    <h1>Tambah Buku</h1>

    @if($errors->any())
        <div style="color: red;">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('buku.store') }}" method="POST">
        @csrf
        <div>
            <label>Judul:</label><br>
            <input type="text" name="judul" value="{{ old('judul') }}" required>
        </div>
        <div>
            <label>Pengarang:</label><br>
            <input type="text" name="pengarang" value="{{ old('pengarang') }}" required>
        </div>
        <div>
            <label>Penerbit:</label><br>
            <input type="text" name="penerbit" value="{{ old('penerbit') }}" required>
        </div>
        <div>
            <label>Tahun Terbit:</label><br>
            <input type="number" name="tahun_terbit" value="{{ old('tahun_terbit') }}" required>
        </div>
        <div>
            <label>Jumlah Halaman:</label><br>
            <input type="number" name="jumlah_halaman" value="{{ old('jumlah_halaman') }}" required>
        </div>
        <br>
        <button type="submit">Simpan</button>
        <a href="{{ route('buku.index') }}">Batal</a>
    </form>
</body>
</html>
