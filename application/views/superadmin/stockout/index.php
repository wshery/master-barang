<section class="body">

    <!-- start: header -->
    <header class="header">
        <i class="fa fa-share-alt-square" style="margin-left: 2%; font-size: 45px; color: blue"> IT IJSM</i>
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
                                <div class="row show-grid">
                                    <div class="col-md-12">
                                        <a href="<?php echo site_url('stockout/create'); ?>" type="button" class="mb-xs mt-xs mr-xs btn btn-sm btn-primary">
                                            <i class="fa fa-plus"></i>&nbsp;
                                            Stok Keluar
                                        </a>
                                        <form action="<?php echo base_url("stockout/import"); ?>" method="post" enctype="multipart/form-data">
                                            <a style="margin-left: 90%; bottom: " href="<?php echo base_url("excel/Stock_Out.xlsx"); ?>" class="mb-xs mt-xs mr-xs btn btn-sm btn-default">
                                                <i class="fa fa-print"></i>&nbsp;
                                                Print
                                            </a>
                                            <a style="margin-left: 83%;" href="<?php echo base_url("stockout/form"); ?>" class="mb-xs mt-xs mr-xs btn btn-sm btn-success"><i class="fa fa-file-text"></i>&nbsp; Import Data Excel</a>
                                        </form>
                                    </div>
                                </div>
                        </div>
                </div>
                <br />
                <thead>
                    <tr>
                        <th>Tanggal Keluar</th>
                        <th>Nama Pengguna</th>
                        <th>Lokasi</th>
                        <th>No Surat Jalan</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($stockout as $out) {
                        ?>
                        <tr class="gradeX">
                            <td><?= $out['dateout']; ?></td>
                            <td><?= $out['user_session'] ?></td>
                            <td><?= $out['lokasi'] ?></td>
                            <td><?= $out['no_suratjalan'] ?></td>
                            <td align="center">
                                <a href="<?php echo site_url('stockout/ngeprint'); ?>/?id=<?php echo $out['no_suratjalan']; ?>">
                                    <i class="fa fa-print"></i>
                                </a>
                                <!-- </a> |
                                        <a href="<?= base_url(''); ?>stockout/edit/<?= $out['id_out']; ?>">
                                            <i class="fa fa-edit"></i>
                                        </a> |
                                        <a href="<?= base_url(''); ?>stockout/delete/<?php echo $out['id_out']; ?>" onclick="return confirm('Sure want delete this data?')">
                                            <i class="fa fa-trash-o"></i>
                                        </a> -->
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

    </div>
    <div class="row">

    </div>
    <!-- end: page -->
</section>