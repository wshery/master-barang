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
                    <li class="nav-active">
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
                <h2>Master Barang</h2>

                <div class="right-wrapper pull-right" style="padding-right: 3%;">
                    <ol class="breadcrumbs">
                        <li>
                            <a href="<?php echo site_url() . '/DashboardController' ?>">
                                <i class="fa fa-home"></i>
                            </a>
                        </li>
                        <li><span>Master Barang</span></li>
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

                            <h2 class="panel-title"><b>MASTER BARANG</b></h2>
                        </header>
                        <div class="panel-body">
                            <?= $this->session->flashdata('message'); ?>
                            <table class="table table-bordered table-striped mb-none" id="datatable-default">
                                <div class="row show-grid">
                                    <div class="col-md-8">
                                        <a href="<?php echo site_url('masterbarang/create'); ?>" type="button" class="mb-xs mt-xs mr-xs btn btn-sm btn-primary">
                                            <i class="fa fa-plus"></i>&nbsp;
                                            Add Master
                                        </a>
                                        <button id="delete" class="mb-xs mt-xs mr-xs btn btn-sm btn-danger"><i class="fa fa-minus"></i>&nbsp; Delete Selected </button>
                                        <a href="#modalForm" class="modal-with-form mb-xs mt-xs btn btn-sm btn-warning">
                                            <i class="fa fa-tag"></i>&nbsp;
                                            Kategori
                                        </a>
                                    </div>

                                    <div class="col-md-4">
                                        <form action="<?php echo base_url("masterbarang/import"); ?>" method="post" enctype="multipart/form-data">
                                            <a style="margin-left: 20%;" href="<?php echo base_url("excel/Master Barang.xlsx"); ?>" class="mb-xs mt-xs mr-xs btn btn-sm btn-default">
                                                <i class="fa fa-print"></i>&nbsp;
                                                Export
                                            </a>
                                            <a style="margin-right: 10%; padding-right: 11%;" href="<?php echo base_url("masterbarang/form"); ?>" class="mb-xs mt-xs mr-xs btn btn-sm btn-success"><i class="fa fa-file-text"></i>&nbsp; Import Data Excel</a><br><br>
                                        </form>
                                    </div>
                                </div>

                                <br />
                                <thead>
                                    <tr>
                                        <th>action</th>
                                        <th>No</th>
                                        <th>Kode Barang</th>
                                        <th>Nama Barang</th>
                                        <th>Kategori</th>
                                        <th>Kondisi Barang</th>
                                        <th>Nomor Serial</th>
                                        <th>Nomor Produk</th>
                                        <th>Keterangan Barang</th>
                                        <th>Batas</th>
                                        <th>Satuan</th>
                                        <th>Harga</th>
                                        <th>Photo</th>
                                        <th>action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($mbarang as $barang) {
                                        ?>
                                        <tr class="gradeX">
                                            <td><input type="checkbox" id="<?= $barang['id']; ?>" name="id[]" value="<?= $barang['id']; ?>"></td>
                                            <td><?= $no++; ?></td>
                                            <td><?= $barang['kode_barang']; ?></td>
                                            <td><?= $barang['nama_barang'] ?></td>
                                            <td><?= $barang['nama_kategori'] ?></td>
                                            <td><?= $barang['kondisi_barang'] ?></td>
                                            <td><?= $barang['nomor_serial'] ?></td>
                                            <td><?= $barang['nomor_produk'] ?></td>
                                            <td><?= $barang['keterangan_barang'] ?></td>
                                            <td><?= $barang['batas'] ?></td>
                                            <td><?= $barang['nama_satuan'] ?></td>
                                            <td><?= "Rp." . number_format($barang['harga'], 2, ',', '.') ?></td>
                                            <td>
                                                <?php
                                                if (file_exists('./image/' . $barang['photo']) == FALSE) {
                                                    echo "<b style='color: #00FF00'>" . $barang['photo'] . "</b>";
                                                } elseif ($barang['photo'] == null) {
                                                    echo "<i>Gambar Kosong</i>";
                                                } else {
                                                    ?>
                                                    <img src="<?= base_url('./image/') . $barang['photo']; ?>" width='75px' hegiht='75px' />
                                                <?php } ?>

                                            </td>
                                            <td>
                                                <a href="<?= base_url(''); ?>masterbarang/edit/<?= $barang['id']; ?>">
                                                    <i class="fa fa-edit"></i>
                                                </a> |
                                                <a href="<?= base_url(''); ?>masterbarang/delete/<?php echo $barang['id']; ?>" onclick="return confirm('Sure want delete this data?')">
                                                    <i class="fa fa-trash-o"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php } ?>
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