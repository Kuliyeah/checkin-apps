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
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Detail
                                    </button>
									</td>
								</tr>
                                    <!-- Ini modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Detail Kunjungan</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                          </div>
                                          <div class="modal-body">
                                            <table>
                                                <tr>
                                                    <td><?php echo $data->idPengunjung ?></td>
                                                    <td><?php echo $data->namaPengunjung ?></td>
                                                    <td><?php echo $data->alamatPengunjung ?></td>
                                                    <td><?php echo $data->noHpPengunjung ?></td>
                                                    <td><?php echo $data->umurPengunjung ?></td>
                                                    <td><?php echo $data->jenisKelaminPengunjung ?></td>
                                                    <td><?php echo $data->statusKesehatan ?></td>
                                                </tr>
                                            </table>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <!-- Ini tutup modal -->
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