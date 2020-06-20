<!DOCTYPE html>
<html lang="id">
<head>
    <title>SELAMAT DATANG</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="revisit-after" content="2 days">
    <meta name="robots" content="all,index,follow" />
    <meta name="MSSmartTagsPreventParsing" content="TRUE">
    <meta NAME="Distribution" CONTENT="Global">
    <meta NAME="Rating" CONTENT="General">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Style -->
    <link rel="shortcut icon" href="https://idwebhost.com/themes/freshblue/images/favicon.ico" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    <link rel="stylesheet" href="{{ asset('public/css/main.css') }}">


</head>

<body>
    <header>
            <h1>AUTOMATA WEBINAR</h1>
    </header>

    <content>
        <div class="container">
            <section class="banner">
                <img src="{{ asset('public/images/img/webinar.png') }}" alt="Halo pengunjung website"/>
            </section>
              <div class="other-item-login">
             <a class="button-login" href="{{route('login')}}" target="_blank">Login</a>
            </div>
             <div class="other-item-login">
             <a class="button-register" href="{{'register'}}" target="_blank">Daftar</a>
            </div>

          <!--   <section class="welcome">
                <p>Akun hosting Anda sudah aktif!</p>
                <p>Silakan ubah tampilan halaman ini agar menjadi website yang lebih menarik.</p>
            </section> -->

            <section class="step">
                <h1><b>Dapatkan Banyak Keuntungan Webinar Bersama Kami</b></h1>
                <div class="underline"></div>

                <div class="step-item">
                    <img src="{{asset('public/images/img/icon-desktop.png')}}" alt="" />
                    <div class="step-desc">
                        <h2>Jadwal Webinar dengan Mudah dan Praktis</h2>
                        <p>Module Jadwal Terintegrasi dengan ZOOM</p>
                    </div>
                </div>

                <div class="step-item">
                    <img src="{{asset('public/images/img/icon-config.png')}}" alt="" />
                    <div class="step-desc">
                        <h2>Jangan Salah Pilih EO</h2>
                        <p>Harga EO Webinar Kami Lebih Murah</p>
                    </div>
                </div>

                <div class="step-item">
                    <img src="{{asset('public/images/img/icon-design.png')}}" alt="" />
                    <div class="step-desc">
                        <h2>Absen Peserta Otomatis</h2>
                        <p>Mudah dalam Manajemen Data Peserta</p>
                    </div>
                </div>

            </section>
        </div>
    </content>

    <aside>
        <div class="container">
            <section class="contact">
                <p>Silakan hubungi kami untuk konfirmasi</p>
                <a class="button button-wa" href="https://api.whatsapp.com/send?phone=62" target="_blank">
                    <i class="icon-whatsapp"></i>
                    xxxxx81398
                </a>
            </section>
        </div>
    </aside>

    <content>
        <div class="container">
            <section class="other">
                <div class="other-item">
                    <img src="{{asset('public/images/img/icon-promo.png')}}" alt="" />
                    <p>Cek Promo disini</p>
                    <a class="button" href="#" target="_blank">Lihat</a>
                </div>

                <div class="other-item">
                    <img src="{{asset('public/images/img/icon-hosting.png')}}" alt="" />
                    <p>Silahkan Order disini</p>
                    <a class="button" href="#" target="_blank">Order</a>
                </div>

            </section>
        </div>
    </content>

    <footer>
        Terima kasih <a href="https://automataseminar.com/zoom/" target="_blank">automataseminar</a>
    </footer>
</div>
</body>
</html>
