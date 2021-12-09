<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="./node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./node_modules/animate.css/animate.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/font.css">

    <title>Go Cek-In</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white w-100">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="assets/image/icon.png" alt="Go Check-In" width="65.22px" height="61.41px"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarRightAlignExample">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#tentang" id="nav_tentang">Tentang Kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#kontak" id="nav_kontak">Kontak Kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-success px-3 nav-link text-white nav_button" href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Masuk</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="./view/dashboard.html">
                    <div class="modal-header">
                        <h5 class="modal-title" id="loginModalLabel">Login</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input type="text" class="form-control" id="email" placeholder="example" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="********" required>
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

    <main>
        <img src="assets/image/virus2.png" class="bg-1 wow animate__animated animate__fadeIn">
        <img src="assets/image/virus3.png" class="bg-2 wow animate__animated animate__fadeIn">
        <img src="assets/image/virus4.png" class="bg-3 wow animate__animated animate__fadeIn">

        <section id="tentang">
            <div class="container about mb-5 pb-5">
                <div class="row">
                    <div class="col-md-6 pt-5 wow animate__animated animate__fadeInLeft">
                        <h5 class="text-danger lato-bold pt-5"><img src="assets/image/warning.svg"> COVID-19 ALERT</h5>
                        <h1 class="lato-bold mt-5 mb-5">Covid Check-in Apps</h1>
                        <h5 class="pe-5 me-5 mb-5">Aplikasi yang membantu kita dalam setiap kunjungan, sebagai media informasi untuk memantau kondisi sekitar khususnya tempat yang anda kunjungi. #StayHealth</h5>
                        <a href="https://www.google.com/search?q=covid+19&ei=wz2FYcGYNf6Qxc8Pg62siA0&oq=covid+19&gs_lcp=Cgdnd3Mtd2l6EAMyCAgAEIAEELEDMgUIABCABDIECAAQAzIFCAAQgAQyCwgAEIAEELEDEIMBMgUIABCABDIFCAAQgAQyBQgAEIAEMgUIABCABDIICAAQsQMQgwE6BAgAEEM6EQguEIAEELEDEIMBEMcBENEDOgsILhCABBCxAxCDAToKCAAQsQMQgwEQQzoHCAAQsQMQQzoECC4QQzoNCAAQsQMQgwEQyQMQQzoFCAAQkgNKBAhBGABQAFjiDGCTD2gAcAB4AIABd4gB9gWSAQM1LjOYAQCgAQHAAQE&sclient=gws-wiz&ved=0ahUKEwiBhtjNtYH0AhV-SPEDHYMWC9EQ4dUDCA0&uact=5"
                            class="btn btn-lg btn-success text-white nav_button" target="_blank">Lebih Tau</a>
                    </div>
                    <div class="col-md-6 wow animate__animated animate__fadeInRight">
                        <div id="carousel">
                            <div class="prev">
                                <img src="assets/image/Slider2.png">
                            </div>

                            <div class="selected">
                                <img src="assets/image/Slider1.png">
                            </div>

                            <div class="next">
                                <img src="assets/image/Slider3.png">
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="https://play.google.com/store" target="_blank"><img src="assets/image/Google_Play.png" width="200px" class="me-2"></a>
                            <a href="https://www.apple.com/id/app-store/" target="_blank"><img src="assets/image/App_Store.png" width="200px" class="ms-2"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="kasus">
            <div class="container mt-5 pt-5 lato-regular">
                <div class="col-md-12 mb-5 pb-5">
                    <div class="shadow-lg p-3 mb-5 bg-body rounded2 p-5 wow animate__animated animate__fadeInUp">
                        <div class="row ">
                            <div class="col-md-3 text-center">
                                <h4>Total Kasus</h4>
                                <h2 class=" lato-bold mt-3 mb-3">4.247.320</h2>
                                <h6>+2048</h6>
                            </div>
                            <div class="col-md-3 text-center">
                                <h4>Positif</h4>
                                <h2 class="text-warning lato-bold mt-3 mb-3">124.632</h2>
                                <h6>2% dari total kasus</h6>
                            </div>
                            <div class="col-md-3 text-center">
                                <h4>Sembuh</h4>
                                <h2 class="text-success lato-bold mt-3 mb-3">4.092.586</h2>
                                <h6>96% dari total kasus</h6>
                            </div>
                            <div class="col-md-3 text-center">
                                <h4>Meninggal</h4>
                                <h2 class="text-danger lato-bold mt-3 mb-3">143.519</h2>
                                <h6>3% dari total kasus</h6>
                            </div>
                            <div class="col-md-12 text-center mt-5">
                                <img src="assets/image/flag.png ">
                                <span class="ps-2">Data oleh <a href="https://covid19.go.id/">covid19.go.id</a>. Diperbarui pada 04 November 2020</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="fitur">
            <div class="container about mb-5 pb-5">
                <div class="row wow animate__animated animate__zoomIn">
                    <div class="col-md-6 pt-5 pe-5">
                        <img src="assets/image/amico2.png" class="img-fluid">
                    </div>
                    <div class="col-md-6 pe-5">
                        <h1 class="lato-bold mt-5 mb-5">Fitur Kita?</h1>
                        <p class="hr_custom"></p>
                        <h5 class="mb-5 mt-5 me-5 pe-5">Ada beberapa fitur unggulan selain scan QR sebagai cara check-in, yaitu:</h5>
                        <ul class="custom_virus mb-5">
                            <li>
                                <h5 class="mb-4">Kasus Covid-19</h5>
                            </li>
                            <li>
                                <h5 class="mb-4">Peta</h5>
                            </li>
                            <li>
                                <h5 class="mb-4">Peta Persebaran Kasus</h5>
                            </li>
                            <li>
                                <h5 class="mb-4">Detail Tempat Kunjungan</h5>
                            </li>
                        </ul>
                        <a href="#kontak" class="text-dark">
                            <h5>Tanya kami <i class="bi bi-arrow-right"></i></h5>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section id="3m">
            <div class="container about mb-5 pb-5 ">
                <div class="row">
                    <div class="col-md-12 pt-5 text-center wow animate__animated animate__fadeIn">
                        <h1 class="lato-bold mt-5 mb-5">Selalu 3M</h1>
                        <p class="hr_custom position-absolute start-50 translate-middle"></p>
                        <h4>Lindungi diri anda dan sekitar anda dalam masa pandemi saat ini agar terhindar dari virus Covid-19 saat ini.</h4>
                    </div>
                    <div class="col-md-3-custom card shadow-lg rounded2 text-center p-5 mt-plus m-4 index-1 wow animate__animated animate__bounceInLeft">
                        <img src="assets/image/amico3.png" class="img-fluid mt-minus">
                        <h2 class="lato-bold mt-4 mb-3">Memakai Masker</h2>
                        <h4>Masker dapat membantu mencegah penyebaran virus dari orang yang memakai masker ke orang lain.</h4>
                    </div>
                    <div class="col-md-3-custom card shadow-lg rounded2 text-center p-5 mt-plus m-4 index-1 wow animate__animated animate__bounceIn">
                        <img src="assets/image/amico4.png" class="img-fluid mt-minus">
                        <h2 class="lato-bold mt-4 mb-3">Mencuci Tangan</h2>
                        <h4>Bersihkan tangan Anda dengan sabun dan air, atau pembersih tangan berbasis alkohol.</h4>
                    </div>
                    <div class="col-md-3-custom card shadow-lg rounded2 text-center p-5 mt-plus m-4 index-1 wow animate__animated animate__bounceInRight">
                        <img src="assets/image/amico5.png" class="img-fluid mt-minus">
                        <h2 class="lato-bold mt-4 mb-3">Menjaga Jarak</h2>
                        <h4>Jaga jarak aman terutama dari siapa saja yang batuk atau bersin.</h4>
                    </div>
                </div>
            </div>
        </section>

        <section id="kontak">
            <div class="container about mb-5 pb-5 wow animate__animated animate__slideInUp">
                <div class="row">
                    <div class="col-md-12 pt-5 card shadow-lg rounded2">
                        <div class="container p-5">
                            <h1 class="lato-bold mt-1 mb-5 text-center">Kirim Pesan</h1>
                            <p class="hr_custom position-absolute start-50 translate-middle "></p>
                            <h5 class="mb-5 text-center">Untuk keperluan pengembangan anda bisa masukkan saran kepada kami melalui fitur dibawah ini</h5>

                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-4">
                                    <img src="assets/image/amico6.png" class="img-fluid">
                                </div>
                                <div class="col-md-4">
                                    <form action="#">
                                        <div class="mb-3">
                                            <div class="input-group mb-4">
                                                <input type="text" class="form-control" name="name" id="name" placeholder="Nama Lengkap" required>
                                                <div class="input-group-text"><i class="bi bi-person"></i></div>
                                            </div>
                                            <div class="input-group mb-4">
                                                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                                                <div class="input-group-text"><i class="bi bi-envelope"></i></div>
                                            </div>
                                            <div class="input-group mb-4">
                                                <input type="text" class="form-control" name="subjek" id="subjek" placeholder="Subjek" required>
                                                <div class="input-group-text"><i class="bi bi-fonts"></i></div>
                                            </div>
                                            <div class="input-group mb-4">
                                                <textarea name="help" id="help" class="form-control" rows="5" placeholder="Pesan Anda" required></textarea>
                                                <div class="input-group-text"><i class="bi bi-chat-left-text"></i></div>
                                            </div>
                                            <button type="submit" class="btn btn-link" style="text-decoration: none;">
                                                <a href="#" class="text-dark">
                                                    <h5>Kirim Pesan <i class="bi bi-arrow-right "></i></h5>
                                                </a>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-light text-center text-lg-start">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.1);">
            © 2021 Create with &#128293; by Go Check-In Team
        </div>
    </footer>
</body>

<script type="text/javascript " src="./../node_modules/jquery/dist/jquery.js"></script>
<script type="text/javascript " src="./node_modules/bootstrap/dist/js/bootstrap.js"></script>
<script type="text/javascript " src="./node_modules/wow.js/dist/wow.js"></script>
<!-- <script type="text/javascript " src="./assets/js/navbar.js"></script> -->
<script type="text/javascript " src="./assets/js/carousel.js"></script>

<script>
    new WOW().init();
</script>

</html>