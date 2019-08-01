<section class="body">

    <!-- start: header -->
    <header class="header">
        <div class="logo-container">
            <a href="../" class="logo">
                <img src="<?php echo base_url(); ?>assets/images/logo.png" height="35" alt="Porto Admin" />
            </a>
            <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
                <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
            </div>
        </div>

        <!-- start: search & user box -->
        <div class="header-right">
            <span class="separator"></span>

            <div id="userbox" class="userbox">
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
                            <a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="fa fa-user"></i> My Profile</a>
                        </li>
                        <li>
                            <a role="menuitem" tabindex="-1" href="<?php echo site_url() . 'auth' ?>"><i class="fa fa-power-off"></i> Logout</a>
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
                            </a>
                        </li>
                        <li><span>Menu Management</span></li>
                        <li><span>Add</span></li>
                    </ol>
                </div>
            </header>

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
                            <?= $this->session->flashdata('message'); ?>
                            <form action="<?php echo site_url('Menu/store'); ?>" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label>Menu</label>
                                        <input type="text" name="menu" id="menu" placeholder="Input menu" class="form-control">
                                        <?= form_error('menu', '<small class="text-danger pl-3">', '</small>') ?>
                                    </div>
                                </div>
                                <br />
                                <button type="submit" name="btn" class="btn btn-primary">Create</button>
                                <a href="<?php echo site_url('menu/index') ?>" class="btn btn-warning">Cancel</a>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
            <!-- end: page -->
        </section>
    </div>


</section>