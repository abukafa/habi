<?php 
include 'config.php';
$nis=$_POST['id'];
$nama=addslashes($_POST['nama']);
$panggilan=addslashes($_POST['panggilan']);
$kelamin=$_POST['kelamin'];
$kelas=$_POST['kelas'];
$tmp_lahir=$_POST['tmp_lahir'];
$tgl_lahir=$_POST['tgl_lahir'];
$anak_ke=$_POST['anak_ke'];
$status_kel=$_POST['status_kel'];
$jml_sdr=$_POST['jml_sdr'];
$alamat=addslashes($_POST['alamat']);
$dusun=$_POST['dusun'];
$desa=$_POST['desa'];
$kec=$_POST['kec'];
$kab=$_POST['kab'];
$kpos=$_POST['kpos'];
$hobi=addslashes($_POST['hobi']);
$olah_raga=addslashes($_POST['olah_raga']);
$cita=addslashes($_POST['cita']);
$tinggi=$_POST['tinggi'];
$berat=$_POST['berat'];
$jarak=$_POST['jarak'];
$waktu=$_POST['waktu'];
$ayah=addslashes($_POST['ayah']);
$tmp_ayah=$_POST['tmp_ayah'];
$tgl_ayah=$_POST['tgl_ayah'];
$pend_ayah=$_POST['pend_ayah'];
$ket_ayah=$_POST['ket_ayah'];
$ibu=addslashes($_POST['ibu']);
$tmp_ibu=$_POST['tmp_ibu'];
$tgl_ibu=$_POST['tgl_ibu'];
$pend_ibu=$_POST['pend_ibu'];
$ket_ibu=$_POST['ket_ibu'];
$kerja=addslashes($_POST['kerja']);
$salary=$_POST['salary'];
$tlp=$_POST['tlp'];
$ket_wali=addslashes($_POST['ket_wali']);
$ket_santri=addslashes($_POST['ket_santri']);
$penyakit=addslashes($_POST['penyakit']);
$prestasi=addslashes($_POST['prestasi']);
$alamat_wali=addslashes($_POST['alamat_wali']);
$hubungan_wali=addslashes($_POST['hubungan_wali']);


mysqli_query($GLOBALS["___mysqli_ston"], "update santri set nama='$nama', panggilan='$panggilan', kelamin='$kelamin', kelas='$kelas', tmp_lahir='$tmp_lahir', tgl_lahir='$tgl_lahir', anak_ke='$anak_ke', status_kel='$status_kel', jml_sdr='$jml_sdr', alamat='$alamat', dusun='$dusun', desa='$desa', kec='$kec', kab='$kab', kpos='$kpos', hobi='$hobi', olah_raga='$olah_raga', cita='$cita', tinggi='$tinggi', berat='$berat', jarak='$jarak', waktu='$waktu', ayah='$ayah', tmp_ayah='$tmp_ayah', tgl_ayah='$tgl_ayah', pend_ayah='$pend_ayah', ket_ayah='$ket_ayah', ibu='$ibu', tmp_ibu='$tmp_ibu', tgl_ibu='$tgl_ibu', pend_ibu='$pend_ibu', ket_ibu='$ket_ibu', kerja='$kerja', salary='$salary', tlp='$tlp', ket_wali='$ket_wali', ket_santri='$ket_santri', penyakit='$penyakit', prestasi='$prestasi', alamat_wali='$alamat_wali', hubungan_wali='$hubungan_wali' where nis='$nis'");
header("location:santri");
?>
