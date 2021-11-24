<?php
include('header.php');
?>

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Tambah Data Surat</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Menu</a></li>
                    <li><a href="/arsip_surat.php">Arsip Surat</a></li>
                    <li class="active">Tambah Data Surat</li>
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
                                <div class="col-12 col-md-9"><input type="text" name="no_surat" placeholder=""
                                        class="form-control"><small class="form-text text-muted">Masukan nomor
                                        surat</small></div>
                            </div>
                            <!-- <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input"
                                        class=" form-control-label">Kategori</label>
                                </div>
                                <div class="col-12 col-md-9"><input type="text" name="kategori" placeholder=""
                                        class="form-control"><small class="form-text text-muted">Masukan kategori
                                        surat</small>
                                </div>
                            </div> -->
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input"
                                        class=" form-control-label">Kategori</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <select name="kategori" class="form-control">
                                        <option value="0">--Pilih Kategori--</option>
                                        <option value="Undangan">Undangan</option>
                                        <option value="Pengumuman">Pengumuman</option>
                                        <option value="Nota Dinas">Nota Dinas</option>
                                        <option value="Pemberitahuan">Pemberitahuan</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input"
                                        class=" form-control-label">Judul</label>
                                </div>
                                <div class="col-12 col-md-9"><input type="text" name="judul" placeholder=""
                                        class="form-control"><small class="form-text text-muted">Masukan judul
                                        surat</small></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input"
                                        class=" form-control-label">Waktu</label>
                                </div>
                                <div class="col-12 col-md-9"><input type="text"
                                        value="<?php echo date("Y-m-d H:i:s"); ?>" name="waktu" placeholder=""
                                        class="form-control"><small class="form-text text-muted">Masukan waktu</small>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input"
                                        class=" form-control-label">File</label>
                                </div>
                                <div class="col-12 col-md-9"><input type="file" name="file" placeholder=""
                                        class="form-control"><small class="form-text text-muted">Masukan file surat
                                        dengan format
                                        PDF</small></div>
                            </div>
                    </div>
                </div>
                <a href="index.php" class="btn btn-warning"><i class="fa fa-times"></i>&nbsp;Kembali</a>
                <td><input type="submit" redirect="index.php" value="Simpan" name="proses" class="btn btn-success"></td>
                </form>

                <?php
    include "koneksi.php";
    

        if(isset($_POST['proses'])){    
            $ekstensi_diperbolehkan	= array('pdf');
            $nama = $_FILES['file']['name']; 
            $x = explode('.', $nama);
            $ekstensi = strtolower(end($x));
            $ukuran	= $_FILES['file']['size'];
            $file_tmp = $_FILES['file']['tmp_name' ];	
            $no_surat    = $_POST['no_surat'];

    $cek    = mysqli_num_rows(mysqli_query($koneksi, "SELECT no_surat FROM surat WHERE no_surat='$_POST[no_surat]'"));
    if ($cek > 0){
        echo "<script>window.alert('Nomor surat yang anda masukan sudah ada')
        window.location='index.php'</script>";
        }else {            
            if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
                if($ukuran < 1044070){			
                    move_uploaded_file($file_tmp, 'berkas/'.$nama);
                    mysqli_query($koneksi, "insert into surat set
                    no_surat = '$_POST[no_surat]',
                    kategori = '$_POST[kategori]',
                    judul = '$_POST[judul]',
                    waktu = '$_POST[waktu]',
                    namafile = '$nama'");
                }else{
                    echo 'UKURAN FILE TERLALU BESAR';
                }
            }else{
                echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
            }
            // echo "Data Berhasil Disimpan";
            echo "<script>alert('Berhasil Membah Data');window.location='index.php'</script";
            // echo "<a href=\"javascript:history.go(-1)\">GO BACK</a>";
        }
    }
    ?>
                <?php
include('footer.php');
?>