<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Pengguna
			<small>Tambah Pengguna</small>
		</h1>
	</section>

	<section class="content">

		<div class="row">
			<div class="col-lg-6">
				<a href="<?php echo base_url().'dashboard/pengguna'; ?>" class="btn btn-sm btn-primary">Kembali</a>
				
				<br/>
				<br/>

				<div class="box box-primary">
					<div class="box-header">
						<h3 class="box-title">Pengguna</h3>
					</div>
					<div class="box-body">
						
						<form method="post" action="<?php echo base_url('dashboard/pengguna_aksi') ?>">
							<div class="box-body">
								<div class="form-group">
									<label>Nama</label>
									<input type="text" name="nama" class="form-control">
									<?php echo form_error('nama'); ?>
								</div>
								<div class="form-group">
									<label>Email</label>
									<input type="email" name="email" class="form-control">
									<?php echo form_error('email'); ?>
								</div>
								<div class="form-group">
									<label>No Telp</label>
									<input type="text" name="telp" class="form-control">
									<?php echo form_error('telp'); ?>
								</div>
								<div class="form-group">
									<label>Alamat Lengkap</label>
									<input type="text" name="alamat" class="form-control">
									<?php echo form_error('alamat'); ?>
								</div>
								<div class="form-group">
									<label>Username</label>
									<input type="text" name="username" class="form-control">
									<?php echo form_error('username'); ?>
								</div>
								<div class="form-group">
									<label>Password</label>
									<input type="password" name="password" class="form-control"">
									<?php echo form_error('password'); ?>
								</div>
								<div class="form-group">
									<label>Level</label>
									<select class="form-control" name="level">
										<option value="">- Pilih Level -</option>
										<option value="admin">Admin</option>
										<option value="pimpinan">Pimpinan</option>
										<option value="nasabah">Nasabah</option>
									</select>
									<?php echo form_error('level'); ?>
								</div>
								<div class="form-group">
									<label>Status</label>
									<select class="form-control" name="status">
										<option value="">- Pilih Status -</option>
										<option value="1">Aktif</option>
										<option value="0">Non-Aktif</option>
									</select>
									<?php echo form_error('status'); ?>
								</div>
							</div>

							<div class="box-footer">
								<input type="submit" class="btn btn-success" value="Simpan">
							</div>
						</form>

					</div>
				</div>

			</div>
		</div>

	</section>

</div>