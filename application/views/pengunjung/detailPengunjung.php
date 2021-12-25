<div class="d-flex mt-5">

    <div class="p-5 col-md-10 shadow mb-5 ml-container" style="border-radius: 30px;">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="mb-3 text-center">Detail Pengunjung : <?= $detailPengunjung->namaPengunjung ?></h4>
                <div class="card m-auto" style="width: 18rem;">
                    <img class="card-img-top" src="<?= base_url() ?>assets/image/profilePengunjung.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?= $detailPengunjung->namaPengunjung ?></h5>
                        <p class="card-text">
                            <?= $detailPengunjung->alamatPengunjung ?>
                        </p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><?= $detailPengunjung->noHpPengunjung ?></li>
                        <li class="list-group-item"><?= $detailPengunjung->umurPengunjung ?> Tahun</li>
                        <li class="list-group-item"><?= $detailPengunjung->jenisKelaminPengunjung ?></li>
                        <li class="list-group-item"><?= $detailPengunjung->statusKesehatan ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>