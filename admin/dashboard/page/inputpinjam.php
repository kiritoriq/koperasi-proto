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
<section class="content">
	<div class="box box-warning">
		<div class="row">
			<div class="col-md-12">
				<form id="simpan" class="form-horizontal" method="POST" action="proses/simpanpengajuanpinjam.php">
					<div class="box-body">
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label col-sm-3">NIPP</label>
								<div class="col-sm-8">
									<input type="text" id="nama" name="nama" class="form-control" placeholder="Masukkan NIPP" required>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3">NIK</label>
								<div class="col-sm-8">
									<input type="text" id="nama" name="nama" class="form-control" readonly>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3">Nama Lengkap</label>
								<div class="col-sm-8">
									<input type="text" id="nipp" name="nipp" class="form-control" readonly>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3">Alamat Rumah</label>
								<div class="col-sm-8">
									<textarea class="form-control" id="alamat" name="alamat" rows="3" name="alamat" readonly></textarea>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label col-sm-3">Jenis Unit Pinjaman</label>
								<div class="col-sm-8">
									<p><label><input type="radio" class="unitpinjam" name="unit_pinjam" value="1" required> Unit Investasi</label>&nbsp;&nbsp;&nbsp; <label><input type="radio" class="unitpinjam" name="unit_pinjam" value="2" required> Unit Kredit</label></p>
								</div>
							</div>
							<div id="pinjaman">
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3">Keterangan</label>
								<div class="col-sm-8">
									<textarea name="ket" class="form-control" placeholder="Masukkan alasan peminjaman dana" rows="2"></textarea>
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
		                        <button type="submit" id="tombolsimpan" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
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

<div class="modal fade" id="modalsurat">
    <div class="modal-dialog">
        <div class="modal-content">
           	<div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                	<span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Pernyataan Diri</h4>
           	</div>
            <div class="modal-body">
                <p>Aturan-aturan Umum Peminjaman</p>
                <ul>
                	<li>Peminjaman terdapat 2 jenis, yaitu Unit Investasi dan Unit Kredit</li>
                	<li>Untuk Unit Investasi maksimum peminjaman ialah Rp 40.000.000 dengan waktu 5, 10, 15, 20, 30 kali dengan ketentuan bunga pinjaman 1% setiap bulan.</li>
                	<li>Sedangkan Untuk Unit Kredit maksimum peminjaman ialah Rp 30.000.000 dengan waktu 5, 10, 15, 20, 30 kali dengan ketentuan bunga pinjaman 1% setiap bulan.</li>
                	<li>Pihak Koperasi berhak menolak pengajuan Anda dengan alasan apapun.</li>
                	<li>Pihak Koperasi berhak memotong gaji Anda untuk membayar angsuran pinjaman sesuai ketentuan dan persetujuan.</li>
                </ul>
                <br>
                <p>Dengan Ini, Saya <?php echo $item['nama'] ?>:</p>
                <ol>
                	<li>Bersedia mematuhi aturan-aturan peminjaman.</li>
                	<li>Bersedia untuk membayar angsuran pinjaman dengan cara potong gaji yang akan dilakukan tiap bulan.</li>
                	<!-- <li>Bersedia untuk membayar angsuran pinjaman dengan pemtongan penghasilan saya.</li> -->
                </ol>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
        <!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal -->

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

		$('.unitpinjam').on('change', function(e) {
			var val = $(this).val();
			console.log(val);
			getPinjam(val);
		})

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