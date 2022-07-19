<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title><?php echo $judul; ?></title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>css/font-awesome.css">

    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/templatemo-hexashop.css">

    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/owl-carousel.css">

    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/lightbox.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>simple-datatables/style.css">
    
    <!--

TemplateMo 571 Hexashop

https://templatemo.com/tm-571-hexashop

-->
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="<?= base_url('assets/') ?>images/data/ggs.png" style="width : 250px;" alt="hexashop ecommerce templatemo">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->

                        <?php
                        if ($user['role'] == 'Admin') { ?>
                            <ul class="nav">
                                <li class="scroll-to-section"><a href="<?= site_url('Produk/') ?>" class="active">Home</a></li>
                                <li class="scroll-to-section"><a href="<?= site_url('Produk/') ?>">Products</a></li>

                                <li class="submenu">
                                    <a href="javascript:;">Sales</a>
                                    <ul>
                                        <li><a href="<?= site_url('Penjualan/') ?>"> <i class="fa fa-info" aria-hidden="true"></i> Sales Detail</a></li>
                                        <li><a href="<?= site_url('Dashboard/') ?>"> <i class="fa fa-line-chart" aria-hidden="true"></i> Sales Charts & Data</a>
                                    </li>
                                    </ul>
                                </li>

                                


                                <li class="scroll-to-section"><a href="#explore"><?= $user['nama']; ?></a></li>
                                <li class="scroll-to-section"><a href="<?= site_url('Auth/logout') ?>">Logout</a></li>
                            </ul>
                        <?php } else {
                        ?>
                            <ul class="nav">
                                <li class="scroll-to-section"><a href="<?= site_url('Profil/produk') ?>" class="active">Home</a></li>
                                <li class="scroll-to-section"><a href="<?= site_url('Profil/produk') ?>">Products</a></li>
                                <li class="nav-item dropdown no-arrow mx-1">
                                    <a href="<?= base_url('Profil/detail') ?>">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                        <span class="badge badge-danger badge-counter">
                                            <?= $jlh ?>
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item dropdown no-arrow mx-1">
                                    <a href="<?= base_url('Profil/pembelian') ?>">
                                        <!-- Counter - Alerts -->
                                        <i class="fa fa-history" aria-hidden="true"></i>
                                        <span class="badge badge-danger badge-counter">
                                            !
                                        </span>
                                    </a>
                                </li>
                                <!--li class="submenu">
                                    <a href="javascript:;">Category</a>
                                    <ul>
                                    <?= $this->session->flashdata('message'); ?>
                                        <?php $i = 1; ?>
                                        <?php foreach ($produk as $us) : ?>
                                            <li><a href="<?= base_url('Profil/kategori/') . $us['kategori']; ?>"><?= $us['kategori']; ?></a></li>
                                            <?php $i++; ?>
                                        <?php endforeach; ?>
                                    </ul>
                                </li -->
                                <li class="submenu">
                                    <a href="javascript:;"><?= $user['nama']; ?></a>
                                    <ul>
                                        <li><a href="<?= site_url('Profil') ?>">Profil</a></li>
                                        <li><a href="<?= site_url('Auth/logout') ?>">Logout</a></li>
                                    </ul>
                                </li>

                            </ul>
                        <?php
                        } ?>

                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>

                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <div class="main-banner" id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-content">
                        <div class="thumb">
                            <div class="inner-content">
                                <h4>Welcome to </h4>
                                <h4>Good Gaming Store</h4>
                                <span>The Best Gaming Store in The Town &amp; Gaming Pheriperals</span>
                                
                            </div>
                            <img src="<?= base_url('assets/') ?>images/data/Razer-PRO.png" style=" border-radius: 15px;" height="530px">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Headset</h4>
                                            <span>Your ear cup is here</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Headset</h4>
                                                <p>Best Headset For Your Gaming</p>
                                                
                                            </div>
                                        </div>
                                        <img src="<?= base_url('assets/') ?>images/data/razer_kraken.jpg" style=" border-radius: 15px;" width="250px" height="250px">

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Keyboards</h4>
                                            <span>Best Keyboards For Gaming</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Keyboards</h4>
                                                <p>Best Keyboars For Gaming</p>
                                                
                                            </div>
                                        </div>
                                        <img src="<?= base_url('assets/') ?>images/data/keyboar_razer.jpg" style=" border-radius: 15px;" width="250px" height="250px">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Mouse</h4>
                                            <span>Best Mouse For Gaming</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Mouse</h4>
                                                <p>Best Mouse for Gaming</p>

                                            </div>
                                        </div>
                                        <img src="<?= base_url('assets/') ?>images/data/mouse_razer.jpg" style=" border-radius: 15px;" width="250px" height="250px">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Accessories</h4>
                                            <span>Best Trend Accessories</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Accessories</h4>
                                                <p>Best Accessories for Gaming</p>
                                                
                                            </div>
                                        </div>
                                        <img src="<?= base_url('assets/') ?>images/data/aksesoris.jpg" style=" border-radius: 15px;" width="250px" height="250px">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Header Area End ***** -->