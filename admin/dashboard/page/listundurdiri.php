<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Pengunduran Diri Anggota
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li>Keanggotaan</li>
		<li class="active">Pengunduran Diri</li>
	</ol>
</section>

<section class="content">
	<div class="box box-warning">
		<div class="row">
			<div class="col-md-12">
				<div class="box-header">
				</div>
				<div class="box-body">
					<table id="table1" class="table table-bordered table-striped">
						<thead class="bg-kuning">
							<tr>
			                  <th>NIPP</th>
			                  <th>Nama Anggota</th>
			                  <th>Keterangan Undur Diri</th>
			                  <th>Tanggal Pengunduran Diri</th>
			                </tr>
						</thead>
						<tbody>
							<tr>
								<td>001129905211062</td>
								<td>Muji Slamet</td>
								<td>Pensiun</td>
								<td>12 Februari 2020</td>
							</tr>
							<tr>
								<td>023020812040285</td>
								<td>Helmi Agus</td>
								<td>Pindah Kerja</td>
								<td>1 Januari 2020</td>
							</tr>
							<tr>
								<td>101150295150462</td>
								<td>Krisnugroho</td>
								<td>Pensiun</td>
								<td>1 Januari 2020</td>
							</tr>
						</tbody>
					</table>
							<!-- <p class="text-center"><i><strong>Belum Ada Data</strong></i></p> -->
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