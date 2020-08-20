<?php
	$unitpinjam = $_GET['unit_pinjam'];
	if($unitpinjam == 1) {
?>
	<div class="form-group">
		<label class="control-label col-sm-3">Besar Pinjaman</label>
			<div class="col-sm-8">
				<div class="input-group">
					<span class="input-group-addon">
						Rp
					</span>
					<input type="text" id="pinjam" name="besar_pinjaman" class="num form-control" placeholder="Maks. Pinjaman 40.000.000" required>
				</div>
			</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-3">Masa Angsuran</label>
			<div class="col-sm-8">
				<select class="form-control" id="masa_pinjam" name="masa_pinjam" required>
					<option value="">.:Pilihan:.</option>
					<option value="5">5 kali</option>
					<option value="10">10 kali</option>
					<option value="15">15 kali</option>
					<option value="20">20 kali</option>
					<option value="30">30 kali</option>
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
				<input type="text" class="num form-control" id="angsuran" name="angsuran" readonly>
			</div>
			<small><i>*Jumlah angsuran belum termasuk bunga 1% setiap bulannya</i></small>
		</div>
	</div>
<?php
	} else {
?>
	<div class="form-group">
		<label class="control-label col-sm-3">Besar Pinjaman</label>
			<div class="col-sm-8">
				<div class="input-group">
					<span class="input-group-addon">
						Rp
					</span>
					<input type="text" id="pinjam" name="besar_pinjaman" class="num form-control" placeholder="Maks. Pinjaman 30.000.000" required>
				</div>
			</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-3">Masa Angsuran</label>
			<div class="col-sm-8">
				<select class="form-control" id="masa_pinjam" name="masa_pinjam" required>
					<option value="">.:Pilihan:.</option>
					<option value="5">5 kali</option>
					<option value="10">10 kali</option>
					<option value="15">15 kali</option>
					<option value="20">20 kali</option>
					<option value="30">30 kali</option>
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
				<input type="text" class="num form-control" id="angsuran" name="angsuran" readonly>
			</div>
			<small><i>*Jumlah angsuran belum termasuk bunga 1% setiap bulannya</i></small>
		</div>
	</div>
<?php
	}
?>

<script>
	$(document).ready(function() {
		$('.num').keyup(function () {
            if (this.value != this.value.replace(/[^0-9\.]/g, '')) {
                this.value = this.value.replace(/[^0-9\.]/g, '');
            }
        });
        $('.num').number(true);
		$('#masa_pinjam').on('change', function(e) {
			e.preventDefault();
			var pinjam = parseInt($('#pinjam').val());
			var brp = parseInt($(this).val());
			var angs = pinjam / brp;
			$('#angsuran').val(angs);
		})
	})
</script>