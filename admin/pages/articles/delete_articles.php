<?php 
include "../../../connection.php";

//cek id
if(isset($_GET['id_artikel'])) {
	$id = $_GET['id_artikel'];

//membaca pesan yang akan dihapus
$query = "select * from artikel where id_artikel='$id'";
$hasil = mysql_query($query);
} else {
	die("Error. Tidak ada ID Artikel yang dipilih. Cek kembali.");
}

//proses hapus pesan
if(!empty($id) && $id != "") {
	$hapus = "delete from artikel where id_artikel='$id'";
	$sql = mysql_query($hapus);
	if($sql) {
		?>

		<script language="JavaScript">
			alert('Artikel berhasil dihapus.');
			document.location='show_articles.php';
		</script>

		<?php 
	} else {
		echo "<font color=red><center>Semua data artikel terkait gagal dihapus</center></font>";
	}
}
?>