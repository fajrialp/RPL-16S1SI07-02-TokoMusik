<?php
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['password'])){
?>
   <script>alert('Untuk mengakses halaman admin, Anda harus login terlebih dahulu.'); window.location = './index.php'</script>
<?php
}
else{
  if ($_SESSION['status']=='admin'){
    include "../../../library/koneksi.php";

    $mod  = $_GET['mod'];
    $aksi = $_GET['aksi'];
	
    //tambah data
    if($mod=='merk' AND $aksi=='tb_dt'){
      mysqli_query($koneksi, "INSERT INTO merk(nama_merk) VALUES ('$_POST[nama_merk]')");
      header('location:../../../mediaweb.php?mod='.$mod);
    }
    //ubah data
    elseif($mod=='merk' AND $aksi=='ubh_dt'){
      mysqli_query($koneksi, "UPDATE merk SET nama_merk = '$_POST[nama_merk]' WHERE id_merk = '$_POST[id_merk]'");
      header('location:../../../mediaweb.php?mod='.$mod);
    }
  }
}
?>
