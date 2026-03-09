<?php
include 'koneksi.php';

if (isset($_POST['btn-edit'])) {

    $nama     = $_POST['nama'];
    $nis      = $_POST['nis'];
    $jurusan  = $_POST['jurusan'];
    $alamat   = $_POST['alamat'];
    $nisn =$_POST['nisn'];
    $nama_ayah=$_POST['nama_ayah'];
    $nama_ibu = $_POST['nama_ibu'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir =$_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    //DATABASE
    $query = "INSERT INTO data_siswa (nama, nis, jurusan, alamat,nisn,nama_ayah, nama_ibu, tempat_lahir, tanggal_lahir, jenis_kelamin)
              VALUES ('$nama', '$nis', '$jurusan', '$alamat','$nisn','$nama_ayah','$nama_ibu','$tempat_lahir','$tanggal_lahir','$jenis_kelamin')";

    $result_db = mysqli_query($conn, $query);
    // JSON
    $data = [
        "nama"    => $nama,
        "nis"     => $nis,
        "jurusan" => $jurusan,
        "alamat"  => $alamat,
        "nisn"=>$nisn,
        "nama ayah" =>$nama_ayah,
        "nama ibu" =>$nama_ibu,
        "tempat lahir" =>$tempat_lahir,
        "tanggal lahir" =>$tanggal_lahir,
        "jenis kelamin" =>$jenis_kelamin,
    ];

    $file = 'main.json';

    $isi = [];
    if (file_exists($file)) {
        $isi = json_decode(file_get_contents($file), true);
    }

    $isi[] = $data;
    $result_json = file_put_contents(
        $file,
        json_encode($isi, JSON_PRETTY_PRINT)
    );

    // POPUP
    if ($result_db && $result_json) {
        echo "
        <script>
            alert('Data berhasil di tambahkan');
            window.location.href = 'daftar.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Gagal menyimpan data!');
            window.location.href = 'tambah.php';
        </script>
        ";
    }
}
