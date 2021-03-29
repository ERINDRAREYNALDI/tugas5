<style type="text/css">
    body{
                background-color: 00ff00;
                font-family: arial;
                font-size: 20px;
            }
</style>
<body>
    <h1><center>BIODATA : </center></h1>
</body>
<?php
//Pendeklarasian variabel-variabel
$NPM = $_POST['NPM'];
$Nama = $_POST['Nama'];
$Jurusan = $_POST['Jurusan'];
$Gender = $_POST['Gender'];
$Alamat = $_POST['Alamat'];
$Hobi = $_POST['Hobi'];

//Pengecekan data-data yang kosong
if ($NPM == "") {
    echo "<center>Isi NPM Anda</center><br>";
} elseif ($Nama == "") {
    echo "<center>Isi Nama Anda</center><br>";
} elseif ($Jurusan == "") {
    echo "<center>Isi Jurusan Anda</center><br>";
} elseif ($Gender == "") {
    echo "<center>Isi Jenis Kelamin Anda</center><br>";
} elseif ($Alamat == "") {
    echo "<center>Isi Alamat Anda</center><br>";
}    elseif ($Hobi == "") {
    echo "<center>Isi Hobi Anda</center><br>";
} else {

//Menampilkan data-data yang telah diisi
    echo "<center>Npm : $NPM</center><br>" ;
    echo "<center>Nama : $Nama</center><br>";
    echo "<center>Jurusan : $Jurusan</center><br>";
    echo "<center>Jenis Kelamin : $Gender</center><br>";
    echo "<center>Alamat : $Alamat</center><br>";
    echo "<center>Hobi : $Hobi</center><br>";
}
?>