<!DOCTYPE html>
<html>
<head>
    <title>Biodata</title>
</head>
<body>
    <!-- Untuk pengambilan data yang ditampilkan pada tampilan biodata -->
<table border="0">
    <form action="tampilanbio.php" method="POST">
        <tr>
            <td>NPM</td>
            <td> : </td>
            <td><input type="text" name="NPM"></td>
        </tr>
        <tr>
            <td>Nama Lengkap</td>
            <td> : </td>
            <td><input type="text" name="Nama"></td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td> : </td>
            <td><input type="text" name="Jurusan"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td> : </td>
            <td><input type=radio name=Gender value="Laki-Laki">Laki-Laki
                <input type=radio name=Gender value=Perempuan>Perempuan
            </td>
        </tr>
        <tr>
            <td>Alamat rumah </td>
            <td> : </td>
            <td><input type="textfield" name="Alamat"></td>
        </tr>
        <tr>
            <td>Hobi</td>
            <td> : </td>
            <td><input type="text" name="Hobi"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="submit" value="tambah data"></td>
        </tr>
    </form>
</table>
</body>
</html>