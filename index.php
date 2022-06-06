<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Highland Roastery</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <header>
                                    
            <h1 class="site-heading text-center text-faded d-none d-lg-block">

                <img src="assets/img/logo-hr.png" alt="Logo Highland Roastery" width="150px">

                <span class="site-heading-upper text-primary mb-3">Highland Roastery</span>
                <span class="site-heading-lower">Good Farmer - Best Coffee - Better Quality</span>

            </h1>

        </header>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
            <div class="container">
                <a class="navbar-brand text-uppercase fw-bold d-lg-none" href="index.html">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="?p=beranda">Beranda</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="?p=produk">Produk</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="?p=tim">Tim</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="?p=artikel">Artikel</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="?p=blog">Blog</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="?p=kontak">Kontak</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- PAGE CONTENT -->
        <?php 

            if(isset($_GET['p']) && $_GET['p'] == 'beranda' ) {

                // HALAMAN BERANDA
                include('view/beranda.php');

            } 

            elseif (isset($_GET['p']) && $_GET['p'] == 'produk' ) {

                // HALAMAN PRODUK
                include('view/produk.php');

            }

            elseif (isset($_GET['p']) && $_GET['p'] == 'artikel' ) {

                // HALAMAN ARTIKEL
                include('view/artikel.php');

            }

            elseif (isset($_GET['p']) && $_GET['p'] == 'tim' ) {

                // HALAMAN TIM
                include('view/tim.php');

            }

            elseif (isset($_GET['p']) && $_GET['p'] == 'blog' ) {

                // HALAMAN BLOG
                include('view/blog.php');

            }

            elseif (isset($_GET['p']) && $_GET['p'] == 'kontak' ) {

                // HALAMAN KONTAK
                include('view/kontak.php');

            }
            
            else {

                // HALAMAN 404
                include('view/404.php');
                
            }

            

            // HALAMAN PRODUK

            // HALAMAN ARTIKEL

            // HALAMAN BLOG

            // HALAMAN KONTAK


        ?>
        <!-- END PAGE CONTENT -->

        

        <footer class="footer text-faded text-center py-5">
            <div class="container"><p class="m-0 small">Copyright &copy; Your Website 2022</p></div>
        </footer>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
