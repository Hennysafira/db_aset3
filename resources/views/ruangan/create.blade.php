<!DOCTYPE html>

<html>
<head>
    <title>Tambah Ruangan</title>
</head>
<body>

<h2>Tambah Ruangan</h2>

<form action="{{ route('ruangan.store') }}" method="POST">
@csrf

<label>Nama Ruangan</label>
<br>

<input type="text"
       name="nama_ruangan"
       placeholder="Contoh: Lab Komputer 1"
       required>

<br><br>

<button type="submit">
    Simpan
</button>

<a href="{{ route('ruangan.index') }}">
    Kembali
</a>

</form>

</body>
</html>
