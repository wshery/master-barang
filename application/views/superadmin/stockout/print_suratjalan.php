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
    <!-- Invoice Print Style -->
    <link rel="stylesheet" href="assets/stylesheets/invoice-print.css" />
  </head>

  <body data-spy="scroll" data-target="#myScrollspy" data-offset="20">

    <div class="invoice">
                                
                                <header class="clearfix">
                                    <div class="row">
                                        <div class="col-sm-12 mt-md" style="margin-bottom: -1.5%;">
                                            <h2 class="h6 mt-none mb-sm text-left" >surat jalan asli kembali ke HO/GA</h2>
                                        </div>

                                        <div class="col-sm-2 mt-md">
                                            <h2 class="h2 mt-none mb-sm text-dark text-bold">SURAT JALAN</h2>
                                            <!-- <h4 class="h4 m-none text-dark text-bold">#76598345</h4> -->
                                        </div>
                                        <div class="col-sm-10 text-right mt-md mb-md">
                                            <!-- <address class="ib mr-xlg">
                                                Okler Themes Ltd
                                                <br/>
                                                24 Henrietta Street, London, England
                                                <br/>
                                                Phone: +12 3 4567-8901
                                                <br/>
                                                okler@okler.net
                                            </address> -->
                                            <div class="ib" style="padding-right: 20px; padding-bottom: 5px; margin-top: -20px; ">
                                                <img src="<?php echo base_url();?>/assets/images/Logo IJSM2.jpg" width="100px" hwight="100px" alt="OKLER Themes" />
                                            </div>
                                        </div>
                                    </div>
                                </header>
                                <div class="bill-info">
                                    <div class="row justify-content-center">
                                        <div class="col-md-7">
                                            <?php
                                            foreach ($no_surat as $no) { ?>
                                            <div class="col-md-12  h3" style="margin-top: -0.5%; margin-left: 35%; padding-bottom: 5% text-center;"><?php echo $no['no_suratjalan']; ?></div>
                                            <?php } ?>
                                        </div>

                                        <div class="col-md-5" style="margin-top: -0.5%; padding-bottom: 5%;">
                                            <div class="bill-data text-right">
                                                <p class="mb-none">
                                                    <span class="text-dark">Tanggal Surat Jalan :</span>
                                                    <span class="value"><?php echo date('d/m/Y');?></span>
                                                </p>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                                <div class="table-responsive">
                                    <table class="table invoice-items">
                                        <thead>
                                            <tr class="h4 text-dark">
                                                <th id="cell-qty"   class="text-left text-semibold">No</th>
                                                <th id="cell-item"   class="text-left text-semibold">Kode Barang</th>
                                                <th id="cell-item"   class="text-left text-semibold">Nama Barang</th>
                                                <th id="cell-qty"   class="text-left text-semibold">Jumlah Barang</th>
                                                <th id="cell-item"   class="text-left text-semibold">Tujan Proyek</th>
                                                <!-- <th id="cell-desc"   class="text-center text-semibold">Lokasi Barang</th> -->
                                                <th id="cell-desc"    class="text-center text-semibold">Keterangan</th>
                                                <!-- <th id="cell-price"  class="text-left text-semibold">Harga Barang</th>
                                                <th id="cell-price"  class="text-center text-semibold">Subtotal</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php  

                                            function rupiah($angka){
                                              $hasil_rupiah = "Rp. " . number_format($angka,0,',','.');
                                              return $hasil_rupiah;
                                             }
                                            $i=1;
                                            foreach ($suratjalan as $sj){ ?>
                                            
                                            
                                            <tr>
                                                <td class="text-left"><?php echo $i;  ?></td>
                                                <td class="text-left text-semibold text-dark"><?php echo $sj['kode_barang']; ?></td>
                                                <td class="text-left text-semibold text-dark"><?php echo $sj['nama_barang']; ?></td>
                                                <td class="text-left"><?php echo $sj['jumlah'].' '.$sj['satuan'];  ?></td>
                                                <td class="text-left"><?php echo $sj['lokasi'];  ?></td>
                                                <td class="text-center"><?php echo $sj['keterangan']; ?></td>
                                                <!-- <td class="text-left"><?php echo rupiah($sj['harga']); ?></td>
                                                <td class="text-center"><?php echo rupiah($sj['subtotal']); ?></td> -->
                                            </tr>
                                            <?php
                                             $i++; 
                                             } ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            
                                <div class="invoice-summary">
                                    <div class="row">
                                        <div class="col-sm-4 col-sm-offset-8">
                                            <table class="table h5 text-dark">
                                                <tbody>
                                                    <tr>
                                                            <!-- $harga=50000;
                                                            $ppn=0.1;
                                                            $hitung_ppn =$harga*$ppn;
                                                            $harga_sekarang = $harga - $hitung_ppn;
                                                            echo" harga asli = $harga<br/> harga sesudah ppn = $harga_sekarang ";?> -->
                                                        <!-- <td colspan="2">PPN (10%)</td>
                                                        <td class="text-left">
                                                          <?php
                                                          foreach ($total as $tot){
                                                                $ppn = 0;
                                                                $total = $tot->total;
                                                                $hitung_ppn = $total * $ppn;
                                                                echo rupiah($hitung_ppn);
                                                                
                                                            
                                                            ?>
                                                        </td>
                                                    </tr>
                                                    <tr class="h4">
                                                        <td colspan="2">Grand Total</td>
                                                        <td class="text-left">
                                                            <?php
                                                                $grand_total = $total+$hitung_ppn;
                                                                echo rupiah($grand_total);
                                                              }
                                                            ?>
                                                        </td> -->
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

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
      window.print();
    </script>
    <script>
      function n1() 
      {
        var x = document.getElementById("n11");
        x.value = x.value.toUpperCase();
      }
      function n2() 
      {
        var x = document.getElementById("n22");
        x.value = x.value.toUpperCase();
      }
      function n3() 
      {
        var x = document.getElementById("n33");
        x.value = x.value.toUpperCase();
      }
      function n4() 
      {
        var x = document.getElementById("n44");
        x.value = x.value.toUpperCase();
      }
      function n5() 
      {
        var x = document.getElementById("n55");
        x.value = x.value.toUpperCase();
      }
    </script>
    <!-- uppper -->
    <script>
      $(document).ready(function(){
        $('#checkAll').click(function(){
          if(this.checked){
            $('.checkbox').each(function(){
              this.checked = true;
            }
                               );
          }
          else{
            $('.checkbox').each(function(){
              this.checked = false;
            }
                               );
          }
        }
                            );
        $('#delete').click(function(){
          var dataArr  = new Array();
          if($('input:checkbox:checked').length > 0){
            $('input:checkbox:checked').each(function(){
              dataArr.push($(this).attr('id'));
              $(this).closest('tr').remove();
            }
                                            );
            sendResponse(dataArr)
          }
          else{
            alert('No record selected ');
          }
        }
                          );
        function sendResponse(dataArr){
          $.ajax({
            type    : 'post',
            url     : '<?php echo site_url('proses_data/process_seldel'); ?>',
            data    : {
            'data' : dataArr}
                 ,
                 success : function(response){
            alert(response);
            window.location.href = '<?php echo site_url('view_item/data_item'); ?>';
          }
          ,
            error   : function(errResponse){
              alert(errResponse);
              window.location.href = '<?php echo site_url('view_item/data_item'); ?>';
            }
        }
        );
      }
                        }
                       );
    </script>
    <!-- jquery-maskmoney-master -->
    <script src="<?php echo base_url();?>/assets/jquery-maskmoney-master/dist/jquery.maskMoney.js">
    </script>
    <script src="<?php echo base_url();?>/assets/jquery-maskmoney-master/dist/jquery.maskMoney.min.js">
    </script>
    <script>
      $(document).ready(function(){
        $('#harga').maskMoney({
          prefix:'Rp. ', thousands:'.', decimal:',', precision:0}
                             );
      }
                       );
    </script>
    <!-- jquery-maskmoney-master -->
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
    <!-- uppper -->
    <script>
      function n1() 
      {
        var x = document.getElementById("n11");
        x.value = x.value.toUpperCase();
      }
    </script>
    <!-- uppper -->
  </body>
</html>
