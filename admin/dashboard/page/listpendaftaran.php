<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Pendaftaran Anggota
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li>Keanggotaan</li>
		<li class="active">Pendaftaran</li>
	</ol>
</section>

<section class="content">
	<div class="box box-warning">
		<div class="row">
			<div class="col-md-12">
				<div class="box-header with-border">
					<button id="tambah" type="button" class="btn btn-success"><i class="fa fa-plus-circle"></i> Buat Baru</button>
				</div>
				<div class="box-body">
					<table id="table1" class="table table-bordered table-striped">
						<thead class="bg-kuning">
							<tr>
			                  <th>NIPP</th>
			                  <th>Nama Lengkap</th>
			                  <th>Alamat</th>
			                  <th>Instansi</th>
			                  <th>Nomor HP</th>
			                  <th>Status Daftar</th>
			                  <th>Verifikasi</th>
			                  <th>Aksi</th>
			                </tr>
						</thead>
						<tbody>
							<?php
								$q = new Query();
								$sql = "SELECT * FROM tr_calonanggota";
								$select = $q->query($sql);
								$store = $q->store($select);
								foreach($store as $rs => $i){
									echo "<tr>
											<td>".$i[11]."</td>
											<td>".$i[3]."</td>
											<td>".$i[7]."</td>
											<td>".$i[12]."</td>
											<td>".$i[9]."</td>
											<td>".(($i[10]==1)?'Bertindak untuk diri sendiri':'Bertindak untuk pihak lain')."</td>
											<td><strong class='".(($i[14]==1)?'text-success':'text-danger')."'>".(($i[14]==1)?'Sudah':'Belum')."</strong></td>
											<td>
												<div class='btn-group'>
						                          <button data-toggle='dropdown' class='btn btn-default dropdown-toggle' type='button' aria-expanded='false'>
						                          <span class='caret'></span> Aksi
						                          </button>
						                          <ul class='dropdown-menu pull-right'>
						                          	".(($i[14]!=1)?'<li><a class="verifikasi" href="" id="verifikasi" data-recid="'.$i[0].'"><i class="fa fa-check"></i> Verifikasi</a></li><li><a class="cetak" href="../../formulir_pdf.php?id='.$i[0].'" target="_blank"><i class="fa fa-print"></i> Cetak Formulir</a></li>':'<li><i class="fa fa-times"></i> Tidak ada Aksi yang dapat dilakukan</li>')."
						                            
						                          </ul>
						                        </div>
											</td>
										</tr>";
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