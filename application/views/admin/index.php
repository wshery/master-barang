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
        <section role="main" class="content-body">
            <header class="page-header">
                <h2>Dashboard</h2>

                <div class="right-wrapper pull-right" style="padding-right: 3%;">
                    <ol class="breadcrumbs">
                        <li>
                            <a href="<?php echo site_url() . '/DashboardController' ?>">
                                <i class="fa fa-home"></i>
                            </a>
                        </li>
                        <li><span>Dashboard</span></li>
                    </ol>
                </div>
            </header>
            <div class="row">
                <div class="col-md-4 col-lg-3">
                    <section class="panel">
                        <div class="panel-body">
                            <div class="thumb-info mb-md">
                                <img src="<?= base_url('assets/images/') . $user['image']; ?>" class="rounded img-responsive" alt="John Doe">
                                <div class="thumb-info-title">
                                    <span class="thumb-info-inner"><?= $user['name']; ?></span>
                                    <span class="thumb-info-type">CEO</span>
                                </div>
                            </div>

                            <div class="widget-toggle-expand mb-md">
                                <div class="widget-header">
                                    <h6>Profile</h6>
                                    <div class="widget-toggle">+</div>
                                </div>
                                <div class="widget-content-expanded">
                                    <hr class="dotted short">
                                    <ul class="simple-todo-list">
                                        <li>
                                            <span style="color: black;">Nama</span> : <i>(isi nama)</i>
                                        </li>
                                        <li>
                                            <span style="color: black;">Email</span> : <i>(isi email)</i>
                                        </li>
                                        <li>
                                            <span style="color: black;">Posisi</span> : <i>(isi posisi)</i>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <hr class="dotted short">

                            <h6>Quote Penyemangat!</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis vulputate quam. Interdum et malesuada</p>

                            <hr class="dotted short">

                            <b>
                                <p style="font-size: 12px">Akun Terbuat Sejak : <?= date('d F Y', $user['date_created']); ?></p>
                            </b>
                        </div>
                    </section>
                </div>
                <div class="col-md-8 col-lg-6">

                    <div class="tabs">
                        <ul class="nav nav-tabs tabs-primary">
                            <li class="active">
                                <a href="#overview" data-toggle="tab">Overview</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div id="overview" class="tab-pane active">
                                <form class="form-horizontal" method="get">
                                    <!-- ubah data diri -->
                                    <h4 class="mb-xlg">Personal Information</h4>
                                    <fieldset>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="profileFirstName">First Name</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" id="profileFirstName">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="profileLastName">Last Name</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" id="profileLastName">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="profileAddress">Email</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" id="profileAddress">
                                            </div>
                                        </div>
                                    </fieldset>
                                    <!-- ubah password -->
                                    <hr class="dotted tall">
                                    <h4 class="mb-xlg">Change Password</h4>
                                    <fieldset class="mb-xl">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="profileNewPassword">New Password</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" id="profileNewPassword">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="profileNewPasswordRepeat">Repeat New Password</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" id="profileNewPasswordRepeat">
                                            </div>
                                        </div>
                                    </fieldset>
                                    <div class="panel-footer">
                                        <div class="row">
                                            <div class="col-md-9 col-md-offset-3">
                                                <button type="submit" class="btn btn-primary">Update</button>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


</section>