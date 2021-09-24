<!doctype html>
<html class="no-js" lang="zxx">

  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Unggah Dokumen</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.svg" />
    <!-- Place favicon.ico in the root directory -->

    <!-- Web Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/LineIcons.2.0.css" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="assets/css/tiny-slider.css" />
    <link rel="stylesheet" href="assets/css/glightbox.min.css" />
    <link rel="stylesheet" href="assets/css/main.css" />

  </head>
  <body>
  
  <div class="preloader">
    <div class="preloader-inner">
      <div class="preloader-icon">
          <span></span>
          <span></span>
      </div>
    </div>
  </div>

<!-- Start Header Area -->
<header class="header navbar-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="nav-inner">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand">
                                <img src="{{asset('logo/UP logo.png')}}" alt="Logo" style="width:100px;height:75px">
                            </a>
                            <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ms-auto">
                                    <li class="nav-item">
                                        <a href="/" aria-label="Toggle navigation">Daftar Dokumen</a>
                                    </li>
                            </div> <!-- navbar collapse -->
                            <div class="button header-button">
                                <a href="/upload" class="btn">Unggah Dokumen</a>
                            </div>
                        </nav> <!-- navbar -->
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </header>
    <!-- End Header Area -->
<br/>
<br/>
<br/>
<br/>
<br/>

<div class="container">
  <div class="row">
    <div class="col-10">
      <h3 class="mt-3">Unggah Dokumen</h3>
      <br>
      <div class="col-lg-8">	
        
				@if(count($errors) > 0)
				<div class="alert alert-danger alert-dismissible">
          <strong>Maaf!</strong> Form yang anda kirim tidak sesuai atau tidak terisi.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
				@endif
 
				<form action="/upload/proses" method="post" enctype="multipart/form-data">
					{{ csrf_field() }}
					
          <div class="form-group">
						<b>Judul Dokumen</b>
            <b class="text-danger">*</b>
            <input type="text" class="form-control" name="judul">
					</div>

          <div class="form-group">
						<b>Keterangan</b>
            <b class="text-danger">*</b>
						<textarea class="form-control" name="keterangan"></textarea>
					</div>

          <div class="form-group">
						<b>Dokumen PDF</b>
            <b class="text-danger">*</b><br/>
						<input type="file" name="file">
            <br/>
            <br/>
            <b>Gambar Sampul (PNG, JPG, atau JPEG)</b>
            <b class="text-danger">*</b><br/>
						<input type="file" name="gambar">
          </div>
          <br/>
					<input type="submit" value="Unggah" class="btn btn-primary">
				</form>
      </div>
    </div>
  </div>
</div>

    <!-- ========================= JS here ========================= -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/tiny-slider.js"></script>
    <script src="assets/js/glightbox.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script type="text/javascript">
        //========= Category Slider 
        tns({
            container: '.category-slider',
            items: 3,
            slideBy: 'page',
            autoplay: false,
            mouseDrag: true,
            gutter: 0,
            nav: false,
            controls: true,
            controlsText: ['<i class="lni lni-chevron-left"></i>', '<i class="lni lni-chevron-right"></i>'],
            responsive: {
                0: {
                    items: 1,
                },
                540: {
                    items: 2,
                },
                768: {
                    items: 4,
                },
                992: {
                    items: 5,
                },
                1170: {
                    items: 6,
                }
            }
        });
    </script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
    @include('sweetalert::alert')
  </body>
</html>