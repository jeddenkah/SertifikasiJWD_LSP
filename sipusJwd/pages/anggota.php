<div id="label-page">
	<h3>Tampil Data Anggota</h3>
</div>
<div id="content">
	<p id="tombol-tambah-container"><a class="btn btn-primary" href="index.php?p=anggota-input" class="tombol">Tambah Anggota</a></p>
	<table id="tabel-tampil" class="table table-striped">
		<tr>
			<th id="label-tampil-no">No</td>
			<th>ID Anggota</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Alamat</th>
			<th id="label-opsi">Opsi</th>
		</tr>



		<?php
		$sql = "SELECT * FROM tbanggota ORDER BY idanggota DESC";
		$q_tampil_anggota = mysqli_query($db, $sql);
		$nomor = 1;
		while ($r_tampil_anggota = mysqli_fetch_array($q_tampil_anggota)) {

		?>
			<tr>
				<td><?php echo $nomor++; ?></td>
				<td><?php echo $r_tampil_anggota['idanggota']; ?></td>
				<td><?php echo $r_tampil_anggota['nama']; ?></td>
				<td><?php echo $r_tampil_anggota['jeniskelamin']; ?></td>
				<td><?php echo $r_tampil_anggota['alamat']; ?></td>
				<td>

					<div class="tombol-opsi-container"><a class="btn btn-outline-primary" href="index.php?p=anggota-edit&id=<?php echo $r_tampil_anggota['idanggota']; ?>" class="tombol">Edit</a></div>
					<form action="proses/anggota-hapus.php" method="get" onsubmit="return confirm('Apakah anda yakin ingin menghapus data ini?');">
						<input type="hidden" name="id" value="<?php echo $r_tampil_anggota['idanggota']; ?>">
						<button type="submit" class="btn btn-outline-danger">Hapus</button>
					</form>
				</td>
			</tr>
		<?php } ?>
	</table>
</div>