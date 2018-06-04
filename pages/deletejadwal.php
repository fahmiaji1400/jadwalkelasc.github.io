<?php  
include "config.php";
$no = $_GET['no'];  
$query = "DELETE from jadwal WHERE no='$no'";  
$delete = mysql_query($query)  or die(mysql_error());
?>

<script language="JavaScript">
alert('Data Berhasil dihapus.');
document.location.href="?pages=lihat-jadwal";
</script>
