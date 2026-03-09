<?php
include 'koneksi.php';

$id = $_GET['id'];

$query = "SELECT * FROM data_siswa WHERE id = $id";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result)
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
        <ul class="active"><a href="daftar.php">Daftar Siswa</a></li>
        </ul>
        <ul>
            <li><a href="">Settings</a></li>
        </ul>
    </div>
</div>
<div class="container-edit">
    <h1>Edit Data</h1>
    <div class="form-edit">
        <form action="" method="post">
            <table>
                <tr>
                    <td><label for="nama">Nama</label></td>
                    <td><input type="text" name="nama" id="nama" value="<?= $row['nama']; ?>"></td>
                </tr>
                <tr>
                    <td><label for="nis">NIS</label></td>
                    <td><input type="number" name="nis" id="nis" value="<?= $row['nis']; ?>"></td>
                </tr>
                <tr>
                    <td><label for="jurusan">Jurusan</label></td>
                    <td><input type="text" name="jurusan" id="jurusan" value="<?= $row['jurusan']; ?>"></td>
                </tr>
                <tr>
                    <td><label for="alamat">Alamat</label></td>
                    <td><input type="text" name="alamat" id="alamat" value="<?= $row['alamat']; ?>"></td>
                </tr>
                <tr>
                    <td><label for="nisn">NISN</label></td>
                    <td><input type="number" name="nisn" id="nisn" value="<?= $row['nisn']; ?>"></td>
                </tr>
                <tr>
                    <td><label for="nama_ayah">Nama ayah</label></td>
                    <td><input type="text" name="nama_ayah" id="nama_ayah" value="<?= $row['nama_ayah']; ?>"></td>
                </tr>
                <tr>
                    <td><label for="nama_ibu">Nama ibu</label></td>
                    <td><input type="text" name="nama_ibu" id="nama_ibu" value="<?= $row['nama_ibu']; ?>"></td>
                </tr>
                    <tr>
                    <td><label for="tempat_lahir">Tempat lahir</label></td>
                    <td><input type="text" name="tempat_lahir" id="tempat_lahir" value="<?= $row['tempat_lahir']; ?>"></td>
                </tr>
                    <tr>
                    <td><label for="tanggal_lahir">Tanggal lahir</label></td>
                    <td><input type="date" name="tanggal_lahir" id="tanggal_lahir" value="<?= $row['tanggal_lahir']; ?>"></td>
                </tr>
                    <tr>
                    <td><label for="jenis_kelamin">Jenis kelamin</label></td>
                    <td>
                        <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="L" <?=$row['jenis_kelamin'] == 'L' ? 'checked' :''; ?>>laki-laki
                        <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="P" <?=$row['jenis_kelamin'] == 'P' ? 'checked' :''; ?>>Perempuan
                    </td>
                </tr>
            </table>
            <div class="btn-edit">
                <button type="submit" name="btn-edit">Edit Data</button>
            </div>
        </form>
    </div>
</div>

<?php
if(isset($_POST['btn-edit'])){
    $nama = $_POST['nama'];
    $nis = $_POST['nis'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];
    $nisn =$_POST['nisn'];
    $nama_ayah =$_POST['nama_ayah'];
    $nama_ibu = $_POST['nama_ibu'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir =$_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];

    $query = "UPDATE data_siswa SET
                nama = '$nama',
                nis = '$nis',
                jurusan = '$jurusan',
                alamat = '$alamat',
                nisn ='$nisn',
                nama_ayah ='$nama_ayah',
                nama_ibu ='$nama_ibu',
                tempat_lahir ='$tempat_lahir',
                tanggal_lahir ='$tanggal_lahir',
                jenis_kelamin ='$jenis_kelamin'
                WHERE id = $id";
    
    $result = mysqli_query($conn,$query);

    if($result){
        echo "<script>
                alert('Data siswa berhasil diupdate!');
                document.location.href = 'daftar.php';
            </script>";
    } else {
        echo "<script>
                alert('Data siswa gagal diupdate!');
                document.location.href = 'daftar.php';
            </script>";
    }
}
?>

<script src="script.js"></script>
</body>
</html>