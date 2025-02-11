<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?= base_url() ?>/node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url() ?>/node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= base_url() ?>/node_modules/animate.css/animate.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/font.css">

    <title>Go Cek-In</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white w-100">
            <div class="container">
                <a class="navbar-brand" href="../"><img src="<?= base_url() ?>/assets/image/icon.png" alt="Go Check-In" width="65.22px" height="61.41px"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarRightAlignExample">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link lato-bold" aria-current="page" href="../#tentang" id="nav_tentang">Tentang Kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link lato-bold" href="../#kontak" id="nav_kontak">Kontak Kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link lato-black text-success" href="../mitra/tambahMitraHome" id="nav_kontak">Become Our Mitra</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-success px-3 nav-link text-white nav_button" href="" data-bs-toggle="modal" data-bs-target="#loginModal">Masuk</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <section>
            <div class="mt-2 col-md-4 mx-auto">

                <form class="row justify-content-center" method="post" action="<?= base_url() ?>mitra/tambahMitraHome" enctype='multipart/form-data'>

                    <div style="margin-top:100px;">
                    
                        <h5 class="text-center mt-5 mb-4"><i>"Berkontribusilah bagi kesehatan bersama"</i></h5>
                        
                        <?php if ($this->session->flashdata('flash')) : ?>
                            <div id="alert" class="alert alert-success alert-dismissible fade show" role="alert">
                                Data <strong>BERHASIL</strong> <?php echo $this->session->flashdata('flash') ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php $this->session->unset_userdata('flash');
                        endif; ?>
                        <label for="namaMitra" class="form-label">Nama Mitra</label>
                        <input type="text" class="form-control" id="namaMitra" name="namaMitra"><small class="form-text text-danger"><?= form_error('namaMitra') ?></small>
                        <br>

                        <label for="alamat" class="form-label">Alamat Mitra</label>
                        <input type="text" class="form-control" id="alamat" name="alamatMitra">
                        <small class="form-text text-danger"><?= form_error('alamatMitra') ?></small>
                        <br>

                        <label for="noHpMitra" class="form-label">No Handphone/Telephon</label>
                        <input type="text" class="form-control" id="noHpMitra" name="noHpMitra"><small class="form-text text-danger"><?= form_error('noHpMitra') ?></small>
                        <br>

                        <label for="jenisUsaha" class="form-label">Bidang Usaha</label>
                        <input type="text" class="form-control" id="jenisUsaha" name="jenisUsaha"><small class="form-text text-danger"><?= form_error('jenisUsaha') ?></small>
                        <br>

                        <label for="deskripsi" class="form-label">Deskripsi Usaha</label>
                        <textarea type="text" class="form-control" id="deskripsi" rows="6" name="deskripsi"></textarea><small class="form-text text-danger"><?= form_error('deskripsi') ?></small>
                        <br>
                        <label for="fotoUsaha" class="form-label">Foto Usaha</label>
                        <br>
                        <input type="file" class="custom-file-input" id="fotoUsaha" name="fotoUsaha" accept='image/*'><?= form_error('fotoUsaha') ?></small>
                        <br><br>
                    </div>
                    <div class="float-end mb-5">
                        <a class="btn btn-danger" id="back" href="<?= base_url() ?>">Batalkan</a>
                        <button type="submit" class="btn btn-success" id="save">Simpan</button>
                    </div>
                </form>
            </div>
        </section>
    </main>

    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="<?= base_url() ?>home/login" method="POST">
                    <div class="modal-header">
                        <h5 class="modal-title" id="loginModalLabel">Login</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="example" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="********" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                        <input type="submit" class="btn btn-success" value="Login" id="login">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <footer class="bg-light text-center text-lg-start">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.1);">
            © 2021 Create with &#128293; by Go Check-In Team
        </div>
    </footer>
</body>

<script type="text/javascript " src="../node_modules/jquery/dist/jquery.js"></script>
<script type="text/javascript " src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
<script type="text/javascript " src="../node_modules/wow.js/dist/wow.js"></script>
<script type="text/javascript " src="../assets/js/carousel.js"></script>

<script>
    new WOW().init();
</script>

</html>