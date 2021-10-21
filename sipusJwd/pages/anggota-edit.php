<?php
	$id_anggota=$_GET['id'];
	$q_tampil_anggota=mysqli_query($db,"SELECT * FROM tbanggota WHERE idanggota='$id_anggota'");
	$r_tampil_anggota=mysqli_fetch_array($q_tampil_anggota);
?>
<div id="label-page" class="mb-4"><h3>Edit Data Anggota</h3></div>
<div id="content" class="col-8">
	<form action="proses/anggota-edit-proses.php" method="POST">
	<div class="mb-3 row">
			<label for="" class="col-sm-2 col-form-label">ID Anggota</label>
			<div class="col-sm-10">
				<input type="text" name="id_anggota" value="<?php echo $r_tampil_anggota['idanggota']; ?>" readonly="readonly" class="form-control">
			</div>
		</div>
		<div class="mb-3 row">
			<label for="" class="col-sm-2 col-form-label">Nama</label>
			<div class="col-sm-10">
				<input type="text" name="nama" data-validation="required" onchange="validation(this)" required value="<?php echo $r_tampil_anggota['nama']; ?>" class="form-control">
				<div id="nama_feedback"></div>

			</div>
		</div>
		<div class="mb-3 row">
			<label for="" class="col-sm-2 col-form-label">Jenis Kelamin</label>
			<div class="col-sm-10">
				<select class="form-select" name="jenis_kelamin" aria-label="Default select example">
					<option value="Pria" <?php echo ($r_tampil_anggota['jeniskelamin'] == 'Pria') ? 'selected' : ''; ?> >Pria</option>
					<option value="Wanita" <?php echo ($r_tampil_anggota['jeniskelamin'] == 'Wanita') ? 'selected' : ''; ?> >Wanita</option>
				</select>
			</div>
		</div>
		<div class="mb-3 row">
			<label for="" class="col-sm-2 col-form-label">Alamat</label>
			<div class="col-sm-10">
				<textarea rows="2" cols="40" name="alamat" class="form-control"><?php echo $r_tampil_anggota['alamat']; ?></textarea>
			</div>
		</div>
		<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">

	
	</form>
</div>