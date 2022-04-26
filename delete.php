<?php 

	include './database/koneksi.php';

	if(isset($_GET['nim'])){

		$delete= mysqli_query($conn, "DELETE FROM mhs_tb WHERE nim= '" . $_GET['nim'] . "'");
		if ($delete) {
			echo ("<script>
				alert('Data Berhasil Dihapus');
				window.location = 'lihat-mhs.php';
				</script>");
		}
	}

?>