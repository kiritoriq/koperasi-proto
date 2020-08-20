<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Angsuran dan Pelunasan
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li>Transaksi</li>
		<li class="active">Daftar Angsuran dan Pelunasan</li>
	</ol>
</section>

<section class="content">
	<div class="box box-warning">
		<div class="row">
			<div class="col-md-12">
				<div class="box-header with-border">
					<!-- <h4>Riwayat Pinjaman</h4> -->
					<button id="tambah" type="button" class="btn btn-success"><i class="fa fa-plus-circle"></i> Buat Baru</button>
				</div>
				<div class="box-body">
					<table id="table1" class="table table-bordered table-striped">
						<thead class="bg-kuning">
							<tr>
			                  <th>Nama Penyetor</th>
			                  <th>NIPP</th>
			                  <th>Tanggal Setor</th>
			                  <th>Besar Setoran</th>
			                  <th>Keterangan</th>
			                  <th>Petugas</th>
			                </tr>
						</thead>
						<tbody>
							<tr>
								<td>Helga Rani</td>
								<td>8019283810291267</td>
								<td>8 Mei 2020, 08:10:43 WIB</td>
								<td>Rp 245,000</td>
								<td>Angsuran</td>
								<td>Jayanti Wulan</td>
							</tr>
							<tr>
								<td>Sugeng Pangestu</td>
								<td>8283810120292891</td>
								<td>8 Mei 2020, 10:00:54 WIB</td>
								<td>Rp 125,000</td>
								<td>Angsuran</td>
								<td>Jayanti Wulan</td>
							</tr>
							<tr>
								<td>Kohari</td>
								<td>8812283928012091</td>
								<td>7 Mei 2020, 14:00:54 WIB</td>
								<td>Rp 384,000</td>
								<td>Angsuran</td>
								<td>Hartini</td>
							</tr>
							<tr>
								<td>Kasmiyah</td>
								<td>8082919631728102</td>
								<td>7 Mei 2020, 09:33:53 WIB</td>
								<td>Rp 125,000</td>
								<td>Angsuran</td>
								<td>Jayanti Wulan</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>

<script>
	$(document).ready(function() {
		$('#table1').DataTable();
		// getinput();
		// $('.text-upper').css('text-transform', 'uppercase');

		$('#tambah').on('click', function(e) {
			e.preventDefault();
			$.ajax({
				url: 'page/inputangsuran.php',
				type: 'get',
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