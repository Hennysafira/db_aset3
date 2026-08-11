<!DOCTYPE html>

<html>
<head>
    <title>Edit Ruangan</title>
</head>
<body>

<h2>Edit Ruangan</h2>

<form action="{{ route('ruangan.update', $ruangan->id) }}"
      method="POST">

@csrf
@method('PUT')

<label>Nama Ruangan</label>
<br>

<input type="text"
       name="nama_ruangan"
       value="{{ $ruangan->nama_ruangan }}"
       required>

<br><br>

<button type="submit">
    Update
</button>

<a href="{{ route('ruangan.index') }}">
    Kembali
</a>

</form>

</body>
</html>
