<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Daftar Simpan
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li>Transaksi</li>
		<li class="active">Simpan</li>
	</ol>
</section>

<section class="content">
	<div class="box box-warning">
		<div class="row">
			<div class="col-md-12">
				<div class="box-header with-border">
					<!-- <h4 class="box-title">Daftar Simpan</h4> -->
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
								<td>Hartono Sudibyo</td>
								<td>8019283810291267</td>
								<td>9 Mei 2020, 11:10:43 WIB</td>
								<td>Rp 380,000</td>
								<td>Simpanan Pokok</td>
								<td>Siti Aminah</td>
							</tr>
							<tr>
								<td>Anang Saputro</td>
								<td>8201283810292891</td>
								<td>9 Mei 2020, 10:00:54 WIB</td>
								<td>Rp 500,000</td>
								<td>Simpanan Sukarela</td>
								<td>Siti Aminah</td>
							</tr>
							<tr>
								<td>Mutiara Hasna</td>
								<td>8019672838291102</td>
								<td>8 Mei 2020, 15:11:23 WIB</td>
								<td>Rp 380,000</td>
								<td>Simpanan Pokok</td>
								<td>Adella Riyanti</td>
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
				url: 'page/inputsimpan.php',
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