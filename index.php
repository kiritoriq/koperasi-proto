<?php
  require_once('header.php');
  $page = (isset($_GET['page']))?$_GET['page'] : 'beranda';
  require_once('navbar.php');
  include('config/query.php');
  // $q = new Query();
  // $sql = "SELECT * FROM tr_pengaduan WHERE gambar != '' OR gambar != NULL";
  // $select = $q->query($sql);
  // $view = $q->store($select);
  // foreach($view as $rs => $i) {
  //   echo $i[6];
  // }
?>  
<script>
  $(document).ready(function() {
    $.ajax({
      url: 'maincontent.php',
      type: 'get',
      success: function(response) {
        $('#utama').html(response);
        $('#link0').addClass('active');
      },
      error: function(error) {
        console.log(error);
      }
    })

    $('#utama').css('opacity', 0.15);
    $('#loading-state').delay(1000).fadeOut('','linear',function() {
      $('#utama').css('opacity', 1);
    })
  })
</script>
    <div class="container" style="margin-top: 150px;">
    <div id="loading-state" class="text-center">
      <div class="spinner-border text-primary" role="status">
        <span class="sr-only">Loading...</span>
      </div>
    </div>
    <div id="utama">
      <?php
        switch($page) {
          case 'inputlaporan':
            include('proses/inputlaporan.php');
            break;
        }
      ?>
    </div>
    </div>
<?php
  require_once('footer.php');
?>