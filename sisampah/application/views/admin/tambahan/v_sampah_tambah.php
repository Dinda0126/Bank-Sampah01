<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Data Sampah
			<small>Tambah Sampah</small>
		</h1>
	</section>

	<section class="content">

		<div class="row">
			<div class="col-lg-6">
				<a href="<?php echo base_url().'dashboard/sampah'; ?>" class="btn btn-sm btn-primary">Kembali</a>
				
				<br/>
				<br/>

				<div class="box box-primary">
					<div class="box-header">
						<h3 class="box-title">Data Sampah</h3>
					</div>
					<div class="box-body">
						
						<form method="post" action="<?php echo base_url('dashboard/sampah_aksi') ?>">
							<div class="box-body">
								<div class="form-row">
									<div class="form-group col-md-6">
										<label>Nama Sampah</label>
										<input type="text" name="nama" class="form-control">
										<?php echo form_error('nama'); ?>
									</div>
									<div class="form-group col-md-6">
										<label>Satuan</label>
										<input type="text" name="satuan" class="form-control">
										<?php echo form_error('satuan'); ?>
									</div>
									<div class="form-group col-md-6">
										<label>Harga Pokok</label>
										<input type="text" name="harga_pokok" class="form-control">
										<?php echo form_error('harga_pokok'); ?>
									</div>
									<div class="form-group col-md-6">
										<label>Harga Jual</label>
										<input type="text" name="harga_jual" class="form-control">
										<?php echo form_error('harga_jual'); ?>
									</div>
									<div class="form-group col-md-6">
										<label>Stok</label>
										<input type="text" name="stok" class="form-control">
										<?php echo form_error('stok'); ?>
									</div>
									<div class="form-group col-md-6">
										<label>Kategori</label>
										<select class="form-control" name="kategori">
											<option value="">- Pilih Kategori</option>
											<?php foreach($kategori_sampah as $k){ ?>
											<option <?php if(set_value('kategori_sampah') == $k->kat_sampah_id){echo "selected='selected'";} ?> value="<?php echo $k->kat_sampah_id ?>"><?php echo $k->kat_sampah_jenis; ?></option>
											<?php } ?>
										</select>
								<br/>
								<?php echo form_error('kategori'); ?>
							</div>
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