<?php

require('assets/fpdf/fpdf.php');
// lebar kertas A5
// $p_width  = 180;
// tinggi kertasA5
// $p_height = 210;
//lebar kertas A4
$p_width = 210;
// //tinggi kertas A4
$p_height = 297;
// orientasi kertas P=portrait L=Landscape
$p_orientation = 'P';
// skala mm=milimeter
$p_scale  = 'mm';

// title
$title = 'Formulir Pendaftaran Anggota KPRI "USAHA BERSAMA"';

// margin tergantung $p_scale
$m_left   = 10;
$m_right  = 10;
$m_top    = 10;
$m_bottom = 10;

// container
$c_width  = ($p_width - $m_left - $m_right);
$c_height = ($p_height - $m_top - $m_bottom);
// intance object dan memberikan pengaturan halaman PDF

$pdf = new FPDF($p_orientation, $p_scale, array($p_width, $p_height));

// margin bottom
$pdf->SetAutoPageBreak(true, $m_bottom);
// margin left, top, right
$pdf->SetMargins($m_left, $m_top, $m_right);
	// intance object dan memberikan pengaturan halaman PDF
// $pdf = new FPDF('P','mm','A4');
	// membuat halaman baru
$pdf->AddPage();
$pdf->SetTitle($title);

$now = date('Y-m-d');
$thskrg = explode('-',$now);

include "config/query.php";
$q = new Query();
$id = $_GET['id'];
$sql = "SELECT * FROM tr_calonanggota WHERE id = '".$id."'";
$select = $q->query($sql);
$item = $q->fetching_single($select);
// setting jenis font yang akan digunakan
$pdf->Ln(1);
$pdf->SetFont('Times','B',10);
$pdf->SetAligns(array('C'));
//mencetak String (Huruf)
$pdf->SetXY(135,10);
$pdf->Cell(30, 5, 'FORMULIR PENDAFTARAN ANGGOTA', '', '', 'C');
$pdf->SetXY(135,14);
$pdf->Cell(30, 5, 'KOPERASI PEGAWAI REPUBLIK INDONESIA', '', '', 'C');
$pdf->SetXY(135,18);
$pdf->Cell(30, 5, '"USAHA BERSAMA"', '', '', 'C');
$pdf->SetXY(135,22);
$pdf->Cell(30, 5, 'BALAI INDUSTRI SEMARANG', '', '', 'C');
// $pdf->RowNoLines(array('SURAT PEMBERITAHUAN'));
// $pdf->RowNoLines(array('(DAFTAR PEMILIH TAMBAHAN DALAM NEGERI)'));
// $pdf->SetFont('Times','B',11);
// $pdf->RowNoLines(array('Pemilihan Umum Anggota DPR, DPD dan DPRD'));
// $pdf->RowNoLines(array('Tahun '.$thskrg[0].''));
// $pdf->SetXY(10,44);
// $pdf->garis();
$pdf->Ln(1);
// $pdf->RowNoLines(array(''));
// $pdf->garistbl();
// $pdf->SetXY(20,10);
$pdf->Image("assets/img/logo_form_2.png",15,5,90,30,'PNG');
// $pdf->Ln(2);

// $pdf->SetXY()
$pdf->SetFillColor(255,193,7);
$pdf->Rect(20, 33, 170, 28);
$pdf->Rect(20.2, 33.2, 169.7, 5, 'F');
$pdf->SetXY(30,40);
$pdf->SetFont('ZapfDingbats','',12);
$pdf->Cell(6,6,(($item['stsdaftar']==1)?'4':''),1,0,'C');
$pdf->SetFont('Times','',9);
$pdf->SetXY(38,40);
$pdf->Cell(10,6,'Bertindak untuk diri sendiri',0,0);

$pdf->SetXY(120,40);
$pdf->SetFont('ZapfDingbats','',12);
$pdf->Cell(6,6,(($item['stsdaftar']==2)?'4':''),1,0,'C');
$pdf->SetFont('Times','',9);
$pdf->SetXY(128,40);
$pdf->Cell(10,6,'Bertindak untuk pihak lain',0,0);

$pdf->SetXY(25,49);
$pdf->Cell(120,6,'(Khusus bagi yang Bertindak Untuk Pihak Lain wajib dilengkapi dengan Surat Kuasa bermaterai Rp 6.000,- dari Pihak',0,0);
$pdf->SetXY(25,54);
$pdf->Cell(120,6,'Yang Diwakili.)',0,0);

$pdf->Ln(1);
$pdf->SetFillColor(255,193,7);
$pdf->Rect(20, 61, 170, 80);
$pdf->Rect(20.2, 61.2, 169.7, 8, 'F');
$pdf->SetXY(22,63);
$pdf->SetFont('Times','B',11);
$pdf->Cell(10,5,'DATA ANGGOTA KOPERASI',0,0);

$pdf->Ln(2);
$pdf->SetFont('Times','',9);
$pdf->SetWidths(array(40,5,120));
$pdf->SetAligns(array('L','C','L'));
$pdf->SetXY(25,68);
$pdf->RowNoLines(array('Nama Lengkap',':',$item['nama']));
$pdf->SetX(25);
$pdf->RowNoLines(array('Tempat / Tanggal Lahir',':',$item['tmplahir'].', '.date('Y-m-d', strtotime($item['tgllahir']))));
$pdf->SetX(25);
$pdf->RowNoLines(array('NIPP',':',$item['nipp']));
$pdf->SetX(25);
$pdf->RowNoLines(array('Instansi / Unit Kerja',':',$item['instansi']));
$pdf->SetX(25);
$pdf->RowNoLines(array('Jenis Kelamin',':',(($item['jenkel']==1)?'Laki-laki':'Perempuan')));
$pdf->SetX(25);
$pdf->RowNoLines(array('Alamat Rumah',':',$item['alamat']));
$pdf->SetX(25);
$pdf->RowNoLines(array('Nomor Telepon',':','Rumah: '.$item['telprumah']));
$pdf->SetX(25);
$pdf->RowNoLines(array('','','Handphone: '.$item['telphp']));

$pdf->Ln(1);
$pdf->SetFillColor(255,193,7);
$pdf->Rect(20, 141, 170, 118);
$pdf->Rect(20.2, 141.2, 169.7, 8, 'F');
$pdf->SetXY(22,143);
$pdf->SetFont('Times','B',11);
$pdf->Cell(40,5,'PERMOHONAN MENJADI ANGGOTA KOPERASI',0,0);

$pdf->SetXY(22,150);
$pdf->SetFont('Times','','9');
$pdf->Cell(10,5,'Dengan ini saya:',0,0);
$pdf->Ln(3);
$pdf->SetWidths(array(5,2,165));
$pdf->SetAligns(array('L','L','L'));
$pdf->SetX(22);
$pdf->RowNoLines(array('1.','','Mengajukan permohonan menjadi Anggota Koperasi Pegawai Republik Indonesia "Usaha Bersama" Balai Industri Semarang'));
$pdf->SetX(22);
$pdf->RowNoLines(array('2.','','Bersedia untuk mematuhi dan melaksanakan segala ketentuan dalam Anggaran Dasar dan Anggaran Rumah Tangga Koperasi Pegawai Republik Indonesia "Usaha Bersama" Balai Industri serta peraturan-peraturan lainnya yang berlaku di Koperasi Pegawai Republik Indonesia "Usaha Bersama" Balai Industri'));
$pdf->SetX(22);
$pdf->RowNoLines(array('3.','','Demikian Permohonan ini saya sampaikan dengan sebenar-benarnya, dalam kondisi sehat dan tanpa tekanan / paksaan dari pihak manapun'));
$pdf->SetXY(145,200);
$pdf->Cell(10,5,'Semarang '.date('d-m-Y'), 0,0);
// $pdf->SetXY(140,220);
// $pdf->Cell(10,5,'Semarang '.date('d-m-Y'), 0,0);
$pdf->SetWidths(array(53,55,53));
$pdf->SetAligns(array('C','C','C'));
$pdf->SetXY(25,203);
$pdf->RowNoLinesHeader(array('Mengetahui,','',''));
$pdf->SetX(25);
$pdf->RowNoLines(array('Ketua Koperasi','',''));
$pdf->SetX(25);
$pdf->RowNoLines(array('','',''));
$pdf->SetX(25);
$pdf->RowNoLines(array('(Indra Wahyudi, A.Md)','','('.$item['nama'].')'));
$pdf->SetX(25);
$pdf->RowNoLinesHeader(array('','Menyetujui,',''));
$pdf->SetX(25);
$pdf->RowNoLines(array('','Sekretaris',''));
$pdf->SetX(25);
$pdf->RowNoLines(array('','',''));
$pdf->SetX(25);
$pdf->RowNoLines(array('','(M. Syarifudin Edy Nugroho, ST, M.Si)',''));
// include "connect.php";
// $data = mysqli_query($connect, "SELECT * FROM tb_berita");
// $i = mysqli_fetch_array($data);

// $pdf->SetXY(15,45);
// $pdf->Ln(1);
// $pdf->SetFont('Times','',12);
// $pdf->SetWidths(array(40,5,60));
// $pdf->SetAligns(array('L','L','L'));
// $pdf->RowNoLines(array('No. KK',':',$i['id']));
// $pdf->RowNoLines(array('No. KK',':',$data['nokk']));
// $pdf->RowNoLines(array('NIK/No. Paspor',':',$data['nik']));
// $pdf->RowNoLines(array('Nama',':',$data['nama']));
// $pdf->RowNoLines(array('Alamat',':',$data['alamatasal']));

//footer
$pdf->SetFont('Times','IB',11);
$pdf->SetXY(60,265);
// $pdf->Cell(60,5,'Ket: Melampirkan fotocopy KSK, Rekening Tabungan, ID Card Pegawai dan KTP',0,0,'C');
$pdf->Output();
?>