<?php
$numberAPI = $website->telp;
$n1API = substr($numberAPI, 1);
$apiWa = $n1API;

$waLink = "https://api.whatsapp.com/send?phone=62$apiWa&text=Hallo%20Admin%20Digitalindo..%21%0ASaya%20tertarik%20dengan%20penawaran%20yang%20Anda%20berikan,%0Amohon%20informasi%20lebih%20lanjut.%20Terimakasih%20%E2%98%BA%EF%B8%8F%F0%9F%99%8F%0A%0ANama%20%3A%0ANo.%20Telp%20%3A%0ANama%20Logistics%20%3A%0AAlamat%20%3A%0AAlamat%20email%20%3A%0AAlamat%20website%20%3A%0ADapat%20info%20dari%20%3A%20%0A%0ATerimakasih.%20%E2%98%BA%EF%B8%8F%F0%9F%99%8F";
?>
<section class="container-fluid integrasi bg-blue">
    <div class="container py-5">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-7 col-lg-5">
                <h3 class="text-white"><?= $dCaption1->title; ?></h3>
            </div>
            <div class="col-md-4 mt-4 mt-md-0">
                <a href="#price" class="bg-yellow px-3 py-2 fs-14 rounded-10 fw-bold">Pilihan
                    Paket Harga <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>

<section class="container-xxl overage" id="about">
    <div class="container py-5">
        <div class="header-title text-center">
            <h2><?= $dContent1->title; ?></h2>
        </div>
        <div class="row g-4 mt-5">
            <?php foreach ($kelebihan as $k) { ?>
                <div class="col-sm-6 col-lg-4">
                    <div class="box-overage text-center">
                        <div class="d-flex justify-content-center">
                            <div class="img">
                                <img src="https://digitalindo.co.id/admin/upload/landing_page/kelebihan/<?= $k->image; ?>" class="img-fluid" alt="<?= $k->title; ?>" title="<?= $k->title; ?>">
                            </div>
                        </div>
                        <div class="title">
                            <h3><?= $k->title; ?></h3>
                        </div>
                        <div class="desk">
                            <p><?= $k->deskripsi; ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="btn-order text-center mt-5">
            <a href="<?= $waLink; ?>" target="_blank" class="bg-green px-3 py-2 rounded-10 fw-bold">PESAN SEKARANG</a>
        </div>
    </div>
</section>

<section class="container-fluid information px-0" id="why-us">
    <div class="bg-blue">
        <div class="container py-4 px-lg-5">
            <div class="header-title text-center px-lg-5">
                <h1 class="text-white"><?= $dCaption2->title; ?></h1>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <div class="list">
            <div class="row">
                <?php foreach ($informasi as $i) { ?>
                    <div class="col-md-6 mb-5">
                        <div class="row">
                            <div class="col-2">
                                <div class="check">
                                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="col-9">
                                <p><?= $i->caption; ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="percent mb-5">
            <div class="row gy-4">
                <?php foreach ($persen as $p) { ?>
                    <div class="col-lg-4">
                        <div class="box-card">
                            <h2><?= $p->persen; ?>%</h2>
                            <p><?= $p->deskripsi; ?></p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="btn-order text-center">
            <a href="<?= $waLink; ?>" target="_blank" class="bg-green px-3 py-2 rounded-10 fw-bold">PESAN SEKARANG</a>
        </div>
    </div>
</section>

<section class="container-xxl digitalindo">
    <div class="container py-5 text-center">
        <div class="img mb-5">
            <img src="<?= base_url(); ?>assets/img/logo-digitalindo.webp" class="img-fluid" alt="">
        </div>
        <div class="caption-header">
            <p><?= $dgt->title; ?></p>
            <div class="mt-4 mb-5">
                <span><?= $dgt->caption; ?></span>
            </div>
            <div class="btn-order text-center">
                <a href="<?= $waLink; ?>" target="_blank" class="bg-green px-3 py-2 rounded-10 fw-bold">PESAN
                    SEKARANG</a>
            </div>
        </div>
    </div>
</section>

<section class="container-xxl service">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="header-title text-center">
                    <h2><?= $dContent2->title; ?></h2>
                </div>
            </div>
        </div>
        <div class="row gy-4 mt-1">
            <?php foreach ($jasa as $j) { ?>
                <div class="col-sm-6 col-lg-4">
                    <div class="box-card text-center p-4">
                        <div class="d-flex justify-content-center">
                            <div class="icon">
                                <img src="https://digitalindo.co.id/admin/upload/landing_page/jasa/<?= $j->image; ?>" class="img-fluid" alt="" title="<?= $j->title; ?>">
                            </div>
                        </div>
                        <div class="title mb-2 mt-3">
                            <p><?= $j->title; ?></p>
                        </div>
                        <div class="desk">
                            <p><?= $j->deskripsi; ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="btn-order text-center mt-5">
            <a href="<?= $waLink; ?>" target="_blank" class="bg-green px-3 py-2 rounded-10 fw-bold">PESAN SEKARANG</a>
        </div>
    </div>
</section>

<section class="container-xxl special-features" id="produk">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="header-title">
                    <h2 class="mb-3 txt-blue"><?= $dContent3->title; ?></h2>
                    <p><?= $dContent3->deskripsi; ?></p>
                </div>
            </div>
            <div class="col-md-4 mt-5 mt-md-0">
                <div class="btn-order text-center">
                    <a href="<?= $waLink; ?>" target="_blank" class="bg-green px-3 py-2 rounded-10 fw-bold">PESAN
                        SEKARANG</a>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-md-6 col-lg-5 d-flex justify-content-center">
                <div class="owl-carousel screenshot-carousel">
                    <?php foreach ($fitur_slider as $fs) { ?>
                        <img class="img-fluid" src="https://digitalindo.co.id/admin/upload/landing_page/fitur_slider/<?= $fs->image; ?>" alt="">
                    <?php } ?>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="row gy-5">
                    <?php foreach ($fitur as $f) { ?>
                        <div class="col-2">
                            <div class="check">
                                <img src="<?= base_url(); ?>assets/img/check-fitur.svg" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-10">
                            <div class="caption mt-2">
                                <h6 class="txt-blue fw-bold"><?= $f->title; ?></h6>
                                <p><?= $f->deskripsi; ?></p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container-xxl lms">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="header-title text-center">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <h2 class="txt-blue mb-3 mb-lg-4"><?= $dContent4->title; ?></h2>
                        </div>
                    </div>
                    <p><?= $dContent4->deskripsi; ?></p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-lg-10">
                <div class="img-lms text-center">
                    <img src="https://digitalindo.co.id/admin/upload/landing_page/deskripsi_content/<?= $dContent4->image; ?>" class="img-fluid" alt="">
                </div>
                <div class="cpt-advan mt-5">
                    <div class="row justify-content-center gy-5">
                        <?php foreach ($kelebihan_utama as $ku) { ?>
                            <div class="col-lg-5">
                                <div class="row">
                                    <div class="col-10 col-lg-9">
                                        <div class="caption text-end mt-2">
                                            <h6 class="txt-blue fw-bold"><?= $ku->title; ?></h6>
                                            <p><?= $ku->deskripsi; ?></p>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="check">
                                            <img src="<?= base_url(); ?>assets/img/check-fitur.svg" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="container-fluid testimoni" id="testimoni">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-9">
                <div class="header-title">
                    <h2>Testimoni</h2>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="slider-container pb-5">
                    <div class="swiper-container testimoni-slider py-5">
                        <div class="swiper-wrapper">
                            <?php foreach ($testimoni as $t) { ?>
                                <div class="swiper-slide">
                                    <div class="testi-box">
                                        <div class="d-flex justify-content-center">
                                            <div class="img text-center">
                                                <img src="https://www.digitalindo.co.id/upload/testimoni/<?= $t->foto; ?>" class="img-fluid" alt="">
                                            </div>
                                        </div>
                                        <div class="caption p-4 text-center">
                                            <div class="nama">
                                                <h5><?= $t->nama; ?></h5>
                                                <span><?= $t->namaPerusahaan; ?></span>
                                            </div>
                                            <div class="star mb-2">
                                                <?php if ($t->rating == 1) { ?>
                                                    <i class="fas fa-star"></i>
                                                <?php } elseif ($t->rating == 2) { ?>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                <?php } elseif ($t->rating == 3) { ?>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                <?php } elseif ($t->rating == 4) { ?>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                <?php } else { ?>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                <?php } ?>
                                            </div>
                                            <div class="desk">
                                                <p><?= $t->hasil; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="container-fluid price px-0" id="price">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="header-title-single text-center">
                    <h2><?= $dContent5->title; ?></h2>

                </div>
            </div>
        </div>
    </div>
    <div class="b-shadow">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="header-title text-center">
                        <p class="txt-blue"><?= $dContent5->deskripsi; ?></p>
                    </div>
                </div>
            </div>
            <div class="price-detail mt-5">
                <div class="row gy-4">
                    <?php foreach ($price as $p) { ?>
                        <div class="col-sm-6 col-lg-3">
                            <div class="card-price">
                                <div class="title">
                                    <span class="text-white">Paket</span>
                                    <p class="text-white fw-bold"><?= $p->title; ?></p>
                                </div>
                                <div class="list">
                                    <?= $p->list; ?>
                                </div>
                                <div class="btn-order">
                                    <a href="<?= $waLink; ?>" target="_blank">PESAN SEKARANG</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container-fluid lgc px-0">
    <div class="container-1558 py-5 ps-0">
        <div class="row align-items-center justify-content-between">
            <div class="col-sm-5 col-md-5">
                <div class="img">
                    <img src="https://digitalindo.co.id/admin/upload/landing_page/deskripsi_content/<?= $dContent6->image; ?>" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-sm-7 col-md-6 mt-4 mt-sm-0">
                <div class="header-title px-3 px-sm-0">
                    <h2><?= $dContent6->title; ?></h2>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container-fluid bg-yellow consultation">
    <div class="container py-5">
        <div class="row justify-content-center text-center">
            <div class="col-xl-7">
                <div class="header-title">
                    <h2><?= $dContent7->title; ?></h2>
                </div>
                <div class="desk mt-4 mb-5">
                    <p><?= $dContent7->deskripsi; ?></p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-6 col-md-5 col-lg-3 col-xl-5">
                        <div class="btn-wa d-flex justify-content-center">
                            <a href="<?= $waLink; ?>" target="_blank"><i class="fab fa-whatsapp"></i> <span>CHAT
                                    WHATSAPP</span></a>
                        </div>
                    </div>
                    <div class="col-6 col-md-5 col-lg-3 col-xl-5">
                        <div class="btn-email d-flex justify-content-center">
                            <a href="mailto:<?= $website->email; ?>?subject = Feedback&body = Message"><i class="fas fa-envelope"></i> <span>SEND MASSAGE</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container-fluid lp">
    <div class="container py-5 px-lg-5">
        <div class="header-title text-center">
            <h1 class="text-white"><?= $dContent8->title; ?></h1>
        </div>
        <div class="btn-order text-center mt-5">
            <a href="<?= $waLink; ?>" target="_blank" class="bg-green px-3 py-2 rounded-10 fw-bold">PESAN SEKARANG</a>
        </div>
    </div>
</section>

<section class="container-xxl faq" id="faq">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.1s">
                <div class="header-title">
                    <h4 class="fw-normal">FAQs</h4>
                    <h1><?= $dContent9->title; ?></h1>
                    <p><?= $dContent9->deskripsi; ?></p>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-12">
                <div class="custom-accordion" id="accordion_1">
                    <!-- <?php foreach ($this->db->query("SELECT * FROM lp_faq order by sort ASC LIMIT 1")->result() as $f) { ?>
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.1s">
                            <h2 class="mb-0">
                                <button class="btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $f->id ?>" aria-expanded="true" aria-controls="collapse<?= $f->id ?>"><?= $f->title ?></button>
                            </h2>

                            <div id="collapse<?= $f->id ?>" class="collapse show" aria-labelledby="heading<?= $f->id ?>" data-bs-parent="#accordion_<?= $f->id ?>">
                                <div class="accordion-body">
                                    <?= $f->deskripsi ?>
                                </div>
                            </div>
                        </div>
                    <?php } ?> -->

                    <?php foreach ($this->db->query("SELECT * FROM lp_faq order by sort ASC")->result() as $faq) { ?>
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.1s">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $faq->id ?>" aria-expanded="false" aria-controls="collapse<?= $faq->id ?>"><?= $faq->title ?></button>
                            </h2>
                            <div id="collapse<?= $faq->id ?>" class="collapse" aria-labelledby="heading<?= $faq->id ?>" data-bs-parent="#accordion_1">
                                <div class="accordion-body">
                                    <?= $faq->deskripsi ?>
                                </div>
                            </div>
                        </div> <!-- .accordion-item -->
                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
</section>