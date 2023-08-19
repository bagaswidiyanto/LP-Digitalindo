<?php
$numberAPI = $website->telp;
$n1API = substr($numberAPI, 1);
$apiWa = $n1API;

$waLink = "https://api.whatsapp.com/send?phone=62$apiWa&text=Hallo%20Admin%20Digitalindo..%21%0ASaya%20tertarik%20dengan%20penawaran%20yang%20Anda%20berikan,%0Amohon%20informasi%20lebih%20lanjut.%20Terimakasih%20%E2%98%BA%EF%B8%8F%F0%9F%99%8F%0A%0ANama%20%3A%0ANo.%20Telp%20%3A%0ANama%20Logistics%20%3A%0AAlamat%20%3A%0AAlamat%20email%20%3A%0AAlamat%20website%20%3A%0ADapat%20info%20dari%20%3A%20%0A%0ATerimakasih.%20%E2%98%BA%EF%B8%8F%F0%9F%99%8F";
?>
<!-- Footer Start -->
<footer class="container-fluid text-light footer py-5" id="location">
    <div class="container px-0">
        <div class="img">
            <img class="img-fluid" src="https://digitalindo.co.id/admin/upload/landing_page/<?= $website->image; ?>" alt="Logo" title="<?= $website->name; ?>">
        </div>
        <div class="row justify-content-between gy-4 gy-lg-0">
            <div class="col-lg-6">
                <div class="desk my-4">
                    <p><?= $website->description; ?></p>
                </div>
                <div class="heading-footer mb-2">
                    <h4>Alamat</h4>
                </div>
                <div class="row">
                    <div class="col-md-7">
                        <div class="address">
                            <p><?= $website->address; ?></p>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-sm-6">
                        <div class="info">
                            <p class="fs-12">Informasi Lebih Lanjut Seputar </p>
                            <p class="fs-12">Produk Digitalindo : </p>
                            <a href="https://digitalindo.co.id/" class="fs-14 fw-900 text-white">digitalindo.co.id</a>
                        </div>
                        <div class="sosmed">
                            <div class="d-flex mt-3">
                                <?php foreach ($sosmed as $sosmed) { ?>
                                    <a class="btn btn-outline-light btn-social" href="<?= $sosmed->link; ?>" target="_blank" title="<?= $sosmed->nama; ?>"><i class="<?= $sosmed->icon; ?>"></i></a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 mt-4 mt-sm-0">
                        <div class="heading-footer mb-3">
                            <h4>Contact Us</h4>
                        </div>
                        <div class="contact">
                            <?php
                            $number = $website->telp;
                            $n1 = substr($number, 0, 4);
                            $n2 = substr($number, 4, 4);
                            $n3 = substr($number, 8, 4);
                            $wa = $n1 . '-' . $n2 . '-' . $n3;
                            ?>
                            <p class="fw-bold"><?= $wa; ?></p>
                            <p class="fw-bold"><?= $website->email; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="form mt-4">

                    <form id="help" class="form-contact">
                        <div class="mb-4">
                            <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Lengkap" required>
                        </div>
                        <div class="mb-4">
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="mb-4">
                            <textarea class="form-control" name="message" id="message" rows="6" placeholder="Leave a message here" required></textarea>
                        </div>
                        <button type="submit" class="btn">Send Message</button>
                        <a href="<?= $waLink; ?>" target="_blank">Kirim ke WA</a>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <div class="container px-lg-5">
        <div class="copyright">

            <div class="row d-flex justify-content-center  text-center mt-4">
                <div class="col-xl-4 col-lg-6 col-md-7 col-sm-9 col-12">
                    <p>Copyright © 2023 - <a href="https://digitalindo.co.id/">Digitalindo</a> All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up "></i></a>

<?php
date_default_timezone_set('ASIA/JAKARTA');
$curr_time     = date('H:i:s');
?>
<div class="whatsapp-chat-section">
    <div class="icon-section">
        <img src="<?= base_url(); ?>assets/whatsapp/ic_whatsapp.webp" alt="" id="whatsapp_chat" onclick="chatWhatsApp();">
    </div>
    <div id="whatsapp-chat-popup" class="animated bounceOutDown" style="z-index: 999999; display: none;">
        <div id="list-chat-section" class="list-chat-section animated fadeIn" style="display: block;">
            <div class="header-section" style="background:  linear-gradient(180deg, #2056A0 0%, #0264EB 100%)">
                <img class="close-chat-section" src="<?= base_url(); ?>assets/whatsapp/ic_close_btn.png" onclick="closechatWhatsApp();">
                <div class="header-avatar-section">
                    <?php foreach ($this->db->query("SELECT * FROM lp_chat_wa order by sort desc")->result() as $sec1) { ?>
                        <div class="avatar">
                            <img class="avatar" style="position: relative; display: inline-block; vertical-align: middle; height: 60px; width: 60px; border-radius: 60px;" src="https://digitalindo.co.id/admin/upload/landing_page/wa_image/<?= $sec1->image; ?>">
                        </div>
                    <? } ?>
                </div>
                <div class="header-desc-section" style="margin-top: 15px;">
                    <p>Kami siap membantu Anda, Silahkan chat dengan customer service kami.</p>
                </div>
            </div>
            <div class="container px-0">
                <div class="chat-section">
                    <div class="row">
                        <?php
                        $i = 1;
                        foreach ($this->db->query("SELECT * FROM lp_chat_wa ORDER BY sort ASC")->result() as $sec2) { ?>
                            <?php if ($i % 2 == 1) { ?>
                                <div class="col-6" style="padding-right: 0;">
                                    <div class="cs-section" onclick="chatCustomer(<?= $sec2->id; ?>);">
                                        <div class="avatar">
                                            <img class="avatar" src="https://digitalindo.co.id/admin/upload/landing_page/wa_image/<?= $sec2->image; ?>" alt="">
                                        </div>
                                        <div class="profile">
                                            <p class="position"><?= strtoupper($sec2->nama); ?></p>
                                            <h3 class="name"><?= strtoupper($sec2->nama); ?></h3>
                                            <?php if (($curr_time >= $sec2->startOnline) && ($curr_time < $sec2->endOnline)) { ?>
                                                <small class="status">Online <span class="online"><i class="fa fa-circle "></i></span>
                                                </small>
                                            <? } else { ?>
                                                <small class="status">Offline <span class="offline"><i class="fa fa-circle "></i></span>
                                                </small>
                                            <? } ?>
                                        </div>
                                    </div>
                                </div>
                            <?php } else { ?>
                                <div class="col-6" style="padding-left: 0;">
                                    <div class="cs-section" onclick="chatCustomer(<?= $sec2->id; ?>);">
                                        <div class="avatar">
                                            <img class="avatar" src="https://digitalindo.co.id/admin/upload/landing_page/wa_image/<?= $sec2->image; ?>" alt="">
                                        </div>
                                        <div class="profile">
                                            <p class="position"><?= strtoupper($sec2->nama); ?></p>
                                            <h3 class="name"><?= strtoupper($sec2->nama); ?></h3>
                                            <?php if (($curr_time >= $sec2->startOnline) && ($curr_time < $sec2->endOnline)) { ?>
                                                <small class="status">Online <span class="online"><i class="fa fa-circle "></i></span>
                                                </small>
                                            <? } else { ?>
                                                <small class="status">Offline <span class="offline"><i class="fa fa-circle "></i></span>
                                                </small>
                                            <? } ?>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <?php $i++ ?>
                        <? } ?>
                    </div>
                </div>
            </div>
        </div>
        <?php foreach ($this->db->query("SELECT * FROM lp_chat_wa")->result() as $sec3) { ?>
            <div class="chat-section animated fadeIn" id="customer_chat_<?= $sec3->id; ?>" style="display: none;">
                <div class="header-section" style="background: linear-gradient(180deg, #2056A0 0%, #0264EB 100%)">
                    <img class="back-chat-section" src="<?= base_url(); ?>assets/whatsapp/ic_back_btn.png" onclick="backListChat(<?= $sec3->id; ?>);" alt="">
                    <div class="header-avatar-section">
                        <div class="avatar">
                            <img class="avatar" style="position: relative; display: inline-block; vertical-align: middle; height: 60px; width: 60px; border-radius: 60px;" src="https://digitalindo.co.id/admin/upload/landing_page/wa_image/<?= $sec3->image; ?>" alt="">
                        </div>
                    </div>
                    <div class="header-desc-section">
                        <h3><?= $sec3->nama; ?></h3>
                        <?php
                        $phone_split = implode(" ", str_split('+62' . $sec3->phone, 4)) . " ";
                        ?>
                        <p><i class="fa fa-phone"></i> <?php echo $phone_split; ?></p>
                    </div>
                </div>
                <div class="inside-chat-section">
                    <div class="chat">
                        <div class="inside-chat">
                            <span>Halo saya <?= ucwords(strtolower($sec3->nama)); ?>, dari <?= $website->name; ?></span>
                        </div>
                        <div class="time">
                            <span><?php echo date('H:i'); ?><img src="<?= base_url(); ?>assets/whatsapp/ic_check_wa.png" alt=""></span>
                        </div>
                    </div>
                    <div class="chat">
                        <div class="inside-chat">
                            <span>Ada yang bisa saya bantu ?</span>
                        </div>
                        <div class="time">
                            <span><?php echo date('H:i'); ?><img src="<?= base_url(); ?>assets/whatsapp/ic_check_wa.png" alt=""></span>
                        </div>
                    </div>
                </div>
                <div class="box-chat-section">
                    <div class="text">
                        <input type="hidden" id="telp_wa_<?= $sec3->id; ?>" name="telp_wa_<?= $sec3->id; ?>" value="<?= $sec3->phone; ?>">
                        <input type="text" class="input-message-whatsapp" id="chat_wa_<?= $sec3->id; ?>" name="chat_wa_<?= $sec3->id; ?>" onchange="textChatWhatsapp(<?= $sec3->id; ?>);" onclick="textChatWhatsapp(<?= $sec3->id; ?>);" onmouseover="textChatWhatsapp(<?= $sec3->id; ?>);" onmouseout="textChatWhatsapp(<?= $sec3->id; ?>);" onkeydown="textChatWhatsapp(<?= $sec3->id; ?>);" value="" placeholder="Type a message">
                    </div>
                    <div class="button-send">
                        <a href="" id="btn_wa_<?= $sec3->id; ?>" target="_blank"><img src="<?= base_url(); ?>assets/whatsapp/ic_send_message.png" alt=""></a>
                    </div>
                </div>
            </div>
        <? } ?>
    </div>
</div>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


<script src="<?= base_url(); ?>assets/lib/wow/wow.min.js"></script>
<script src="<?= base_url(); ?>assets/lib/easing/easing.min.js"></script>
<script src="<?= base_url(); ?>assets/lib/waypoints/waypoints.min.js"></script>
<script src="<?= base_url(); ?>assets/lib/counterup/counterup.min.js"></script>
<script src="<?= base_url(); ?>assets/lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Template Javascript -->
<script src="<?= base_url(); ?>assets/js/swiper.min.js"></script>
<script src="<?= base_url(); ?>assets/js/main.js"></script>
<script src="<?= base_url(); ?>assets/js/click-scroll.js"></script>

<script>
    $(document).ready(function() {
        base_url = '<?= base_url() ?>';

        $("#help").submit(function() {
            $(".btn").attr("disabled", true);

            var data = {
                nama: $("#nama").val(),
                email: $("#email").val(),
                message: $("#message").val()
            }

            $.ajax({
                type: "POST",
                url: base_url + "bantuan",
                data: data,

                success: function(response) {
                    $('.success').fadeIn(1000);
                    $("#help .btn").attr("disabled", false);
                    setInterval(function() {
                        alert("Terima Kasih, Pesan anda akan kami proses secepatnya.")
                        window.location = base_url;
                    }, 1000)
                },
                error: function() {
                    $(".error").fadeIn(1000);
                    $("#help .btn").attr("disabled", false);
                }
            });
            return false;
        });
    });
</script>


<script type="text/javascript">
    function chatWhatsApp() {
        var cek_class = document.getElementById('whatsapp-chat-popup');
        if (cek_class.classList.contains('bounceOutDown')) {
            cek_class.classList.remove("bounceOutDown");
            cek_class.classList.add("bounceInUp");
            cek_class.style.display = "block";
        } else {
            cek_class.classList.remove("bounceInUp");
            cek_class.classList.add("bounceOutDown");
        }
    }

    function chatCustomer(id) {
        var list_chat = document.getElementById("list-chat-section");
        var chat = document.getElementById('customer_chat_' + id);

        if (id != 0 && id != '') {
            list_chat.style.display = "none";
            chat.style.display = "block";
        }
    }

    function closechatWhatsApp() {
        var cek_class = document.getElementById('whatsapp-chat-popup');
        if (cek_class.classList.contains('bounceInUp')) {
            cek_class.classList.remove("bounceInUp");
            cek_class.classList.add("bounceOutDown");
        }
    }


    function backListChat(id) {
        var list_chat = document.getElementById("list-chat-section");
        var chat = document.getElementById('customer_chat_' + id);
        if (id != 0 && id != '') {
            chat.style.display = "none";
            list_chat.style.display = "block";
            $("#chat_wa_" + id).val('');
        }
    }

    function textChatWhatsapp(id) {
        var link_wa = 'https://api.whatsapp.com/send?';
        if (id != 0 && id != '') {
            var telp = $("#telp_wa_" + id).val();
            var chat = $("#chat_wa_" + id).val();
            var link = 'https://api.whatsapp.com/send?phone=62' + telp + '&text=' + chat;
            var btn = document.getElementById("btn_wa_" + id);
            btn.setAttribute("href", link);
        }
    }

    function myFunction() {
        var x = document.getElementById("contact");
        if (x.style.display === "none") {
            x.style.display = "block";
            document.getElementById("fa").style.transform = "rotate(90deg)";
        } else {
            x.style.display = "none";
            document.getElementById("fa").style.transform = "rotate(0)";
        }
    }
</script>

</body>

</html>