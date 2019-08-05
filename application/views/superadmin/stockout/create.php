<html class="fixed">
  <head> 
    <!-- Basic -->
    <meta charset="UTF-8">
    <title><?= $title; ?>
    </title>
    <meta name="keywords" content="HTML5 Admin Template" />
    <meta name="description" content="JSOFT Admin - Responsive HTML5 Template">
    <meta name="author" content="JSOFT.net">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!-- Web Fonts  -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">
    <!-- Vendor CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/font-awesome/css/font-awesome.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/magnific-popup/magnific-popup.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap-datepicker/css/datepicker3.css" />
    <!-- Specific Page Vendor CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/select2/select2.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap-timepicker/css/bootstrap-timepicker.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/dropzone/css/basic.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/dropzone/css/dropzone.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/jquery-datatables-bs3/assets/css/datatables.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap-markdown/css/bootstrap-markdown.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/summernote/summernote.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/summernote/summernote-bs3.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/codemirror/lib/codemirror.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/codemirror/theme/monokai.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.css" />
    <!-- Theme CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheets/theme.css" />
    <!-- Skin CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheets/skins/default.css" />
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheets/theme-custom.css">
    <!-- Head Libs -->
    <script src="<?php echo base_url(); ?>assets/vendor/modernizr/modernizr.js">
    </script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/form.css" />
    <style type="text/css">
      .label {
        /* color: white; */
        padding: 9px;
        width: 55%;
        /* padding-left: 7px;
        width: 32%; */
        text-transform: uppercase;
        display: inline-block
      }
      .success {
        background-color: #4CAF50;
      }
      /* Green */
      .info {
        background-color: #2196F3;
      }
      /* Blue */
      .warning {
        background-color: #ff9800;
      }
      /* Orange */
      .danger {
        background-color: #f44336;
      }
      /* Red */
      .other {
        background-color: #e7e7e7;
        color: black;
      }
      /* Gray */
    </style>
    <style style="text/css">
      .img-modal {
        width: 100%;
        height: 100%;
      }
    </style>
    <script src="<?php echo base_url(''); ?>assets/js/jquery.min.js">
    </script>
    <script>
      $(document).ready(function() {
        // Sembunyikan alert validasi kosong
        $("#kosong").hide();
      }
                       );
    </script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js">
    </script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js">
    </script>
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/vendor/dropzone/css/basic.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/vendor/dropzone/css/dropzone.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.css" />
    <style>
      div.ex1 {
        background-color: lightblue;
        width: 110px;
        height: 110px;
        overflow: scroll;
      }
      div.ex2 {
        background-color: lightblue;
        width: 110px;
        height: 110px;
        overflow: hidden;
      }
      div.ex3 {
        background-color: lightblue;
        width: 100%;
        height: 500px;
        overflow: auto;
      }
      div.ex4 {
        background-color: lightblue;
        width: 110px;
        height: 110px;
        overflow: visible;
      }
    </style>
  </head>

  <body data-spy="scroll" data-target="#myScrollspy" data-offset="20">

    <!-- start: header -->
    <header class="header">
      <div class="logo-container">
        <a href="../" class="logo">
          <img src="<?php echo base_url(); ?>assets/images/logo.png" height="35" alt="Porto Admin" />
        </a>
        <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
          <i class="fa fa-bars" aria-label="Toggle sidebar">
          </i>
        </div>
      </div>

      <!-- start: search & user box -->
      <div class="header-right">
        <span class="separator">
        </span>
        <div id="userbox" class="userbox">
          <a href="#" data-toggle="dropdown">
            <figure class="profile-picture">
              <img src="<?= base_url('assets/images/') . $user['image']; ?>" class="img-circle" />
            </figure>
            <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
              <span class="name">
                <?= $user['name'] ?>
              </span>
              <span class="role">administrator
              </span>
            </div>
            <i class="fa custom-caret">
            </i>
          </a>
          <div class="dropdown-menu">
            <ul class="list-unstyled">
              <li class="divider">
              </li>
              <li>
                <a role="menuitem" tabindex="-1" href="<?= site_url('superadmin/profile'); ?>">
                  <i class="fa fa-user">
                  </i> My Profile
                </a>
              </li>
              <li>
                <a role="menuitem" tabindex="-1" href="<?= base_url('auth/logout'); ?>">
                  <i class="fa fa-power-off">
                  </i> logout
                </a>
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
          <h2>STOK OUT
          </h2>
          <div class="right-wrapper pull-right" style="padding-right: 3%;">
            <ol class="breadcrumbs">
              <li>
                <a href="<?php echo site_url('stockout') ?>">
                  <i class="fa fa-home">
                  </i>
                </a>
              </li>
              <li>
                <span>Stok Out
                </span>
              </li>
              <li>
                <span>Add
                </span>
              </li>
            </ol>
          </div>
        </header>

        <div class="row" style="margin-top: -20px; ">

        <!-- FORM -->
        <div class="col-md-6" id="section1">
          <!-- body page -->
          <section class="panel" >
            <header class="panel-heading">
              <div class="panel-actions">
                <a href="#" class="fa fa-caret-down"></a>
                <!-- <a href="#" class="fa fa-times"></a> -->
              </div>
          
              <h2 class="panel-title"><b>Form Stock Keluar</b></h2>
            </header>
            
            <div class="panel-body">

              <!-- ss -->
              <br /> <br />
              <?= $this->session->flashdata('message'); ?>
              <form method="post" id="user_form" action="<?php echo site_url('stockout/buat'); ?>" name="user_form" >

                 <div class="row">
                    <div class="col-md-5">
                      <label>Nama Barang<font color="red">*</font></label>
                      <select name="nama_barang[]" disabled="" data-plugin-selectTwo class="form-control input-sm populate name_list">
                      <option value="<?php 
                      //set ses
                      if(empty($nama_barang)){echo"";}
                      elseif(!empty($nama_barang)){ echo $nama_barang; }
                      ?>">
                        <?php 
                        //set ses
                        if(empty($nama_barang)){echo"pilih barang";}
                        elseif(!empty($nama_barang)){ echo $nama_barang; }
                        ?>
                      </option>

                                  <?php
                      //sel master barang
                      foreach ($mbarang as $c) {
                      ?>
                      <option value="<?php echo $c['nama_barang'] ?>">
                        <?php echo $c['nama_barang']  ?>
                      </option>
                      <?php } ?>
                            </select>
                    </div>

                    <div class="col-md-3">
                      <label>&nbsp;</label>
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

                <!-- <div align="center">
                  <input type="submit" name="insert" id="insert" class="btn btn-primary" value="Insert" />
                </div> -->
                
                

                <!-- -- -->
                  
                  <div class="form-group mb-lg">
                    <label>Lokasi</label> 

                    <button class="mb-xs mt-xs mr-xs modal-with-zoom-anim btn btn-default btn btn-danger btn-xs" 
                    href="#lokasi" id="addToTable" >
                    <i class="fa fa-map-marker"></i>&nbsp; Tambah Lokasi
                    </button>
                    <select name="lokasi"  data-plugin-selectTwo class="form-control input-sm populate name_list">
                          <?php
                      //sel master barang
                      foreach ($lokasi as $l) {
                      ?>
                      <option value="<?php echo $l['nama_lokasi'] ?>">
                        <?php echo $l['nama_lokasi']  ?>
                      </option>
                      <?php } ?>
                    </select>
                  </div>
                  

                  <div class="form-group mb-lg ">
                    <label>Keterangan Barang <b>(optional)</b> </label>
                    <textarea name="keterangan"
                    value="<?php 
                    if(empty($keterangan)){echo"";}
                    elseif(!empty($keterangan)){ echo $keterangan; }
                    ?>"
                     placeholder="keterangan barang" class="form-control"></textarea>
                  </div>

                  
                          <!-- -- -->
                          <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />  
               </form>

               <!-- modal -->
              <br/>
              <div id="user_dialog" title="Add Data">
                <div class="form-group">
                  <label>Nama Barang<font color="red">*</font></label>
                      <select name="nama_barang[]"  id="nama_barang" data-plugin-selectTwo class="form-control input-sm populate name_list">
                        <option value="">pilih barang</option>
                      

                                  <?php
                      //sel master barang
                      foreach ($mbarang as $c) {
                      ?>
                      <option value="<?php echo $c['nama_barang']; ?>">
                        <?php echo $c['nama_barang'];  ?>
                      </option>
                      <?php } ?>

                            </select>
                  <span id="error_nama_barang" class="text-danger"></span>
                </div>



                <div class="form-group mb-lg ">
                  <label>Jumlah Barang</label>
                  <input name="quantity_out" id="quantity_out" type="" placeholder="masukkan jumlah" onkeypress="return hanyaAngka(event)" class="form-control input-sm"/>

                  <script>
                  function hanyaAngka(evt) {
                  var charCode = (evt.which) ? evt.which : event.keyCode
                  if (charCode > 31 && (charCode < 48 || charCode > 57))

                  return false;
                  return true;
                  }
                  </script>
                  <span id="error_quantity_out" class="text-danger"></span>
                </div>

                <div class="form-group" align="center">
                  <input type="hidden" name="row_id" id="hidden_row_id" />
                  <button type="button" name="save" id="save" class="btn btn-info">Save</button>
                </div>
              </div>
               <!-- modal -->

              <div id="action_alert" title="Action"> </div>
              <script>  
              $(document).ready(function(){ 
               
               var count = 0;

               $('#user_dialog').dialog({
                autoOpen:false,
                width:400
               });

               $('#add').click(function(){
                $('#user_dialog').dialog('option', 'title', 'Add Data');
                $('#nama_barang').val('');
                $('#quantity_out').val('');
                $('#error_nama_barang').text('');
                $('#error_quantity_out').text('');
                $('#nama_barang').css('border-color', '');
                $('#quantity_out').css('border-color', '');
                $('#save').text('Save');
                $('#user_dialog').dialog('open');
               });

               $('#save').click(function(){
                var error_nama_barang = '';
                var error_quantity_out = '';
                var nama_barang = '';
                var quantity_out = '';
                if($('#nama_barang').val() == '')
                {
                 error_nama_barang = 'Nama barang tidak boleh kosong';
                 $('#error_nama_barang').text(error_nama_barang);
                 $('#nama_barang').css('border-color', '#cc0000');
                 nama_barang = '';
                }
                else
                {
                 error_nama_barang = '';
                 $('#error_nama_barang').text(error_nama_barang);
                 $('#nama_barang').css('border-color', '');
                 nama_barang = $('#nama_barang').val();
                } 
                if($('#quantity_out').val() == '')
                {
                 error_quantity_out = 'Jumlah barang tidak boleh kosong';
                 $('#error_quantity_out').text(error_quantity_out);
                 $('#quantity_out').css('border-color', '#cc0000');
                 quantity_out = '';
                }
                else
                {
                 error_quantity_out = '';
                 $('#error_quantity_out').text(error_quantity_out);
                 $('#quantity_out').css('border-color', '');
                 quantity_out = $('#quantity_out').val();
                }
                if(error_nama_barang != '' || error_quantity_out != '')
                {
                 return false;
                }
                else
                {
                 if($('#save').text() == 'Save')
                 {
                  count = count + 1;
                  output = '</br> <div class="row" id="row_'+count+'">';

                  output += '<div class="col-md-5"> <input type="" readonly="" name="nama_barang[]" id="nama_barang'+count+'" class="nama_barang form-control input-sm" value="'+nama_barang+'" /></div>';
                  output += '<div class="col-md-2"> <input type="" name="quantity_out[]" readonly="" class="form-control input-sm" id="quantity_out'+count+'" value="'+quantity_out+'" /></div>';
                  output += '<div class="col-md-1"><button type="button" name="view_details" class="btn btn-warning btn-xs view_details" id="'+count+'">View</button></div>';
                  output += '<div class="col-md-1"><button type="button" name="remove_details" class="btn btn-danger btn-xs remove_details" id="'+count+'">Remove</button></div>';

                  output += '</div>'; 
                  $('#user_data').append(output);
                 }
                 else
                 {
                  var row_id = $('#hidden_row_id').val();
                  output = '<div class="col-md-5"> <input type="" readonly="" name="nama_barang[]" id="nama_barang'+row_id+'" class="nama_barang form-control input-sm" value="'+nama_barang+'" /></div>';

                  output += '<div class="col-md-2"> <input type="" name="quantity_out[]" readonly="" class="form-control input-sm" id="quantity_out'+row_id+'" value="'+quantity_out+'" /></div>';

                  output += '<div class="col-md-1"><button type="button" name="view_details" class="btn btn-warning btn-xs view_details" id="'+row_id+'">View</button></div>';
                  output += '<div class="col-md-1"><button type="button" name="remove_details" class="btn btn-danger btn-xs remove_details" id="'+row_id+'">Remove</button></div>';
                  $('#row_'+row_id+'').html(output);
                 }

                 $('#user_dialog').dialog('close');
                }
               });

               $(document).on('click', '.view_details', function(){
                var row_id = $(this).attr("id");
                var nama_barang = $('#nama_barang'+row_id+'').val();
                var quantity_out = $('#quantity_out'+row_id+'').val();
                $('#nama_barang').val(nama_barang);
                $('#quantity_out').val(quantity_out);
                $('#save').text('Edit');
                $('#hidden_row_id').val(row_id);
                $('#user_dialog').dialog('option', 'title', 'Edit Data');
                $('#user_dialog').dialog('open');
               });

               $(document).on('click', '.remove_details', function(){
                var row_id = $(this).attr("id");
                if(confirm("Yakin, ingin menghapus data ini?"))
                {
                 $('#row_'+row_id+'').remove();
                }
                else
                {
                 return false;
                }
               });

               $('#action_alert').dialog({
                autoOpen:false
               });

               $('#user_form').on('submit', function(event){
                event.prevendivefault();
                var count_data = 0;
                $('.nama_barang').each(function(){
                 count_data = count_data + 1;
                });
                if(count_data > 0)
                {
                 var form_data = $(this).serialize();
                 $.ajax({
                  // url:"insert.php",
                  method:"POST",
                  data:form_data,
                  success:function(data)
                  {
                   $('#user_data').find("tr:gt(0)").remove();
                   $('#action_alert').html('<p>Data Inserted Successfully</p>');
                   $('#action_alert').dialog('open');
                  }
                 })
                }
                else
                {
                 $('#action_alert').html('<p>Please Add atleast one data</p>');
                 $('#action_alert').dialog('open');
                }
               });
               
              });  
              </script>

              </br></br></br>
              <!-- ss -->
            </div>
          </section>
          
        </div>
      </div>

      <!-- modal lokasi -->
      <div id="lokasi" class="zoom-anim-dialog modal-block modal-block-primary mfp-hide">
          <section class="panel">
            <header class="panel-heading">
              <h2 class="panel-title">Lokasi</h2>
            </header>
            <div class="panel-body">
              <div class="modal-wrapper">
                <form action="<?php echo site_url('stockout/create')?>" method="post">
                  <label>lokasi</label>
                  <input type="text" id="n22" onkeyup="n2()" name="lokasi" placeholder="masukkan lokasi"  class="form-control">
                  
                  <div style="margin-top: 1%;">
                    <input type="submit" value="submit" class="btn btn-sm btn-primary">
                  </div>
                </form> 
              </div>

              <div class="col-md-12 table-responsive" style="margin-top:2%; ">
                <table id="example3" class="table table-striped table-bordered" style="width:100%">
                  <thead>
                    <tr>
                      <th>Lokasi</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    foreach ($lokasi as $l){
                    ?>
                    <tr>
                    
                    <td><?php echo $l['lokasi'];?></td>
                    <td>
                     <a href="<?= base_url(''); ?>lokasi/edit/<?= $l['id']; ?>">
                      <i class="fa fa-edit"></i>
                    </a> |
                    <a href="<?= base_url(''); ?>lokasi/delete/<?= $l['id']; ?>" onclick="return confirm('Sure want delete this data?')">
                      <i class="fa fa-trash-o"></i>
                    </a>
                    </td>

                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
                
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
      </div>
      <!-- modal lokasi -->

      <!-- Vendor -->
      <script src="<?php echo base_url();?>/assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js">
      </script>
      <script src="<?php echo base_url();?>/assets/vendor/bootstrap/js/bootstrap.js">
      </script>
      <script src="<?php echo base_url();?>/assets/vendor/nanoscroller/nanoscroller.js">
      </script>
      <script src="<?php echo base_url();?>/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js">
      </script>
      <script src="<?php echo base_url();?>/assets/vendor/magnific-popup/magnific-popup.js">
      </script>
      <script src="<?php echo base_url();?>/assets/vendor/jquery-placeholder/jquery.placeholder.js">
      </script>
      <!-- Specific Page Vendor -->
      <script src="<?php echo base_url();?>/assets/vendor/pnotify/pnotify.custom.js">
      </script>
      <script src="<?php echo base_url();?>/assets/vendor/jquery-datatables/media/js/jquery.dataTables.js">
      </script>
      <script src="<?php echo base_url();?>/assets/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js">
      </script>
      <script src="<?php echo base_url();?>/assets/vendor/jquery-datatables-bs3/assets/js/datatables.js">
      </script>
      <!-- <script src="<?php echo base_url();?>/assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script> -->
      <script src="<?php echo base_url();?>/assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js">
      </script>
      <script src="<?php echo base_url();?>/assets/vendor/select2/select2.js">
      </script>
      <script src="<?php echo base_url();?>/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js">
      </script>
      <script src="<?php echo base_url();?>/assets/vendor/jquery-maskedinput/jquery.maskedinput.js">
      </script>
      <script src="<?php echo base_url();?>/assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.js">
      </script>
      <script src="<?php echo base_url();?>/assets/vendor/bootstrap-colorpicker/js/bootstrap-colorpicker.js">
      </script>
      <script src="<?php echo base_url();?>/assets/vendor/bootstrap-timepicker/js/bootstrap-timepicker.js">
      </script>
      <script src="<?php echo base_url();?>/assets/vendor/fuelux/js/spinner.js">
      </script>
      <script src="<?php echo base_url();?>/assets/vendor/dropzone/dropzone.js">
      </script>
      <script src="<?php echo base_url();?>/assets/vendor/bootstrap-markdown/js/markdown.js">
      </script>
      <script src="<?php echo base_url();?>/assets/vendor/bootstrap-markdown/js/to-markdown.js">
      </script>
      <script src="<?php echo base_url();?>/assets/vendor/bootstrap-markdown/js/bootstrap-markdown.js">
      </script>
      <script src="<?php echo base_url();?>/assets/vendor/codemirror/lib/codemirror.js">
      </script>
      <script src="<?php echo base_url();?>/assets/vendor/codemirror/addon/selection/active-line.js">
      </script>
      <script src="<?php echo base_url();?>/assets/vendor/codemirror/addon/edit/matchbrackets.js">
      </script>
      <script src="<?php echo base_url();?>/assets/vendor/codemirror/mode/javascript/javascript.js">
      </script>
      <script src="<?php echo base_url();?>/assets/vendor/codemirror/mode/xml/xml.js">
      </script>
      <script src="<?php echo base_url();?>/assets/vendor/codemirror/mode/htmlmixed/htmlmixed.js">
      </script>
      <script src="<?php echo base_url();?>/assets/vendor/codemirror/mode/css/css.js">
      </script>
      <script src="<?php echo base_url();?>/assets/vendor/summernote/summernote.js">
      </script>
      <script src="<?php echo base_url();?>/assets/vendor/bootstrap-maxlength/bootstrap-maxlength.js">
      </script>
      <script src="<?php echo base_url();?>/assets/vendor/ios7-switch/ios7-switch.js">
      </script>
      <!-- Theme Base, Components and Settings -->
      <script src="<?php echo base_url();?>/assets/javascripts/theme.js">
      </script>
      <!-- Theme Custom -->
      <script src="<?php echo base_url();?>/assets/javascripts/theme.custom.js">
      </script>
      <!-- Theme Initialization Files -->
      <script src="<?php echo base_url();?>/assets/javascripts/theme.init.js">
      </script>
      <script src="<?php echo base_url();?>/assets/vendor/dropzone/dropzone.js">
      </script>
      <script src="<?php echo base_url();?>/assets/vendor/jquery-autosize/jquery.autosize.js">
      </script>
      <script src="<?php echo base_url();?>/assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.js">
      </script>
      <!-- Examples -->
      <script src="<?php echo base_url();?>/assets/javascripts/ui-elements/examples.modals.js">
      </script>
      <script src="<?php echo base_url();?>/assets/javascripts/forms/examples.advanced.form.js" />
      </script>
    <script src="<?php echo base_url();?>/assets/javascripts/tables/examples.datatables.default.js">
    </script>
    <script src="<?php echo base_url();?>/assets/javascripts/tables/examples.datatables.row.with.details.js">
    </script>
    <script src="<?php echo base_url();?>/assets/javascripts/tables/examples.datatables.tabletools.js">
    </script>
    <!-- uppper -->
    <script>
    function n1() 
    {
      var x = document.getElementById("n11");
      x.value = x.value.toUpperCase();
    }
    </script>
    <!-- uppper -->


    <!-- datatables -->
    <script type="text/javascript">
      $(document).ready(function() 
                        {
        $('#example').DataTable( {
          "scrollY":        "200px",
          "scrollCollapse": true,
          "paging":         false
        }
                               );
      }
                       );
    </script>
    <!-- datatables -->
    <!-- datatables -->
    <script type="text/javascript">
      $(document).ready(function() 
                        {
        $('#example2').DataTable( {
          "scrollY":        "200px",
          "scrollCollapse": true,
          "paging":         false
        }
                                );
      }
                       );
    </script>
    <!-- datatables -->

  </body>
</html>
