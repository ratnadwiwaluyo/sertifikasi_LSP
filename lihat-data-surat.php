<?php
include('header.php');
?>
<?php
include "koneksi.php";
$sql=mysqli_query($koneksi, "select* from surat where id='$_GET[id]'");
$data=mysqli_fetch_array($sql);
?>
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Lihat Data Surat</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Menu</a></li>
                    <li><a href="/arsip_surat.php">Arsip Surat</a></li>
                    <li class="active">Lihat Data Surat</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Lihat</strong> Data Surat
        </div>
        <div class="card-body card-block">
            <body>

            <tr>
                <td>Nomor : <?php echo $data['no_surat'];?> <br></td>
                <td>Kategori : <?php echo $data['kategori'];?> <br></td>
                <td>Judul : <?php echo $data['judul'];?> <br></td>
                <td>Waktu : <?php echo $data['waktu'];?> <br></td>
                
            </tr>
                <!-- <embed type="application/pdf" src="berkas/contoh.pdf" width="600" height="400"></embed> -->
                <embed type="application/pdf" src="berkas/<?php echo $data['namafile'];?>" width="1200"
                    height="400"></embed>
        </div>
    </div>
</div>
            </div>
<a href="index.php" class="btn btn-warning"><i class="fa fa-times"></i>&nbsp;Kembali</a>
<a href="berkas/<?php echo $data['namafile'];?>" download class="btn btn-success"><i class="fa fa-download"></i>&nbsp;Unduh</a>
<a href="edit-data-surat.php?id=<?php echo $data['id']; ?>" class="btn btn-primary"><i class="fa fa-pencil"></i>&nbsp;Ubah</a>


<?php
include('footer.php');
?>