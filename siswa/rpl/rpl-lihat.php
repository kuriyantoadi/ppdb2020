<?php
session_start();
if ($_SESSION['status']!="siswa") {
    header("location:../../login/rpl/index.php?pesan=belum_login");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>PPDB SMKN 1 Kragilan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../../../css/bootstrap.min.css">

  <script src="../../../js/bootstrap.min.js"></script>
</head>
<body>


<div class="container">

  <div class="container-fluid">
	<div class="row">
		<div class="col-md-3">
		</div>
		<div class="col-md-6">
      <center><h3>Tampil Data Pendaftaran Calon Peserta Didik</h3></center>
      <center><h3>SMK Negeri 1 Kragilan</h3></center>
      <center><h3>Kompetensi Keahlian Rekayasa Perangkat Lunak</h3></center>
		</div>
		<div class="col-md-3">
		</div>
  </div>

  <table class="table table-bordered">
    <?php
      include '../../../koneksi.php';
      $id = isset($_GET['id']) ? abs((int) $_GET['id']) : 0;
      $data = mysqli_query($koneksi, "select

      id,
  		no_p,
  		tgl_pendaftaran,
  		kompetensi_keahlian,
  		asal_sekolah,
  		npsn_sekolah,
  		nisn,
  		nama_siswa,
  		jenis_kelamin,
  		tgl_lahir,
  		tempat_lahir,
  		tahun_lulus,
  		no_hp,
  		nik,
  		no_kk,
  		tgl_kk,
  		kota,
  		kecamatan,
  		kelurahan,
  		kode_pos,
  		alamat,
  		rt,
  		rw,
  		jarak_kesekolah,
  		nama_org_tua,
  		pekerjaan_org_tua,
  		kip,
  		pdf_skhun,
  		pdf_surat_dokter,
  		pdf_kk,
  		pdf_akta,
  		pdf_photo,
  		pdf_swa_kk,
  		pdf_piagam1,
  		pdf_piagam2,
  		pdf_piagam3,
  		un_bind,
  		un_bing,
  		un_mtk,
  		un_ipa,
  		id,
  		kondisi,
  		username,
  		password,
  		enk,
  		bertindik,
  		perokok,
  		psikotropika,
  		bertato,
  		peminum,
      buta_warna,
      laptop,
      kompetensi_keahlian_2

       from f_siswa_rpl where nik='$nik'");
      while ($d = mysqli_fetch_array($data)) {
          include('rpl-tampil.php'); ?>

    </table><br>
    <?php
      } ?>

      </div>
    </div>
</div>
</div>

  </body>
</html>
