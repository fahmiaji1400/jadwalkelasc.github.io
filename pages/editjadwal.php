<?php
  include "config.php";
    $no = $_GET ['no'];
    $sql  = "SELECT * FROM jadwal WHERE no='$no'";
    $q_select = mysql_query($sql) or die(mysql_error());
    $rows= mysql_fetch_array($q_select);
?>

<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<b>Edit Jadwal</b>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-9">
						<form action="?pages=edit-jadwal-aksi" method="POST" onsubmit="return validasi_input(this)">
							<div class="form-group">
								<label></label>
								<input type="hidden" value="<?php echo $rows['no']; ?>" class="form-control" name="no">
							</div>
							<div class="form-group">
								<label>Hari</label>
								<input type="text" value="<?php echo $rows['hari']; ?>" class="form-control" name="hari">
							</div>
							<div class="form-group">
								<label>Mata Kuliah</label>
								<input type="text" class="form-control" name="matkul" value="<?php echo $rows['matkul']; ?>">
							</div>
							<div class="form-group">
								<label>Jam</label>
								<input type="time" class="form-control" name="jam" value="<?php echo $rows['jam']; ?>">
							</div>
							<div class="form-group">
								<label>Dosen</label>
								<input type="text" class="form-control" name="pengajar" value="<?php echo $rows['pengajar']; ?>">
							</div>
							<div class="form-group">
								<label>Ruang Kelas</label>
								<input type="text" class="form-control" name="ruangan" value="<?php echo $rows['ruangan']; ?>">
							</div>
							<div>
								<input type="submit" name="simpan" class="btn btn-primary" value="Simpan">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>