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
                                <img src="{{ asset('asset/img/panti1.png') }}" alt="" height="100" width="200">
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9">
                            <div class="main-menu">
                            <nav>
                                    <ul id="navigation">
                                        <li><a href="{{ route('beranda') }}">Beranda</a></li>
                                        <li><a href="{{ route('sejarah') }}">Sejarah</a></li>
                                        <li><a href="{{ route('kegiatan') }}">Artikel</a></li>
                                        <li><a href="{{ route('kontak') }}">Kontak</a></li>
                                    </ul>
                                </nav>
                                <div class="Appointment">
                                    <div class="book_btn d-none d-lg-block">
                                        <a data-scroll-nav='1' href="{{ route('donasi') }}">Buat Donasi</a>
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
                        <h3>Form Donasi</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end  -->


    <!--================Blog Area =================-->
    <br>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Donasi</div>
                <div class="card-body">
                   <form action="{{ route('donasis.store') }}" method="post">
                       @csrf
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-5 mb-lg-0">
                    <div class="blog_details">
                        <a class="d-inline-block">
                            <h2>FORM DONASI</h2>
                        </a>
                        <div class="form-group">
                            <label for="">Masukan Nama Donatur</label>
                            <input type="text" name="nama_donatur" class="form-control @error('nama_donatur') is-invalid @enderror">
                             @error('nama_donatur')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" name="email" class="form-control @error('email') is-invalid @enderror">
                             @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">No Telepon</label>
                            <input type="number" name="no_telp" class="form-control @error('no_telp') is-invalid @enderror">
                             @error('no_telp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Nominal</label>
                            <input type="number" name="nominal" class="form-control @error('nominal') is-invalid @enderror">
                             @error('nominal')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Transfer</label>
                            <input type="date" name="tgl_transfer" class="form-control @error('tgl_transfer') is-invalid @enderror">
                             @error('tgl_transfer')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                                <label for="">Nama Bank</label>
                                <select name="nama_bank" class="form-control @error('nama_bank') is-invalid @enderror">
                                    <option value="">Pilih Bank</option>
                                    <option value="BCA">BCA</option>
                                    <option value="BRI">BRI</option>
                                    <option value="Mandiri">Mandiri</option>
                                    <option value="BNI">BNI</option>
                                </select>
                                @error('nama_bank')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="">No Rekening</label>
                            <input type="number" name="no_rek" class="form-control @error('no_rek') is-invalid @enderror">
                             @error('no_rek')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                                <label for="">Trabsfer Ke Bank</label>
                                <select name="transfer_ke_bank" class="form-control @error('transfer_ke_bank') is-invalid @enderror">
                                    <option value="">Pilih Bank</option>
                                    <option value="BCA">BCA 2828 555 222</option>
                                    <option value="BRI">BRI 040 101 000 232 308</option>
                                    <option value="Mandiri">Mandiri 132 004 118 5555</option>
                                    <option value="BNI">BNI 123 3333 120</option>
                                </select>
                                @error('transfer_ke_bank')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <button type="reset" class="btn btn-outline-warning">Reset</button>
                            <button type="submit" class="btn btn-outline-primary">Donasi Sekarang</button>
                        </div>
                    </div>
                  </div>
              </div>
            </div>
        </form>
        <br>
</div>
</div>
</div>
</div>
</div>
                        

                        
    <!--================Blog Area =================-->

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
        $('.datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-calendar"></span>'
            }
        });

        $('.timepicker').timepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-clock-o"></span>'
            }
        });
    $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
    </script>
    @include('sweetalert::alert')

</body>
</html>