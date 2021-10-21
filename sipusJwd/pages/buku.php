<div id="label-page"><h3>Tampil Data Buku</h3></div>
<div id="content">
	<p id="tombol-tambah-container"><a class="btn btn-primary" href="index.php?p=buku-input" class="tombol">Tambah Data Buku</a></p>
	<table id="tabel-tampil" class="table table-striped">
		<tr>
			<th id="label-tampil-no">No</td>
			<th>ID Buku</th>
			<th>Judul Buku</th>
			<th>Kategori</th>
			<th>Pengarang</th>
			<th>Penerbit</th>
			<th id="label-opsi2">Opsi</th>
		</tr>
		<?php

		$sql="SELECT * FROM tbbuku ORDER BY idbuku DESC";
		$q_tampil_buku = mysqli_query($db, $sql);

		$nomor=1;
		while($r_tampil_buku=mysqli_fetch_array($q_tampil_buku)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $r_tampil_buku['idbuku']; ?></td>
			<td><?php echo $r_tampil_buku['judulbuku']; ?></td>
			<td><?php echo $r_tampil_buku['kategori']; ?></td>
			<td><?php echo $r_tampil_buku['pengarang']; ?></td>
			<td><?php echo $r_tampil_buku['penerbit']; ?></td>
			<td>
				<div class="tombol-opsi-container"><a class="btn btn-outline-primary" href="index.php?p=buku-edit&id=<?php echo $r_tampil_buku['idbuku'];?>" class="tombol">Edit</a></div>
				<form action="proses/buku-hapus.php" method="get" onsubmit="return confirm('Apakah anda yakin ingin menghapus data ini?');">
						<input type="hidden" name="id" value="<?php echo $r_tampil_buku['idbuku']; ?>">
						<button type="submit" class="btn btn-outline-danger">Hapus</button>
					</form>
			</td>
		</tr>
		<?php } ?>
	</table>
</div>