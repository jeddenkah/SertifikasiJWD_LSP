<div id="label-page" class="mb-4">
	<h3>Input Transaksi Peminjaman</h3>
</div>
<div id="content" class="col-8">
	<form action="proses/transaksi-peminjaman-input-proses.php" method="post">
		<!-- <div class="mb-3 row">
			<label for="" class="col-sm-2 col-form-label">ID Transaksi</label>
			<div class="col-sm-10">
				<input type="text" name="id_transaksi" class="form-control">

			</div>
		</div> -->
		<div class="mb-3 row">
			<label for="" class="col-sm-2 col-form-label">Anggota</label>
			<div class="col-sm-10">
				<select class="form-select" data-validation="required" onchange="validation(this)" required name="id_anggota" aria-label="Default select example">
					<option value="" select="selected">~ Pilih Data Anggota ~</option>
					<?php
					$q_tampil_anggota = mysqli_query(
						$db,
						"SELECT * FROM tbanggota
							WHERE status='Tidak Meminjam'
							ORDER BY idanggota"
					);
					while ($r_tampil_anggota = mysqli_fetch_array($q_tampil_anggota)) {
						echo "<option value=$r_tampil_anggota[idanggota]>$r_tampil_anggota[idanggota] | $r_tampil_anggota[nama]</option>";
					}
					?>
				</select>
				<div id="id_anggota_feedback"></div>
			</div>
		</div>

		<div class="mb-3 row">
			<label for="" class="col-sm-2 col-form-label">Buku</label>
			<div class="col-sm-10">
				<select class="form-select" data-validation="required" onchange="validation(this)" required name="id_buku" aria-label="Default select example">
					<option value="" select="selected">~ Pilih Data Buku ~</option>
					<?php
					$q_tampil_buku = mysqli_query(
						$db,
						"SELECT * FROM tbbuku
							WHERE status='Tersedia'
							ORDER BY idbuku"
					);
					while ($r_tampil_buku = mysqli_fetch_array($q_tampil_buku)) {
						echo "<option value=$r_tampil_buku[idbuku]>$r_tampil_buku[idbuku] | $r_tampil_buku[judulbuku]</option>";
					}
					?>
				</select>
				<div id="id_buku"></div>
			</div>
		</div>
		<div class="mb-3 row">
			<label for="" class="col-sm-2 col-form-label">Tanggal Pinjam</label>
			<div class="col-sm-10">
				<input type="date" name="tgl_pinjam" value="<?php echo $tgl; ?>" data-validation="required" onchange="validation(this)" required class="form-control">
			</div>
		</div>

		<button type="submit" name="simpan" value="Simpan" class="btn btn-primary">Simpan</button>


	</form>
</div>