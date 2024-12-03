<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Data Mahasiswa</h2>
    <table>
        <thead>
            <tr>
                <th>NPM</th>
                <th>Nama</th>
                <th>Prodi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mahasiswa as $m)
            <tr>
                <td>{{ $m->npm }}</td>
                <td>{{ $m->nama }}</td>
                <td>{{ $m->prodi }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
