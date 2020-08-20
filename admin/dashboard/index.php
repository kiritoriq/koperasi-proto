<?php 
  session_start();
    if($_SESSION['status']!="logged in"){
      header("location:../login/index.php");
    }
  require_once('header.php');
  $page = (isset($_GET['page']))?$_GET['page'] : 'maindashboard';
  require_once('sidebar.php');
  include('../../config/query.php');
?>
<script>
  $(document).ready(function() {
    $('#loading-state').delay(850).fadeOut();
  })
</script>

<style>
  #loading-state {
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,.7);
    position: fixed;
    z-index: 2000;
    display: nones;
}

.loadings {
    position: relative;
    /*left:46%; */
    top:45%;
    color: white;
}
</style>
<?php
  function tanggalindonesia($date) {
    $x = explode('-', $date);
    $tgl = $x[0];
    $bulan = "";
    $thn = $x[2];
    switch($x[1]) {
      case '01':
        $bulan = 'Januari';
        break;
      case '02':
        $bulan = 'Februari';
        break;
      case '03':
        $bulan = 'Maret';
        break;
      case '04':
        $bulan = 'April';
        break;
      case '05':
        $bulan = 'Mei';
        break;
      case '06':
        $bulan = 'Juni';
        break;
      case '07':
        $bulan = 'Juli';
        break;
      case '08':
        $bulan = 'Agustus';
        break;
      case '09':
        $bulan = 'September';
        break;
      case '10':
        $bulan = 'Oktober';
        break;
      case '11':
        $bulan = 'November';
        break;
      case '12':
        $bulan = 'Desember';
        break;
    }

    return $tgl." ".$bulan." ".$thn; 
  }
?>

  <div id="loading-state">
      <p class='loadings' align='center'>
          <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>            
      </p>
  </div>
  <!-- Content Wrapper. Contains page content -->
  <div id="utama" class="content-wrapper">
        <!-- Main content -->
          <?php
            switch($page) {
              case 'maindashboard':
                if($_SESSION['role_id'] > 10) {
                  include('page/dashboardanggota.php');
                } else {
                  include('page/maindashboard.php');
                }
                break;

              case 'pengajuanpinjam':
                include('page/listpinjamananggota.php');
                break;

              case 'pendaftarananggota':
                include('page/listpendaftaran.php');
                break;

              case 'dataanggota':
                include('page/listanggota.php');
                break;

              case 'daftarpinjam':
                include('page/listpinjaman.php');
                break;

              case 'inputpinjam':
                include('page/inputpinjam.php');
                break;

              case 'inputsimpan':
                include('page/inputsimpan.php');
                break;

              case 'daftarsimpan':
                include('page/listsimpan.php');
                break;

              case 'daftarangsuran':
                include('page/listangsuran.php');
                break;

              case 'laporantagihan':
                include('page/laporantagihan.php');
                break;

              case 'laporankegiatan':
                include('page/laporankegiatan.php');
                break;

              case 'laporanpotonggaji':
                include('page/laporanpotonggaji.php');
                break;

              case 'user':
                include('page/listuser.php');
                break;

              case 'createbagian':
                include('proses/createbagian.php');
                break;

              case 'daftarlaporan':
                include('page/daftarlaporan.php');
                break;

              case 'pengundurandiri':
                include('page/pengundurandiri.php');
                break;

              case 'lihatsimpan':
                include('page/listsimpananggota.php');
                break;

              case 'lihatangsuran':
                include('page/listangsurananggota.php');
                break;

              case 'listundurdiri':
                include('page/listundurdiri.php');
                break;
            } 
          ?>
<?php 
  require_once('footer.php');
?>
