<?php
include 'koneksi.php';

if(isset($_POST['btn-edit'])){
$nama = $_POST['nama'];
$nis = $_POST['nis'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];
$nisn =$_POST['nisn'];
$nama_ayah =$_POST['nama_ayah'];
$nama_ibu =$_POST['nama_ibu'];
$tempat_lahir=$_POST['tempat_lahir'];
$tanggal_lahir=$_POST['tanggal_lahir'];
$jenis_kelamin=$_POST['jenis_kelamin'];

$query = "INSERT INTO data_siswa (nama, nis, jurusan, alamat, nisn, nama_ayah, nama_ibu, tempat_lahir, tanggal_lahir, jenis_kelamin)
          VALUES ('$nama', '$nis', '$jurusan', '$alamat', '$nisn', '$nama_ayah', '$nama_ibu', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin')";

    $result = mysqli_query($conn, $query);

    if($result){
        echo "
        <script>
            alert('Data siswa berhasil diupdate!');
            document.location.href = 'daftar.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Data siswa gagal diupdate!');
            document.location.href = 'daftar.php';
        </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="navbar">
    </div>

    <div class="sidebar">
        <div class="logo">
            <a href="">SMK <span>Bisa</span></a>
        </div>
        <div class="menu-sidebar">
            <ul>
                <li><a href="index.php">Dashboard</a></li>
            </ul>
            <ul>
                <li class="active"><a href="daftar.php">Daftar Siswa</a></li>
            </ul>
            <ul>
                <li><a href="#">Setting</a></li>
            </ul>
        </div>
    </div>

    <section class="container-tambah">
        <h3>Tambah Data</h3>
        <div class="form-edit">
        <form action="masuk.php" method="post">
                <table>
                    <tr>
                        <td><label for="nama">Nama</label></td>
                        <td>:</td>
                        <td><input type="text" name="nama" id="nama"></td>
                    </tr>
                    <tr>
                        <td><label for="nis">NIS</label></td>
                        <td>:</td>
                        <td><input type="number" name="nis" id="nis"></td>
                    </tr>
                    <tr>
                        <td><label for="jurusan">Jurusan</label></td>
                        <td>:</td>
                        <td><input type="text" name="jurusan" id="jurusan"></td>
                    </tr>
                    <tr>
                        <td><label for="alamat">Alamat</label></td>
                        <td>:</td>
                        <td><input type="text" name="alamat" id="alamat"></td>
                    </tr>
                        <tr>
                        <td><label for="nisn">NISN</label></td>
                        <td>:</td>
                        <td><input type="number" name="nisn" id="nisn"></td>
                    </tr>
                        <tr>
                        <td><label for="nama_ayah">Nama ayah</label></td>
                        <td>:</td>
                        <td><input type="text" name="nama_ayah" id="nama_ayah"></td>
                    </tr>
                        <tr>
                        <td><label for="nama_ibu">Nama ibu</label></td>
                        <td>:</td>
                        <td><input type="text" name="nama_ibu" id="nama_ibu"></td>
                    </tr>
                        <tr>
                        <td><label for="tempat_lahir">Tempat lahir</label></td>
                        <td>:</td>
                        <td><input type="text" name="tempat_lahir" id="tempat_lahir"></td>
                    </tr>
                        <tr>
                        <td><label for="tanggal_lahir">Tanggal lahir</label></td>
                        <td>:</td>
                        <td><input type="date" name="tanggal_lahir" id="tanggal_lahir"></td>
                    </tr>
                        <tr>
                        <td><label for="jenis_kelamin">Jenis_kelamin</label></td>
                        <td>:</td>
                        <td>
                            <input type="radio" name="jenis_kelamin" value="L">Laki-laki
                            <input type="radio" name="jenis_kelamin" value="P">Perempuan
                        </td>
                    </tr>
                </table>
                <div class="btn-edit">
                    <button type="submit" name="btn-edit">Tambah Data</button>
                </div>
        </form>
        </div>
    </section>
</body>
</html>