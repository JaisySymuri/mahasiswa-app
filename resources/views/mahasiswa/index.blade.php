<!DOCTYPE html>
<html>
<head>
    <title>CRUD Mahasiswa</title>

    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid black;
            padding: 8px;
        }

        form {
            margin: 0;
        }
    </style>
</head>
<body>

<h2>Tambah Mahasiswa</h2>

<form method="POST" action="/store">
    @csrf

    <input type="text" name="nama" placeholder="Nama" required>

    <input type="text" name="nim" placeholder="NIM" required>

    <button type="submit">
        Simpan
    </button>
</form>

<br>

<table>
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>Aksi</th>
    </tr>

    @foreach($data as $row)
    <tr>
        <form action="/update/{{ $row->id }}" method="POST">
            @csrf
            @method('PUT')

            <td>{{ $row->id }}</td>

            <td>
                <input
                    type="text"
                    name="nama"
                    value="{{ $row->nama }}"
                >
            </td>

            <td>
                <input
                    type="text"
                    name="nim"
                    value="{{ $row->nim }}"
                >
            </td>

            <td>
                <button type="submit">
                    Update
                </button>
        </form>

        <form
            action="/delete/{{ $row->id }}"
            method="POST"
            style="display:inline;"
        >
            @csrf
            @method('DELETE')

            <button
                type="submit"
                onclick="return confirm('Delete?')"
            >
                Delete
            </button>
        </form>

            </td>
    </tr>
    @endforeach

</table>

</body>
</html>
