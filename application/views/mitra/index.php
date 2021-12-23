<div class="d-flex mt-5" style="background-color: #FFF !important; z-index: 5;">
	<div class="p-5 col-md-10 shadow mb-5 ml-container" style="border-radius: 30px;">
		<div class="row">
			<div class="col-lg-12">
				<a href="<?php echo base_url() . "mitra/formInputMitra" ?>" class="btn btn-primary mb-2">
					Create New Data
				</a>

				<div class="panel panel-default">
					<div class="panel-heading">
						Data Mitra
					</div>

					<div class="panel-body">
						<table id="example" class="table table-bordered table-hover">
							<thead>
								<tr>
									<th scope="col">No</th>
									<th scope="col">Nama Mitra</th>
									<th scope="col">Alamat</th>
									<th scope="col">No HP</th>
									<th scope="col">Bidang Usaha</th>
									<th scope="col" width="250px">Deskripsi</th>
									<th scope="col" width="125px">Opsi</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$i = 1;
								foreach ($mitra as $data) { ?>
									<tr>
										<td><?php echo $i ?></td>
										<td><?php echo $data->namaMitra ?></td>
										<td><?php echo $data->alamatMitra ?></td>
										<td><?php echo $data->noHpMitra ?></td>
										<td><?php echo $data->jenisUsaha ?></td>
										<td><?php echo $data->deskripsi ?></td>

										<td>
											<a href="#" class="btn btn-sm btn-warning w-100 mb-2" id="update">Update</a>
											<a href="<?= base_url() ?>mitra/hapusMitra?idMitra=<?= $data->idMitra ?>" class="btn btn-sm btn-danger w-100" id="delete">Delete</a>
										</td>
									</tr>
								<?php
									$i++;
								}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>