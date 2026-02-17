<!DOCTYPE html>

<html
    lang="en"
    class="light-style layout-navbar-fixed layout-menu-fixed layout-compact"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="<?= base_url(); ?>/assets/"
    data-template="vertical-menu-template-no-customizer">

<head>
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Kota Tua Majene</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?= base_url(); ?>/img/logo.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendor/css/rtl/core.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendor/css/rtl/theme-default.css" />
    <!-- <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/demo.css" /> -->

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendor/libs/apex-charts/apex-charts.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendor/libs/sweetalert2/sweetalert2.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendor/libs/select2/select2.css" />

    <!-- LINK LEAFLET -->

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/assets/leaflet/Leaflet.markercluster-1.4.1/dist/MarkerCluster.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/leaflet/Leaflet.markercluster-1.4.1/dist\MarkerCluster.Default.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/leaflet/leaflet-search-master/dist/leaflet-search.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/assets/leaflet/leaflet.fullscreen-master/Control.FullScreen.css" />


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
    <script src="<?= base_url() ?>/assets/leaflet/leaflet-search-master/dist/leaflet-search.src.js"></script>
    <script src="<?= base_url() ?>/assets/leaflet/Leaflet.markercluster-1.4.1/dist/leaflet.markercluster-src.js"></script>
    <script src="<?= base_url() ?>/assets/leaflet/Leaflet.markercluster-1.4.1/src/MarkerCluster.js"></script>
    <script src="<?= base_url() ?>/assets/leaflet/leaflet-easyPrint/dist/bundle.js"></script>
    <script src="<?= base_url() ?>/assets/leaflet/leaflet.fullscreen-master/Control.FullScreen.js"></script>

    <!-- END OF LINK LEAFLET -->

    <script src="https://code.highcharts.com//highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>

    <!-- Row Group CSS --><!-- DATATABLES -->
    <!-- <link href="<?= base_url() ?>/assets/datatables/datatables.min.css" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendor/libs/datatables-rowgroup-bs5/rowgroup.bootstrap5.css" /> -->
    <!-- END OF DATATABLES -->

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.bootstrap5.min.css">


    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendor/css/pages/page-profile.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/add.css" />

    <!-- Helpers -->
    <script src="<?= base_url(); ?>/assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="<?= base_url(); ?>/assets/js/config.js"></script>


</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">
        <div class="layout-container">
            <!-- Navbar -->

            <nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">
                <div class="container-xxl">
                    <div class="navbar-brand app-brand demo d-none d-xl-flex py-0 me-4">
                        <a href="index.html" class="app-brand-link gap-2">
                            <img src="<?= base_url(); ?>/img/logo.png" width="15%" alt="">
                        </a>

                        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-xl-none">
                            <i class="bx bx-x bx-sm align-middle"></i>
                        </a>
                    </div>

                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <ul class="navbar-nav flex-row align-items-center ms-auto">


                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a href="<?= base_url('auth'); ?>">
                                    <button type="button" class="btn btn-primary">
                                        <span class="tf-icons fas fa-right-to-bracket me-1"></span>Login
                                    </button>
                                </a>
                            </li>
                            <!--/ User -->
                        </ul>
                    </div>

                    <!-- Search Small Screens -->
                    <!-- <div class="navbar-search-wrapper search-input-wrapper container-xxl d-none">
                        <input
                            type="text"
                            class="form-control search-input border-0"
                            placeholder="Search..."
                            aria-label="Search..." />
                        <i class="bx bx-x bx-sm search-toggler cursor-pointer"></i>
                    </div> -->
                </div>
            </nav>

            <!-- / Navbar -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Content wrapper -->
                <div class="content-wrapper" style="background-color:#000000;">

                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">
                        <!-- <h4 class="py-3 breadcrumb-wrapper mb-4">
                            <span class="text-muted fw-light">User Profile /</span> Profile
                        </h4> -->


                        <div class="row">
                            <div class="accordion mt-1 mb-4" id="accordionExample">
                                <div class="card accordion-item" style="background-color: #222222;">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button
                                            type="button"
                                            class="accordion-button collapsed"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#accordionThree"
                                            aria-expanded="false"
                                            aria-controls="accordionThree" id="filter">
                                            Filter
                                        </button>
                                    </h2>
                                    <div
                                        id="accordionThree"
                                        class="accordion-collapse collapse"
                                        aria-labelledby="headingThree"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="row">
                                                <!-- Basic -->
                                                <div class="col-md-3 mb-4">
                                                    <label for="select2Basic" class="form-label">Provinsi</label>
                                                    <select id="provSelect" class="select2 form-select form-select-sm" data-allow-clear="true">
                                                        <option hidden="True" value="">-- Pilih Provinsi --</option>
                                                        <option value="SEMUA">Semua</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-3 mb-4">
                                                    <label for="select2Basic" class="form-label">Kabupaten/Kota</label>
                                                    <select id="kabSelect" class="select2 form-select form-select-sm" data-allow-clear="true">
                                                        <option hidden="True" value="">-- Pilih Kabupaten/Kota --</option>
                                                        <option value="SEMUA">Semua</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-3 mb-4">
                                                    <label for="select2Basic" class="form-label">Kecamatan</label>
                                                    <select id="kecSelect" class="select2 form-select form-select-sm" data-allow-clear="true">
                                                        <option hidden="True" value="">-- Pilih Kecamatan --</option>
                                                        <option value="SEMUA">Semua</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-3 mb-4">
                                                    <label for="select2Basic" class="form-label">Kelurahan/Desa</label>
                                                    <select id="kelSelect" class="select2 form-select form-select-sm" data-allow-clear="true">
                                                        <option hidden="True" value="">-- Pilih Kelurahan/Desa --</option>
                                                        <option value="SEMUA">Semua</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <!-- Basic -->
                                                <div class="col-md-3 mb-4">
                                                    <label for="select2Basic" class="form-label">Kategori</label>
                                                    <select id="katSelect" class="select2 form-select form-select-sm" data-allow-clear="true">
                                                        <option hidden="True" value="">-- Pilih Kategori Temuan --</option>
                                                        <option value="SEMUA">Semua</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-3 mb-4">
                                                    <label for="select2Basic" class="form-label">Situs</label>
                                                    <select id="situsSelect" class="select2 form-select form-select-sm" data-allow-clear="true">
                                                        <option hidden="True" value="">-- Pilih Situs --</option>
                                                        <option value="SEMUA">Semua</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- User Profile Content -->
                        <div class="row">
                            
                            <div class="col-xl-12 col-lg-12 col-md-12 mb-4">
                                <!-- Activity Timeline -->
                                <!-- <div class="card card-action mb-4" style="background-color: #222222;"> -->
                                <!-- <div class="card-body"> -->
                                <div id="map">
                                    <!-- </div> -->
                                    <!-- </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="table-responsive">
                                <table class="table table-striped" id="datatabel" style="font-size: small; color: #ffffffff;">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>No. Inventaris</th>
                                            <th>Situs</th>
                                            <th>Nama Objek</th>
                                            <th>Kategori</th>
                                            <th>Nama Temuan</th>
                                            <th>Jenis Temuan</th>
                                            <th>Prov</th>
                                            <th>Kab</th>
                                            <th>Longitude</th>
                                            <th>Latitude</th>
                                            <th>Elevasi</th>
                                            <th>Status CB/ODCB</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tableDesa">

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- <div class="row">
                            <div class="col-xl-4 col-lg-5 col-md-5">
                            </div>
                            <div class="col-xl-8 col-lg-7 col-md-7">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                        <div class="card mb-4 shadow-sm border-0">
                                            <div class="card-body" style="text-align: center; background-color: #222222;height: 60px;">
                                                <h6 class="text-uppercase text-white">Sebaran Cagar Budaya (CB/ODCB) Kabupaten/Kota</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="card mb-4 shadow-sm border-0">
                                            <div class="card-body" style="text-align: center; background-color: #222222;">
                                                <div id="chart-sulteng" style="height: 250px; min-width: 100%; background-color: #222222;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6"> 
                                        <div class="card mb-4 shadow-sm border-0">
                                            <div class="card-body" style="text-align: center; background-color: #222222;">
                                                <div id="chart-sulbar" style="height: 250px; min-width: 100%; background-color: #222222;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!--/ User Profile Content -->
                    </div>
                    <!--/ Content -->

                    <!-- Footer -->
                    <footer class="content-footer footer bg-footer-theme">
                        <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                            <div class="mb-2 mb-md-0">
                                Copyright ©
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>
                                Kota Tua Majene
                            </div>
                        </div>
                    </footer>
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!--/ Content wrapper -->
            </div>

            <!--/ Layout container -->
        </div>
    </div>

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


    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>

    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>

    <!--/ Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="<?= base_url(); ?>/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="<?= base_url(); ?>/assets/vendor/libs/popper/popper.js"></script>
    <script src="<?= base_url(); ?>/assets/vendor/js/bootstrap.js"></script>
    <script src="<?= base_url(); ?>/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?= base_url(); ?>/assets/vendor/libs/hammer/hammer.js"></script>
    <script src="<?= base_url(); ?>/assets/vendor/libs/i18n/i18n.js"></script>
    <script src="<?= base_url(); ?>/assets/vendor/libs/typeahead-js/typeahead.js"></script>
    <script src="<?= base_url(); ?>/assets/vendor/libs/sweetalert2/sweetalert2.js"></script>
    <script src="<?= base_url(); ?>/assets/vendor/js/menu.js"></script>
    <script src="<?= base_url(); ?>/assets/vendor/libs/select2/select2.js"></script>


    <!-- endbuild -->
    <script src="<?= base_url(); ?>/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>

    <!-- Vendors JS -->
    <script src="<?= base_url(); ?>/assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="<?= base_url(); ?>/assets/js/main.js"></script>

    <!-- <script src="/assets/js/tables-datatables-basic.js"></script> -->
    <!-- <script src="/assets/js/tables-datatables-advanced.js"></script> -->
    <!-- DATATABLES -->
    <!-- <script src="<?= base_url() ?>/assets/datatables/datatables.min.js"></script> -->
    <!-- END OF DATATABLES -->

    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>


    <!-- Page JS -->
    <script src="<?= base_url(); ?>/assets/js/forms-selects.js"></script>
    <script src="<?= base_url(); ?>/assets/js/dashboards-analytics.js"></script>
</body>

</html>