<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Data Anggota
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li>Keanggotaan</li>
		<li class="active">Data Anggota</li>
	</ol>
</section>

<section class="content">
	<div class="box box-warning">
		<div class="row">
			<div class="col-md-12">
				<!-- <div class="box-header with-border">
					<button id="tambah" type="button" class="btn btn-success"><i class="fa fa-plus-circle"></i> Buat Baru</button>
				</div> -->
				<div class="box-body">
					<table id="table1" class="table table-bordered table-striped">
						<thead class="bg-kuning">
							<tr>
			                  <th>NIK</th>
			                  <th>NIPP</th>
			                  <th>Nama Lengkap</th>
			                  <th>Alamat</th>
			                  <th>Instansi</th>
			                  <th>Nomor HP</th>
			                  <th>Status Daftar</th>
			                  <th>Tanggal Aktif</th>
			                  <!-- <th>Aksi</th> -->
			                </tr>
						</thead>
						<tbody>
							<?php
								$q = new Query();
								$sql = "SELECT a.* FROM tr_anggota a JOIN tr_calonanggota b ON a.nipp = b.nipp WHERE a.is_aktif = '1'";
								$select = $q->query($sql);
								$store = $q->store($select);
								foreach($store as $rs => $i){
									$tgl = date('d-m-Y', strtotime($i[19]));
									echo "<tr>
											<td>".$i[1]."</td>
											<td>".$i[11]."</td>
											<td>".$i[2]."</td>
											<td>".$i[7]."</td>
											<td>".$i[12]."</td>
											<td>".$i[9]."</td>
											<td>".(($i[10]==1)?'Bertindak untuk diri sendiri':'Bertindak untuk pihak lain')."</td>
											<td>".tanggalindonesia($tgl)."</td>
										</tr>";
											// <td>
											// 	<div class='btn-group'>
						     //                      <button data-toggle='dropdown' class='btn btn-default dropdown-toggle' type='button' aria-expanded='false'>
						     //                      <span class='caret'></span> Aksi
						     //                      </button>
						     //                      <ul class='dropdown-menu pull-right'>
						     //                        <li><a class='verifikasi' href='' id='verifikasi' data-recid='".$i[0]."'><i class='fa fa-check'></i> Verifikasi</a></li>
						     //                      </ul>
						     //                    </div>
											// </td>
								}
							?>
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
		// selectlist(1);
		// $('.text-upper').css('text-transform', 'uppercase');

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