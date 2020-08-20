<section class="content-header">
	<h1>
		Verifikasi Calon Anggota
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li>Keanggotaan</li>
		<li class="active">Verifikasi Calon Anggota</li>
	</ol>
</section>
<?php
	include '../../../config/query.php';
	$q = new Query();
	$id = $_GET['id'];
	$sql = "SELECT * FROM tr_calonanggota WHERE id = '".$id."'";
	$select = $q->query($sql);
	$item = $q->fetching_single($select);
?>
<section class="content">
	<div class="box box-warning">
		<div class="row">
			<div class="col-md-12">
				<form id="simpan" class="form-horizontal" method="POST" action="proses/createanggota.php">
					<input type="hidden" value="<?php echo $item['id']; ?>" name="id">
					<div class="box-header with-border">
						<div class="form-group">
							<div class="col-sm-12 text-center">
								<div class="col-sm-6">
									<p><label><input type="radio" name="status" value="1" <?php if($item['stsdaftar']==1) echo 'checked'; else echo '' ?> required> &nbsp;Bertindak untuk diri sendiri</label></p>
								</div>
								<div class="col-sm-6">
									<p><label><input type="radio" name="status" value="2" <?php if($item['stsdaftar']==2) echo 'checked'; else echo '' ?> required> &nbsp;Bertindak untuk pihak lain</label></p>
								</div>
								<p>*(Khusus bagi yang Bertindak Untuk Pihak Lain wajib dilengkapi dengan Surat Kuasa bermaterai Rp. 6000,- dari Pihak Yang Diwakili)</p>
							</div>
						</div>
					</div>
					<div class="box-body">
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label col-sm-3">NIK</label>
								<div class="col-sm-8">
									<input type="text" maxlength="16" name="nik" class="form-control" value="<?php echo $item['nik'] ?>" required>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3">Nama Lengkap</label>
								<div class="col-sm-8">
									<input type="text" id="nama" name="nama" class="form-control" value="<?php echo $item['nama'] ?>" required>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3">Email</label>
								<div class="col-sm-8">
									<input type="email" name="email" class="form-control" value="<?php echo $item['email']; ?>" required>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3">Tempat, Tanggal lahir</label>
								<div class="col-sm-4">
									<input type="text" id="tmplahir" name="tmplahir" class="form-control" value="<?php echo $item['tmplahir'] ?>" required>
								</div>
								<div class="col-sm-4">
									<div class="input-group">
					                    <input type="text" class="form-control tgl" id="tgllahir" name="tgllahir" value="<?php echo date('d-m-Y', strtotime($item['tgllahir'])) ?>" required/>
					                    <span class="input-group-addon">
					                      <span class="fa fa-calendar"></span>
					                    </span>
					                  </div>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3">Jenis Kelamin</label>
								<div class="col-sm-8">
									<p><label><input type="radio" name="jenkel" value="1" <?php if($item['jenkel']==1) echo 'checked'; else echo '' ?> required> Laki-laki</label>&nbsp;&nbsp;&nbsp; <label><input type="radio" name="jenkel" value="2" <?php if($item['jenkel']==2) echo 'checked'; else echo '' ?> required> Perempuan</label></p>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3">Alamat Rumah</label>
								<div class="col-sm-8">
									<textarea class="form-control" id="alamat" name="alamat" rows="3" name="alamat" required><?php echo $item['alamat'] ?></textarea>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label col-sm-3">NIPP</label>
								<div class="col-sm-8">
									<input type="text" name="nipp" id="nipp" class="form-control" value="<?php echo $item['nipp'] ?>" required>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3">Instansi / Unit Kerja</label>
								<div class="col-sm-8">
									<input type="text" name="instansi" id="instansi" class="form-control" value="<?php echo $item['instansi'] ?>" required>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3">Penghasilan Per Bulan</label>
								<div class="col-sm-8">
									<div class="input-group">
										<span class="input-group-addon">
											Rp
										</span>
										<input type="text" class="form-control num" name="gaji" value="<?php echo $item['gaji']; ?>" required>
									</div>
									<!-- <p><label><input type="radio" name="gaji" value="1" required> 0 - Rp 1.500.000</label>&nbsp;&nbsp;&nbsp; <label><input type="radio" name="gaji" value="2" required> Rp 1.500.000 - Rp 5.000.000</label>&nbsp;&nbsp;&nbsp; <label><input type="radio" name="gaji" value="3" required> > Rp 5.000.000</label></p> -->
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3">Nomor Telepon</label>
								<div class="col-sm-4">
									<div class="input-group">
					                    <input type="text" class="form-control" id="telprumah" name="telprumah" id="telprumah" value="<?php echo $item['telprumah'] ?>" required>
					                    <span class="input-group-addon">
					                      <span class="fa fa-phone"></span>
					                    </span>
					                  </div>
								</div>
								<div class="col-sm-4">
									<div class="input-group">
					                    <input type="text" class="form-control" id="telphp" id="telphp" name="telphp" value="<?php echo $item['telphp'] ?>" required>
					                    <span class="input-group-addon">
					                      <span class="fa fa-mobile"></span>
					                    </span>
					                  </div>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3">Username</label>
								<div class="col-sm-4">
									<input type="text" class="form-control" name="username" placeholder="username">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3">Password</label>
								<div class="col-sm-4">
									<input type="text" class="form-control" name="password" placeholder="password">
								</div>
							</div>
						</div>
					</div>
					<div class="box-footer">
						<div class="form-group">
		                    <div class="col-sm-offset-3 col-sm-7">
		                        <button type="submit" id="tombolsimpan" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
		                        &nbsp;
		                        &nbsp;
		                        <a href="index.php?page=daftarbagian" class="btn btn-warning"><i class="fa fa-times-circle-o"></i> Batal</a>
		                    </div>
		                </div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<script>
	$(document).ready(function() {
		$('.num').keyup(function () {
            if (this.value != this.value.replace(/[^0-9\.]/g, '')) {
                this.value = this.value.replace(/[^0-9\.]/g, '');
            }
        });
        $('.num').number(true);
		$('#simpan').on('submit', function(e) {
			e.preventDefault();
			var $this = $(this);
			bootbox.confirm('Simpan?', function(r) {
				if(r) {
					$.ajax({
						url: $this.attr('action'),
						type: 'POST',
						data: $this.serialize(),
						beforeSend: function() {
							$('#loading-state').fadeIn('slow');
						},
						success: function(response) {
							var res = JSON.parse(response);
							console.log(res);
							if(res.status === 'true') {
								bootbox.alert('Verifikasi Berhasil', function(a) {
									window.location.href = "index.php?page=pendaftarananggota";
								})
							} else {
								bootbox.alert('Terjadi kesalahan, silahkan hubungi admin!');
							}
						},
						complete: function() {
							$('#loading-state').fadeOut('slow');
						},
						error: function(error) {
							console.log(error);
						}
					})
				}
			})
		})
	})
</script>