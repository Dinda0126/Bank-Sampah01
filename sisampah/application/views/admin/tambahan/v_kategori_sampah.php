<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Kategori
			<small>Kategori Sampah</small>
		</h1>
	</section>

	<section class="content">

		<div class="row">
			<div class="col-lg-9">

				<a href="<?php echo base_url() . 'kategori_sampah/tambah'; ?>" class="btn btn-sm btn-primary">Buat Kategori baru</a>

				<br />
				<br />

				<div class="box box-primary">
					<div class="box-header">
						<h3 class="box-title">Kategori Sampah</h3>
					</div>
					<div class="box-body">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th width="1%">NO</th>
									<th>Kategori</th>
									<th width="20%">OPSI</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no = 1;
								foreach ($kategori_sampah as $ks) {
								?>
									<tr>
										<td><?php echo $no++; ?></td>
										<td><?php echo $ks->kat_sampah_jenis; ?></td>
										<td>
											<a href="<?php echo base_url() . 'kategoriSampah_edit' . $ks->kat_barang_id; ?>" class="btn btn-warning btn-sm"> <i class="fa fa-pencil"></i> </a>
											<a href="<?php echo base_url() . 'kategoriSampah_hapus' . $ks->kat_barang_id; ?>" class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i> </a>
										</td>
									</tr>
								<?php } ?>
							</tbody>
						</table>


					</div>
				</div>

			</div>
		</div>

	</section>

</div>