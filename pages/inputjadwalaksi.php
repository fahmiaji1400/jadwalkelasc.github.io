<?php
include "config.php"; //yang mengkoneksikan dengan database
error_reporting(0);
date_default_timezone_set("Asia/Jakarta");

if (isset($_POST['simpan'])) {
	// untuk menginputkan field-field ke database dengan menggunakan methode POST
	$hari = $_POST['hari'];
	$matkul = $_POST['matkul'];
	$jam = $_POST['jam'];
	$pengajar = $_POST['pengajar'];
	$ruangan = $_POST['ruangan'];
	
	$insert= "INSERT INTO jadwal VALUES('','$hari','$matkul','$jam','$pengajar','$ruangan')"; 
	$insertv= mysql_query($insert)or die(mysql_error());
	if ($insertv){
		?><script language="javascript">
			alert('Data Berhasil Disimpan');
			document.location.href="?pages=lihat-jadwal";
		  </script>
		<?php
	}
	else{
	?>
		<script language="javascript">
			alert('Data gagal disimpan');
			document.location.href="?pages=input-jadwal";
		</script>
	<?php
	}
}

?>
