<?php
	$id_buku=$_GET['id'];
	$q_tampil_buku=mysqli_query($db,"SELECT * FROM tbbuku WHERE idbuku='$id_buku'");
	$r_tampil_buku=mysqli_fetch_array($q_tampil_buku);

?>
<div id="label-page" class="mb-4"><h3>Edit Data Buku</h3></div>
<div id="content" class="col-8">
	<form action="proses/buku-edit-proses.php" method="post">
	<div class="mb-3 row">
			<label for="" class="col-sm-2 col-form-label">ID Buku</label>
			<div class="col-sm-10">
				<input type="text" value="<?php echo $r_tampil_buku['idbuku']; ?>" readonly="readonly" name="id_buku" class="form-control">

			</div>
		</div>
		<div class="mb-3 row">
			<label for="" class="col-sm-2 col-form-label">Judul Buku</label>
			<div class="col-sm-10">
				<input type="text" data-validation="required" onchange="validation(this)" value="<?php echo $r_tampil_buku['judulbuku']; ?>" required name="judul_buku" class="form-control">
				<div id="judul_buku_feedback"></div>

			</div>
		</div>
		<div class="mb-3 row">
			<label for="" class="col-sm-2 col-form-label">Kategori</label>
			<div class="col-sm-10">
				<select class="form-select" data-validation="required" onchange="validation(this)" required name="kategori" aria-label="Default select example">
					<option value="" select="selected">~ Pilih Kategori ~</option>
					<option value="Ilmu Komputer" <?php echo ($r_tampil_buku['kategori'] == 'Ilmu Komputer') ? 'selected' : ''; ?> >Ilmu Komputer</option>
					<option value="Ilmu Agama" <?php echo ($r_tampil_buku['kategori'] == 'Ilmu Agama') ? 'selected' : ''; ?> >Ilmu Agama</option>
					<option value="Karya Sastra" <?php echo ($r_tampil_buku['kategori'] == 'Karya Sastra') ? 'selected' : ''; ?> >Karya Sastra</option>
				</select>
				<div id="kategori_feedback"></div>
			</div>
		</div>
		<div class="mb-3 row">
			<label for="" class="col-sm-2 col-form-label">Pengarang</label>
			<div class="col-sm-10">
				<input type="text" data-validation="required" onchange="validation(this)" required value="<?php echo $r_tampil_buku['pengarang']; ?>" name="pengarang" class="form-control">
				<div id="pengarang_feedback"></div>

			</div>
		</div>
		<div class="mb-3 row">
			<label for="" class="col-sm-2 col-form-label">Penerbit</label>
			<div class="col-sm-10">
				<input type="text" data-validation="required" onchange="validation(this)" required value="<?php echo $r_tampil_buku['penerbit']; ?>" name="penerbit" class="form-control">
				<div id="penerbit_feedback"></div>

			</div>
		</div>
		<button type="submit" name="simpan" value="Simpan" class="btn btn-primary">Simpan</button>

	</form>
</div>