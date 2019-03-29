<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{ url('tes') }}">Tambah data</a>
    <table border="1">
        <thead>
            <tr>
                <th>Kode</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($siswa as $siswa)
                <tr>
                    <td>{{ $siswa->id }}</td>
                    <td>{{ $siswa->nama }}</td>
                    <td>{{ $siswa->alamat }}</td>
                    <td>
                        <a href="{{ url('edit',['id' => $siswa->id]) }}">Edit</a>
                        <a href="{{ url('delete',['id' => $siswa->id]) }}">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
