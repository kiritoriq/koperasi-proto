<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Dashboard
		<small>Informasi Umum</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Dashboard</li>
	</ol>
</section>
<?php 
  $q = new Query();
  $sql = "SELECT * FROM tr_anggota WHERE email = '".$_SESSION['email']."' AND is_aktif = '1'";
  $select = $q->query($sql);
  $item = $q->fetching_single($select);
?>
<section class="content">
	<div class="row">
    <div class="col-md-3">
      <div class="box box-warning">
        <div class="box-body box-profile">
          <img class="profile-user-img img-responsive img-circle" src="../assets/dist/img/<?php echo $_SESSION['image'] ?>" alt="Profile Picture">
          <h3 class="profile-username text-center"><?php echo $_SESSION['name'] ?></h3>
          <p class="text-muted text-center"><?php echo $_SESSION['role'] ?></p>
          <ul class="list-group list-group-unbordered">
            <li class="list-group-item">
              <b>Email</b>
              <a class="pull-right"><?php echo $_SESSION['email'] ?></a>
            </li>
            <li class="list-group-item">
              <b>NIPP</b>
              <a class="pull-right"><?php echo $item['nipp'] ?></a>
            </li>
            <li class="list-group-item">
              <b>Tanggal Aktif</b>
              <a class="pull-right"><?php echo date('d-m-Y H:i:s', strtotime($item['created_at']))." WIB" ?></a>
            </li>
          </ul>
          <a class="btn btn-primary btn-block" href=""><b><i class="fa fa-pencil"></i> Edit Profil</b></a>
        </div>
      </div>
    </div>
    <div class="col-md-9">
      <div class="box box-warning">
        <div class="box-header with-border">
          <h3 class="box-title">History Transaksi</h3>
        </div>
        <div class="box-body">
          <div class="table-responsive">
            <!-- <table class="table table-bordered table-striped"> -->
              <p><i>Masih Kosong</i></p>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>