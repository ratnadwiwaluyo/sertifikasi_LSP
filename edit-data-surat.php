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
                <h1>Ubah Data Surat</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Menu</a></li>
                    <li><a href="/arsip_surat.php">Arsip Surat</a></li>
                    <li class="active">Ubah Data Surat</li>
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
                        <strong>Tambah</strong> Data Surat
                    </div>
                    <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nomor
                                        Surat</label>
                                </div>
                                <div class="col-12 col-md-9"><input type="text" value="<?php echo $data['no_surat']; ?>"
                                        name="no_surat" placeholder="" class="form-control"><small
                                        class="form-text text-muted">Masukan
                                        nomor
                                        surat</small></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input"
                                        class=" form-control-label">Kategori</label>
                                </div>
                                <div class="col-12 col-md-9"><input type="text" value="<?php echo $data['kategori']; ?>"
                                        name="kategori" placeholder="" class="form-control"><small
                                        class="form-text text-muted">Masukan kategori
                                        surat</small>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input"
                                        class=" form-control-label">Judul</label>
                                </div>
                                <div class="col-12 col-md-9"><input type="text" value="<?php echo $data['judul']; ?>"
                                       id="judul" name="judul" placeholder="" class="form-control"><small
                                        class="form-text text-muted">Masukan judul
                                        surat</small></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input"
                                        class=" form-control-label">Waktu</label>
                                </div>
                                <div class="col-12 col-md-9"><input type="text" value="<?php echo $data['waktu']; ?>"
                                        name="waktu" placeholder="" class="form-control"><small
                                        class="form-text text-muted">Masukan waktu</small>
                                </div>
                            </div>
                            <!-- <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input"
                                        class=" form-control-label">File</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <a href="index.php" class="btn btn-danger btn-sm"><i
                                            class="fa fa-file -text"></i>&nbsp;Ubah PDF</a>
                                </div>
                            </div> -->
                    </div>
                </div>
                <a href="index.php" class="btn btn-warning"><i class="fa fa-times"></i>&nbsp;Kembali</a>
                <td><input type="submit" value="Update" name="proses" class="btn btn-success"></td>
                </form>
                <?php
                include("koneksi.php");
                   if(isset($_POST['proses'])){
                    mysqli_query($koneksi, "update surat set
                    no_surat = '$_POST[no_surat]',
                    kategori = '$_POST[kategori]',
                    judul = '$_POST[judul]',
                    waktu = '$_POST[waktu]'
                    where id = '$_GET[id]'
                    ");

                    
                echo "<script>alert('Data yang anda Sukses diubah');window.location='index.php'</script>";
                   }
                ?>
              
            </div>
        </div>
    </div>
</div>

