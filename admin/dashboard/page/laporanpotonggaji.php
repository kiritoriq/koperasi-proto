<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Laporan Simpan
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li>Laporan</li>
		<li class="active">Laporan Tagihan</li>
	</ol>
</section>

<section class="content">
	<!-- <div class="row">
		<div class="col-md-4">
			<div class="box box-default">
				<div class="box-body">
					<form class="form-horizontal">
						<div class="form-group">
							<label class="control-label col-sm-3">Pilih Bulan:</label>
							<div class="col-sm-8">
								<select class="form-control">
									<option value="">.:Pilihan:.</option>
									<option value="">Januari</option>
									<option value="">Februari</option>
									<option value="">Maret</option>
									<option value="">April</option>
									<option value="">Mei</option>
									<option value="">Juni</option>
									<option value="">Juli</option>
									<option value="">Agustus</option>
									<option value="">September</option>
									<option value="">Oktober</option>
									<option value="">November</option>
									<option value="">Desember</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<button class="btn btn-info">Pilih</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-8">
		</div>
	</div> -->
	<div class="box box-warning">
		<div class="row">
			<div class="col-md-12">
				<div class="box-header with-border">
					<div class="col-md-4">
						<form class="form-horizontal">
							<div class="form-group">
								<label class="control-label col-sm-4">Pilih Bulan:</label>
								<div class="col-sm-5">
									<select class="form-control">
										<option value="">Januari</option>
										<option value="">Februari</option>
										<option value="">Maret</option>
										<option value="">April</option>
										<option value="">Mei</option>
										<option value="">Juni</option>
										<option value="">Juli</option>
										<option value="">Agustus</option>
										<option value="">September</option>
										<option value="">Oktober</option>
										<option value="">November</option>
										<option value="">Desember</option>
									</select>
								</div>
							</div>
						</form>
					</div>
					<!-- <h4 class="box-title"></h4> -->
					<!-- <button id="tambah" type="button" class="btn btn-success"><i class="fa fa-plus-circle"></i> Buat Baru</button> -->
				</div>
				<div class="box-body">
					<table id="table1" class="table table-bordered table-striped">
						<thead class="bg-kuning">
							<tr>
			                  <th>No. Anggota</th>
			                  <th>Nama Penyetor</th>
			                  <th>Jenis Simpanan</th>
			                  <th>Besar Simpanan</th>
			                </tr>
						</thead>
						<tbody>
							<tr>
								<td>A021</td>
								<td>Anang Saputro</td>
								<td>Simpanan Sukarela</td>
								<td align="right">Rp 500,000</td>
							</tr>
							<tr>
								<td>A022</td>
								<td>Lukman Nurrahman</td>
								<td>Simpanan Wajib</td>
								<td align="right">Rp 125.000</td>
							</tr>
							<tr>
								<td>A033</td>
								<td>Mutiara Hasna</td>
								<td>Simpanan Wajib</td>
								<td align="right">Rp 125.000</td>
							</tr>
							<tr>
								<td>A042</td>
								<td>Hartono Sudibyo</td>
								<td>Simpanan Pokok</td>
								<td align="right">Rp 380.000</td>
							</tr>
							<tr>
								<td>A044</td>
								<td>Fajar Nurbianto</td>
								<td>Simpanan Wajib</td>
								<td align="right">Rp 125.000</td>
							</tr>
						</tbody>
						<tfoot style="background-color: #b1b1b1; color: #fff; font-weight: bold">
							<tr>
								<td colspan="4" align="right">Rp 1.255.000</td>
							</tr>
						</tfoot>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>

<script>
	$(document).ready(function() {
		// $('#table1').DataTable();
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