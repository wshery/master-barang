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
                        <span class="role"><?= $role['role'] ?></span>
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
                <h2>Menu Management</h2>

                <div class="right-wrapper pull-right" style="padding-right: 3%;">
                    <ol class="breadcrumbs">
                        <li>
                            <a href="<?php echo site_url() . '/DashboardController' ?>">
                                <i class="fa fa-home"></i>
                            </a>s
                        </li>
                        <li><span>Menu Management</span></li>
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

                            <h2 class="panel-title"><b>Menu Management</b></h2>
                        </header>
                        <div class="panel-body">

                            <?= $this->session->flashdata('message'); ?>
                            <table class="table table-bordered table-striped mb-none" id="datatable-default">
                                <a href="<?php echo site_url('menu/create'); ?>" type="button" class="mb-xs mt-xs mr-xs btn btn-sm btn-primary">
                                    <i class="fa fa-plus"></i>&nbsp;
                                    Add Menu
                                </a>
                        </div>
                </div>
                <br />
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Menu</th>
                        <th>action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $i = 1;
                    foreach ($user_menu as $m) {
                        ?>
                        <tr class="gradeX">
                            <td><?= $i++; ?></td>
                            <td><?= $m['menu']; ?></td>
                            <td>
                                <a href="<?= base_url(''); ?>menu/edit/<?= $m['id']; ?>">
                                    <i class="fa fa-edit"></i>
                                </a> |
                                <a href="<?= base_url(''); ?>menu/delete/<?php echo $m['id']; ?>" onclick="return confirm('Sure want delete this data?')">
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