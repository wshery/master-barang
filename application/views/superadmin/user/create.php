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
                                <a href="<?php echo base_url() . '/StockInController' ?>">
                                    Stock In
                                </a>
                            </li>
                            <li>
                                <a href="<php echo base_url().'/StockOutController' ?>">
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
        <div class="header-right">
            <span class="separator"></span>

            <div id="userbox" class="userbox">
                <a href="#" data-toggle="dropdown">
                    <figure class="profile-picture">
                        <img src="<?= base_url('./image/') . $user['image']; ?>" class="img-circle" />
                    </figure>
                    <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
                        <span class="name"><?= $user['name'] ?></span>
                        <span class="role"><?= $hm['role'] ?></span>
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
                <h2>Management User</h2>

                <div class="right-wrapper pull-right" style="padding-right: 3%;">
                    <ol class="breadcrumbs">
                        <li>
                            <a href="<?php echo site_url() . '/superadmin' ?>">
                                <i class="fa fa-home"></i>
                            </a>
                        </li>
                        <li><span>Management User</span></li>
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
                            <form action="<?php echo site_url('user/store'); ?>" method="post" enctype="multipart/form-data">
                                <div class="row form-group">
                                    <!-- <input type="text" name="masterbarang" value="0" hidden> -->
                                    <div class="col-sm-6">
                                        <label>Nama</label>
                                        <input type="text" name="name" id="name" placeholder="Jhony" class="form-control" value="<?= set_value('name'); ?>">
                                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>') ?>
                                    </div>

                                    <div class="mb-md hidden-lg hidden-xl"></div>

                                    <div class="col-sm-6">
                                        <label>Username</label>
                                        <input type="text" name="username" id="username" placeholder="jhony_ganteng" class="form-control" value="<?= set_value('username'); ?>">
                                        <?= form_error('username', '<small class="text-danger pl-3">', '</small>') ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label>Email</label>
                                        <input type="text" name="email" id="email" placeholder="jhony@gmail.com | jhony@email.com" class="form-control" value="<?= set_value('email'); ?>">
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
                                    </div>
                                </div>
                                <br />
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label for="role">
                                            Role
                                        </label>
                                        <select data-plugin-selectTwo class="form-control" id="role" name="role">
                                            <option value="superadmin">Super Admin</option>
                                            <option value="admin">Admin</option>
                                            <option value="user">User</option>
                                        </select>
                                    </div>
                                </div>
                                <br />
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label for="divisi">
                                            Divisi
                                        </label>
                                        <select data-plugin-selectTwo class="form-control" id="divisi" name="divisi">
                                            <option value="IT">IT</option>
                                            <option value="General Affair">General Affair</option>
                                            <option value="Purchasing">Purchasing</option>
                                        </select>
                                    </div>
                                </div>
                                <br />
                                <div class="row form-group">
                                    <div class="col-sm-6">
                                        <label>Password</label>
                                        <input type="password" name="password1" id="password1" placeholder="minimal 8 character" class="form-control">
                                        <?= form_error('password1', '<small class="text-danger pl-3">', '</small>') ?>
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Password Confirmation</label>
                                        <input type="password" name="password2" id="password2" placeholder="samakan dengan pasword diatas" class="form-control">
                                    </div>
                                </div>
                                <br />
                                <div class="form-group">
                                    <label>File Upload</label>
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                        <div class="input-append">
                                            <div class="uneditable-input">
                                                <!-- <i class="fa fa-file fileupload-exists"></i> -->
                                                <span class="fileupload-preview"></span>
                                            </div>
                                            <span class="btn btn-default btn-file">
                                                <span class="fileupload-exists">Change</span>
                                                <span class="fileupload-new">Select file</span>
                                                <input type="file" name="image" />
                                            </span>
                                            <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
                                        </div>
                                    </div>
                                </div>


                                <br />
                                <button type="submit" name="btn" class="btn btn-primary">Create</button>
                                <a href="<?php echo site_url('user/index') ?>" class="btn btn-warning">Cancel</a>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </section>
    </div>


</section>