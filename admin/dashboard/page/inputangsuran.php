<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Angsuran dan Pelunasan
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li>Transaksi</li>
		<li>Angsuran dan Pelunasan</li>
		<li class="active">Entry Angsuran dan Pelunasan</li>
	</ol>
</section>

<section class="content">
	<div class="box box-warning">
		<div class="row">
			<div class="col-md-12">
				<form id="simpan" class="form-horizontal" method="POST" action="../../proses/simpanformulir.php">
					<div class="box-header with-border">
						<h4 class="box-title">Entry Angsuran</h4>
					</div>
					<div class="box-body">
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label col-sm-3">NIPP</label>
								<div class="col-sm-8">
									<input type="text" id="nama" name="nama" class="form-control" placeholder="Masukkan NIPP" required>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3">Nama Anggota</label>
								<div class="col-sm-8">
									<input type="text" id="nama" name="nama" class="form-control" readonly required>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3">Tanggal Angsuran</label>
								<div class="col-sm-8">
									<div class="input-group">
					                    <input type="text" class="form-control tgl" id="tgllahir" name="tgllahir" placeholder="Tanggal Angsuran" required/>
					                    <span class="input-group-addon">
					                      <span class="fa fa-calendar"></span>
					                    </span>
					                  </div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label col-sm-3">Besar Angsuran</label>
									<div class="col-sm-8">
										<div class="input-group">
											<span class="input-group-addon">
												Rp
											</span>
											<input type="text" id="pinjam" name="besar_pinjaman" class="num form-control" placeholder="Masukkan nominal Simpanan" required>
										</div>
									</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3">Sisa Masa Angsuran</label>
								<div class="col-sm-8">
									<input type="text" id="nama" name="nama" class="form-control" placeholder="Masukkan sisa masa angsuran" required>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3">Sisa Angsuran</label>
									<div class="col-sm-8">
										<div class="input-group">
											<span class="input-group-addon">
												Rp
											</span>
											<input type="text" id="pinjam" name="besar_pinjaman" class="num form-control" placeholder="Masukkan nominal sisa angsuran" required>
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
		                        <a href="index.php?page=daftarangsuran" class="btn btn-warning"><i class="fa fa-times-circle-o"></i> Batal</a>
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
			defaultDate: new Date() 
		});
		$('.num').keyup(function () {
            if (this.value != this.value.replace(/[^0-9\.]/g, '')) {
                this.value = this.value.replace(/[^0-9\.]/g, '');
            }
        });
        $('.num').number(true);
		// $('input').css('text-transform', 'uppercase');
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