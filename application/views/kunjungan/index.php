<div class="d-flex mt-5">
    <div class="p-5 col-md-10 shadow mb-5 ml-container" style="border-radius: 30px;">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Data Kunjungan
                    </div>

                    <div class="panel-body">
                        <table id="example" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Pengunjung</th>
                                    <th scope="col">Nama Mitra</th>
                                    <th scope="col">Jenis Usaha</th>
                                    <th scope="col">Status</th>
                                    <th scope="col" width="100px">Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
								<?php
                                    $i = 1;
                                    foreach ($kunjungan as $data) { ?>
								<tr>
									<td><?php echo $i?></td>
									<td><?php echo $data->namaPengunjung ?></td>
									<td><?php echo $data->namaMitra ?></td>
									<td><?php echo $data->jenisUsaha ?></td>
									<td><?php echo $data->statusKunjungan ?></td>
									<td>
										<a href="#" class="btn btn-sm btn-primary w-100 mb-2" id="update">Detail</a>
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