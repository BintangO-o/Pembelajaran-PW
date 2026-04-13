<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
</head>
<body>
    <h1>Daftar Buku</h1>
    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif
    <a href="{{ route('buku.create') }}">Tambah Buku</a>
    <br><br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Penerbit</th>
            <th>Pengarang</th>
            <th>Tahun Terbit</th>
            <th>Jumlah Halaman</th>
            <th>Aksi</th>
        </tr>
        @forelse($books as $key => $book)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $book->judul }}</td>
                <td>{{ $book->penerbit }}</td>
                <td>{{ $book->pengarang }}</td>
                <td>{{ $book->tahun_terbit }}</td>
                <td>{{ $book->jumlah_halaman }}</td>
                <td>
                    <a href="{{ route('buku.edit', $book->id) }}">Edit</a>
                    <form action="{{ route('buku.destroy', $book->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus buku ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="7" style="text-align:center;">Tidak ada buku.</td>
            </tr>
        @endforelse
    </table>
</body>
</html>