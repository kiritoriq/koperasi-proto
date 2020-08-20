<section class="content-header">
	<h1>
		Input Permohonan Anggota
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li>Keanggotaan</li>
		<li>Pendaftaran Anggota</li>
		<li class="active">Buat Baru</li>
	</ol>
</section>

<section class="content">
	<div class="box box-warning">
		<div class="row">
			<div class="col-md-12">
				<form id="simpan" class="form-horizontal" method="POST" action="../../proses/simpanformulir.php">
					<div class="box-header with-border">
						<div class="form-group">
							<div class="col-sm-12 text-center">
								<div class="col-sm-6">
									<p><label><input type="radio" name="status" value="1" required> &nbsp;Bertindak untuk diri sendiri</label></p>
								</div>
								<div class="col-sm-6">
									<p><label><input type="radio" name="status" value="2" required> &nbsp;Bertindak untuk pihak lain</label></p>
								</div>
								<p>*(Khusus bagi yang Bertindak Untuk Pihak Lain wajib dilengkapi dengan Surat Kuasa bermaterai Rp. 6000,- dari Pihak Yang Diwakili)</p>
							</div>
						</div>
					</div>
					<div class="box-body">
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label col-sm-3">Nama Lengkap</label>
								<div class="col-sm-8">
									<input type="text" id="nama" name="nama" class="form-control" placeholder="contoh: Ahwan Prasetyo" required>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3">Tempat, Tanggal lahir</label>
								<div class="col-sm-4">
									<input type="text" id="tmplahir" name="tmplahir" class="form-control" placeholder="Tempat Lahir" required>
								</div>
								<div class="col-sm-4">
									<div class="input-group">
					                    <input type="text" class="form-control tgl" id="tgllahir" name="tgllahir" placeholder="Tanggal Lahir" required/>
					                    <span class="input-group-addon">
					                      <span class="fa fa-calendar"></span>
					                    </span>
					                  </div>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3">Jenis Kelamin</label>
								<div class="col-sm-8">
									<p><label><input type="radio" name="jenkel" value="1" required> Laki-laki</label>&nbsp;&nbsp;&nbsp; <label><input @change="cekdaftar" type="radio" name="jenkel" value="2" required> Perempuan</label></p>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3">Alamat Rumah</label>
								<div class="col-sm-8">
									<textarea class="form-control" id="alamat" name="alamat" rows="3" placeholder="contoh: Jl. Agathis no. 90, RT. 08 / RW. 10, Kelurahan Plamongansari, Kecamatan Pedurungan, Kota Semarang" name="alamat" required></textarea>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label col-sm-3">NIPP</label>
								<div class="col-sm-8">
									<input type="text" name="nipp" id="nipp" class="form-control" placeholder="NIPP" required>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3">Instansi / Unit Kerja</label>
								<div class="col-sm-8">
									<input type="text" name="instansi" id="instansi" class="form-control" placeholder="Instansi / Unit Kerja" required>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3">Nomor Telepon</label>
								<div class="col-sm-4">
									<div class="input-group">
					                    <input type="text" class="form-control" id="telprumah" name="telprumah" id="telprumah" placeholder="Nomor telp. Rumah" required>
					                    <span class="input-group-addon">
					                      <span class="fa fa-phone"></span>
					                    </span>
					                  </div>
								</div>
								<div class="col-sm-4">
									<div class="input-group">
					                    <input type="text" class="form-control" id="hp" name="hp" placeholder="Nomor telp. Handphone" required>
					                    <span class="input-group-addon">
					                      <span class="fa fa-mobile"></span>
					                    </span>
					                  </div>
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
		$('.tgl').datetimepicker({
			format: "DD-MM-YYYY",
			defaultDate: "01/01/1970" 
		});
		// $('#simpan').validate({
		// 	rules: {
		// 		nama: {
		// 			required: true
		// 		},
		// 		tmplahir: {
		// 			required: true
		// 		},
		// 		tgllahir: {
		// 			required: true
		// 		},
		// 		alamat: {
		// 			required: true
		// 		},
		// 		nipp: {
		// 			required: true
		// 		},
		// 		instansi: {
		// 			required: true
		// 		},
		// 		telprumah: {
		// 			required: true
		// 		},
		// 		telphp: {
		// 			required: true
		// 		}
		// 	},
		// 	highlight: function (element) {
		//         $(element).closest('.control-group').removeClass('success').addClass('error');
		//     },
		//     success: function (element) {
		//         element.text('OK!').addClass('valid')
		//             .closest('.control-group').removeClass('error').addClass('success');
		//     }
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
							console.log(response);
							if(response === "true"){
								bootbox.alert('Berhasil Disimpan', function() {
									window.location.href = 'index.php?page=daftarbagian';
								});
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
				} else {

				}
			})
		})
	})
</script>