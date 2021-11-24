<?php
include('header.php');
?>
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Arsip Surat</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active">Halaman Utama</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<body>
    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data Surat</strong>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>No Surat</th>
                                        <th>Kategori</th>
                                        <th>Judul</th>
                                        <th>Waktu Pengarsipan</th>
                                        <th>Aksi</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    include "koneksi.php";
                                    $no=1;
                                    $ambildata = mysqli_query($koneksi, "select* from surat");
                                    while ($tampil = mysqli_fetch_array($ambildata)){?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $tampil['no_surat'] ?></td>
                                            <td><?php echo $tampil['kategori'] ?></td>
                                            <td><?php echo $tampil['judul'] ?></td>
                                            <td><?php echo $tampil['waktu'] ?></td>
                                            <td>    <a href="?id=<?php echo $tampil['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Hapus?')"><i class='fa fa-trash'></td>
                                            <td>    <a href="berkas/.<?php echo $tampil['namafile']?>" download class='btn btn-warning btn-sm'><i class='fa fa-download'></td>
                                            <td>    <a href="lihat-data-surat.php?id=<?php echo $tampil['id'] ?>" class='btn btn-primary btn-sm'><i class='fa fa-eye'>
                                            </td>
                                        </tr>
                                    <?php $no++;
                                } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
                <a href="tambah-data-surat.php" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp;Tambah</a>
</body>
<?php
    //Menghapus data
    if(isset($_GET['id'])){
        mysqli_query($koneksi, "delete from surat where id='$_GET[id]'");

        echo "<script>alert('Data yang anda Hapus Sukses');window.location='index.php'</script>";
    }
    ?>
<?php
include('footer.php');
?>