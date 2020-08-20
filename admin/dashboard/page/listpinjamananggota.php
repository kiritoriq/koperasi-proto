<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Pinjaman
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li>Transaksi</li>
		<li class="active">Pinjaman</li>
	</ol>
</section>

<section class="content">
	<div class="box box-warning">
		<div class="row">
			<div class="col-md-12">
	<?php
		$q = new Query();
		$sel = $q->query('SELECT id FROM tr_anggota WHERE email = "'.$_SESSION['email'].'" AND is_aktif="1"');
		$item = $q->fetching_single($sel);
		$id = $item['id'];
		$sql = "SELECT * FROM tr_pinjam WHERE id_anggota = '".$id."'";
		$select = $q->query($sql);
		$count = $select->num_rows;
		// var_dump($count);
		if($count <= 0){
	?>
				<div class="box-header">
				</div>
				<div class="box-body">
					<p class="text-center">
						<i>Anda Belum Pernah Melakukan Peminjaman</i>
						<br>
						<button id="pinjamnow" class="btn btn-primary" type="button">Pinjam Sekarang</button>
					</p>
				</div>
	<?php } else { ?>
				<div class="box-header with-border">
					<h4>Riwayat Pinjaman</h4>
					<!-- <button id="tambah" type="button" class="btn btn-success"><i class="fa fa-plus-circle"></i> Buat Baru</button> -->
				</div>
				<div class="box-body">
					<table id="table1" class="table table-bordered table-striped">
						<thead class="bg-kuning">
							<tr>
			                  <th>Tanggal Pengajuan</th>
			                  <th>Unit Peminjaman</th>
			                  <th>Besar Pinjaman</th>
			                  <th>Masa Angsuran</th>
			                  <th>Jumlah Angsuran</th>
			                  <th>Status</th>
			                  <!-- <th>Aksi</th> -->
			                </tr>
						</thead>
						<tbody>
							<?php
								$sql = "SELECT * FROM tr_pinjam WHERE id_anggota = '".$id."'";
								$select = $q->query($sql);
								$store = $q->store($select);
								foreach($store as $rs => $i){
									$tglpengajuan = date('d-m-Y', strtotime($i[11]));
									// $bunga = (int)$i[4] * 0.01;
									// $jmlangsur = (int)$i[7] + (int)$bunga;
									echo "<tr>
											<td>".tanggalindonesia($tglpengajuan).", ".date('H:i:s', strtotime($i[11]))." WIB</td>
											<td>".(($i[2]==1)?'Unit Investasi':'Unit Kredit')."</td>
											<td>Rp ".number_format($i[4],0)."</td>
											<td>".$i[5]." kali</td>
											<td>".number_format($i[7], 0)."</td>
											<td>".(($i[8]==1)?'Disetujui':'<i>Masih dalam Proses Persetujuan</i>')."</td>
										</tr>";
											// <td><strong class='".(($i[11]==1)?'text-success':'text-danger')."'>".(($i[11]==1)?'Sudah':'Belum')."</strong>
											// </td>
								}
							?>
						</tbody>
					</table>
				</div>
<?php } ?>
			</div>
		</div>
	</div>
</section>

<script>
	$(document).ready(function() {
		// $('#table1').DataTable();
		// selectlist(1);
		// $('.text-upper').css('text-transform', 'uppercase');
		$('#pinjamnow').on('click', function(e) {
			e.preventDefault();
			$.ajax({
				url: 'page/inputpinjamanggota.php',
				type: 'get',
				data: {'id_anggota': <?php echo $id ?>},
				beforeSend: function() {
					$('#loading-state').fadeIn('slow');
				},
				success: function(response) {
					$('#utama').html(response);
				},
				complete: function() {
					$('#loading-state').fadeOut('slow');
				},
				error: function(error) {
					console.log(error);
				}
			})
		})

		$('#tambah').on('click', function(e) {
			e.preventDefault();
			$.ajax({
				url: 'page/inputanggota.php',
				type: 'get',
				success: function(response) {
					$('#loading-state').fadeIn('slow');
					$('#utama').html(response);
				},
				complete: function() {
					$('#loading-state').fadeOut('slow');
				},
				error: function(error) {
					console.log(error);
				}
			})
		})

		$('.verifikasi').on('click', function(e) {
			e.preventDefault();
			$.ajax({
				url: 'page/verifikasianggota.php',
				type: 'get',
				data: { 'id': $(this).data('recid') },
				beforeSend: function() {
					$('#loading-state').fadeIn('slow');
				},
				success: function(response) {
					$('#utama').html(response);
				},
				complete: function() {
					$('#loading-state').fadeOut('slow');
				}
			})
		})
	})
</script>