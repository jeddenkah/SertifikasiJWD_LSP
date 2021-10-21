<?php
include'../koneksi.php';
// $id_anggota=$_POST['id_anggota'];
$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$alamat=$_POST['alamat'];
$status="Tidak Meminjam";

//auto generate id
$kode = "AG";
$sql_get_latest = "SELECT MAX(idanggota)
FROM tbanggota";
$latest_id = mysqli_fetch_array(mysqli_query($db, $sql_get_latest))[0];
$latest_id = (substr($latest_id, 2));
$id_anggota =$kode.str_pad($latest_id +1, 3, "0", STR_PAD_LEFT) ;
	
if(isset($_POST['simpan'])){

	$sql = 
	"INSERT INTO tbanggota
		VALUES('$id_anggota','$nama','$jenis_kelamin','$alamat','$status')";
	$query = mysqli_query($db, $sql);

	header("location:../index.php?p=anggota");
}
?>