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
								<a href="<?php echo base_url('user') ?>">
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
				<h2>Stock Masuk</h2>

				<div class="right-wrapper pull-right" style="padding-right: 3%;">
					<ol class="breadcrumbs">
						<li>
							<a href="<?php echo site_url('stockin'); ?>">
								<i class="fa fa-home"></i>
							</a>
						</li>
						<li><span>Stock Masuk</span></li>
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
							<h2 class="panel-title"><b>STOCK MASUK</b></h2>
						</header>
						<div class="panel-body">
							<table id="datatable-default" class="table table-bordered table-stripped mb-none">
								<p class="m-none">
									<a href="<?= site_url('stockin/create') ?>" type="button" class=" mb-xs mt-xs btn btn-sm btn-primary">
										<i class="fa fa-plus"></i>&nbsp;
										Stok Masuk
									</a>
								</p>
								<br />
								<thead>
									<tr>
										<th>Nama Barang</th>
										<th>Total Masuk Barang</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;

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
			</div>

			<!-- start: page -->
			<div class="row">
				<div class="col-xs-12">
					<section class="panel">
						<header class="panel-heading">
							<div class="panel-actions">
								<a href="#" class="fa fa-caret-down"></a>
							</div>

							<h2 class="panel-title"><b>STOCK MASUK</b></h2>
						</header>
						<div class="panel-body">
							<?= $this->session->flashdata('message'); ?>
							<form action="<?php echo base_url("stockin/import"); ?>" method="post" enctype="multipart/form-data">
								<a href="<?php echo base_url("excel/Stockin.xlsx"); ?>" class="mb-xs mt-xs mr-xs btn btn-sm btn-default">
									<i class="fa fa-print"></i>&nbsp;
									Export
								</a>
								<a style="margin-right: 10%;" href="<?= base_url("stockin/form"); ?>" class="mb-xs mt-xs mr-xs btn btn-sm btn-success"><i class="fa fa-file-text"></i>&nbsp; Import Data Excel</a><br><br>
							</form>
							<table class="table table-bordered table-striped mb-none" id="datatable-tabletools">
								<p class=" m-none">
								</p>
								<br />
								<thead>
									<tr>
										<th>Tanggal Barang</th>
										<th>Nama Barang</th>
										<th>Jumlah Barang</th>
										<th>Keterangan Barang</th>
										<th>Lampiran Barang</th>
										<th>User ID</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($stockin as $in) {
										?>
										<tr class="gradeX">
											<td><?= $in['tanggal_masuk']; ?></td>
											<td><?= $in['nama_barang']; ?></td>
											<td><?= $in['jumlah_masuk']; ?></td>
											<td><?= $in['keterangan']; ?></td>
											<td><?php
												if (file_exists('./image/' . $in['lampiran']) == FALSE) {
													echo "<b style='color: #00FF00'>" . $in['lampiran'] . "</b>";
												} elseif ($in['lampiran'] == null) {
													echo "<i>Gambar Kosong</i>";
												} else {
													?>
													<img src="<?= base_url('./image/') . $in['lampiran']; ?>" width='75px' height='75px' />
												<?php } ?></td>
											<td><?= $in['user_session']; ?></td>
											<td align="center">
												<a href="<?= base_url(''); ?>stockin/edit/<?= $in['id']; ?>">
													<i class="fa fa-edit"></i>
												</a> |
												<a href="<?= base_url(''); ?>stockin/delete/<?= $in['id']; ?>" onclick="return confirm('Sure want delete this data?')">
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
</section>