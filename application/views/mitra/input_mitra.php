<div class="d-flex mt-5">
    <div class="p-5 col-md-10 shadow mb-5 ml-container" style="border-radius: 30px;">
        <div class="row justify-content-center">
            <div class="col-md-12"><br />
                <ol class="breadcrumb">
                    <li>Data Master</li>
                    <li>Data Mitra</li>
                    <li><a href="#">Input Mitra</a></li>
                </ol>
            </div>
            <div class="mt-2 col-md-12">
                <form class="row justify-content-center" method="post" action="<?= base_url() ?>mitra/tambahMitra">
                    <div>
                        <label for="namaMitra" class="form-label">Nama Mitra</label>
                        <input type="text" class="form-control" id="namaMitra" name="namaMitra">
                        <br>

                        <label for="alamat" class="form-label">Alamat Mitra</label>
                        <input type="text" class="form-control" id="alamat" name="alamatMitra">
                        <br>

                        <label for="noHpMitra" class="form-label">No Handphone/Telephon</label>
                        <input type="text" class="form-control" id="noHpMitra" name="noHpMitra">
                        <br>

                        <label for="jenisUsaha" class="form-label">Bidang Usaha</label>
                        <input type="text" class="form-control" id="jenisUsaha" name="jenisUsaha">
                        <br>

                        <label for="deskripsi" class="form-label">Deskripsi Usaha</label>
                        <textarea type="text" class="form-control" id="deskripsi" rows="6" name="deskripsi"></textarea>
                        <br>
                    </div>
                    <div class="float-end">
                        <a class="btn btn-danger" id="back" href="<?= base_url() ?>mitra">Batalkan</a>
                        <button type="submit" class="btn btn-success" id="save">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>