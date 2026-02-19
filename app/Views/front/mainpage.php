<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Kota Tua Majene</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url(); ?>/img/logo.png" rel="icon">
    <link href="<?= base_url(); ?>/front/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url(); ?>/front/assets/vendd/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/front/assets/vendd/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/front/assets/vendd/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/front/assets/vendd/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/front/assets/vendd/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/front/assets/vendd/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vend/libs/sweetalert2/sweetalert2.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vend/libs/select2/select2.css" />

    <!-- Template Main CSS File -->
    <link href="<?= base_url(); ?>/front/assets/css/style.css" rel="stylesheet">

    <!-- LINK LEAFLET -->

    <!-- <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""> -->
    <!-- <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script> -->

    <link rel="stylesheet" href="<?= base_url() ?>/assets/leaflet/leaflet/leaflet.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/assets/leaflet/Leaflet.markercluster-1.4.1/distt/MarkerCluster.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/leaflet/Leaflet.markercluster-1.4.1/distt/MarkerCluster.Default.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/leaflet/leaflet-search-master/distt/leaflet-search.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/assets/leaflet/leaflet.fullscreen-master/Control.FullScreen.css" />


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="<?= base_url() ?>/assets/leaflet/leaflet/leaflet.js"></script>
    <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
    <script src="<?= base_url() ?>/assets/leaflet/leaflet-search-master/distt/leaflet-search.src.js"></script>
    <script src="<?= base_url() ?>/assets/leaflet/Leaflet.markercluster-1.4.1/distt/leaflet.markercluster-src.js"></script>
    <script src="<?= base_url() ?>/assets/leaflet/leaflet-easyPrint/distt/bundle.js"></script>
    <script src="<?= base_url() ?>/assets/leaflet/leaflet.fullscreen-master/Control.FullScreen.js"></script>

    <!-- END OF LINK LEAFLET -->
    <script src="<?= base_url(); ?>/assets/vend/libs/sweetalert2/sweetalert2.js"></script>
    <script src="<?= base_url(); ?>/assets/vend/libs/select2/select2.js"></script>


    <style>
        /* Container Background untuk Section About */
        /* Update CSS untuk Tampilan Clean White */
        /* Penyesuaian Section About */
        #about {
            background-color: #f9fbfd;
            /* Abu-abu sangat muda untuk kontras */
            padding: 100px 0;
        }

        .title-sigap {
            color: #222;
            font-weight: 700;
            margin-bottom: 50px;
            position: relative;
        }

        /* Desain Kartu Fitur */
        .about-card {
            background: #ffffff;
            padding: 45px 35px;
            border-radius: 15px;
            border: 1px solid #e1e8ed;
            text-align: left;
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            height: 100%;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.02);
        }

        .about-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
            border-color: #d1d9e0;
        }

        .about-card h4 {
            color: #1a1a1a;
            font-weight: 700;
            margin-top: 25px;
            margin-bottom: 15px;
            font-size: 22px;
        }

        .about-card p {
            color: #64748b;
            font-size: 15px;
            line-height: 1.7;
            margin-bottom: 20px;
        }

        .link-external {
            color: #2563eb;
            text-decoration: none;
            font-size: 14px;
            font-weight: 600;
        }

        .link-external:hover {
            text-decoration: underline;
        }

        /* Lingkaran Ikon */
        .icon-box {
            width: 55px;
            height: 55px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 26px;
            color: #fff;
        }

        /* Warna Ikon (Sesuai Identitas SIGAP) */
        .icon-box.blue {
            background: #3b82f6;
        }

        .icon-box.green {
            background: #10b981;
        }

        .icon-box.red {
            background: #ef4444;
        }
    </style>

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex justify-content-between">

            <div class="logo">
                <!-- <h1><a href="index.html"><span>e</span>Business</a></h1> -->
                <!-- Uncomment below if you prefer to use an image logo -->
                <a href="<?= base_url('home'); ?>"><img src="<?= base_url(); ?>/img/sijaga.png" width="100%" alt="" class="img-fluid"></a>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
                    <li><a class="nav-link scrollto" href="#services">Peta</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Drop Down 1</a></li>
                            <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                    <li><a href="#">Deep Drop Down 2</a></li>
                                    <li><a href="#">Deep Drop Down 3</a></li>
                                    <li><a href="#">Deep Drop Down 4</a></li>
                                    <li><a href="#">Deep Drop Down 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Drop Down 2</a></li>
                            <li><a href="#">Drop Down 3</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

                <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">

                    <div class="carousel-item active" style="background-image: url(<?= base_url(); ?>/img/bg.jpg)">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown">SIJAGA MAJENE </h2>
                                <p class="animate__animated animate__fadeInUp">Sistem Informasi Bencana Budaya Majene</p>
                                <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">Lihat Peta</a>
                            </div>
                        </div>
                    </div>


                </div>

                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                </a>

                <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                </a>

            </div>
        </div>
    </section><!-- End Hero Section -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <div id="about" class="about-area area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline text-center">
                            <h2 style="color: #444; margin-bottom: 40px;">Apa Itu Sijaga?</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-46 col-xs-12">
                        <div class="about-card">
                            <div class="icon-box blue">
                                <i class="bi bi-map"></i>
                            </div>
                            <h4>Pemetaan GIS</h4>
                            <p>Visualisasi data geografis wilayah rawan bencana dengan sistem informasi geografis yang interaktif.</p>
                        </div>
                    </div>

                    <!-- <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="about-card">
                            <div class="icon-box green">
                                <i class="bi bi-cloud-sun"></i>
                            </div>
                            <h4>Informasi Cuaca</h4>
                            <p>Pemantauan cuaca real-time dan prakiraan cuaca untuk wilayah Kelurahan Pangali-Ali.</p>
                            <a href="https://www.bmkg.go.id" target="_blank" class="link-bmkg">Lihat selengkapnya di BMKG →</a>
                        </div>
                    </div> -->

                    <div class="col-md-6 col-sm-46 col-xs-12">
                        <div class="about-card">
                            <div class="icon-box red">
                                <i class="bi bi-exclamation-triangle"></i>
                            </div>
                            <h4>Data Bencana</h4>
                            <p>Database lengkap kejadian bencana dan sistem pelaporan yang terintegrasi untuk masyarakat.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ======= Services Section ======= -->
        <div id="services" class="services-area area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline services-head text-center">
                            <h2>Pemetaan</h2>
                        </div>
                    </div>
                </div>
                <div class="row text-center">
                    <!-- Start Left services -->
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div id="map" style="height: 500px; width: 100%;"></div>
                    </div>
                </div>
            </div>
        </div>
        </div><!-- End Services Section -->

        <!-- ======= Portfolio Section ======= -->
        <!-- <div id="portfols -->
        <!-- End Portfolio Section -->

        <!-- ======= Blog Section ======= -->
        <!-- <div id="blog" class="blog-area">
            <div class="blog-inner area-padding">
                <div class="blog-overly"></div>
                <div class="container ">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="section-headline text-center">
                                <h2>Latest News</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-blog">
                                <div class="single-blog-img">
                                    <a href="blog.html">
                                        <img src="<?= base_url(); ?>/front/assets/img/blog/1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="blog-meta">
                                    <span class="comments-type">
                                        <i class="fa fa-comment-o"></i>
                                        <a href="#">13 comments</a>
                                    </span>
                                    <span class="date-type">
                                        <i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
                                    </span>
                                </div>
                                <div class="blog-text">
                                    <h4>
                                        <a href="blog.html">Assumenda repud eum veniam</a>
                                    </h4>
                                    <p>
                                        Lorem ipsum dolor sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.
                                    </p>
                                </div>
                                <span>
                                    <a href="blog.html" class="ready-btn">Read more</a>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-blog">
                                <div class="single-blog-img">
                                    <a href="blog.html">
                                        <img src="<?= base_url(); ?>/front/assets/img/blog/2.jpg" alt="">
                                    </a>
                                </div>
                                <div class="blog-meta">
                                    <span class="comments-type">
                                        <i class="fa fa-comment-o"></i>
                                        <a href="#">130 comments</a>
                                    </span>
                                    <span class="date-type">
                                        <i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
                                    </span>
                                </div>
                                <div class="blog-text">
                                    <h4>
                                        <a href="blog.html">Explicabo magnam quibusdam.</a>
                                    </h4>
                                    <p>
                                        Lorem ipsum dolor sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.
                                    </p>
                                </div>
                                <span>
                                    <a href="blog.html" class="ready-btn">Read more</a>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-blog">
                                <div class="single-blog-img">
                                    <a href="blog.html">
                                        <img src="<?= base_url(); ?>/front/assets/img/blog/3.jpg" alt="">
                                    </a>
                                </div>
                                <div class="blog-meta">
                                    <span class="comments-type">
                                        <i class="fa fa-comment-o"></i>
                                        <a href="#">10 comments</a>
                                    </span>
                                    <span class="date-type">
                                        <i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
                                    </span>
                                </div>
                                <div class="blog-text">
                                    <h4>
                                        <a href="blog.html">Lorem ipsum dolor sit amet</a>
                                    </h4>
                                    <p>
                                        Lorem ipsum dolor sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.
                                    </p>
                                </div>
                                <span>
                                    <a href="blog.html" class="ready-btn">Read more</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- End Blog Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer>
        <div class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="footer-content">
                            <div class="footer-head">
                                <div class="footer-logo">
                                    <!-- <h2><span>e</span>Business</h2> -->
                                    <a href="<?= base_url('home'); ?>"><img src="<?= base_url(); ?>/img/sijaga.png" width="40%" alt="" class="img-fluid"></a>
                                </div>

                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p>
                                <div class="footer-icons">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="bi bi-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="bi bi-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="bi bi-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="bi bi-linkedin"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end single footer -->
                    <div class="col-md-4">
                        <div class="footer-content">
                            <div class="footer-head">
                                <h4>Informasi</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                                </p>
                                <div class="footer-contacts">
                                    <p><span>Tel:</span> +123 456 789</p>
                                    <p><span>Email:</span> contact@example.com</p>
                                    <p><span>Working Hours:</span> 9am-5pm</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end single footer -->
                    <div class="col-md-4">
                        <div class="footer-content">
                            <div class="footer-head">
                                <h4>Instagram</h4>
                                <div class="flicker-img">
                                    <a href="#"><img src="assets/img/portfolio/1.jpg" alt=""></a>
                                    <a href="#"><img src="assets/img/portfolio/2.jpg" alt=""></a>
                                    <a href="#"><img src="assets/img/portfolio/3.jpg" alt=""></a>
                                    <a href="#"><img src="assets/img/portfolio/4.jpg" alt=""></a>
                                    <a href="#"><img src="assets/img/portfolio/5.jpg" alt=""></a>
                                    <a href="#"><img src="assets/img/portfolio/6.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-area-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="copyright text-center">
                            <p>
                                &copy; Copyright <strong>SIJAGA MAJENE</strong>. All Rights Reserved
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </footer><!-- End  Footer -->

    <script type="text/javascript">
        var map = L.map('map').setView([-3.544432326881727, 118.96311259992352], 14);

        var LayerKita = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
            maxZoom: 37,
            // subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
            attribution: 'Tiles © Esri — Source: Esri, Earthstar Geographics, NASA, USGS'
        }).addTo(map);


        // var markers = L.layerGroup(); // Ubah menjadi L.layerGroup()
        // var markersSitus = L.markerClusterGroup(); // markerClusterGroup
        // markersSitus.addLayer(situsLayer);



        var geojsonPolygon = L.layerGroup(); // Kumpulan layer untuk polygon

        <?php foreach ($polygon as $row) { ?>
            $.getJSON("<?= base_url('import_polygon/' . $row->file) ?>", function(data) {
                var polygonLayer = L.geoJSON(data, {
                    style: function(feature) {
                        return {
                            // fillColor: getRandomColor(feature.properties.NAMA_DESA),
                            fillColor: getRandomColor(feature.properties.Zona),
                            opacity: 0.1,
                            fillOpacity: 0.5,
                            color: 'black',
                        }
                    },
                    onEachFeature: function(feature, layer) {
                        layer.bindPopup(createPopupContent(feature.properties)); // Memanggil fungsi createPopupContent untuk mengisi konten popup
                    },
                });

                geojsonPolygon.addLayer(polygonLayer); // Tambahkan layer polygon ke kumpulan layer
            });
        <?php } ?>

        function createPopupContent(properties) {
            var popupContent = '<table class="table table-striped table-bordered" style="font-size:12px;background-color:white">' +
                '<tr><th>Zona </th><td>' + properties['Zona'] + '</td></tr>' +
                '<tr><th>Luas </th><td>' + properties['Luas'] + '</td></tr>' +
                '</table>';

            return popupContent;
        };

        function getRandomColor(Zona) {
            var hash = 0;
            for (var i = 0; i < Zona.length; i++) {
                hash = Zona.charCodeAt(i) + ((hash << 5) - hash);
            }
            var color = '#';
            for (var j = 0; j < 3; j++) {
                var value = (hash >> (j * 8)) & 255;
                color += value.toString(16).padStart(2, '0');
            }
            return color;
        };


        var searchLayer = new L.LayerGroup(); // layer group for searchLayer
        searchLayer.addLayer(geojsonPolygon);

        //PRINT MAP
        L.easyPrint({
            title: 'Kota Tua Majene',
            position: 'topleft',
            sizeModes: ['A4Portrait', 'A4Landscape']
        }).addTo(map);
        // -- PRINT MAP --  

        var baseMaps = {
            "Sattelite": LayerKita,
            "Topografi": L.tileLayer('https://{s}.tile.opentopomap.org/{z}/{x}/{y}.png', {
                maxZoom: 20,
                // subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
            }),
            "Street Maps": L.tileLayer('http://{s}.google.com/vt?lyrs=s,h&x={x}&y={y}&z={z}', {
                maxZoom: 25,
                subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
            }),
        };
        var overlayMaps = {
            "Data": geojsonPolygon,
        };



        // var overlayMaps = {};
        var controlSearch = new L.Control.Search({
            position: 'topleft',
            propertyName: 'nama_objek',
            layer: searchLayer,
            zoom: 20,
        });
        map.addControl(controlSearch);

        LayerKita.addTo(map);
        L.control.layers(baseMaps, overlayMaps, {
            position: 'topright',
            collapsed: true,
        }).addTo(map);


        L.control.scale({
            metric: true,
            imperial: true,
            maxWidth: 100,
            position: 'bottomleft'
        }).addTo(map);

        var fullscreenControl = L.control.fullscreen({
            position: 'topright', // Atur posisi di sudut kanan atas
            title: 'Fullscreen',
            forceSeparateButton: true, // Menampilkan tombol fullscreen terpisah
            titleCancel: 'Keluar dari Fullscreen',
            titleEnter: 'Masuk ke Fullscreen'
        });

        map.addControl(fullscreenControl);
    </script>


    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


    <!-- Vendor JS Files -->
    <script src="<?= base_url(); ?>/front/assets/vendd/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>/front/assets/vendd/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url(); ?>/front/assets/vendd/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url(); ?>/front/assets/vendd/swiper/swiper-bundle.min.js"></script>
    <script src="<?= base_url(); ?>/front/assets/vendd/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url(); ?>/front/assets/js/main.js"></script>

</body>

</html>