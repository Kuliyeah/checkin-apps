<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="./node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/font.css">
    <title>Dashboard</title>
</head>

<body>
    <img src="./assets/image/virus2.png" class="bg-1 wow animate__animated animate__fadeIn">
    <img src="./assets/image/virus4.png" class="bg-4 wow animate__animated animate__fadeIn">

    <nav class="nav-bar">
        <div class="menu-bar">
            <div class="profile">
                <img src="./assets/image/profil.jpg" alt="profile" style="border-radius: 100px;">
            </div>
            <div class="menu">
                <div class="main-menu">
                    <ul>
                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top">
                            <a href="dashboard.html" class="actived">
                                <i class="bi bi-house-door-fill"></i>
                                <div class="position-absolute tooltips">Beranda</div>
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url(); ?>mitra">
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
                            <a href="home/logout" class="out bg-danger text-white">
                                <i class="bi bi-box-arrow-right"></i>
                                <div class="position-absolute tooltips bg-danger text-white">Logout</div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>