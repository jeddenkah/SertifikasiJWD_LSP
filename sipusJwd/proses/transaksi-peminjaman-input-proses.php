<?php
include '../koneksi.php';
// $id_transaksi=$_POST['id_transaksi'];
$id_anggota=$_POST['id_anggota'];
$id_buku=$_POST['id_buku'];
$tgl_pinjam=$_POST['tgl_pinjam'];
$status_anggota="Sedang Meminjam";
$status_buku="Dipinjam";

//auto generate id
$kode = "TR";
$sql_get_latest = "SELECT MAX(idtransaksi)
FROM tbtransaksi";
$latest_id = mysqli_fetch_array(mysqli_query($db, $sql_get_latest))[0];
$latest_id = (substr($latest_id, 2));
$id_transaksi =$kode.str_pad($latest_id +1, 3, "0", STR_PAD_LEFT) ;



if(isset($_POST['simpan'])){
	mysqli_query($db,
		"INSERT INTO tbtransaksi
		VALUES('$id_transaksi','$id_anggota','$id_buku','$tgl_pinjam','')"
	);
	mysqli_query($db,
		"UPDATE tbanggota
		SET status='$status_anggota'
		WHERE idanggota='$id_anggota'"
	);
	mysqli_query($db,
		"UPDATE tbbuku
		SET status='$status_buku'
		WHERE idbuku='$id_buku'"
	);
	header("location:../index.php?p=transaksi-peminjaman");
}
?>