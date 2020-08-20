<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Data Simpanan
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li>Lihat Data</li>
		<li class="active">Simpan</li>
	</ol>
</section>

<section class="content">
	<div class="box box-warning">
		<div class="row">
			<div class="col-md-12">
				<div class="box-body">
					<table id="table1" class="table table-bordered table-striped">
						<thead class="bg-kuning">
							<tr>
			                  <th>Tanggal Setor</th>
			                  <th>Besar Setoran</th>
			                  <th>Keterangan</th>
			                  <th>Petugas</th>
			                </tr>
						</thead>
						<tbody>
							<tr>
								<td>9 Mei 2020, 11:10:43 WIB</td>
								<td>Rp 300,000</td>
								<td>Simpanan Wajib</td>
								<td>Siti Aminah</td>
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
	})
</script>