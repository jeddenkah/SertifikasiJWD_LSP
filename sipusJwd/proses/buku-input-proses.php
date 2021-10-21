<?php
include'../koneksi.php';
// $id_buku=$_POST['id_buku'];
$judul_buku=$_POST['judul_buku'];
$kategori=$_POST['kategori'];
$pengarang=$_POST['pengarang'];
$penerbit=$_POST['penerbit'];
$status="Tersedia";
	

//auto generate id
$kode = "BK";
$sql_get_latest = "SELECT MAX(idbuku)
FROM tbbuku";
$latest_id = mysqli_fetch_array(mysqli_query($db, $sql_get_latest))[0];
$latest_id = (substr($latest_id, 2));
$id_buku =$kode.str_pad($latest_id +1, 3, "0", STR_PAD_LEFT) ;

if(isset($_POST['simpan'])){
	mysqli_query($db,
		"INSERT INTO tbbuku
		VALUES('$id_buku','$judul_buku','$kategori','$pengarang','$penerbit','$status')"
	);
	header("location:../index.php?p=buku");
}
?>