 <aside id="sidebar-left" class="sidebar-left">

     <div class="sidebar-header">
         <div class="sidebar-title">
             <span style="color: white">Navigation</span>
         </div>
         <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
             <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
         </div>
     </div>

     <div class="nano">
         <div class="nano-content">
             <nav id="menu" class="nav-main" role="navigation">
                 <ul class="nav nav-main">
                     <li class="nav-active">
                         <a href="<?= base_url('superadmin'); ?>">
                             <i class="fa fa-home" aria-hidden="true"></i>
                             <span>Dashboard</span>
                         </a>
                     </li>
                     <li>
                         <a href="<?= site_url('masterbarang/index'); ?>">
                             <i class="fa fa-cube" aria-hidden="true"></i>
                             <span>Master Barang</span>
                         </a>
                     </li>
                     <li class="nav-parent">
                         <a>
                             <i class="fa fa-cubes" aria-hidden="true"></i>
                             <span>Stock</span>
                         </a>
                         <ul class="nav nav-children">
                             <li>
                                 <a href="<?php echo base_url('stockin') ?>">
                                     Stock In
                                 </a>
                             </li>
                             <li>
                                 <a href="<?php echo base_url('stockout') ?>">
                                     Stock Out
                                 </a>
                             </li>
                         </ul>
                     </li>
                 </ul>
             </nav>

             <div class="sidebar-header">
                 <div class="sidebar-title">
                     <span style="color: white">User</span>
                 </div>
             </div>
             <nav id="menu" class="nav-main" role="navigation">
                 <ul class="nav nav-main">
                     <li>
                         <a href="<?= base_url('user') ?>">
                             <i class="fa fa-child" aria-hidden="true"></i>
                             <span>Managament User</span>
                         </a>
                     </li>
                 </ul>
             </nav>
         </div>
     </div>
 </aside>
 <section class="body">

     <!-- start: header -->
     <header class="header">
         <div class="logo-container">
             <a href="../" class="logo">
                 <img src="<?= base_url('./image/Logo.png') ?>" height="35" alt="IT - Super Admin - ISJM" />
             </a>
             <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
                 <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
             </div>
         </div>

         <!-- start: search & user box -->
         <div class="header-right" style="padding-right: 2%;">
             <span class="separator"></span>

             <div id="userbox" class="userbox" style="margin-right: -2%;">
                 <a href="#" data-toggle="dropdown">
                     <figure class="profile-picture">
                         <img src="<?= base_url('./image/') . $user['image']; ?>" class="img-circle" />
                     </figure>
                     <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
                         <span class="name"><?= $user['name'] ?></span>
                         <span class="role"></span>
                     </div>

                     <i class="fa custom-caret"></i>
                 </a>

                 <div class="dropdown-menu">
                     <ul class="list-unstyled">
                         <li class="divider"></li>
                         <li>
                             <a role="menuitem" tabindex="-1" href="<?= site_url('superadmin/profile'); ?>"><i class="fa fa-user"></i> My Profile</a>
                         </li>
                         <li>
                             <a role="menuitem" tabindex="-1" href="<?= base_url('auth/logout'); ?>"><i class="fa fa-power-off"></i> logout</a>
                         </li>
                     </ul>
                 </div>
             </div>
         </div>
         <!-- end: search & user box -->
     </header>
     <!-- end: header -->

     <div class="inner-wrapper">

         <section role="main" class="content-body">
             <header class="page-header">
                 <h2>Dashboard</h2>

                 <div class="right-wrapper pull-right" style="padding-right: 3%;">
                     <ol class="breadcrumbs">
                         <li>
                             <a href="<?php echo site_url('superadmin') ?>">
                                 <i class="fa fa-home"></i>
                             </a>
                         </li>
                         <li><span>Dashboard</span></li>
                         <li><span>Stock</span></li>
                     </ol>
                 </div>
             </header>
             <!-- start: page -->
             <div class="row">
                 <div class="col-xs-12">
                     <section class="panel">
                         <header class="panel-heading">
                             <div class="panel-actions">
                                 <a href="#" class="fa fa-caret-down"></a>
                             </div>

                             <h2 class="panel-title"><b>DATATABLE STOCK</b></h2>
                         </header>
                         <div class="panel-body">
                             <table class="table table-bordered table-striped mb-none" id="datatable-default">
                                 <div class="row show-grid">
                                     <div class="col-md-8">
                                         <h4 style="margin-top: 1%;">
                                             <?php
                                                $totalharga1 = 0;
                                                foreach ($stock as $all) {
                                                    ?>
                                                 <?php
                                                    $totalharga1 += $all->totalharga;
                                                    $stockout = $all->stockout;
                                                }
                                                // if ($stockout == NULL) {
                                                //     $a = $totalharga1;
                                                //     // echo $a;
                                                //     $b = $all->harga * $all->allstock;
                                                //     // echo $b;
                                                //     $c = $a + $b;
                                                //     echo "NILAI TOTAL HARGA : " . number_format($c, 2, ',', '.');
                                                // } else {
                                                //     if ($all->stockout == NULL) {

                                                //         $a = $totalharga1;
                                                //         // echo $a;
                                                //         $b = $all->harga * $all->allstock;
                                                //         // echo $b;
                                                //         $c = $a + $b;
                                                //         echo "NILAI TOTAL HARGA : " . number_format($c, 2, ',', '.');
                                                //     } else {
                                                //         // $a = $totalharga1;
                                                //         // // echo $a;
                                                //         // $b = $all->harga * $all->allstock;
                                                //         // // echo $b;
                                                //         // $c = $a + $b;
                                                        echo "NILAI TOTAL HARGA : " . number_format($totalharga1, 2, ',', '.');
                                                //     }
                                                // }
                                                ?>
                                         </h4>
                                     </div>

                                     <div class="col-md-4">

                                     </div>
                                 </div>
                                 <br />
                                 <thead>
                                     <tr>
                                         <th>No.</th>
                                         <th>Kode Barang</th>
                                         <th>Kategori Barang</th>
                                         <th>Nama Barang</th>
                                         <th>Satuan</th>
                                         <th>Lokasi</th>
                                         <th>History Stock Masuk</th>
                                         <th>History Stock Keluar</th>
                                         <th>Current Stock</th>
                                         <th>Harga</th>
                                         <th>Total Harga</th>
                                         <th>Status</th>
                                     </tr>
                                 </thead>

                                 <tbody>
                                     <?php
                                        $no = 1;
                                        foreach ($stock as $all) {
                                            ?>
                                         <tr class="gradeX">
                                             <td><?= $no++; ?></td>
                                             <td><?= $all->kode_barang ?></td>
                                             <td><?= $all->nama_kategori ?></td>
                                             <td><?= $all->nama_barang ?></td>
                                             <td><?= $all->nama_satuan ?></td>
                                             <td><?= $all->lokasi ?></td>
                                             <td><?= $all->stockin ?></td>
                                             <td>
                                                 <?php
                                                    if ($all->stockout != null) {
                                                        echo  $all->stockout;
                                                    } else {
                                                        ?>
                                                     0
                                                 <?php } ?>
                                             </td>
                                             <td>
                                                 <?php
                                                    if ($all->allstock == 0) {
                                                        echo  $all->stockin;
                                                    } else {
                                                        ?>
                                                     <?= $all->allstock ?>
                                                 <?php } ?>
                                             </td>
                                             <td><?= "Rp." . number_format($all->harga, 2, ',', '.')  ?></td>
                                             <td>
                                                 <?php
                                                    if ($all->allstock == NULL) {
                                                        $a = $all->harga * $all->stockin;
                                                        echo "Rp." . number_format($a, 2, ',', '.');
                                                    } else {
                                                        echo "Rp." . number_format($all->totalharga, 2, ',', '.');
                                                    }
                                                    ?>
                                             </td>
                                             <td align="center">
                                                 <?php

                                                    $x = $this->db->query("SELECT * FROM mbarang WHERE nama_barang='$all->nama_barang' ")->result();
                                                    foreach ($x as $c) { }

                                                    if ($all->allstock == 0) {
                                                        //echo "NULL";
                                                        if ($all->stockin >= $c->batas) {
                                                            //echo $c->batas;
                                                            echo "<button class='mb-xs mt-xs mr-xs btn btn-xs btn-success readonly'> Stock Tersedia </button>";
                                                        } elseif ($all->stockin <= $c->batas) {
                                                            //echo $c->batas;
                                                            echo "<button class='mb-xs mt-xs mr-xs btn btn-xs btn-warning readonly'> Restock </button>";
                                                        } elseif ($all->stockin < 1) {
                                                            echo "<button class='mb-xs mt-xs mr-xs btn btn-xs btn-danger readonly'> Stock Habis </button>";
                                                        }
                                                    } else {
                                                        //echo $all->allstock;

                                                        if ($all->allstock < 1) {
                                                            echo "<button class='mb-xs mt-xs mr-xs btn btn-xs btn-success readonly'> Stock Tersedia </button>";
                                                        } elseif ($all->allstock <= $c->batas) {
                                                            echo "<button class='mb-xs mt-xs mr-xs btn btn-xs btn-warning readonly'> Restock </button>";
                                                        } else {
                                                            echo "<button class='mb-xs mt-xs mr-xs btn btn-xs btn-danger readonly'> Stock Habis </button>";
                                                        }
                                                    }

                                                    ?>
                                             </td>
                                         </tr>
                                     <?php } ?>
                                 </tbody>
                             </table>
                         </div>
                     </section>
                 </div>
             </div>

             <div class="row">
                 <div class="col-xs-12">
                     <!--  <section class="panel">
                        <header class="panel-heading">
                            <div class="panel-actions">
                                <a href="#" class="fa fa-caret-down"></a>
                            </div>

                            <h2 class="panel-title"><b>DATATABLE STOCK</b></h2>
                        </header>
                        <div class="panel-body">
                        </div>
                    </section> -->
                     <!-- <?php
                            $query = $this->db->query(" SELECT stockin.`nama_barang`AS nama_barang,stockin.`unit`AS unit,
                        SUM(stockin.`jumlah_masuk`)AS stockin, SUM(stockout.`jumlah`)AS stockout,
                        (SUM(stockin.`jumlah_masuk`)-SUM(stockout.`jumlah`))AS allstock FROM stockin
                        JOIN stockout ON stockout.`nama_barang` = stockin.`nama_barang`
                        GROUP BY stockin.`nama_barang` ")->result();

                            foreach ($query as $key) {
                                # code...
                            }
                            ?> -->
                 </div>
             </div>

         </section>



     </div>
     </div>


     <!-- end: page -->
     <!-- Modal Form -->
     <div id="modalForm" class="modal-block modal-block-primary mfp-hide">
         <section class="panel">
             <header class="panel-heading">
                 <h2 class="panel-title">Kategori</h2>
             </header>
             <div class="panel-body">
                 <form action="" method="post">
                     <!-- <input type="text" value="1" hidden> -->
                     <label>Kategori</label>
                     <input type="text" name="nama_kategori" id="nama_kategori" placeholder="Masukan kategori" class="form-control" onkeyup="this.value = this.value.toUpperCase();">
                     <?= form_error('nama_kategori', '<small class="text-danger pl-3">', '</small>') ?>
                     <br />
                     <button type="submit" name="btn" class="btn-sm btn btn-primary">Add</button>
                 </form>
                 <br />
                 <table class="table table-bordered table-striped mb-none" id="datatable-tabletools">
                     <br />
                     <thead>
                         <tr>
                             <th>Nama Kategori</th>
                             <th>action</th>
                         </tr>
                     </thead>
                     <tbody>
                         <?php
                            $no = 1;
                            foreach ($kategori as $a) {
                                ?>
                             <tr>
                                 <td><?= $a['nama_kategori'] ?></td>
                                 <td>
                                     <a href="<?= base_url(''); ?>kategori/edit/<?= $a['id']; ?>">
                                         <i class="fa fa-edit"></i>
                                     </a> |
                                     <a href="<?= base_url(''); ?>kategori/delete/<?= $a['id']; ?>" onclick="return confirm('Sure want delete this data?')">
                                         <i class="fa fa-trash-o"></i>
                                     </a>
                                 </td>
                             </tr>
                         <?php } ?>
                     </tbody>
                 </table>
             </div>
             <footer class="panel-footer">
                 <div class="row">
                     <div class="col-md-12 text-right">
                         <button class="btn btn-default modal-dismiss">Cancel</button>
                     </div>
                 </div>
             </footer>
         </section>
     </div>
 </section>