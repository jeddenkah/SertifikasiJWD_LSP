<div id="label-page" class="mb-4">
	<h3>Input Data Anggota</h3>
</div>
<div id="content" class="col-8">
	<form action="proses/anggota-input-proses.php" method="post">
		<div class="mb-3 row">
			<label for="" class="col-sm-2 col-form-label">ID Anggota</label>
			<div class="col-sm-10">
				<input type="text" name="id_anggota" class="form-control">
				
			</div>
		</div>
		<div class="mb-3 row">
			<label for="" class="col-sm-2 col-form-label">Nama</label>
			<div class="col-sm-10">
				<input type="text" data-validation="required" onchange="validation(this)" name="nama" class="form-control" required>
				<div id="nama_feedback"></div>
			</div>
		</div>
		<div class="mb-3 row">
			<label for="" class="col-sm-2 col-form-label">Jenis Kelamin</label>
			<div class="col-sm-10">
				<select class="form-select" name="jenis_kelamin" aria-label="Default select example">
					<option value="Pria">Pria</option>
					<option value="Wanita">Wanita</option>
				</select>
				<div id="jenis_kelamin_feedback"></div>
			</div>
		</div>
		<div class="mb-3 row">
			<label for="" class="col-sm-2 col-form-label">Alamat</label>
			<div class="col-sm-10">
				<textarea rows="2" cols="40" name="alamat" class="form-control"></textarea>
				<div id="alamat_feedback"></div>
			</div>
		</div>
		<button type="submit" name="simpan" value="Simpan" class="btn btn-primary">Simpan</button>

	</form>
</div>