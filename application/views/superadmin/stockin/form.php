<body>
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
                            Template Excel : <a style="margin-left: 1%;" href="<?php echo base_url("excel/Stockin.xlsx"); ?>" class="mb-xs mt-xs mr-xs btn btn-sm btn-default">
                                <i class="fa fa-print"></i>&nbsp;
                                Export
                            </a><b>.xlsx</b>
                            <!-- Buat sebuah tag form dan arahkan action nya ke controller ini lagi -->
                            <form method="post" action="<?php echo base_url("stockin/form"); ?>" enctype="multipart/form-data">
                                <!-- 
                                -- Buat sebuah input type file
                                -- class pull-left berfungsi 	agar file input berada di sebelah kiri
                                -->
                                <input type="file" name="file" class="mb-xs mt-xs mr-xs btn btn-sm btn-default">

                                <!--
                                -- BUat sebuah tombol submit untuk melakukan preview terlebih dahulu data yang akan di import
                                -->
                                <br />
                                <input type="submit" name="preview" value="Preview" class="mb-xs mt-xs mr-xs btn btn-sm btn-success">
                                <a href="<?php echo site_url('stockin/index'); ?>" class="mb-xs mt-xs mr-xs btn btn-sm btn-danger">Cancel</a>

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
                                echo "<form method='post' action='" . base_url("stockin/import") . "'>";
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
                                <tr>
                                    <th colspan='10' align='center'>Preview Data</th>
                                </tr>
                                <tr>
                                    <th>Tanggal Barang</th>
                                    <th>Nama Barang</th>
                                    <th>Jumlah Barang</th>
                                    <th>Unit</th>
                                    <th>Lokasi</th>
                                    <th>Keterangan</th>
                                    <th>Lampiran</th>
                                    <th>User Session</th>
                                </tr>";

                                $numrow = 1;
                                $kosong = 0;
                                // Lakukan perulangan dari data yang ada di excel
                                // $sheet adalah variabel yang dikirim dari controller
                                foreach ($sheet as $row) {
                                    // Ambil data pada excel sesuai Kolom
                                    $tanggal_masuk = $row['A']; // Insert data nis dari kolom A di excel
                                    $nama_barang = $row['B']; // Insert data nama dari kolom B di excel
                                    $jumlah_masuk = $row['C']; // Insert data jenis kelamin dari kolom C di excel
                                    $unit = $row['D']; // Insert data alamat dari kolom D di excel
                                    $lokasi = $row['E']; // Insert data nis dari kolom A di excel
                                    $keterangan = $row['F']; // Insert data nis dari kolom A di excel
                                    $lampiran = $row['G']; // Insert data nis dari kolom A di excel
                                    $user_session = $row['H']; // Insert data nis dari kolom A di excel
                                    if (empty($tanggal_masuk) && empty($nama_barang) && empty($jumlah_masuk) && empty($unit) && empty($lokasi) && empty($keterangan) && empty($lampiran) && empty($user_sesion))
                                        continue; // Lewat data pada baris ini (masuk ke looping selanjutnya / baris selanjutnya)
                                    // Cek $numrow apakah lebih dari 1
                                    // Artinya karena baris pertama adalah nama-nama kolom
                                    // Jadi dilewat saja, tidak usah diimport
                                    if ($numrow > 1) {
                                        // Validasi apakah semua data telah diisi
                                        $tanggal_masuk_td = (!empty($tanggal_masuk)) ? "" : " style='background: #E07171;'"; // Jika Kode Barang kosong, beri warna merah
                                        $nama_barang_td = (!empty($nama_barang)) ? "" : " style='background: #E07171;'"; // Jika Nama Barang kosong, beri warna merah
                                        $jumlah_masuk_td = (!empty($jumlah_masuk)) ? "" : " style='background: #E07171;'"; // Insert data Nama Kategori dari kolom C di excel
                                        $unit_td = (!empty($unit)) ? "" : " style='background: #E07171;'"; // Jika Kondisi Barang kosong, beri warna merah
                                        $lokasi_td = (!empty($lokasi)) ? "" : " style='background: #E07171;'"; // Jika Nomor Serial kosong, beri warna merah
                                        $keterangan_td = (!empty($keterangan)) ? "" : " style='background: #E07171;'"; // Jika Nomor Produk kosong, beri warna merah
                                        $lampiran_td = (!empty($lampiran)) ? "" : " style='background: #E07171;'"; // Jika Keterangan Barang kosong, beri warna merah
                                        $user_session_td = (!empty($user_session)) ? "" : " style='background: #E07171;'"; // Jika Batas kosong, beri warna merah
                                        // Jika salah satu data ada yang kosong
                                        if (empty($tanggal_masuk) or empty($nama_barang) or empty($jumlah_masuk) or empty($unit) or empty($lokasi) or empty($keterangan) or empty($lampiran) or empty($user_session)) {
                                            $kosong++; // Tambah 1 variabel $kosong
                                        }
                                        echo "<tr>";
                                        echo "<td" . $tanggal_masuk_td . ">" . $tanggal_masuk . "</td>";
                                        echo "<td" . $nama_barang_td . ">" . $nama_barang . "</td>";
                                        echo "<td" . $jumlah_masuk_td . ">" . $jumlah_masuk . "</td>";
                                        echo "<td" . $unit_td . ">" . $unit . "</td>";
                                        echo "<td" . $lokasi_td . ">" . $lokasi . "</td>";
                                        echo "<td" . $keterangan_td . ">" . $keterangan . "</td>";
                                        echo "<td" . $lampiran_td . ">" . $lampiran . "</td>";
                                        echo "<td" . $user_session_td . ">" . $user_session . "</td>";
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