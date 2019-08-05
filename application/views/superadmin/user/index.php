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
                                <a href="<?php echo base_url('stokout') ?>">
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
                    <li class="nav-active">
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
                <h2>User Management</h2>

                <div class="right-wrapper pull-right" style="padding-right: 3%;">
                    <ol class="breadcrumbs">
                        <li>
                            <a href="<?php echo site_url() . '/DashboardController' ?>">
                                <i class="fa fa-home"></i>
                            </a>s
                        </li>
                        <li><span>User Management</span></li>
                    </ol>
                </div>
            </header>
            <div class="row">
                <div class="col-xs-12">
                    <section class="panel">
                        <header class="panel-heading">
                            <div class="panel-actions">
                                <a href="#" class="fa fa-caret-down"></a>
                            </div>

                            <h2 class="panel-title"><b>User Management</b></h2>
                        </header>
                        <div class="panel-body">

                            <?= $this->session->flashdata('message'); ?>
                            <table class="table table-bordered table-striped mb-none" id="datatable-default">
                                <a href="<?php echo site_url('user/create'); ?>" type="button" class="mb-xs mt-xs mr-xs btn btn-sm btn-primary">
                                    <i class="fa fa-plus"></i>&nbsp;
                                    Add User
                                </a>
                        </div>
                </div>
                <br />
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Photo</th>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Divisi</th>
                        <th>Status</th>
                        <th>action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $i = 1;
                    foreach ($userm as $u) {
                        ?>
                        <tr class="gradeX">
                            <td><?= $i++; ?></td>
                            <td>
                                <?php
                                if (file_exists('./image/' . $u['image']) == FALSE) {
                                    echo "<b style='color: #00FF00'>" . $u['image'] . "</b>";
                                } elseif ($u['image'] == null) {
                                    echo "<i>Gambar Kosong</i>";
                                } else {
                                    ?>
                                    <img src="<?= base_url('./image/') . $u['image']; ?>" width='75px' hegiht='75px' />
                                <?php } ?>

                            </td>
                            <td><?= $u['name']; ?></td>
                            <td><?= $u['username']; ?></td>
                            <td><?= $u['email']; ?></td>
                            <td><?= $u['role']; ?></td>
                            <td><?= $u['divisi']; ?></td>
                            <td>
                                <?php
                                if ($u['is_active'] == 1) {
                                    echo "Active";
                                } else {
                                    echo "Not Active";
                                }
                                ?>
                            </td>
                            <td>
                                <a href="<?= site_url('user/editUser/' . $u['id']) ?>">
                                    <i class="fa fa-edit"></i>
                                </a> |
                                <a href="<?= base_url(''); ?>user/delete/<?php echo $u['id']; ?>" onclick="return confirm('Sure want delete this data?')">
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


</section>