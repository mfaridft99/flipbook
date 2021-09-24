<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Arsip Dokumen Universitas Pertamina</title>
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
    <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->
    <style type="text/css">
		.pagination li{
			float: left;
			list-style-type: none;
			margin:0px;
		}
	</style>
    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- /End Preloader -->

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
                                        <a class=" active dd-menu collapsed" href="/" aria-label="Toggle navigation">Daftar Dokumen</a>
                                    </li>
                            </div> <!-- navbar collapse -->
                            <div class="login-button">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)"><i class="lni lni-enter"></i> Login</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><i class="lni lni-user"></i> Register</a>
                                    </li>
                                </ul>
                            </div>
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

    <!-- Start Hero Area -->
    <section class="hero-area overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-12 col-12">
                    <div class="hero-text text-center">
                        <!-- Start Hero Text -->
                        <div class="section-heading">
                            <h2 class="wow fadeInUp" data-wow-delay=".3s">Selamat Datang di Arsip Dokumen Universitas Pertamina</h2>
                        </div>
                        <!-- End Search Form -->
                        <!-- Start Search Form -->
                        <!-- <form action="/search" method="GET" role="search">
                            <div class="search-form wow fadeInUp" data-wow-delay=".7s">
                                <div class="row">
                                    <div class="col-lg-8 col-md-4 col-12 p-0">
                                        <div class="search-input">
                                            <label for="search"><i class="lni lni-search-alt theme-color"></i></label>
                                            <input type="text" name="search" value="{{request()->query('search')}}" placeholder="Cari dokumen">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-2 col-12 p-0">
                                        <div class="search-btn button" type="submit">
                                            <button class="btn"><i class="lni lni-search-alt"></i> Cari</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form> -->
                        <!-- End Search Form -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Area -->

    <!-- Start Categories Area -->
    <section class="categories">
        <div class="container">
            <div class="cat-inner">
                <div class="text-center">
                    <h3 class="wow fadeInUp" data-wow-delay=".7s">Pencarian Dokumen</h2>
                </div>
                <div class="row">
                    <!-- Start Search Form -->
                    <form action="/search" method="GET" role="search">
                        <div class="search-form wow fadeInUp" data-wow-delay=".7s">
                            <div class="row">
                                <div class="col-lg-8 col-md-4 col-12 p-0">
                                    <div class="search-input">
                                        <label for="search"><i class="lni lni-search-alt theme-color"></i></label>
                                        <input type="text" name="search" value="{{request()->query('search')}}" placeholder="Cari dokumen">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-2 col-12 p-0">
                                    <div class="search-btn button" type="submit">
                                        <button class="btn"><i class="lni lni-search-alt"></i> Cari</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- End Search Form -->
                </div>
            </div>
        </div>
    </section>
    <!-- /End Categories Area -->

    <!-- Start Items Grid Area -->
    <section class="items-grid section custom-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Daftar Dokumen</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">Kumpulan arsip dokumen Universitas Pertamina</p>
                    </div>
                </div>
            </div>
            <br/>
            @forelse($daftarbuku as $df)
                @empty
                <br/>
                <br/>
                <div class="mt-8 text-2xl">
                    <h2 class="text-center">
                        Hasil pencaharian untuk kata <strong>'{{request()->query('search')}}'</strong> tidak tersedia
                    </h2>
                </div>
                <div class="mt-6 text-gray-500">
                    <h5 class="text-center">Silahkan menggunakan kata kunci lain untuk mencari dokumen.</h5>
                </div>
            @endforelse
            <div class="single-head">
                <div class="row">
                    @foreach($daftarbuku as $df)
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- Start Single Grid -->
                        <div class="single-grid wow fadeInUp" data-wow-delay=".2s">
                            <div class="image">
                                <a href="/flipbook/{{ $df->id }}" class="thumbnail"><img src="{{url ('Storage/image/'.$df->gambar)}}" alt="#"></a>
                                <!-- <div class="author">
                                    <div class="author-image">
                                        <a href="javascript:void(0)"><img src="assets/images/items-grid/author-1.jpg" alt="#">
                                            <span>Smith jeko</span></a>
                                    </div>
                                    <p class="sale">For Sale</p>
                                </div> -->
                            </div>
                            <div class="content">
                                <div class="top-content">
                                    <h3 class="title">
                                        <a href="/flipbook/{{ $df->id }}">{{$df->judul}}</a>
                                    </h3>
                                    <!-- <p class="update-time">Last Updated: 1 hours ago</p> -->
                                    <p class="update-time">{{$df->keterangan}}</p>
                                    <ul class="info-list">
                                        <!-- <li><a href="javascript:void(0)"><i class="lni lni-timer"></i> Feb 18, 2023</a></li> -->
                                    </ul>
                                </div>
                                <div class="bottom-content">
                                <a href="/edit/{{ $df->id }}" class="btn btn-primary btn-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                    </svg>
                                </a>
                                <a href="/hapus/{{ $df->id }}" class="btn btn-danger btn-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                    </svg>
                                </a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Grid -->
                    </div>
                    @endforeach
                </div>
            </div>
            <br/>
                {{ $daftarbuku->links() }}
        </div>
    </section>
    <!-- /End Items Grid Area -->

    <!-- Start Footer Area -->
    <footer class="footer">
        <!-- Start Footer Top -->
        
        <!-- Start Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="inner">
                    <div class="row">
                        <div class="col-12">
                            <div class="content">
                                <ul class="footer-bottom-links">
                                    <li><a href="javascript:void(0)">Terms of use</a></li>
                                    <li><a href="javascript:void(0)"> Privacy Policy</a></li>
                                    <li><a href="javascript:void(0)">Advanced Search</a></li>
                                    <li><a href="javascript:void(0)">Site Map</a></li>
                                    <li><a href="javascript:void(0)">Information</a></li>
                                </ul>
                                <p class="copyright-text">2021 - <a href="javascript:void(0)"
                                        rel="nofollow" target="_blank">Universitas Pertamina</a>
                                </p>
                                <ul class="footer-social">
                                    <li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-youtube"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Middle -->
    </footer>
    <!--/ End Footer Area -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->

    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top btn-hover">
        <i class="lni lni-chevron-up"></i>
    </a>

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
    <script src="js/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                window.setTimeout(function() {
                    $(".alert").fadeTo(500, 0).slideUp(500, function(){
                        $(this).remove();
                    });
                }, 1000);
            });    
    </script>
    @include('sweetalert::alert')
</body>

</html>