<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-2C615C7H9E"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-2C615C7H9E');
    </script>

    <title><?= $website->metaTitle; ?></title>
    <meta name="keywords" content="<?= $website->metaKeywords; ?>">
    <meta name="description" content="<?= $website->metaDescription; ?>">

    <meta name="format-detection" content="telephone=no">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?= $website->metaTitle; ?>" />
    <meta property="og:description" content="<?= $website->metaDescription; ?>" />
    <meta property="og:url" content="https://page.digitalindo.co.id" />
    <meta property="og:image" content="<?= base_url(); ?>assets/img/og-image.jpeg" />

    <!-- Favicon -->
    <link rel="icon" href="<?= base_url(); ?>assets/img/icon-url.png" sizes="32x32">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,500,700,900|Ubuntu:400,500,700' rel='stylesheet'>

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


    <link rel="stylesheet" href="<?= base_url(); ?>assets/fonts/icomoon/style.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/fonts/flaticon/font/flaticon.css">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url(); ?>assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/swiper.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/responsive.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/whatsapp_chat.css" rel="stylesheet">
</head>

<body class="bg-white" data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="51">
    <!-- Navbar & Hero Start -->
    <?php
    $numberAPI = $website->telp;
    $n1API = substr($numberAPI, 1);
    $apiWa = $n1API;

    $waLink = "https://api.whatsapp.com/send?phone=62$apiWa&text=Hallo%20Admin%20Digitalindo..%21%0ASaya%20tertarik%20dengan%20penawaran%20yang%20Anda%20berikan,%0Amohon%20informasi%20lebih%20lanjut.%20Terimakasih%20%E2%98%BA%EF%B8%8F%F0%9F%99%8F%0A%0ANama%20%3A%0ANo.%20Telp%20%3A%0ANama%20Logistics%20%3A%0AAlamat%20%3A%0AAlamat%20email%20%3A%0AAlamat%20website%20%3A%0ADapat%20info%20dari%20%3A%20%0A%0ATerimakasih.%20%E2%98%BA%EF%B8%8F%F0%9F%99%8F";
    ?>
    <header class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3">
            <div class="container">
                <a href="<?= base_url(); ?>" class="navbar-brand" aria-label="Logo">
                    <!-- <h1 class="m-0">FitApp</h1> -->
                    <img class="img-fluid" src="https://digitalindo.co.id/admin/upload/landing_page/<?= $website->image; ?>" alt="Logo" title="<?= $website->name; ?>">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-label="toggle">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto  py-0">
                        <a href="#home" class="nav-item nav-link click-scroll">HOME</a>
                        <a href="#produk" class="nav-item nav-link click-scroll">PRODUK</a>
                        <a href="#testimoni" class="nav-item nav-link click-scroll">TESTIMONI</a>
                        <a href="#faq" class="nav-item nav-link click-scroll">FAQ</a>

                    </div>
                    <div class="contact d-flex ms-auto">
                        <a href="https://www.digitalindo.co.id/login" target="_blank" class="call bg-blue fs-14 px-3 py-1 rounded-20">Login</a>
                        <div class="d-flex top-social align-items-center ms-4">
                            <?php foreach ($sosmed as $sosmed) { ?>
                                <a class="btn btn-outline-light btn-social" href="<?= $sosmed->link; ?>" target="_blank" title="<?= $sosmed->nama; ?>"><i class="<?= $sosmed->icon; ?>"></i></a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <div class="container-fluid hero-header" id="home">
            <div class="container">
                <div class="row align-items-center gy-5 gy-lg-0">
                    <div class="col-lg-6 text-center text-lg-start">
                        <div class="logistics mb-3 text-center">
                            <h3 class="fw-bolder bg-yellow w-fit"><?= $homeweb->title; ?></h1>
                        </div>
                        <div class="best mb-3 txt-blue">
                            <?= $homeweb->caption; ?>
                        </div>
                        <div class="desk-header mb-5">
                            <p class="mb-4 fw-light"><?= $homeweb->deskripsi; ?></p>
                        </div>
                        <div class="pt-0 pt-lg-3">
                            <a href="#price" class="bg-blue py-2 py-lg-3 px-3 rounded-10 me-3 fw-bolder ">Pilihan Paket
                                Harga
                                <i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="img mt-5 text-center">
                            <img src="https://digitalindo.co.id/admin/upload/landing_page/homeweb/<?= $homeweb->image; ?>" class="img-fluid" alt="Image">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </header>
    <!-- Navbar & Hero End -->