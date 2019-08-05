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
                        <img src="<?= base_url('assets/images/') . $user['image']; ?>" class="img-circle" />
                    </figure>
                    <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
                        <span class="name"><?= $user['name'] ?></span>
                        <span class="role">administrator</span>
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
                                        <a href="<?= site_url('stokin'); ?>">
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
                        <li><span>Edit Stock Out</span></li>
                    </ol>
                </div>
            </header>

            <div class="row">

            </div>

            <!-- start: page -->
            <div class="row">
                <?php if ($this->session->flashdata('success')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $this->session->flashdata('success'); ?>
                    </div>
                <?php endif; ?>
                <div class="col-md-6">
                    <section class="panel">
                        <header class="panel-heading">
                            <div class="panel-actions">
                                <a href="#" class="fa fa-caret-down"></a>
                            </div>

                            <h2 class="panel-title"><b>FORM ITEM</b></h2>
                        </header>
                        <div class="panel-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?= $stockout['id_out']; ?>">
                                <div class="row form-group">
                                    <div class="col-md-6">
                                        <label>Nama Barang
                                            <font color="red">*</font></label>
                                        <input type="" name="" disabled="" value="<?= $stockout['nama_barang']; ?>" class="form-control input-sm" />
                                    </div>

                                    <div class="col-md-5">
                                        <label>Quantity out
                                        </label>
                                        <input type="" name="" disabled="" value="<?= $stockout['jumlah']; ?>" class="form-control input-sm" />
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-6">
                                        <select name="nama_barang" id="nama_barang" data-plugin-selectTwo class="form-control input-sm populate name_list">
                                            <?php foreach ($mbarang as $barang) : ?> {
                                                <option value="<?= $barang['nama_barang']  ?>"><?= $barang['nama_barang'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="col-md-5">
                                        <input type="" name="quantity_out" id="quantity_out" placeholder="ex : 10" class="form-control input-sm" />
                                        <?= form_error('quantity_out', '<small class="text-danger pl-3">', '</small>') ?>
                                    </div>
                                </div>
                                <div class="form-group mb-lg">
                                    <label>Lokasi</label>
                                    <input type="" name="" disabled="" value="<?= $stockout['lokasi']; ?>" class="form-control input-sm" />
                                    <br>
                                    <select name="lokasi" data-plugin-selectTwo class="form-control input-sm populate name_list">
                                        <?php foreach ($lokasi as $l) : ?> {
                                            <option value="<?= $l['nama_lokasi']  ?>"><?= $l['nama_lokasi'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <!-- <div class="form-group mb-lg">
                                  <label>No Surat Jalan</label>
                                  <input type="" name="" disabled="" value="<?= $stockout['no_suratjalan']; ?>" class="form-control input-sm" />
                                  <br>
                                  <label>No Last Surat Jalan</label>
                                  <br>
                                  <div class="col-md-3">
                                  <input type="number" min="1" max="100" size="2" name="nolast_suratjalan" id="nolast_suratjalan" placeholder="1-100" class="form-control input-sm" />
                                  <?= form_error('nolast_suratjalan', '<small class="text-danger pl-3">', '</small>') ?>
                                  </div>
                                  
                                </div> -->

                                <div class="form-group mb-lg ">
                                    <label>Keterangan Barang
                                        <b>(optional)
                                        </b>
                                    </label>
                                    <textarea name="keterangan" id="keterangan" rows="2" class="form-control" placeholder="Keterangan Barang" required></textarea>
                                    <?= form_error('nolast_suratjalan', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                                <br />
                                <br />
                                <button type="submit" name="btn" class="btn btn-primary">Edit</button>
                                <a href="<?php echo site_url('stockout/index') ?>" class="btn btn-warning">Cancel</a>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
            <!-- end: page -->

        </section>
    </div>
</section>