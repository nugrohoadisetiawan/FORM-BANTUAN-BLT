<?php
include("koneksi.php");
if(isset($_POST['kirim_data'])){
    $nama = $_POST['nama'];
    $jenis_barang = $_POST['jenis_barang'];

    $sql ="INSERT INTO tambah(nama,jenis_barang) VALUES ('$nama','$jenis_barang')";
    $query = mysqli_query($koneksi,$sql);
    }else{
    ("akses dilarang");
}
?>