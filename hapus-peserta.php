<?php
	include 'koneksi.php';
	if(isset($GET['id'])){
		$delete = mysqli_query($conn,"DELETE FROM tb_pendaftaran 
			WHERE id_pendaftaran = '".$_GET['id']."'");
	echo '<script>window.location= "data-peserta.php"</script>';
	}
?>