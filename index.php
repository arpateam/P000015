<!DOCTYPE html>
<html lang="id">
<head>
    <title>SIMBERSAMA - Sistem Informasi Pengelolaan Sampah Kab. Bantul</title>
    <meta name="title" content="SIMBERSAMA - Sistem Informasi Pengelolaan Sampah Kab. Bantul">
    <meta name="keywords" content="SIMBERSAMA, Simbersama Bantul, Sistem Pengelolaan Sampah Bantul, Sistem Informasi Pengelolaan Sampah Kabupaten Bantul, Bantul Bersama, Bantul Bersih Sampah 2025">
    <meta name="description" content="SIMBERSAMA adalah website resmi milik Kabupaten Bantul yang digunakan untuk Pengelolaan Sampah Berbasis Online di seluruh Kab. Bantul">
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />

    <link rel="icon" href="assets/img/icon-website.png">

    <!-- Fonts and icons -->
    <script src="assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {"families":["Lato:300,400,700,900"]},
            custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['assets/css/fonts.min.css']},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- Plugins -->

    <!-- Primary CSS Files -->
    <link rel="stylesheet" href="assets/bootstrap5/css/bootstrap.css">
    <style>@import url('https://fonts.googleapis.com/css2?family=Nunito+Sans&display=swap');</style>
    <!-- Primary CSS Files -->

    <!-- Core JS Files -->
    <script src="assets/js/core/jquery-3.6.0.min.js"></script>
    <script src="assets/bootstrap5/js/bootstrap.bundle.min.js"></script>
    <!-- Core JS Files -->

    <base href="">
</head>
<body>

    <div class="container-fluid bg-container-fluid p-0">
        <nav class="container-fluid navbar navbar-expand-lg bg-warning-transparent navbar-dark">
            <div class="container px-0 px-sm-2 py-2">
                <a class="navbar-brand my-auto text-warning" href="/">
                    <h3 class="mb-0 fw-bolder">SIMBERSAMA</h3>
                </a>

                <!-- <a class="navbar-brand my-auto d-none d-lg-inline" href="/">
                    <h3 class="mb-0 fw-bolder">SIMBERSAMA</h3>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                    <hr class="border border-white d-block d-lg-none">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="promo-umkm" title="PROMO UMKM">
                                BERANDA
                            </a>
                        </li>
                    </ul>
                </div> -->

                <div class="justify-content-end">
                    <div class="nav-item">
                        <a class="btn btn btn-warning fw-bolder" aria-current="page" href="masuk" title="Login Akun Simbersama">
                            <i class="fas fa-sign-in-alt"></i> LOGIN <span class="d-none d-md-inline">AKUN</span>
                        </a>
                    </div>
                </div>
            </div>
        </nav>

    	<header class="container-fluid bg-warning-transparent">
            <div class="container py-5 px-0 px-sm-2">
                <div class="row justify-content-between text-center text-lg-start py-4">
                    <div class="col-lg-7 my-auto text-warning">
                        <h1 class="fw-bolder">WEBSITE SIMBERSAMA<br />(SISTEM INFORMASI PENGELOLAAN SAMPAH KAB. BANTUL)</h3>
                        <img src="assets/img/logo-website-versi-desktop.png" title="Logo Kab. Bantul" alt="Gambar Logo Kab. Bantul" class="img-fluid d-inline-block d-lg-none">
                        <h4 class="my-4"><strong>Dinas Lingkungan Hidup Kabupaten Bantul</strong> membuat Aplikasi ini dengan harapan agar <strong>BUMKal</strong> dapat mengelola Sampah tersebut dengan mudah. Sehingga dapat mensukseskan <strong>Bantul Bersih Sampah 2025 (Bantul Bersama)</strong></h4>
                        <a target="_blank" href="https://drive.google.com/file/d/1Sbv44XKbyC887ux-60rLcW-8jiz8h_b8/view" title="BUKU PANDUAN" class="btn btn-warning my-2"><i class="fas fa-book"></i> BUKU PANDUAN</a>
                        <a target="_blank" href="https://www.youtube.com/watch?v=8v2-pSt540E" title="VIDEO TUTORIAL" class="btn btn-outline-warning my-2"><i class="fas fa-play-circle"></i> VIDEO TUTORIAL</a>
                    </div>
                    <div class="col-lg-5 my-auto text-center">
                        <img src="assets/img/logo-website-versi-desktop.png" title="Logo Kab. Bantul" alt="Gambar Logo Kab. Bantul" class="img-fluid d-none d-lg-inline-block">
                    </div>
                </div>
            </div>
        </header>
    </div>

    <a href="javascript:" id="return-to-top"><i class="fas fa-angle-up"></i></a>

    <!-- GetButton.io widget -->
    <script type="text/javascript">
        (function () {
            var options = {
                whatsapp: "<?= $nomorWhatsApp ?>", // WhatsApp number
                call_to_action: "Halo, ada yang bisa kami bantu?", // Call to action
                position: "left", // Position may be 'right' or 'left'
                pre_filled_message: "Halo, Admin Simbersama...", // WhatsApp pre-filled message
            };
            var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
            var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
            s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
            var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
        })();
    </script>
    <!-- /GetButton.io widget -->

    <script type="text/javascript">
        // ===== Scroll to Top ==== 
        $(window).scroll(function() {
            if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
                $('#return-to-top').fadeIn(200);    // Fade in the arrow
            } else {
                $('#return-to-top').fadeOut(200);   // Else fade out the arrow
            }
        });
        $('#return-to-top').click(function() {      // When arrow is clicked
            $('body,html').animate({
                scrollTop : 0                       // Scroll to top of body
            }, 500);
        });
        // ===== Scroll to Top ====
    </script>

</body>
</html>