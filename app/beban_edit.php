<?php 
include 'header.php';
?>

<main class="content">
	<div class="container p-0">
		<h3 class="display-6"><span class=""></span>Edit Beban</h3>
		<div class="d-flex justify-content-between">
			<a class="btn" href="beban"><span data-feather="arrow-left"></span>Kembali</a>
		</div>
		<div class="card mt-3">
			<div class="card-header">
				<div class="card-title">
					Beban Administrasi
				</div>
			</div>
			<div class="card-body">
			<?php
			$no=mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_GET['no']);
			$det=mysqli_query($GLOBALS["___mysqli_ston"], "select * from beban where no='$no'")or die(mysqli_error($GLOBALS["___mysqli_ston"]));
			while($d=mysqli_fetch_array($det)){
			?>	
			<form action="beban_update.php" method="post">
				<tr>	
					<table class="table">
						<input type="hidden" class="form-control" name="no" value="<?php echo $d['no'] ?>" readonly=yes>
						<td>NIS</td>
						<td><select name="nis" id="nis" class="form-control" onchange="changeValue(this.value)">
							<option value="<?php echo $d['nis'] ?>"><?php echo $d['nis'] ?></option>
							<?php 
							$brg=mysqli_query($GLOBALS["___mysqli_ston"], "select * from santri");
							$jsArray = "var sant = new Array();\n";        
							while($b=mysqli_fetch_array($brg)){
							echo '<option value="' . $b['nis'] . '">' . $b['nis'] . '</option>';
							$jsArray .= "sant['" . $b['nis'] . "'] = {nama:'" . addslashes($b['nama']) . "'};\n";
							}
							?>
							</select>
						</td>
					</tr>
					<tr>	
						<td>Nama</td>
						<td><input type="text" class="form-control" name="nama" id="nama" value="<?php echo $d['nama'] ?>" readonly=yes></td>		
							<script type="text/javascript">    
							<?php echo $jsArray; ?>  
							function changeValue(nis){  
							document.getElementById('nama').value = sant[nis].nama;
							};  
							</script>
						</td>
					</tr>
					<tr>	
						<td>Tahun</td>
						<td><select name="thn" class="form-control" value="-">
							<option><?php echo $d['thn'] ?></option>
							<?php
							for($i=2017; $i<=date('Y')+2; $i++){
							echo"<option value='$i'> $i </option>";
							}
							?>
							</select>
						</td>
					</tr>
					<tr>	
						<td>Keterangan</td>
						<td><input type="text" class="form-control" name="ket" value="<?php echo $d['ket'] ?>"></td>
					</tr>
					<tr>
						<td>SPP</td>
						<td><input type="text" class="form-control" name="spp" value="<?php echo $d['spp'] ?>"></td>
					</tr>
					<tr>
						<td>Makan</td>
						<td><input type="text" class="form-control" name="makan" value="<?php echo $d['makan'] ?>"></td>
					</tr>
					<tr>	
						<td>Asrama</td>
						<td><input type="text" class="form-control" name="asrama" value="<?php echo $d['asrama'] ?>"></td>
					</tr>
					<tr>		
						<td>Bangunan</td>
						<td><input type="text" class="form-control" name="bangunan" value="<?php echo $d['bangunan'] ?>"></td>
					</tr>
					<tr>
						<td>Pendidikan</td>
						<td><input type="text" class="form-control" name="pendidikan" value="<?php echo $d['pendidikan'] ?>"></td>
						
					</tr>
					<tr>		
						<td>Pendaftaran</td>
						<td><input type="text" class="form-control" name="daftar" value="<?php echo $d['daftar'] ?>"></td>
					</tr>
					<tr>
						<td>Seragam</td>
						<td><input type="text" class="form-control" name="seragam" value="<?php echo $d['seragam'] ?>"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" class="btn btn-primary pull-right" value="Simpan"></td>
					</tr>
				</table>
			</form>
<?php
}
?>
