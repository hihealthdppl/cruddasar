<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$alamat = $_POST['alamat'];
 
// menginput data ke database
$data = mysqli_query($koneksi,"insert into mahasiswa values(NULL,'$nama','$nim','$alamat')");
 

if ($data) {
    header("location:index.php");
     }
    else{
        echo "Gagal simpan data anggota";
        exit;
    }
 
?>