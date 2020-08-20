<section class="content-header">
	<h1>
		Input Pengajuan Pinjaman
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li>Transaksi</li>
		<li>Pengajuan Pinjam</li>
		<li class="active">Buat Baru</li>
	</ol>
</section>
<?php
	include '../../../config/query.php';
	$id = $_GET['id'];
	$q = new Query();
	$sel = $q->query("SELECT a.*, b.nipp, b.alamat, b.gaji FROM tr_pinjam a JOIN tr_anggota b ON a.id_anggota = b.id WHERE a.id = '".$id."'");
	$item = $q->fetching_single($sel);
?>
<section class="content">
	<div class="box box-warning">
		<div class="row">
			<div class="col-md-12">
				<form id="simpan" class="form-horizontal" method="POST" action="proses/simpanpengajuanpinjam.php">
					<input type="hidden" name="id" value="<?php echo $id ?>">
					<div class="box-body">
						<div class="col-md-6">
							<!-- <div class="form-group">
								<label class="control-label col-sm-3">No. Anggota</label>
								<div class="col-sm-8">
									<input type="text" id="nama" name="nama" class="form-control" placeholder="Masukkan No. Anggota" required>
								</div>
							</div> -->
							<div class="form-group">
								<label class="control-label col-sm-3">Nama Lengkap</label>
								<div class="col-sm-8">
									<input type="text" id="nama" name="nama" class="form-control" value="<?php echo $item['nama_peminjam'] ?>" readonly>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3">NIPP</label>
								<div class="col-sm-8">
									<input type="text" id="nipp" name="nipp" class="form-control" value="<?php echo $item['nipp'] ?>" readonly>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3">Besar Penghasilan</label>
								<div class="col-sm-8">
									<input type="text" id="gaji" name="gaji" class="num form-control" value="<?php echo $item['gaji'] ?>" readonly>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3">Alamat Rumah</label>
								<div class="col-sm-8">
									<textarea class="form-control" id="alamat" name="alamat" rows="3" placeholder="contoh: Jl. Agathis no. 90, RT. 08 / RW. 10, Kelurahan Plamongansari, Kecamatan Pedurungan, Kota Semarang" name="alamat" readonly><?php echo $item['alamat'] ?></textarea>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label col-sm-3">Jenis Unit Pinjaman</label>
								<div class="col-sm-8">
									<p><label><input type="radio" class="unitpinjam" name="unit_pinjam" value="1" <?php if($item['unit_pinjam']==1) echo 'checked'; else echo '' ?> required> Unit Investasi</label>&nbsp;&nbsp;&nbsp; <label><input type="radio" class="unitpinjam" name="unit_pinjam" value="2" <?php if($item['unit_pinjam']==2) echo 'checked'; else echo '' ?> required> Unit Kredit</label></p>
								</div>
							</div>
							<div id="pinjaman">
								<div class="form-group">
									<label class="control-label col-sm-3">Besar Pinjaman</label>
										<div class="col-sm-8">
											<div class="input-group">
												<span class="input-group-addon">
													Rp
												</span>
												<input type="text" id="pinjam" name="besar_pinjaman" class="num form-control" value="<?php echo $item['besar_pinjaman'] ?>" required>
											</div>
										</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-3">Masa Angsuran</label>
										<div class="col-sm-8">
											<select class="form-control" id="masa_pinjam" name="masa_pinjam" required readonly>
												<option value="" <?php if($item['masa_angsuran']==""||$item['masa_angsuran']=="0") echo 'selected'; else echo '' ?>>.:Pilihan:.</option>
												<option value="5" <?php if($item['masa_angsuran']=="5") echo 'selected'; else echo '' ?>>5 kali</option>
												<option value="10" <?php if($item['masa_angsuran']=="10") echo 'selected'; else echo '' ?>>10 kali</option>
												<option value="15" <?php if($item['masa_angsuran']=="15") echo 'selected'; else echo '' ?>>15 kali</option>
												<option value="20" <?php if($item['masa_angsuran']=="20") echo 'selected'; else echo '' ?>>20 kali</option>
												<option value="30" <?php if($item['masa_angsuran']=="30") echo 'selected'; else echo '' ?>>30 kali</option>
											</select>
										</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-3">Besar Angsuran</label>
									<div class="col-sm-8">
										<div class="input-group">
											<span class="input-group-addon">
											Rp
											</span>
											<input type="text" class="num form-control" id="angsuran" name="angsuran" value="<?php echo $item['jml_angsuran'] ?>" readonly>
										</div>
										<!-- <small><i>*Jumlah angsuran belum termasuk bunga 1% setiap bulannya</i></small> -->
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3">Keterangan</label>
								<div class="col-sm-8">
									<textarea name="ket" class="form-control" placeholder="Masukkan alasan peminjaman dana" rows="2" readonly><?php echo $item['ket'] ?></textarea>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3">Status</label>
								<div class="col-sm-8">
									<select name="status" class="form-control">
										<option value="1">Diterima</option>
										<option value="0">Ditolak</option>
									</select>
								</div>
							</div>
							<!-- <div class="form-group">
								<div class="col-sm-3">
								</div>
								<div class="col-sm-8">
									<a href="" class="isisurat" data-toggle="modal" data-target="#modalsurat">Lihat Surat Pernyataan Diri</a>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-3">
								</div>
								<div class="col-sm-8">
									<div class="checkbox icheck">
							            <label>
							              <input class="check" type="checkbox" required> Anda Telah Setuju dengan Surat Pernyataan Diri diatas.
							        	</label>
							        </div>
								</div>
							</div> -->
						</div>
					</div>
					<div class="box-footer">
						<div class="form-group">
		                    <div class="col-sm-offset-3 col-sm-7">
		                        <button type="submit" id="tombolsimpan" class="btn btn-success"><i class="fa fa-save"></i> Verifikasi</button>
		                        &nbsp;
		                        &nbsp;
		                        <a href="index.php?page=daftarpinjam" class="btn btn-warning"><i class="fa fa-times-circle-o"></i> Batal</a>
		                    </div>
		                </div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<script>
	function getPinjam(id) {
		$.ajax({
			url: 'page/formpinjamanggota.php',
			type: 'get',
			data: { 'unit_pinjam': id },
			success: function(response) {
				$('#pinjaman').html(response);
			}
		})
	}

	$(document).ready(function() {
		$('.tgl').datetimepicker({
			format: "DD-MM-YYYY",
			defaultDate: "01/01/1970" 
		});

		$('.check').iCheck({
	      checkboxClass: 'icheckbox_square-blue',
	      radioClass: 'iradio_square-blue',
	      increaseArea: '20%' /* optional */
	    });

		$('.num').keyup(function () {
            if (this.value != this.value.replace(/[^0-9\.]/g, '')) {
                this.value = this.value.replace(/[^0-9\.]/g, '');
            }
        });
        $('.num').number(true);

		// $('.unitpinjam').on('change', function(e) {
		// 	var val = $(this).val();
		// 	console.log(val);
		// 	getPinjam(val);
		// })

		$('input').css('text-transform', 'uppercase');
		$('#simpan').on('submit', function(e) {
			var $this = $(this);
			e.preventDefault();
			bootbox.confirm('Simpan?', function(r) {
				if(r){
					$.ajax({
						url: $this.attr('action'),
						type: 'POST',
						data: $this.serialize(),
						success: function(response) {
							var res = JSON.parse(response);
							console.log(res);
							if(res.status === "true"){
								bootbox.alert('Berhasil Disimpan', function() {
									window.location.href = 'index.php?page=pengajuanpinjam';
								});
							} else {
								bootbox.alert('Terjadi kesalahan, silahkan hubungi admin! '+res.message);
							}
						},
						complete: function() {
							$('#loading-state').fadeOut('slow');
						},
						error: function(error) {
							console.log(error);
						}
					})		
				} else {

				}
			})
		})
	})
</script>