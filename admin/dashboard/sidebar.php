  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar elevation-4">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../assets/dist/img/<?php echo $_SESSION['image']; ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['name']; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <?php if($_SESSION['role_id'] > 10) {
      ?>
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">MAIN NAVIGATION</li>
          <li class="<?php if($page == 'maindashboard') echo 'active'; else echo ''; ?>">
            <a href="index.php?page=maindashboard">
              <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            </a>
          </li>
          <li class="treeview <?php if($page == 'pengajuanpinjam') echo 'active'; else echo ''; ?>">
            <a href="#">
              <i class="fa fa-dollar"></i> <span>Transaksi</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="<?php if($page == 'pengajuanpinjam') echo 'active'; else echo ''; ?>">
                <a href="index.php?page=pengajuanpinjam"><i class="fa  fa-chevron-circle-right"></i> Pengajuan Pinjam</a>
              </li>
            </ul>
          </li>
          <li class="treeview <?php if($page == 'lihatsimpan' || $page == 'lihatangsuran') echo 'active'; else echo ''; ?>">
            <a href="#">
              <i class="fa fa-eye"></i> <span>Lihat Data</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="<?php if($page == 'lihatsimpan') echo 'active'; else echo ''; ?>">
                <a href="index.php?page=lihatsimpan"><i class="fa  fa-chevron-circle-right"></i> Data Simpan</a>
              </li>
              <li class="<?php if($page == 'lihatangsuran') echo 'active'; else echo ''; ?>">
                <a href="index.php?page=lihatangsuran"><i class="fa  fa-chevron-circle-right"></i> Data Angsuran</a>
              </li>
            </ul>
          </li>
          <li class="treeview <?php if($page == 'pengundurandiri') echo 'active'; else echo ''; ?>">
            <a href="#">
              <i class="fa fa-sign-out"></i> <span>Pengunduran Diri</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="<?php if($page == 'pengundurandiri') echo 'active'; else echo ''; ?>">
                <a href="index.php?page=pengundurandiri"><i class="fa  fa-chevron-circle-right"></i> Permohonan Pengunduran Diri</a>
              </li>
            </ul>
          </li>
        </ul>
      <?php
        } else { 
      ?>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="<?php if($page == 'maindashboard') echo 'active'; else echo ''; ?>">
          <a href="index.php?page=maindashboard">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <?php if($_SESSION['role_id'] == 1 || $_SESSION['role_id'] == 3 || $_SESSION['role_id'] == 5) { ?>
        <li class="treeview <?php if($page == 'pendaftarananggota' || $page == 'dataanggota' || $page == 'listundurdiri') echo 'active'; else echo ''; ?>">
          <a href="#">
            <i class="fa fa-archive"></i> <span>Keanggotaan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if($page == 'dataanggota') echo 'active'; else echo ''; ?>">
              <a href="index.php?page=dataanggota"><i class="fa  fa-chevron-circle-right"></i> Data Anggota</a>
            </li>
            <li class="<?php if($page == 'listundurdiri') echo 'active'; else echo ''; ?>">
              <a href="index.php?page=listundurdiri"><i class="fa  fa-chevron-circle-right"></i> Pengunduran Diri Anggota</a>
            </li>
            <li class="<?php if($page == 'pendaftarananggota') echo 'active'; else echo ''; ?>">
              <a href="index.php?page=pendaftarananggota"><i class="fa  fa-chevron-circle-right"></i> Pendaftaran Anggota</a>
            </li>
          </ul>
        </li>
      <?php } ?>
        <li class="treeview <?php if($page == 'daftarpinjam' || $page == 'daftarsimpan' || $page == 'daftarangsuran') echo 'active'; else echo ''; ?>">
          <a href="#">
            <i class="fa fa-dollar"></i> <span>Transaksi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if($page == 'daftarsimpan') echo 'active'; else echo ''; ?>">
              <!-- <a href="index.php?page=inputsimpan"><i class="fa fa-chevron-circle-right"></i> Entry Simpan</a> -->
              <a href="index.php?page=daftarsimpan"><i class="fa fa-chevron-circle-right"></i> Daftar Simpanan</a>
            </li>
            <?php if($_SESSION['role_id'] == 1 || $_SESSION['role_id'] == 3 || $_SESSION['role_id'] == 5) { ?>
            <li class="<?php if($page == 'daftarpinjam') echo 'active'; else echo ''; ?>">
              <!-- <a href="index.php?page=inputpinjam"><i class="fa  fa-chevron-circle-right"></i> Entry Pinjam</a> -->
              <a href="index.php?page=daftarpinjam"><i class="fa  fa-chevron-circle-right"></i> Daftar Pinjaman</a>
            </li>
          <?php } ?>
            <li class="<?php if($page == 'daftarangsuran') echo 'active'; else echo ''; ?>">
              <a href="index.php?page=daftarangsuran"><i class="fa  fa-chevron-circle-right"></i> Angsuran dan Pelunasan</a>
            </li>
          </ul>
        </li>
        <li class="treeview <?php if($page == 'laporantagihan' || $page == 'laporankegiatan' || $page == 'laporanpotonggaji') echo 'active'; else echo ''; ?>">
          <a href="#">
            <i class="fa fa-files-o"></i> <span>Laporan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if($page == 'laporantagihan') echo 'active'; else echo ''; ?>">
              <a href="index.php?page=laporantagihan"><i class="fa  fa-chevron-circle-right"></i> Laporan Angsuran Pelunasan</a>
            </li>
            <li class="<?php if($page == 'laporanpotonggaji') echo 'active'; else echo ''; ?>">
              <a href="index.php?page=laporanpotonggaji"><i class="fa  fa-chevron-circle-right"></i> Laporan Simpan</a>
            </li>
            
          </ul>
        </li>
        <?php if($_SESSION['role_id'] == 1) {
          echo '<li class="treeview '.(($page=='user')?"active":"").'">
                <a href="#">
                  <i class="fa fa-gear"></i> <span>Setting</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li class="'.(($page=='user')?"active":"").'">
                    <a href="index.php?page=user"><i class="fa  fa-chevron-circle-right"></i> Users</a>
                  </li>
                </ul>
              </li>';
                  // <li class="submenu">
                  //   <a href=""><i class="fa  fa-chevron-circle-right"></i> Laporan Kegiatan</a>
                  // </li>
                  // <li class="submenu">
                  //   <a href=""><i class="fa  fa-chevron-circle-right"></i> Laporan Simpan Potong Gaji</a>
                  // </li>
        } ?>
      </ul>
    <?php } ?>
    </section>
    <!-- /.sidebar -->
  </aside>