<div id="label-page" class="mb-4">
	<h3>Input Data Buku</h3>
</div>
<div id="content" class="col-8">
	<form action="proses/buku-input-proses.php" method="post">
		<div class="mb-3 row">
			<label for="" class="col-sm-2 col-form-label">ID Buku</label>
			<div class="col-sm-10">
				<input type="text" name="id_buku" class="form-control">

			</div>
		</div>
		<div class="mb-3 row">
			<label for="" class="col-sm-2 col-form-label">Judul Buku</label>
			<div class="col-sm-10">
				<input type="text" data-validation="required" onchange="validation(this)" required name="judul_buku" class="form-control">
				<div id="judul_buku_feedback"></div>

			</div>
		</div>
		<div class="mb-3 row">
			<label for="" class="col-sm-2 col-form-label">Kategori</label>
			<div class="col-sm-10">
				<select class="form-select" data-validation="required" onchange="validation(this)" required name="kategori" aria-label="Default select example">
					<option value="" select="selected">~ Pilih Kategori ~</option>
					<option value="Ilmu Komputer">Ilmu Komputer</option>
					<option value="Ilmu Agama">Ilmu Agama</option>
					<option value="Karya Sastra">Karya Sastra</option>
				</select>
				<div id="kategori_feedback"></div>
			</div>
		</div>
		<div class="mb-3 row">
			<label for="" class="col-sm-2 col-form-label">Pengarang</label>
			<div class="col-sm-10">
				<input type="text" data-validation="required" onchange="validation(this)" required name="pengarang" class="form-control">
				<div id="pengarang_feedback"></div>

			</div>
		</div>
		<div class="mb-3 row">
			<label for="" class="col-sm-2 col-form-label">Penerbit</label>
			<div class="col-sm-10">
				<input type="text" data-validation="required" onchange="validation(this)" required name="penerbit" class="form-control">
				<div id="penerbit_feedback"></div>

			</div>
		</div>
		<button type="submit" name="simpan" value="Simpan" class="btn btn-primary">Simpan</button>

	</form>
</div>