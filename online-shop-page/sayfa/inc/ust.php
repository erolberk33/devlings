<html lang="tr" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
  data-assets-path="./lib/assets/" data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
  <title>Kitap Mağazası </title>
  <meta name="description" content="" />
  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="./lib/assets/img/favicon/favicon.ico" />
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet" />
  <!-- Icons. Uncomment required icon fonts -->
  <link rel="stylesheet" href="./lib/assets/vendor/fonts/boxicons.css" />
  <!-- Core CSS -->
  <link rel="stylesheet" href="./lib/assets/vendor/css/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="./lib/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="./lib/assets/css/demo.css" />
  <!-- Vendors CSS -->
  <link rel="stylesheet" href="./lib/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
  <link rel="stylesheet" href="./lib/assets/vendor/libs/apex-charts/apex-charts.css" />

  <!-- Font Awesome -->
  <link rel="stylesheet" href="lib/plugins/fontawesome-free/css/all.min.css">
  <!-- Page CSS -->
  <!-- Helpers -->
  <script src="./lib/assets/vendor/js/helpers.js"></script>
  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="./lib/assets/js/config.js"></script>


  <!--  Filtreleme Kütüphanesi  -->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

  <!-- openstreetmap kütüphanesi ve leaflet -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
    integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
    integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>





  <style>
    /* Genel stil ayarları */
    #tablo_filter {
      color: black;
      display: flex;
      /* Flexbox kullanarak içeriği ortalama */
      justify-content: center;
      /* Yatayda ortalamak için */
      align-items: center;
      /* Düşeyde ortalamak için (isteğe bağlı) */
      margin-top: 20px;
      /* Üstten biraz boşluk bırakmak için */
      flex-direction: column;
      /* İçeriği dikeyde düzenlemek için (başlık ve arama kutusu) */
    }

    /* Başlık için stil ayarları */
    #tablo_filter label {
      font-size: 18px;
      /* Yazı tipi boyutu */
      font-weight: bold;
      /* Kalın yazı tipi */
      margin-bottom: 10px;
      /* Arama kutusundan önce boşluk */
    }

    /* Arama kutusunu özelleştirmek için */
    #tablo_filter input {
      border: 2px solid #007bff;
      /* Mavi kenarlık */
      border-radius: 5px;
      /* Köşeleri yuvarlama */
      padding: 5px;
      /* İç boşluk */
      width: 800px;
      height: 40px;
      /* Genişlik */
    }
    
  </style>