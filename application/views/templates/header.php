<!doctype html>
<html class="fixed">

<head>
    <!-- Basic -->
    <meta charset="UTF-8">

    <title><?= $title; ?></title>
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
    <script src="<?php echo base_url(); ?>assets/vendor/modernizr/modernizr.js"></script>

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
    <script src="<?php echo base_url(''); ?>assets/js/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            // Sembunyikan alert validasi kosong
            $("#kosong").hide();
        });
    </script>
</head>

<body>