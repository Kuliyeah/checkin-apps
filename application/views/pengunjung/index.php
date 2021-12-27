<div class="d-flex mt-5">
    <div class="p-5 col-md-10 shadow mb-5 ml-container" style="border-radius: 30px;">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Data Pengunjung
                    </div>

                    <div class="panel-body">
                        <table id="example" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Lengkap</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">No HP</th>
                                    <th scope="col">Umur</th>
                                    <th scope="col">Jenis Kelamin</th>
                                    <th scope="col">Status Kesehatan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                foreach ($pengunjung as $data) { ?>
                                    <tr>
                                        <td><?php echo $i ?></td>
                                        <td><?php echo $data->namaPengunjung ?></td>
                                        <td><?php echo $data->alamatPengunjung ?></td>
                                        <td><?php echo $data->noHpPengunjung ?></td>
                                        <td><?php echo $data->umurPengunjung ?></td>
                                        <td><?php echo $data->jenisKelaminPengunjung ?></td>
                                        <td><?php echo $data->statusKesehatan ?></td>
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