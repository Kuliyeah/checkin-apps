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
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Check-in</th>
                                    <th scope="col">Check-out</th>
                                    <th scope="col">Status</th>
                                    <th scope="col" width="100px">Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                foreach ($kunjungan as $data) { ?>
                                    <tr>
                                        <td><?php echo $i ?></td>
                                        <td><?php echo $data->namaPengunjung ?></td>
                                        <td><?php echo $data->namaMitra ?></td>
                                        <td><?php echo $data->jenisUsaha ?></td>
                                        <td><?php echo $data->tanggal ?></td>
                                        <td><?php echo $data->checkin ?></td>
                                        <td><?php echo $data->checkout ?></td>
                                        <td><?php echo $data->statusKunjungan ?></td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $data->idPengunjung ?>">
                                                Detail
                                            </button>
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

<?php foreach ($kunjungan as $data) { ?>
    <!-- Ini modal -->
    <div class="modal fade" id="exampleModal<?php echo $data->idPengunjung ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detail Kunjungan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered table-hover">
                        <tr>
                            <th scope="col" colspan="6" class="text-center">Data Pengunjung</th>
                        </tr>
                        <tr>
                            <th scope="col">Nama Lengkap</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">No HP</th>
                            <th scope="col">Umur</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Status Kesehatan</th>
                        </tr>
                        <tr>
                            <td><?php echo $data->namaPengunjung ?></td>
                            <td><?php echo $data->alamatPengunjung ?></td>
                            <td><?php echo $data->noHpPengunjung ?></td>
                            <td><?php echo $data->umurPengunjung ?></td>
                            <td><?php echo $data->jenisKelaminPengunjung ?></td>
                            <td><?php echo $data->statusKesehatan ?></td>
                        </tr>
                    </table>
                    <br><br>
                    <table class="table table-bordered table-hover">
                        <tr>
                            <th scope="col" colspan="6" class="text-center">Data Mitra</th>
                        </tr>
                        <tr>
                            <th scope="col">Nama Mitra</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">No HP</th>
                            <th scope="col">Bidang Usaha</th>
                            <th scope="col">Deskripsi</th>
                        </tr>
                        <tr>
                            <td><?php echo $data->namaMitra ?></td>
                            <td><?php echo $data->alamatMitra ?></td>
                            <td><?php echo $data->noHpMitra ?></td>
                            <td><?php echo $data->jenisUsaha ?></td>
                            <td><?php echo $data->deskripsi ?></td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Ini tutup modal -->
<?php } ?>