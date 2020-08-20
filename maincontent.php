<div class="row">
  <div class="col-md-12">
    <h3>Formulir Pendaftaran Anggota Koperasi Pegawai Republik Indonesia "Usaha Bersama"</h3>
    <div class="card">
      <div class="card-header bg-warning">
        Formulir Pendaftaran &nbsp;<i class="fa fa-pencil"></i>
      </div>
      <form id="simpanformulir" action="proses/simpanformulir.php" method="POST">
        <ul class="list-group list-group-flush">
          <li class="list-group-item">
            <div class="form-check-inline">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="status" value="1" required><strong>Bertindak untuk diri sendiri</strong>
              </label>
            </div>
            <div class="form-check-inline">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="status" value="2" required><strong>Bertindak untuk pihak lain *</strong>
              </label>
            </div>
            <br>
            <p class="card-text text-center">*(Khusus bagi yang Bertindak Untuk Pihak Lain wajib dilengkapi dengan Surat Kuasa bermaterai Rp. 6000,- dari Pihak Yang Diwakili)</p>
          </li>
        </ul> 
        <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>NIK :</label>
                  <input type="text" class="form-control" maxlength="16" placeholder="contoh: 1001001801001001" name="nik" required>
                </div>
                <div class="form-group">
                  <label>Nama Lengkap :</label>
                  <input type="text" class="form-control" placeholder="contoh: Ahwan Prasetyo" name="nama" required>
                </div>
                <div class="form-group">
                  <label>Email :</label>
                  <input type="email" class="form-control" placeholder="contoh: admin@gmail.com" name="email" required>
                </div>
                <div class="form-group">
                  <label>Tempat, Tanggal Lahir :</label>
                  <div class="row">
                    <div class="col-sm-6">
                      <input type="text" class="form-control" placeholder="Tempat Lahir" name="tmplahir" required>
                    </div>
                    <div class="col-sm-6">
                      <div class="input-group mb-3">
                        <input type="text" class="tgl form-control" id="tgllahir" name="tgllahir">
                        <div class="input-group-append">
                          <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="pwd">Jenis Kelamin :</label>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenkel" id="jenkel1" value="1">
                    <label class="form-check-label">Laki-laki</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenkel" id="jenkel2" value="2">
                    <label class="form-check-label">Perempuan</label>
                  </div>
                </div>
                <div class="form-group">
                  <label for="pwd">Alamat Rumah :</label>
                  <textarea class="form-control" placeholder="contoh: Jl. Agathis no. 90, RT. 08 / RW. 10, Kelurahan Plamongansari, Kecamatan Pedurungan, Kota Semarang" name="alamat" rows="3"></textarea>
                </div>
                 
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>NIPP :</label>
                  <input type="text" class="form-control num" maxlength="12" placeholder="NIPP" name="nipp" required>
                </div>
                <div class="form-group">
                  <label>Instansi / Unit Kerja :</label>
                  <input type="text" class="form-control" placeholder="Nama Instansi / Unit Kerja" name="instansi" required>
                </div>
                <div class="form-group">
                  <label>Penghasilan Per Bulan :</label>
                  <div class="input-group mb-3">
                    <div class="input-group-append">
                      <span class="input-group-text">Rp</span>
                    </div>
                    <input type="text" class="form-control num gaji" name="gaji" placeholder="Masukkan nominal gaji (angka)" required>
                  </div>
              </div>
                <div class="form-group">
                  <label>Nomor Telepon :</label>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="input-group mb-3">
                        <input type="text" class="form-control" id="telprumah" name="telprumah" placeholder="Telp. Rumah" required>
                        <div class="input-group-append">
                          <span class="input-group-text"><i class="fa fa-phone"></i></span>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="input-group mb-3">
                        <input type="text" class="form-control" id="hp" name="hp" placeholder="Handphone" required>
                        <div class="input-group-append">
                          <span class="input-group-text"><i class="fa fa-mobile"></i></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label><a href="" data-toggle="modal" data-target="#syaratmodal">Baca Syarat dan Ketentuan</a></label>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                      Anda telah menyetujui syarat dan ketentuan yang berlaku
                    </label>
                    <div class="invalid-feedback">
                      Anda harus menyetujui untuk melanjutkan
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-success"> Ajukan Permohonan</button>
                </div>
                <br>
                <span><i><b>**</b>Harap cetak formulir jika permohonan sukses.</i></span>
              </div>
            </div> 
        </div>
      </form>
    </div>
  </div>
</div>

<!-- The Modal -->
  <div class="modal fade" id="syaratmodal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Ketentuan Singkat Permohonan Menjadi Anggota</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <p>Dengan ini anda telah setuju dan bersedia untuk mematuhi dan melaksanakan segala ketentuan dalam Anggaran Dasar dan Anggaran Rumah Tangga Koperasi Pegawai Republik Indonesia "Usaha Bersama" Balai Industri Semarang serta peraturan – peraturan lainnya yang berlaku di Koperasi Pegawai Republik Indonesia "Usaha Bersama" Balai Industri Semarang.</p>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

<script>
  $(document).ready(function() {
    'use strict';
    window.addEventListener('load', function() {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);

    $('[data-toggle="popover"]').popover({
      container: 'body'
    });

    $('.num').keyup(function () {
            if (this.value != this.value.replace(/[^0-9\.]/g, '')) {
                this.value = this.value.replace(/[^0-9\.]/g, '');
            }
        });
    $('.gaji').number(true);

    // $('.tgl').mask('99-99-9999')
    $('.tgl').datetimepicker({
      format: "DD-MM-YYYY",
      defaultDate: "01/01/1980"
    });

    $('#simpanformulir').on('submit', function(e) {
      var $this = $(this);
      // var formData = new FormData(this);
      e.preventDefault();
      bootbox.confirm('Ajukan Permohonan?', function(a) {
        if(a === true) {
          $.ajax({
            url: $this.attr('action'),
            type: 'post',
            data: $this.serialize(),
            success: function(response){
              var res = JSON.parse(response);
              console.log(res);
              if(res.status === "true") {
                bootbox.confirm('Pengajuan Tersimpan, Cetak Formulir?', function(r) {
                  if(r === true) {
                    location.reload();
                    window.open('formulir_pdf.php?id='+res.id);
                  }
                });
              } else {
                alert('Terjadi Kesalahan, silahkan hubungi admin!');
              }
            }
          })
        }
      })
    })
  });
</script>