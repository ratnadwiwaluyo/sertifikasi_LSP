<?php
include('header.php');
?>

<body>
    <h3>ARSIP SURAT</h3>

    <table border="1">
        <tr>
            <th>No</th>
            <th>No Surat</th>
            <th>Kategori</th>
            <th>Judul</th>
            <th>Waktu Pegarsipan</th>
            <th colspan="3">Aksi</th>
        </tr>

        <?php
        //Menampilkan data pada tabel
        include "koneksi.php";
        $no=1;
        $ambildata = mysqli_query($koneksi, "select* from surat");
        while ($tampil = mysqli_fetch_array($ambildata)){
            echo "
            <tr>
                <td>$no</td>
                <td>$tampil[no_surat]</td>
                <td>$tampil[kategori]</td>
                <td>$tampil[judul]</td>
                <td>$tampil[waktu]</td>
                <td><a href='?id=$tampil[id]'>Hapus</td>
                <td><a href='berkas/contoh.pdf' download>Unduh</td>
                <td><a href='lihat-data-surat.php?id=$tampil[id]'>Lihat</td>
            </tr>
            ";
            $no++;
        }
        ?>

    </table>
    <a href="tambah-data-surat.php">Arsipkan Surat</a>

    <?php
    //Menghapus data
    if(isset($_GET['id'])){
        mysqli_query($koneksi, "delete from surat where id='$_GET[id]'");

        echo "Data Telah Terhapus";
        echo "<meta http-equiv=refresh content=2; URL=data-surat.php'>";

}


    ?>
    <?php
include('footer.php');
?>