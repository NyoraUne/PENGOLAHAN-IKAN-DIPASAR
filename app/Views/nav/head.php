<!DOCTYPE html>

<html lang="en">


<head>
    <title>Wildan - 19630151</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="<?= base_url('src/') ?>css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    <!-- /* --------------------------- //ANCHOR - select2 --------------------------- */ -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" /> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />

</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html">Start Bootstrap</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input type="text" name="time" id="time" class="form-control" disabled>
                <span class="input-group-text"><i class="fa-solid fa-clock"></i></span>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="<?= base_url('Auth/logout'); ?>">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Home</div>
                        <a class="nav-link" href="<?= base_url('/') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">Interface</div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Data Master
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="<?= base_url('Con_ikan') ?>">Data Ikan</a>
                                <a class="nav-link" href="<?= base_url('Con_user') ?>">Data User</a>
                                <a class="nav-link" href="<?= base_url('Con_pasar') ?>">Data Pasar</a>
                                <a class="nav-link" href="<?= base_url('Con_penjual') ?>">Data Penjual</a>
                            </nav>
                        </div>
                        <!-- // -------------------------------------------------------------------------------------------------------------- -->
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Admin Menu
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                    Olah Data
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="<?= base_url('Con_hargaikan') ?>">Harga Ikan</a>
                                        <a class="nav-link" href="<?= base_url('Con_pembenihan') ?>">Pembenihan</a>
                                        <a class="nav-link" href="<?= base_url('Con_pembesaran') ?>">Pembesaran</a>
                                        <a class="nav-link" href="<?= base_url('Con_penangkapan') ?>">Perikanan tangkap</a>
                                        <a class="nav-link" href="<?= base_url('Con_olah') ?>">Pengolahan Ikan</a>
                                        <a class="nav-link" href="<?= base_url('Con_transaksi') ?>">Keluar Masuk Ikan</a>
                                        <a class="nav-link" href="<?= base_url('Con_berita') ?>">Berita</a>
                                    </nav>
                                </div>
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                    Report Data
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="<?= base_url('Lap_ikan') ?>">Laporan Data Ikan</a>
                                        <a class="nav-link" href="<?= base_url('/') ?>">Laporan Data User</a>
                                        <a class="nav-link" href="<?= base_url('/') ?>">Laporan Data Pasar</a>
                                        <a class="nav-link" href="<?= base_url('/') ?>">Laporan Data Penjual</a>
                                        <a class="nav-link" href="<?= base_url('/') ?>">Laporan Harga Ikan</a>
                                        <a class="nav-link" href="<?= base_url('/') ?>">Laporan Pembenihan</a>
                                        <a class="nav-link" href="<?= base_url('/') ?>">Laporan Pembesaran</a>
                                        <a class="nav-link" href="<?= base_url('/') ?>">Laporan Penangkapan</a>
                                        <a class="nav-link" href="<?= base_url('/') ?>">Laporan Penegelolaan</a>
                                        <a class="nav-link" href="<?= base_url('/') ?>">Laporan Keluar/Masuk</a>
                                        <a class="nav-link" href="<?= base_url('/') ?>">Laporan Berita</a>
                                    </nav>
                                </div>
                            </nav>
                        </div>
                        <!-- // -------------------------------------------------------------------------------------------------------------- -->

                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Start Bootstrap
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">

            <main>
                <div class="container-fluid px-4">
                    <h4 class="mt-4">
                        <?= $head; ?>
                    </h4>
                    <hr>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="<?= base_url('/') ?>">Home</a></li>
                        <li class="breadcrumb-item active"><?= $type; ?></li>
                    </ol>