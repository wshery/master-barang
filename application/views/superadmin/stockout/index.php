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
        <!-- start: sidebar -->
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
                            <li>
                                <a href="<?= base_url('superadmin'); ?>">
                                    <i class="fa fa-home" aria-hidden="true"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <li class="nav-main">
                                <a href="<?= site_url('masterbarang/index'); ?>">
                                    <i class="fa fa-cube" aria-hidden="true"></i>
                                    <span>Master Barang</span>
                                </a>
                            </li>
                            <li class="nav-parent nav-expanded nav-active">
                                <a>
                                    <i class="fa fa-cubes" aria-hidden="true"></i>
                                    <span>Stock</span>
                                </a>
                                <ul class="nav nav-children">
                                    <li>
                                        <a href="<?= site_url('stockin'); ?>">
                                            Stock In
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?= site_url('stockout'); ?>">
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
                                <a href="#">
                                    <i class="fa fa-child" aria-hidden="true"></i>
                                    <span>Managament User</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </aside>
        <!-- end: sidebar -->

        <section role="main" class="content-body">
            <header class="page-header">
                <h2>STOCK OUT</h2>

                <div class="right-wrapper pull-right" style="padding-right: 3%;">
                    <ol class="breadcrumbs">
                        <li>
                            <a href="<?php echo site_url('stockout'); ?>">
                                <i class="fa fa-home"></i>
                            </a>
                        </li>
                        <li><span>Stock Out</span></li>
                    </ol>
                </div>
            </header>

            <div class="row">

            </div>

            <!-- start: page -->
            <!-- <div class="row">
                <div class="col-xs-12">
                    <section class="panel">
                        <header class="panel-heading">
                            <div class="panel-actions">
                                <a href="#" class="fa fa-caret-down"></a>
                            </div>
                            <h2 class="panel-title"><b>TOTAL STOCK MASUK</b></h2>
                        </header>
                        <div class="panel-body">
                            <table id="datatable-default" class="table table-bordered table-stripped mb-none">
                                <br />
                                <thead>
                                    <tr>
                                        <th>Nama Barang</th>
                                        <th>Total Masuk Barang</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($stkbrg as $in) {
                                        ?>
                                                <tr class="gradeX">
                                                    <td><?= $in->nama_barangs; ?></td>
                                                    <td><?= $in->total; ?></td>
                                                </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </section>
                </div>
            </div> -->
            <br />
            <div class="row">
                <div class="col-xs-12">
                    <section class="panel">
                        <header class="panel-heading">
                            <div class="panel-actions">
                                <a href="#" class="fa fa-caret-down"></a>
                            </div>

                            <h2 class="panel-title"><b>STOCK OUT</b></h2>
                        </header>
                        <div class="panel-body">

                            <?= $this->session->flashdata('message'); ?>

                            <table class="table table-bordered table-striped mb-none" id="datatable-default">
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <a href="<?php echo site_url('stockout/create'); ?>" type="button" class="mb-xs ml-xs mt-xs mr-xs btn btn-sm btn-primary">
                                            <i class="fa fa-plus"></i>&nbsp;
                                            Stok Keluar
                                        </a>
                                    </div>
                                    <div class="col-md-7">
                                        <form action="<?php echo base_url("stockout/import"); ?>" method="post" enctype="multipart/form-data">
                                            <a style="margin-left: 55%; bottom: " href="<?php echo base_url("excel/Stock_Out.xlsx"); ?>" class="mb-xs mt-xs mr-xs btn btn-sm btn-default">
                                                <i class="fa fa-print"></i>&nbsp;
                                                Export
                                            </a>
                                            <a style="margin-right: 9%;" href="<?php echo base_url("stockout/form"); ?>" class="mb-xs mt-xs mr-xs btn btn-sm btn-success"><i class="fa fa-file-text"></i>&nbsp; Import Data Excel</a>
                                        </form>
                                    </div>
                                </div>
                                <br />
                                <thead>
                                    <tr>
                                        <th>NO.</th>
                                        <th>TANGGAL KELUAR</th>
                                        <th>DIVISI</th>
                                        <th>NOMOR SURAT JALAN</th>
                                        <th>DIKELUARKAN OLEH</th>
                                        <th>TUJUAN PROYEK</th>
                                        <th>SUPIR</th>
                                        <th>KODE BARANG</th>
                                        <th>NAMA BARANG</th>
                                        <th>SATUAN</th>
                                        <th>JUMLAH</th>
                                        <th>KETERANGAN</th>
                                        <th>action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($stockout as $out) {
                                        ?>
                                        <tr class="gradeX">
                                            <td><?= $no;  ?></td>
                                            <td><?= $out['dateout']; ?></td>
                                            <td><?= $out['divisi']; ?></td>
                                            <td><?= $out['no_suratjalan'] ?></td>
                                            <td><?= $out['pengeluar'] ?></td>
                                            <td><?= $out['lokasi'] ?></td>
                                            <td><?= $out['supir'] ?></td>
                                            <td><?= $out['kode_barang'] ?></td>
                                            <td><?= $out['nama_barang'] ?></td>
                                            <td><?= $out['satuan'] ?></td>
                                            <td><?= $out['jumlah'] ?></td>
                                            <td><?= $out['keterangan'] ?></td>
                                            <td align="center">
                                                <a href="<?php echo site_url('stockout/ngeprint'); ?>/?id=<?php echo $out['no_suratjalan']; ?>">
                                                    <i class="fa fa-print"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php
                                        $no++;
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                    </section>
                </div>
            </div>
        </section>
    </div>
    </div>

    <div class="row">

    </div>
    <div class="row">

    </div>
    <!-- end: page -->
</section>