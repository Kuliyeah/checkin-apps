<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?=base_url()?>/node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="<?=base_url()?>/node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?=base_url()?>/node_modules/animate.css/animate.css">
    <link rel="stylesheet" href="<?=base_url()?>/assets/css/style.css">
    <link rel="stylesheet" href="<?=base_url()?>/assets/css/font.css">

    <title>Go Cek-In</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white w-100">
            <div class="container">
                <a class="navbar-brand" href="../"><img src="<?=base_url()?>/assets/image/icon.png" alt="Go Check-In" width="65.22px" height="61.41px"></a>
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
                            <a class="nav-link lato-black text-success" href="../home/daftar" id="nav_kontak">Become Our Mitra</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-success px-3 nav-link text-white nav_button" href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Masuk</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <section>

        </section>
    </main>

    <footer class="bg-light text-center text-lg-start">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.1);">
            © 2021 Create with &#128293; by Go Check-In Team
        </div>
    </footer>
</body>

<script type="text/javascript " src="./node_modules/jquery/dist/jquery.js"></script>
<script type="text/javascript " src="./node_modules/bootstrap/dist/js/bootstrap.js"></script>
<script type="text/javascript " src="./node_modules/wow.js/dist/wow.js"></script>
<!-- <script type="text/javascript " src="./assets/js/navbar.js"></script> -->
<script type="text/javascript " src="./assets/js/carousel.js"></script>

<script>
    new WOW().init();
</script>

</html>