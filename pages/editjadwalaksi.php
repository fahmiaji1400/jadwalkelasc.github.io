<?php
include "config.php"; //yang mengkoneksikan dengan database
error_reporting(0);

if (isset($_POST['simpan'])) {
	// untuk menginputkan field-field ke database dengan menggunakan methode POST
	$no = 	$_POST['no'];
	$hari = $_POST['hari'];
	$matkul = $_POST['matkul'];
	$jam = $_POST['jam'];
	$pengajar = $_POST['pengajar'];
	$ruangan = $_POST['ruangan'];
	
	
	$update = "UPDATE jadwal SET 
					hari = '$hari',
					matkul = '$matkul',
					jam = '$jam',
					pengajar = '$pengajar',
					ruangan = '$ruangan'
					
				WHERE no = '$no'";
	
	$q_update = mysql_query($update)or die (mysql_error());
	if ($q_update){
		?><script language="javascript">
			alert('Data Berhasil di ubah');
			document.location.href="?pages=lihat-jadwal";
		  </script>
		<?php
	}
	else{
	?>
		<script language="javascript">
			alert('Data gagal di ubah');
			document.location.href="?pages=lihat-jadwal";
		</script>
	<?php
	}
}

?>
