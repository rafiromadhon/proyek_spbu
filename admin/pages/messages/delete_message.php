<?php 
include "../../../connection.php";

//cek id
if(isset($_GET['id'])) {
	$id_pesan = $_GET['id'];

//membaca pesan yang akan dihapus
	$query = "select * from contact where id='$id_pesan'";
	$hasil = mysql_query($query);
} else {
	die("Error. Tidak ada ID Pesan yang dipilih. Cek kembali.");
}

//proses hapus pesan
if(!empty($id_pesan) && $id_pesan != "") {
	$hapus = "delete from contact where id='$id_pesan'";
	$sql = mysql_query($hapus);
	if($sql) {
		?>

		<script language="JavaScript">
			alert('Pesan berhasil dihapus.');
			document.location='show_message.php';
		</script>

		<?php 
	} else {
		echo "<font color=red><center>Data pesan gagal dihapus</center></font>";
	}
}
?>