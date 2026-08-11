<!DOCTYPE html>

<html>
<head>
    <title>Data Ruangan</title>
</head>
<body>

<h2>Data Ruangan</h2>

<a href="{{ route('dashboard') }}">Dashboard</a>
  |   <a href="{{ route('ruangan.create') }}">+ Tambah Ruangan</a>

<br><br>

@if(session('success')) <p>{{ session('success') }}</p>
@endif

<table border="1" cellpadding="10" cellspacing="0">
<thead>
    <tr>
        <th>No</th>
        <th>Nama Ruangan</th>
        <th>Aksi</th>
    </tr>
</thead>

<tbody>

    @forelse($ruangan as $r)

    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $r->nama_ruangan }}</td>

        <td>
            <a href="{{ route('ruangan.edit', $r->id) }}">
                Edit
            </a>

            <form action="{{ route('ruangan.destroy', $r->id) }}"
                  method="POST"
                  style="display:inline;">

                @csrf
                @method('DELETE')

                <button type="submit"
                        onclick="return confirm('Yakin ingin menghapus data ruangan ini?')">
                    Hapus
                </button>

            </form>
        </td>
    </tr>

    @empty

    <tr>
        <td colspan="3">
            Belum ada data ruangan.
        </td>
    </tr>

    @endforelse

</tbody>

</table>

</body>
</html>
    