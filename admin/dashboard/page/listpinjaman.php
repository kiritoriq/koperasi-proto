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
				<div class="box-header with-border">
					<!-- <h4>Riwayat Pinjaman</h4> -->
					<button id="tambah" type="button" class="btn btn-success"><i class="fa fa-plus-circle"></i> Buat Baru</button>
				</div>
				<div class="box-body">
					<table id="table1" class="table table-bordered table-striped">
						<thead class="bg-kuning">
							<tr>
			                  <th>Nama Pemohon</th>
			                  <th>NIPP</th>
			                  <th>Tanggal Pengajuan</th>
			                  <th>Unit Peminjaman</th>
			                  <th>Besar Pinjaman</th>
			                  <th>Masa Angsuran</th>
			                  <th>Jumlah Angsuran</th>
			                  <th>Status</th>
			                  <th>Aksi</th>
			                </tr>
						</thead>
						<tbody>
							<?php
								$q = new Query();
								$sql = "SELECT * FROM tr_pinjam ORDER BY created_at DESC";
								$select = $q->query($sql);
								$store = $q->store($select);
								foreach($store as $rs => $i){
									$sqlang = "SELECT * FROM tr_anggota WHERE id = '".$i[1]."'";
									$selang = $q->query($sqlang);
									$item = $q->fetching_single($selang);
									$tglpengajuan = date('d-m-Y', strtotime($i[11]));
									// $bunga = (int)$i[4] * 0.01;
									// $jmlangsur = (int)$i[7] + (int)$bunga;
									echo "<tr>
											<td>".$i[3]."</td>
											<td>".$item['nipp']."</td>
											<td>".tanggalindonesia($tglpengajuan).", ".date('H:i:s', strtotime($i[11]))." WIB</td>
											<td>".(($i[2]==1)?'Unit Investasi':'Unit Kredit')."</td>
											<td>Rp ".number_format($i[4],0)."</td>
											<td>".$i[5]." kali</td>
											<td>".number_format($i[7], 0)."</td>
											<td><strong class='".(($i[8]==1)?'text-success':'text-danger')."'>".(($i[8]==1)?'Sudah Disetujui':'<i>Belum disetujui</i>')."</strong></td>
											<td>
												<div class='btn-group'>
						                          <button data-toggle='dropdown' class='btn btn-default dropdown-toggle' type='button' aria-expanded='false'>
						                          <span class='caret'></span> Aksi
						                          </button>
						                          <ul class='dropdown-menu pull-right'>
						                          	".(($i[8]!=1)?'<li><a class="verifikasi" href="" id="verifikasi" data-recid="'.$i[0].'"><i class="fa fa-check"></i> Verifikasi</a></li':'<li><i class="fa fa-times"></i> Tidak ada Aksi yang dapat dilakukan</li>')."
						                            
						                          </ul>
						                        </div>
											</td>
										</tr>";
										// ><li><a class="cetak" href="../../formulir_pdf.php?id='.$i[0].'" target="_blank"><i class="fa fa-print"></i> Cetak Kwitansi</a></li>
											// <td><strong class='".(($i[11]==1)?'text-success':'text-danger')."'>".(($i[11]==1)?'Sudah':'Belum')."</strong>
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
				url: 'page/inputpinjam.php',
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
				url: 'page/verifikasipinjam.php',
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