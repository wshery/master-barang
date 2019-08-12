    			<!-- start: header -->
    			<header class="header">
    			    <div class="logo-container">
    			        <a href="../" class="logo">
    			            <img src="<?= base_url(''); ?>assets/images/logo.png" height="35" alt="Porto Admin" />
    			        </a>
    			        <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
    			            <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
    			        </div>
    			    </div>

    			    <!-- start: search & superadmin box -->
    			    <div class="header-right">

    			        <form action="pages-search-results.html" class="search nav-form">
    			            <div class="input-group input-search">
    			                <input type="text" class="form-control" name="q" id="q" placeholder="Search...">
    			                <span class="input-group-btn">
    			                    <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
    			                </span>
    			            </div>
    			        </form>

    			        <span class="separator"></span>

    			        <div id="userbox" class="userbox">
    			            <a href="#" data-toggle="dropdown">
    			                <figure class="profile-picture">
    			                    <img src="<?= base_url('assets/images/profile/') . $user['image']; ?>" alt="Joseph Doe" class="img-circle" data-lock-picture="assets/images/!logged-superadmin.jpg" />
    			                </figure>
    			                <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
    			                    <span class="name"><?= $user['name']; ?> </span>
    			                    <span class="role">administrator</span>
    			                </div>

    			                <i class="fa custom-caret"></i>
    			            </a>

    			            <div class="dropdown-menu">
    			                <ul class="list-unstyled">
    			                    <li class="divider"></li>
    			                    <li>
    			                        <a role="menuitem" tabindex="-1" href="pages-superadmin-profile.html"><i class="fa-fw fa fa-child"></i> My Profile</a>
    			                    </li>
    			                    <li>
    			                        <a role="menuitem" tabindex="-1" href="<?= base_url('auth/logout'); ?>"><i class="fa-fw fa fa-power-off"></i> Logout</a>
    			                    </li>
    			                </ul>
    			            </div>
    			        </div>
    			    </div>
    			    <!-- end: search & superadmin box -->
    			</header>
    			<!-- end: header -->
    			<section role="main" class="content-body">
    			    <header class="page-header">
    			        <h2>Stock Masuk</h2>
    			        <div class="right-wrapper pull-right">
    			            <ol class="breadcrumbs">
    			                <li>
    			                    <a href="<?php echo site_url('view_stockin/stock_in'); ?>">
    			                        <i class="fa fa-home"></i>
    			                    </a>
    			                </li>
    			                <li><span>Stock</span></li>
    			                <li><span>Stock Masuk</span></li>
    			            </ol>
    			            &nbsp;&nbsp;&nbsp;
    			        </div>
    			    </header>



    			    <div class="row" style="margin-top: -20px; ">
    			        <!-- FORM -->
    			        <div class="col-md-9" id="section1">
    			            <!-- body page -->
    			            <section class="panel">
    			                <header class="panel-heading">
    			                    <div class="panel-actions">
    			                        <a href="#" class="fa fa-caret-down"></a>
    			                        <!-- <a href="#" class="fa fa-times"></a> -->
    			                    </div>

    			                    <h2 class="panel-title"><b>Form Stock Masuk</b></h2>
    			                </header>



    			                <div class="panel-body">

    			                    <!-- ss -->
    			                    <br /> <br />
    			                    <form method="post" enctype="multipart/form-data" id="user_form" action="<?php echo site_url('Stockin/add'); ?>" name="user_form">

    			                        <div class="row">
    			                            <div class="col-md-4">
    			                                <label>Nama Barang<font color="red">*</font></label>
    			                                <select name="nama_barang[]" disabled="" data-plugin-selectTwo class="form-control input-sm populate name_list">
    			                                    <option value="<?php
                                                                    //set ses
                                                                    if (empty($nama_barang)) {
                                                                        echo "";
                                                                    } elseif (!empty($nama_barang)) {
                                                                        echo $nama_barang;
                                                                    }
                                                                    ?>">
    			                                    </option>

    			                                    <?php
                                                    foreach ($mbarang as $m) { ?>
    			                                        <option value="<?= $m['nama_barang']; ?>">
    			                                            <?= $m['nama_barang']; ?>
    			                                        </option>
    			                                    <?php } ?>
    			                                </select>
    			                            </div>

    			                            <div class="col-md-3">
    			                                <label>Quantity out</label>
    			                                <input type="" name="quantity_out" disabled="" value="" placeholder="masukkan jumlah" class="form-control input-sm" />
    			                            </div>

    			                            <div class="col-md-2">
    			                                <br>
    			                                <button type="button" name="add" id="add" class="btn btn-success ">Add</button>
    			                            </div>
    			                        </div>


    			                        <div align="left" style="margin-bottom:5px;"> </div>

    			                        <div class="row">
    			                            <div class="col-md-12" id="user_data">
    			                                &nbsp;
    			                            </div>
    			                        </div>
    			                        </br>


    			                        <div class="form-group mb-lg">
    			                            <label>Lokasi</label>

    			                            <button class="mb-xs mt-xs mr-xs modal-with-zoom-anim btn btn-default btn btn-danger btn-xs" data-target="#Modallokasi" id="addToTable">
    			                                <i class="fa fa-map-marker"></i>&nbsp; Tambah Lokasi
    			                            </button>
    			                            <!-- <input type="" name="lokasi" id="n11" onkeyup="n1()" value="<?php if (empty($lokasi)) {
                                                                                                                    echo "";
                                                                                                                } else {
                                                                                                                    echo $lokasi;
                                                                                                                } ?>" placeholder="ex : OFFICE" class="form-control input-sm"> -->
    			                            <select name="lokasi" data-plugin-selectTwo class="form-control input-sm populate name_list">
    			                                <?php
                                                foreach ($lokasi as $l) { ?>
    			                                    <option value="<?= $l['nama_lokasi']; ?>">
    			                                        <?= $l['nama_lokasi']; ?>
    			                                    </option>
    			                                <?php } ?>
    			                            </select>
    			                        </div>




    			                        <div class="form-group mb-lg">
    			                            <label>Keterangan Barang</label>
    			                            <textarea name="keterangan" value="<?php
                                                                                if (empty($keterangan)) {
                                                                                    echo "";
                                                                                } elseif (!empty($keterangan)) {
                                                                                    echo $keterangan;
                                                                                }
                                                                                ?>" placeholder="keterangan barang" class="form-control"></textarea>
    			                        </div>

    			                        <div class="form-group mb-lg ">
    			                            <label>Upload Lampiran</label>
    			                            <div class="fileupload fileupload-new" data-provides="fileupload">
    			                                <div class="input-append">
    			                                    <div class="uneditable-input">

    			                                        <span class="fileupload-preview"></span>
    			                                    </div>
    			                                    <span class="btn btn-default btn-file">
    			                                        <span class="fileupload-exists">Change</span>
    			                                        <span class="fileupload-new">Select file </span>
    			                                        <input type="file" name="lampiran" />
    			                                    </span>
    			                                    <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
    			                                </div>
    			                            </div>
    			                        </div>

    			                        <!-- -- -->
    			                        <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
    			                    </form>
    			                    <!-- modal lokasi -->
    			                    <div class="modal fade" id="Modallokasi" role="dialog">
    			                        <div class="modal-dialog">

    			                            <!-- Moda content -->
    			                            <section class="panel">
    			                                <header class="panel-heading">
    			                                    <h2 class="panel-title">lokasi</h2>
    			                                </header>
    			                                <div class="panel-body">
    			                                    <?= $this->session->flashdata('message'); ?>
    			                                    <form action="<?= site_url('Stockin/createlokasi'); ?>" method="post">
    			                                        <label>lokasi</label>
    			                                        <input type="text" name="nama_lokasi" id="nama_lokasi" placeholder="Masukan lokasi" class="form-control" required="required" onkeyup="this.value = this.value.toUpperCase();">
    			                                        <?= form_error('nama_lokasi', '<small class="text-danger pl-3">', '</small>') ?>
    			                                        <br />
    			                                        <button type="submit" name="btn" class="btn-sm btn btn-primary">Add</button>
    			                                    </form>
    			                                    <br />
    			                                    <table class="table table-bordered table-striped mb-none" id="example">
    			                                        <br />
    			                                        <thead>
    			                                            <tr>
    			                                                <th>Nama lokasi</th>
    			                                                <th>action</th>
    			                                            </tr>
    			                                        </thead>
    			                                        <tbody>
    			                                            <?php
                                                            $no = 1;
                                                            foreach ($lokasi as $s) {
                                                                ?>
    			                                                <tr>
    			                                                    <td><?= $s['nama_lokasi'] ?></td>
    			                                                    <td>
    			                                                        <a href="<?= base_url(''); ?>lokasi/edit/<?= $s['id']; ?>">
    			                                                            <i class="fa fa-edit"></i>
    			                                                        </a> |
    			                                                        <a href="<?= base_url(''); ?>lokasi/delete/<?= $s['id']; ?>" onclick="return confirm('Sure want delete this data?')">
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
    			                                            <a href="<?php echo base_url(); ?>stockin/create" class="btn btn-default">Cancel</a>
    			                                        </div>
    			                                    </div>
    			                                </footer>
    			                            </section>
    			                        </div>
    			                    </div>
    			                    <!-- modal lokasi -->