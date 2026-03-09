<?php
    include "koneksi.php";
    $query = "SELECT * FROM data_siswa";
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Sederhana</title>
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
                <li><a href="index.php">Dasboard</a></li>
            </ul>
    
            <ul>
                <li class="active"><a href="daftar.php">Daftar Siswa</a></li>
            </ul>
    
            <ul>
                <li><a href="">Setting</a></li>
            </ul>
        </div>
    </div>
<section class="content">
    <div class="container">
        <div class="header">
            <h3>Daftar Siswa</h3>
        </div>
        <div class="content-tambah">
            <a href="tambah.php">Tambah</a>
        </div>
        <table class="content-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIS</th>
                    <th>Jurusan</th>
                    <th>Alamat</th>
                    <th>NISN</th>
                    <th>Nama ayah</th>
                    <th>Nama ibu</th>
                    <th>Tempat lahir</th>
                    <th>Tanggal lahir</th>
                    <th>Jenis kelamin</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php while($row = mysqli_fetch_assoc($result)) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $row["nama"]; ?></td>
                    <td><?= $row['nis']; ?></td>
                    <td><?= $row['jurusan']; ?></td>
                    <td><?= $row['alamat']; ?></td>
                    <td><?= $row['nisn'];?></td>
                    <td><?=$row['nama_ayah'];?></td>
                    <td><?=$row['nama_ibu'];?></td>
                    <td><?=$row['tempat_lahir'];?></td>
                    <td><?=$row['tanggal_lahir'];?></td>
                    <td><?=$row['jenis_kelamin'];?></td>
                    <td class="content-setting">
                        <a href="edit.php?id=<?= $row['id']; ?>" class="edit">Edit</a>
                        <br><br>
                        <a href="hapus.php?id=<?= $row['id']; ?>" class="delete">Delete</a>
                    </td>
                </tr>
                <?php $i++;?>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</section>
</body>
</html>