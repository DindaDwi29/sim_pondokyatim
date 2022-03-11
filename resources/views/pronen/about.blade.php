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
                        <h3>Sejarah</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end  -->

    <!-- reson_area_start  -->
    <!-- <div class="reson_area section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb-55">
                        <h3><span>Reason of Helping</span></h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single_reson">
                        <div class="thum">
                            <div class="thum_1">
                                <img src="{{ asset('asset/img/help/1.png') }}" alt="">
                            </div>
                        </div>
                        <div class="help_content">
                            <h4>Collecting Fund</h4>
                            <p>Lorem ipsum, or lipsum as it is 
                                sometimes known, is dummy 
                                text used in laying out print.</p>
                            <a href="#" class="read_more">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_reson">
                        <div class="thum">
                            <div class="thum_1">
                                <img src="{{ asset('asset/img/help/2.png') }}" alt="">
                            </div>
                        </div>
                        <div class="help_content">
                            <h4>Collecting Fund</h4>
                            <p>Lorem ipsum, or lipsum as it is 
                                sometimes known, is dummy 
                                text used in laying out print.</p>
                            <a href="#" class="read_more">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_reson">
                        <div class="thum">
                            <div class="thum_1">
                                <img src="{{ asset('asset/img/help/3.png') }}" alt="">
                            </div>
                        </div>
                        <div class="help_content">
                            <h4>Collecting Fund</h4>
                            <p>Lorem ipsum, or lipsum as it is 
                                sometimes known, is dummy 
                                text used in laying out print.</p>
                            <a href="#" class="read_more">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- reson_area_end  -->

    <!-- latest_activites_area_start  -->
    <!-- <div class="latest_activites_area">
        <div class=" video_bg_1 video_activite  d-flex align-items-center justify-content-center">
            <a class="popup-video" href="https://www.youtube.com/watch?v=MG3jGHnBVQs">
                <i class="flaticon-ui"></i>
            </a>
        </div>
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-7">
                    <div class="activites_info">
                        <div class="section_title">
                            <h3> <span>Watch Our Latest  </span><br>
                                Activities</h3>
                        </div>
                        <p class="para_1">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do 
                            eiusmod tempor incididunt  ut labore dolore magna aliqua. 
                            enim minim veniam, quis nostrud exercitation.</p class="para_1">
                        <p class="para_2">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do 
                            eiusmod tempor incididunt  ut labore dolore magna aliqua. 
                            enim minim veniam, quis nostrud exercitation. tempor 
                            incididunt  ut labore dolore magna aliqua. enim minim 
                            veniam, quis nostrud exercitation.</p>
                        <a href="#" data-scroll-nav="1" class="boxed-btn4">Donate Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- latest_activites_area_end  -->

    <!-- counter_area_start  -->
    <!-- <div class="counter_area pt-120">
        <div class="container">
            <div class="counter_bg overlay">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="single_counter d-flex align-items-center justify-content-center">
                            <div class="icon">
                                <i class="flaticon-calendar"></i>
                            </div>
                            <div class="events">
                                <h3 class="counter">120</h3>
                                <p>Finished Event</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single_counter d-flex align-items-center justify-content-center">
                            <div class="icon">
                                <i class="flaticon-heart-beat"></i>
                            </div>
                            <div class="events">
                                <h3 class="counter">120</h3>
                                <p>Finished Event</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single_counter d-flex align-items-center justify-content-center">
                            <div class="icon">
                                <i class="flaticon-in-love"></i>
                            </div>
                            <div class="events">
                                <h3 class="counter">120</h3>
                                <p>Finished Event</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single_counter d-flex align-items-center justify-content-center">
                            <div class="icon">
                                <i class="flaticon-hug"></i>
                            </div>
                            <div class="events">
                                <h3 class="counter">120</h3>
                                <p>Finished Event</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- counter_area_end  -->

    <!-- our_volunteer_area_start  -->
    <!-- <div class="our_volunteer_area section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb-55">
                        <h3><span>Our Volunteer</span></h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single_volenteer">
                        <div class="volenteer_thumb">
                            <img src="{{ asset('asset/img/volenteer/1.png') }}" alt="">
                        </div>
                        <div class="voolenteer_info d-flex align-items-end">
                            <div class="social_links">
                                <ul>
                                    <li>
                                        <a href="#"> <i class="fa fa-facebook"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fa fa-pinterest"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fa fa-linkedin"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fa fa-twitter"></i> </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="info_inner">
                                <h4>Sakil khan</h4>
                                <p>Donner</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_volenteer">
                        <div class="volenteer_thumb">
                            <img src="{{ asset('asset/img/volenteer/2.png') }}" alt="">
                        </div>
                        <div class="voolenteer_info d-flex align-items-end">
                            <div class="social_links">
                                <ul>
                                    <li>
                                        <a href="#"> <i class="fa fa-facebook"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fa fa-pinterest"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fa fa-linkedin"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fa fa-twitter"></i> </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="info_inner">
                                <h4>Emran Ahmed</h4>
                                <p>Volunteer</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_volenteer">
                        <div class="volenteer_thumb">
                            <img src="{{ asset('asset/img/volenteer/3.png') }}" alt="">
                        </div>
                        <div class="voolenteer_info d-flex align-items-end">
                            <div class="social_links">
                                <ul>
                                    <li>
                                        <a href="#"> <i class="fa fa-facebook"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fa fa-pinterest"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fa fa-linkedin"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fa fa-twitter"></i> </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="info_inner">
                                <h4>Sabbir Ahmed</h4>
                                <p>Volunteer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- our_volunteer_area_end  -->


    <!-- <div data-scroll-index='1' class="make_donation_area section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb-55">
                        <h3><span>Make a Donation</span></h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <form action="#" class="donation_form">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <div class="single_amount">
                                    <div class="input_field">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                              <span class="input-group-text" id="basic-addon1">$</span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="40,200" aria-label="Username" aria-describedby="basic-addon1">
                                          </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="single_amount">
                                   <div class="fixed_donat d-flex align-items-center justify-content-between">
                                       <div class="select_prise">
                                           <h4>Select Amount:</h4>
                                       </div>
                                        <div class="single_doonate"> 
                                            <input type="radio" id="blns_1" name="radio-group" checked>
                                            <label for="blns_1">10</label>
                                        </div>
                                        <div class="single_doonate"> 
                                            <input type="radio" id="blns_2" name="radio-group" checked>
                                            <label for="blns_2">30</label>
                                        </div>
                                        <div class="single_doonate"> 
                                            <input type="radio" id="Other" name="radio-group" checked>
                                            <label for="Other">Other</label>
                                        </div>
                                   </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="donate_now_btn text-center">
                        <a href="#" class="boxed-btn4">Donate Now</a>
                    </div>
                </div>

            </div>
        </div>
    </div> -->

    <!-- slider_area_start -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="slider_text "><br>
                            <span><h3>Yayasan Panti Yatim Indonesia</h3>
                            <p>Laznas PYI Adalah Lembaga Amil Zakat Nasional (LAZNAS) berdasarkan SK Kemenag RI No.120 Tahun 2019. Bertekad menjadi lembaga pengelola dana ZISWAF yang berkhidmat menangani anak yatim/piatu dan terlantar serta memberdayakan kaum dhuafa. Berkantor pusat di kota Bandung dan cabang di Jakarta dan Bekasi. Kami saat ini mengayomi langsung lebih dari 300 anak yatim dhuafa dalam 29 asrama, 4000 anak luar asrama, dan kami masih terus berkembang.</p><br>
                        </div>
                        <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><img src="{{ asset('asset/img/previous.png') }}" alt="" height="30" width="30">VISI</p>
                            <p>Terwujudnya Lembaga Amil Zakat Nasional yang unggul, amanah dan berperan aktif dalam pembangunan
                                sumberdaya manusia berdasarkan pemberdayaan</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><img src="{{ asset('asset/img/previous.png') }}" alt="" height="30" width="30">MISI</p>
                            <p>Mengorganisasi sumber daya dan melakukan pemberdayaan potensi umat untuk kesejahtraan kemanusiaan, pendidikan, kesehatan dan dakwah
                                Mengoptimalisasi pengelolaan dana ziswaf (zakat, infaq, sedekah, wakaf) dan kemanusiaan sesuai syari’at islam dan undang-undang yang berlaku
                                Bersinergi membangun program pemberdayaan dan pendayagunaan dengan menguatkan jaringan filantropi Nasional dan Internasional</p>
                        </div>
    
                    </div>
                        <div class="slider_text "><br>
                            <span><h3>Sejarah</h3>
                            <p>Berawal dari kesepakatan beberapa pedagang di lingkungan Pasar Induk Caringin Bandung Jawa Barat Indonesia , pada tahun 1998 tepatnya di Gang Porib III, RT 003/002 Kelurahan Babakan Ciparay, Kecamatan Babakan Ciparay Kota  Bandung, bermodal rumah kontrakan untuk menampung 4 anak yatim untuk disekolahkan, yang  sebelumnya tidur dan mencari makan di sekitar pasar tersebut.</p><br>
                            <p>Seiring dengan semakin bertambahnya anak yang di tampung, maka di buatlah lembaga formal pada tanggal 18 April 1998 yang diberi nama Nurul Ummah yang berarti Cahaya Umat, disepakati menjadi sebuah  Panti Asuhan di bawah naungan organisasi masyarakat Yayasan Al-fajr. Dibina langsung Dinas Sosial Kota Bandung dan bergabung dalam Forum  Komunikasi Lembaga Kesejahteraan Sosial Anak  (LKSA)  Kota  Bandung.</P><br>
                            <img src="{{ asset('asset/img/about.jpg') }}" alt="" height="400" width="700"><br><br>
                            <p>Tahun  2009 ,  PSAA Nurul Ummah berganti nama menjadi Panti Yatim  Indonesia  (PYI)  dan  mengadakan perubahan manajemen, sistem pelayanan kepada anak asuh dan kepada donatur serta pembukaan beberapa cabang asrama di wilayah kota Bandung, dengan mengusung slogan Menyayangi Sepenuh Hati, kepercayaan donatur kepada kami semakin meningkat.</p><br>
                            <img src="{{ asset('asset/img/panti1.png') }}" alt="" height="300" width="500"><br>
                        </div>
                        <div class="slider_text "><br>
                            <span><h3>Budaya</h3>
                            <p>Ibadah. Segala aktivitas yang diselenggarakan dalam Laznas PYI dijiwai oleh semangat untuk beribadah kepada Allah swt. dan mengharap keridlaan-Nya.</p><br>
                            <p>Profesional. Aktivitas Laznas PYI dirancang dengan cermat, diselenggarakan secara detail, selesai dilaksanakan dengan tuntas dan berhasil tercapai tujuannya dengan baik.</p><br>
                            <p>Kualitas. Aktivitas Laznas PYI diselenggarakan untuk mencapai hasil dengan kualitas (mutu) yang sebaik-baiknya sesuai dengan standard jaminan mutu yang telah dinyatakan.</p><br>
                            <p>Prestasi. Seluruh komponen yang terlibat dalam aktivitas Laznas PYI diharapkan mampu berprestasi setinggi mungkin di bidangya masing-masing.</p><br>
                            <p>Perbaikan. Seluruh komponen yang terlibat dalam aktivitas Laznas PYI berusaha untuk melakukan perbaikan secara individual maupun tim demi suksesnya program-program organisasi.</p><br>
                            <p>Amanah. Seluruh komponen yang terlibat dalam aktivitas Laznas PYI berusaha menjaga segala bentuk amanah yang disampikan sehingga dapat dipertanggungjawabkan di dunia dan akhirat.</p><br>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- slider_area_end -->


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

    <!-- link that opens popup -->

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
    @include('sweetalert::alert')

</body>

</html>