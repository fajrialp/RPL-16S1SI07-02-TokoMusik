<?php
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['password'])){
?>
   <script>alert('Untuk mengakses halaman admin, Anda harus login terlebih dahulu.'); window.location = './index.php'</script>
<?php
}
else{
  if ($_SESSION[status]=='admin'){
    $aksi="mod/data_master/kategori/kategori_aksi.php";
  ?>
    <div class="judul"><h2>Data Kategori</h2></div>
    <div class="tambah"><input type="button" class="button" value="Tambah Data" onclick="kat_tb()"></div>
    <div class="area_main"><!-- class area_main -->											
      <table class="judul" >
        <tr>
          <th width="50px">no.</th>
          <th width="700px">nama kategori</th>
          <th width="80px" align="center">aksi</th>
        </tr>
      </table>
      <div class="data"><!-- class data -->
      <table class="data">
      <?php
      $no=1;

      $kat = mysqli_query($koneksi, "SELECT * FROM kategori ORDER BY id_kat DESC");
      $cek_kat = mysqli_num_rows($kat);

      if ($cek_kat > 0){
        while($y = mysqli_fetch_array($kat)){
	  ?>
          <tr>
            <td width="50px" align="center"><?php echo $no; ?></td>
            <td width="700px"><?php echo $y['nama_kat']; ?></td>
            <td width="80px" align="center">
              <a href="?mod=kat_ub&id=<?php echo $y['id_kat']; ?>"><img src="images/edit.png" title="edit"></a>
            </td>
          </tr>
      <?php
        $no++;
        }
      }
      else{
      ?>
        <tr><td colspan="3"><b><center>DATA KATEGORI BELUM TERSEDIA</center></b></td></tr>
      <?php
      }
      ?>
      </table>
      </div><!-- end class data -->
      <div class="jml_data">Jumlah Data : <?php echo $cek_kat; ?></div>
    </div><!-- end class area_main -->
    <?php
  }
}
?>