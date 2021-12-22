<img src="../../assets/image/virus2.png" class="bg-1 wow animate__animated animate__fadeIn">
    <img src="../../assets/image/virus4.png" class="bg-4 wow animate__animated animate__fadeIn">

    <nav class="nav-bar">
        <div class="menu-bar">
            <div class="profile">
                <img src="../../assets/image/profil.jpg" alt="profile" style="border-radius: 100px;">
            </div>
            <div class="menu">
                <div class="main-menu">
                    <ul>
                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top">
                            <a href="dashboard.html">
                                <i class="bi bi-house-door-fill"></i>
                                <div class="position-absolute tooltips">Beranda</div>
                            </a>
                        </li>
                        <li>
                            <a href="data_mitra.html" class="actived">
                                <i class="bi bi-stack"></i>
                                <div class="position-absolute tooltips">Data Mitra</div>
                            </a>
                        </li>
                        <li>
                            <a href="data_pengunjung.html">
                                <i class="bi bi-file-earmark-text-fill"></i>
                                <div class="position-absolute tooltips">Data Pengunjung</div>
                            </a>
                        </li>
                        <li>
                            <a href="data_kunjungan.html">
                                <i class="bi bi-graph-up-arrow"></i>
                                <div class="position-absolute tooltips">Data Kunjungan</div>
                            </a>
                        </li>
                        <li>
                            <a href="informasi.html">
                                <i class="bi bi-info-circle-fill"></i>
                                <div class="position-absolute tooltips">Informasi</div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="button-menu">
                    <ul>
                        <li id="keluar" class="">
                            <a href="#" class="out bg-danger text-white">
                                <i class="bi bi-box-arrow-right"></i>
                                <div class="position-absolute tooltips bg-danger text-white">Beranda</div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

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
                    <form class="row justify-content-center">
                        <div>
                            <label for="form-mitra" class="form-label">Nama Mitra</label>
                            <input type="text" class="form-control" id="form-mitra">
                            <br>

                            <label for="form-mitra2" class="form-label">Alamat Mitra</label>
                            <input type="text" class="form-control" id="form-mitra2">
                            <br>

                            <label for="form-mitra3" class="form-label">No Handphone/Telephon</label>
                            <input type="text" class="form-control" id="form-mitra3">
                            <br>

                            <label for="form-mitra4" class="form-label">Bidang Usaha</label>
                            <input type="text" class="form-control" id="form-mitra4">
                            <br>

                            <label for="form-mitra5" class="form-label">Deskripsi Usaha</label>
                            <textarea type="text" class="form-control" id="form-mitra5" rows="6"></textarea>
                            <br>
                        </div>
                    </form>
                    <div class="float-end">
                        <button class="btn btn-danger" id="back">Batalkan</button>
                        <button class="btn btn-success" id="save">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>