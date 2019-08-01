<!-- start: page -->
<div class="row">
    <div class="col-xs-12">
        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                </div>

                <h2 class="panel-title"><b>FORM IMPORT EXCEL</b></h2>
            </header>
            <div class="panel-body">
                <div class="alert alert-info">
                    <strong>
                        Perhatian! sebelum melakukan <i>"import"</i> harap baca prosedur di bawah ini :
                    </strong>
                    <ul>
                        <li>
                            Pertama, jika ingin melakukan import pastikan template yang diimport harus sama dengan template yang sudah di download
                            melalui "tombol" print pada halaman sebelumnya.
                        </li>
                        <li>
                            Kedua, Jika belum mendownload template pada halaman sebelumnya, anda bisa bisa mendownloadnya pada halaman ini.
                        </li>
                        <li>
                            Ketiga, jika ada kendala melakukan import silahkan hubungi bagian IT.
                        </li>
                    </ul>
                </div>
                <section class="panel">
                    <hr>
                    <div class="panel-body">
                        Template Excel : <a style="margin-left: 1%;" href="<?php echo base_url("excel/Master Barang.xlsx"); ?>" class="mb-xs mt-xs mr-xs btn btn-sm btn-default">
                            <i class="fa fa-print"></i>&nbsp;
                            Print
                        </a><b>.xlsx</b>
                        <!-- Buat sebuah tag form dan arahkan action nya ke controller ini lagi -->
                        <form method="post" action="<?php echo base_url("masterbarang/form"); ?>" enctype="multipart/form-data">
                            <!-- 
                                -- Buat sebuah input type file
                                -- class pull-left berfungsi 	agar file input berada di sebelah kiri
                                -->
                            <input type="file" name="file" class="mb-xs mt-xs mr-xs btn btn-sm btn-default">

                            <!--
                                -- BUat sebuah tombol submit untuk melakukan preview terlebih dahulu data yang akan di import
                                -->
                            <br />
                            <input type="submit" name="preview" value="Tampil" class="mb-xs mt-xs mr-xs btn btn-sm btn-success">
                            <a href="<?php echo site_url('masterbarang/index'); ?>" class="mb-xs mt-xs mr-xs btn btn-sm btn-danger">Kembali</a>

                        </form>
                        <?php
                        if (isset($_POST['preview'])) { // Jika user menekan tombol Preview pada form 
                            if (isset($upload_error)) { // Jika proses upload gagal
                                echo "<div style='color: red;'>" . $upload_error . "</div>"; // Muncul pesan error upload
                                die; // stop skrip
                            }

                            error_reporting(0);
                            echo "<br />";
                            // Buat sebuah tag form untuk proses import data ke database
                            echo "<form method='post' action='" . base_url("masterbarang/import") . "'>";

                            // Buat sebuah div untuk alert validasi kosong
                            echo "<div style='color: red;' id='kosong'>
                                Semua data belum diisi, Ada <span id='jumlah_kosong'></span> data yang belum diisi.
                                </div>";
                            echo "*Note : ";
                            echo "<p>";
                            echo "- Field <b style='color: #C0C0C0;'>Abu Abu / Putih</b> data sudah di isi";
                            echo "<br/>";
                            echo "- Field <b style='color: red;'>Merah</b> data belum di isi";
                            echo "<p>";
                            echo "<button type='submit' name='import' class='mb-xs mt-xs mr-xs btn btn-sm btn-primary'>Import</button>";
                            echo "<table border='1' cellpadding='8'  class='table table-bordered table-striped mb-none' id='datatable-default'>
                                <tr>
                                    <th colspan='10' style='text-align: center;'>Preview Data</th>
                                </tr>
                                <tr>
                                    <th>Kode Barang</th>
                                    <th>Nama Barang</th>
                                    <th>Nama Kategori</th>
                                    <th>Kondisi Barang</th>
                                    <th>Nomor Serial</th>
                                    <th>Nomor Produk</th>
                                    <th>Keterangan Barang</th>
                                    <th>Batas</th>
                                    <th>Nama Satuan</th>
                                    <th>Photo</th>
                                </tr>";

                            $numrow = 1;
                            $kosong = 0;

                            // Lakukan perulangan dari data yang ada di excel
                            // $sheet adalah variabel yang dikirim dari controller
                            foreach ($sheet as $row) {
                                // Ambil data pada excel sesuai Kolom
                                $kode_barang = $row['A']; // Insert data nis dari kolom A di excel
                                $nama_barang = $row['B']; // Insert data nama dari kolom B di excel
                                $nama_kategori = $row['C']; // Insert data jenis kelamin dari kolom C di excel
                                $kondisi_barang = $row['D']; // Insert data alamat dari kolom D di excel
                                $nomor_serial = $row['E']; // Insert data nis dari kolom A di excel
                                $nomor_produk = $row['F']; // Insert data nis dari kolom A di excel
                                $keterangan_barang = $row['G']; // Insert data nis dari kolom A di excel
                                $batas = $row['H']; // Insert data nis dari kolom A di excel
                                $nama_satuan = $row['I']; // Insert data nis dari kolom A di excel
                                $photo = $row['J']; // Insert data nis dari kolom A di excel
                                if (empty($kode_barang) && empty($nama_barang) && empty($nama_kategori) && empty($kondisi_barang) && empty($nomor_serial) && empty($nomor_produk) && empty($keterangan_barang) && empty($batas) && empty($nama_satuan) && empty($photo))
                                    continue; // Lewat data pada baris ini (masuk ke looping selanjutnya / baris selanjutnya)

                                // Cek $numrow apakah lebih dari 1
                                // Artinya karena baris pertama adalah nama-nama kolom
                                // Jadi dilewat saja, tidak usah diimport
                                if ($numrow > 1) {
                                    // Validasi apakah semua data telah diisi
                                    $kode_barang_td = (!empty($kode_barang)) ? "" : " style='background: #E07171;'"; // Jika Kode Barang kosong, beri warna merah
                                    $nama_barang_td = (!empty($nama_barang)) ? "" : " style='background: #E07171;'"; // Jika Nama Barang kosong, beri warna merah
                                    $nama_kategori_td = (!empty($nama_kategori)) ? "" : " style='background: #E07171;'"; // Insert data Nama Kategori dari kolom C di excel
                                    $kondisi_barang_td = (!empty($kondisi_barang)) ? "" : " style='background: #E07171;'"; // Jika Kondisi Barang kosong, beri warna merah
                                    $nomor_serial_td = (!empty($nomor_serial)) ? "" : " style='background: #E07171;'"; // Jika Nomor Serial kosong, beri warna merah
                                    $nomor_produk_td = (!empty($nomor_produk)) ? "" : " style='background: #E07171;'"; // Jika Nomor Produk kosong, beri warna merah
                                    $keterangan_barang_td = (!empty($keterangan_barang)) ? "" : " style='background: #E07171;'"; // Jika Keterangan Barang kosong, beri warna merah
                                    $batas_td = (!empty($batas)) ? "" : " style='background: #E07171;'"; // Jika Batas kosong, beri warna merah
                                    $nama_satuan_td = (!empty($nama_satuan)) ? "" : " style='background: #E07171;'"; // Jika Nama Satuan kosong, beri warna merah
                                    $photo_td = (!empty($photo)) ? "" : " style='background: #E07171;'"; // Jika Photo kosong, beri warna merah

                                    // Jika salah satu data ada yang kosong
                                    if (empty($kode_barang) or empty($nama_barang) or empty($nama_kategori) or empty($kondisi_barang) or empty($nomor_serial) or empty($nomor_produk) or empty($keterangan_barang) or empty($batas) or empty($nama_satuan) or empty($photo)) {
                                        $kosong++; // Tambah 1 variabel $kosong
                                    }

                                    echo "<tr>";
                                    echo "<td" . $kode_barang_td . ">" . $kode_barang . "</td>";
                                    echo "<td" . $nama_barang_td . ">" . $nama_barang . "</td>";
                                    echo "<td" . $nama_kategori_td . ">" . $nama_kategori . "</td>";
                                    echo "<td" . $kondisi_barang_td . ">" . $kondisi_barang . "</td>";
                                    echo "<td" . $nomor_serial_td . ">" . $nomor_serial . "</td>";
                                    echo "<td" . $nomor_produk_td . ">" . $nomor_produk . "</td>";
                                    echo "<td" . $keterangan_barang_td . ">" . $keterangan_barang . "</td>";
                                    echo "<td" . $batas_td . ">" . $batas . "</td>";
                                    echo "<td" . $nama_satuan_td . ">" . $nama_satuan . "</td>";
                                    echo "<td" . $photo_td . ">" . $photo . "</td>";
                                    echo "</tr>";
                                }

                                $numrow++; // Tambah 1 setiap kali looping
                            }

                            echo "</table>";

                            // Cek apakah variabel kosong lebih dari 0
                            // Jika lebih dari 0, berarti ada data yang masih kosong
                            if ($kosong > 0) {
                                ?>
                                <script>
                                    $(document).ready(function() {
                                        // Ubah isi dari tag span dengan id jumlah_kosong dengan isi dari variabel kosong
                                        $("#jumlah_kosong").html('<?php echo $kosong; ?>');

                                        $("#kosong").show(); // Munculkan alert validasi kosong
                                    });
                                </script>
                            <?php
                            }
                            echo "</form>";
                        }
                        ?>
                    </div>
                </section>
            </div>
    </div>
</div>