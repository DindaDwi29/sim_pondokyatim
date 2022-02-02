<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Panti Yatim Indonesia</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/gijgo.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->


    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div class="header-top_area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-md-12 col-lg-8">
                            <div class="short_contact_list">
                                <ul>
                                    <li><a href="#">  <img src="{{ asset('asset/img/telephone.png') }}" alt="" height="20" width="20">(022)-5401-334</a></li>
                                    <li><a href="#">  <img src="{{ asset('asset/img/email.png') }}" alt="" height="20" width="20">mail@pantiyatim.or.i</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6 col-lg-4">
                            <div class="social_media_links d-none d-lg-block">
                            <a href="https://web.facebook.com/PantiYatimIndonesia?_rdc=1&_rdr">
                                    <img src="{{ asset('asset/img/fb.png') }}" alt="" height="30" width="30">
                                </a>
                                <a href="https://twitter.com/PYI_Indonesia">
                                    <img src="{{ asset('asset/img/tw.png') }}" alt="" height="30" width="30">
                                </a>
                                <a href="https://www.instagram.com/pantiyatimindonesia/">
                                    <img src="{{ asset('asset/img/ig.png') }}" alt="" height="30" width="30">
                                </a>
                                <a href="https://www.youtube.com/channel/UCekVqdzNdPV53d-6evyaZ0w">
                                    <img src="{{ asset('asset/img/yt.png') }}" alt="" height="30" width="30">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3">
                            <div class="logo">
                                <a href="index.html">
                                <img src="{{ asset('asset/img/panti1.png') }}" alt="" height="100" width="200">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9">
                            <div class="main-menu">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="index.html">Beranda</a></li>
                                        <li><a href="About.html">Sejarah</a></li>
                                        <li><a href="#">Kegiatan & Berita <img src="{{ asset('asset/img/panah-bawah.png') }}" alt="" height="10" width="10"></a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">Kegiatan</a></li>
                                                <li><a href="single-blog.html">Berita</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Kontak</a></li>
                                    </ul>
                                </nav>
                                <div class="Appointment">
                                    <div class="book_btn d-none d-lg-block">
                                        <a data-scroll-nav='1' href="#">Buat Donasi</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- bradcam_area_start  -->
    <div class="bradcam_area breadcam_bg overlay d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Kontak Kami</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end  -->

    <!-- ================ contact section start ================= -->
    <section class="contact-section">
            <div class="container">
                <div class="d-none d-sm-block mb-5 pb-4">
                    <div id="map" style="height: 480px; position: relative; overflow: hidden;"></div>
                    <script>
                        function initMap() {
                            var uluru = {
                                lat: -25.363,
                                lng: 131.044
                            };
                            var grayStyles = [{
                                    featureType: "all",
                                    stylers: [{
                                            saturation: -90
                                        },
                                        {
                                            lightness: 50
                                        }
                                    ]
                                },
                                {
                                    elementType: 'labels.text.fill',
                                    stylers: [{
                                        color: '#ccdee9'
                                    }]
                                }
                            ];
                            var map = new google.maps.Map(document.getElementById('map'), {
                                center: {
                                    lat: -31.197,
                                    lng: 150.744
                                },
                                zoom: 9,
                                styles: grayStyles,
                                scrollwheel: false
                            });
                        }
                    </script>
                    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&amp;callback=initMap">
                    </script>
    
                </div>
    
                
                <div class="row">
                <div class="slider_text "><br>
                            <span><h3>Yayasan Panti Yatim Indonesia</h3>
                            <p>Untuk Informasi Mengenai Panti Yatim Indonesia Silahkan Hubungi :</p><br>
                            <p>Kantor Pusat : Jl. Sauyunan Raya I No. 14 Bandung (022)- 540 1334</p><br>
                            <p>Kantor Management : Jl. Holis No.6, Cibuntu, Kec. Bandung Kulon, Kota Bandung, Jawa Barat 40212</p><br>
                            <p>Call Center         : 081-2222-44-222</p><br>
                            <p>SMS Center / Whatsapp Center       : 081-2211-85-555</p><br>
                            <p>Mail Center        : mail@pantiyatim.or.id</p><br>
                        </div>
                    <div class="col-12">
                        <h2 class="contact-title">Get in Touch</h2>
                    </div>
                    <div class="col-lg-8">
                        <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Name"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- ================ contact section end ================= -->
    

    <!-- footer_start  -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-4 ">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                <img src="{{ asset('asset/img/panti1.png') }}" alt="">
                                </a>
                            </div>
                            <p class="address_text">Laznas PYI Yatim & Zakat adalah Lembaga Amil Zakat Nasional (LAZNAS) berdasarkan SK Kemenag RI No.120 Tahun 2019. Bertekad menjadi lembaga pengelola dana ZISWAF yang berkhidmat menangani anak yatim/piatu dan terlantar serta memberdayakan kaum dhuafa.
                            </p>
                            <div class="socail_links">
                                <ul>
                                <li>
                                    <a href="https://web.facebook.com/PantiYatimIndonesia?_rdc=1&_rdr">
                                    <img src="{{ asset('asset/img/facebook.png') }}" alt="" height="30" width="30">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/PYI_Indonesia">
                                    <img src="{{ asset('asset/img/twitter.png') }}" alt="" height="30" width="30">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/pantiyatimindonesia/">
                                    <img src="{{ asset('asset/img/instagram.png') }}" alt="" height="30" width="30">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com/channel/UCekVqdzNdPV53d-6evyaZ0w">
                                    <img src="{{ asset('asset/img/youtube.png') }}" alt="" height="30" width="30">
                                    </a>
                                </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                        <h3 class="footer_title">
                                Mitra Peduki
                            </h3>
                            <ul class="links">
                                <li><img src="{{ asset('asset/img/bni.png') }}" alt="" height="50" width="90"></li><br>
                                <li><img src="{{ asset('asset/img/alfa.png') }}" alt="" height="50" width="90"></li><br>
                                <li><img src="{{ asset('asset/img/tiki.png') }}" alt="" height="50" width="90"></li><br>
                                <li><img src="{{ asset('asset/img/cimbsyariah.png') }}" alt="" height="50" width="90"></li><br>
                                <li><img src="{{ asset('asset/img/jne.jpg') }}" alt="" height="50" width="90"></li><br>
                                <li><img src="{{ asset('asset/img/angkasapura.png') }}" alt="" height="50" width="90"></li><br>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                        <h3 class="footer_title">
                                Kontak Kami
                            </h3>
                            <div class="contacts">
                                <p>Call center: 081-2222-44-222<br>
                                    Telepon: (022)-5401-334<br>
                                    Whatsapp Center: 081-2211-85-555<br>
                                    Kantor Pusat manajemen:<br>
                                    (022) 20599460<br>
                                    Email: mail@pantiyatim.or.id<br>
                                    Jl. Cibaduyut Lama Komplek Sauyunan Raya No. 14, Kel. Kebon
                                    Lega, Kec. Bojongloa Kidul, Kota Bandung, Prop. Jawa Barat 40235.<br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                        <h3 class="footer_title">
                                Rekening Donasi
                            </h3>
                            <ul class="news_links">
                                <li>
                                    <div class="info">
                                        <p>BCA</p>
                                        <p>2828 555 222</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="info">
                                    <p>BRI</p>
                                    <p>040 101 000 232 308</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="info">
                                    <p>Mandiri</p>
                                    <p>132 004 118 5555</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="info">
                                    <p>BNI</p>
                                    <p>123 3333 120</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="row">
                    <div class="bordered_1px "></div>
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer_end  -->
    
        <!-- JS here -->
        <script src="{{ asset('asset/js/vendor/modernizr-3.5.0.min.js') }}"></script>
        <script src="{{ asset('asset/js/vendor/jquery-1.12.4.min.js') }}"></script>
        <script src="{{ asset('asset/js/popper.min.js') }}"></script>
        <script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('asset/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('asset/js/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('asset/js/ajax-form.js') }}"></script>
        <script src="{{ asset('asset/js/waypoints.min.js') }}"></script>
        <script src="{{ asset('asset/js/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('asset/js/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('asset/js/scrollIt.js') }}"></script>
        <script src="{{ asset('asset/js/jquery.scrollUp.min.js') }}"></script>
        <script src="{{ asset('asset/js/wow.min.js') }}"></script>
        <script src="{{ asset('asset/js/nice-select.min.js') }}"></script>
        <script src="{{ asset('asset/js/jquery.slicknav.min.js') }}"></script>
        <script src="{{ asset('asset/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('asset/js/plugins.js') }}"></script>
        <script src="{{ asset('asset/js/gijgo.min.js') }}"></script>
    
        <!--contact js-->
        <script src="{{ asset('asset/js/contact.js') }}"></script>
        <script src="{{ asset('asset/js/jquery.ajaxchimp.min.js') }}"></script>
        <script src="{{ asset('asset/js/jquery.form.js') }}"></script>
        <script src="{{ asset('asset/js/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('asset/js/mail-script.js') }}"></script>
    
        <script src="{{ asset('asset/js/main.js') }}"></script>
        <script>
            $('#datepicker').datepicker({
                iconsLibrary: 'fontawesome',
                icons: {
                 rightIcon: '<span class="fa fa-caret-down"></span>'
             }
            });
            $('#datepicker2').datepicker({
                iconsLibrary: 'fontawesome',
                icons: {
                 rightIcon: '<span class="fa fa-caret-down"></span>'
             }
    
            });
        </script>
    </body>
    
    </html>