<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Data Sampah
			<small>Master Data Sampah</small>
		</h1>
	</section>

	<section class="content">

		<div class="row">
			<div class="col-lg-12">

				<a href="<?php echo base_url() . 'dashboard/sampah_tambah'; ?>" class="btn btn-sm btn-primary">Tambahkan Data</a>

				<br />
				<br />

				<div class="box box-primary">
					<div class="box-header">
						<h3 class="box-title">Data Sampah</h3>
					</div>
					<div class="box-body">
						<?php
						if (isset($_GET['alert'])) {
							if ($_GET['alert'] == "sukses") {
								echo "<div class='alert alert-success font-weight-bold text-center'>Selamat, Data Berhasil Ditambahkan</div>";
							} else if ($_GET['alert'] == "hapus") {
								echo "<div class='alert alert-danger font-weight-bold text-center'>Data Berhasil Dihapus!</div>";
							} else if ($_GET['alert'] == "edit") {
								echo "<div class='alert alert-success font-weight-bold text-center'>Data Berhasil Di Update!</div>";
							}
						}
						?>
						<table class="table table-bordered">
							<thead>
								<tr>
									<th width="1%">NO</th>
									<th>Nama</th>
									<th>Harga(Kg)</th>
									<th>Kategori</th>
									<th>Stok</th>
									<th width="20%">OPSI</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no = 1;
								foreach ($tbl_barang as $s) {
								?>
									<tr>
										<td><?php echo $no++; ?></td>
										<td><?php echo $s->barang_nama; ?></td>
										<td><?php echo $s->barang_harpok; ?></td>
										<td><?php echo $s->barang_kategori_id; ?></td>
										<td><?php echo $s->sampah_user_id; ?></td>

										<td>
											<a href="<?php echo base_url() . 'dashboard/sampah_edit/' . $s->barang_id; ?>" class="btn btn-warning btn-sm"> <i class="fa fa-pencil"></i> </a>
											<a href="<?php echo base_url() . 'dashboard/sampah_hapus/' . $s->barang_id; ?>" class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i> </a>
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