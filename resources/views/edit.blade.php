<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ url('update',['id' => $siswa->id]) }}" method="POST">
        @csrf
        <table>
            <tr>
                <td>Nama</td> <td>:</td> <td><input type="text" name="nama" value="{{ $siswa->nama }}"></td>
            </tr>
            <br>
            <tr>
                <td>Alamat</td><td>:</td><td><input type="text" name="alamat" value="{{ $siswa->alamat }}"></td>
            </tr>
            <tr>
                <td><button type="submit">Simpan</button></td>
            </tr>
        </table>
    </form>
</body>
</html>
