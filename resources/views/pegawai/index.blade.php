<!DOCTYPE html>
<html>

<head>
    <title>CRUD Pada Laravel</title>
</head>

<body>

   <h3>Data User</h3>
    <a href=""> + Tambah User Baru</a>
    <br />
    <br />
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Password</th>
            <th>Opsi</th>
        </tr>
        @foreach ($pegawai as $p)
            <tr>
                <td>{{ $p->name }}</td>
                <td>{{ $p->email }}</td>
                <td>{{ $p->alamat }}</td>
                <td>
                    <a href="">Edit</a>
                    | 
                    <a href="">Hapus</a>
                    | 
                    
                </td>
            </tr>
        @endforeach
    </table>


</body>

</html>