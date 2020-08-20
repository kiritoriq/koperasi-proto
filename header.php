<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Icon Image -->
    <link rel="shortcut icon" href="assets/img/favicon.jpg">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Fileinput JS -->
    <link rel="stylesheet" href="assets/css/fileinput.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- JQuery UI -->
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
    <!-- Datetimepicker -->
    <link rel="stylesheet" href="admin/assets/plugins/datetimepicker/css/bootstrap-datetimepicker.min.css">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <!-- Plugins Fileinput -->
    <script src="assets/js/plugins/piexif.min.js"></script>
    <!-- Plugins Fileinput -->
    <script src="assets/js/plugins/sortable.min.js"></script>
    <!-- Plugins Fileinput -->
    <script src="assets/js/plugins/purify.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script> -->
    <!-- MomentJS -->
    <script src="admin/assets/bower_components/moment/min/moment.min.js"></script>
    <!-- Datepicker -->
    <script src="admin/assets/plugins/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
    <script src="assets/js/plugins/bootbox/bootbox.all.min.js"></script>
    <!-- Fileinput JS -->
    <script src="assets/js/fileinput.min.js"></script>
    <!-- JQuery Number -->
  <script src="admin/assets/plugins/Number/jquery.number.min.js"></script>

    <title>KPRI | Pendaftaran</title>
  </head>
    <style>
      .pull-left {
        float: left !important;
      }

      .pull-right {
        float: right !important;
      }

      .label {
        display: inline;
        padding: .2em .6em .3em;
        font-size: 85%;
        font-weight: bold;
        line-height: 1;
        color: #ffffff;
        text-align: center;
        white-space: nowrap;
        vertical-align: baseline;
        border-radius: .25em;
      }

      .label-default {
        background-color: #999999;
      }

      .label-success {
        background-color: #5cb85c;
      }

      .label-warning {
        background-color: #f0ad4e;
      }

      .label-primary {
        background-color: #428bca;
      }

      .label-danger {
        background-color: #d9534f;
      }

      .proses .label {
        opacity: 0.15;
      }

      .proses .label.jalan {
        opacity: 1;
      }

      .carousel-caption {
        position: absolute;
        /*width: 635px;*/
        right: 0;
        bottom: 20px;
        left: 0;
        z-index: 10;
        padding-top: 20px;
        padding-bottom: 20px;
        color: #fdee09;
        text-align: center;
        background-color: rgba(0,0,0,0.5);
        position: absolute;
        bottom: 0;
        display: block;
        padding: 20px;
      }

      .carousel-inner img {
          width: 100%;
          height: 100%;
      }

      footer {
        /*background: #222;*/
        color: #fff;
        padding-top: 10px;
      }

      footer .copyright {
        padding: 15px 0;
        background: #c4c4c4 !important;
        margin-top: 20px;
        font-size: 15px;
      }

      footer .copyright span {
        color: #0894d1;
      }

      body {
        background-color: #eeeeee;
        /*padding-top: 60px;*/
      }

      .bg-yellow {
        background-color: #dbd46e !important;
      }

      .bg-red {
        background-color: #c30000 !important;
      }

      .navbar-dark .navbar-nav .nav-link {
        color: #0b0b0b;
        font-weight: 500;
      }

      .navbar-dark .navbar-nav .active > .nav-link, .navbar-dark .navbar-nav .nav-link.active, .navbar-dark .navbar-nav .show > .nav-link {
        /*background-color: rgba(255, 0, 0, 0.5);*/
        padding-top: none;
        color: #fff;
        font-weight: 500;
      }

      .navbar-dark .navbar-nav .nav-link:focus, .navbar-dark .navbar-nav .nav-link:hover {
        text-decoration: none;
        color: #fff;
      }

      .carousel-inner img {
        height: 500px;
      }

      .btn-yellow {
        color:rgba(255, 0, 0, 0.5);background-color:#dbd46e;border-color:#eee235;
      }

      .form-check-inline {
        display: -ms-inline-flexbox;
        display: inline-flex;
        -ms-flex-align: center;
        align-items: center;
        padding-left: 150px;
        margin-right: 150px;
    }
    </style>
  <body>