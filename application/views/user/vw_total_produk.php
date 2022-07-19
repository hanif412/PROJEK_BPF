
 <!-- ***** Main Banner Area End ***** -->

 <!-- ***** Men Area Starts ***** -->
 <section class="section" id="men">
     <div class="container">
         <div class="row">
             <div class="col-lg-6">
                 <div class="section-heading">
                     <h2>Gaming Gear Available</h2>
                     <span>Details to details is what makes Hexashop different from the other themes.</span>
                 </div>
             </div>
         </div>
     </div>
    
     <div class="container">

         <div class="row">

             <div class="col-lg-12">

                 <div class="men-item-carousel">
                     <?= $this->session->flashdata('message');
                        ?>
                     <div class="owl-men-item owl-carousel">
                         <?php $i = 1; ?>
                         <?php foreach ($produk as $us) : ?>
                             <div class="item">
                                 <div class="thumb">
                                     <div class="hover-content">
                                         <ul>
                                    
                                             <li><a href="<?= base_url('Profil/keranjang/') . $us['id']; ?>"><i class="fa fa-shopping-cart"></i></a></li>
                                         </ul>
                                     </div>

                                     <img src="<?= base_url('assets/images/produk/') . $us['gambar']; ?>" style="border: 0.5px solid black; border-radius: 15px;">
                                 </div>
                                 <div class="down-content" >
                                     <h4><?= $us['nama']; ?></h4>
                                     <div><?= $us['brand']; ?></div>
                                     <h6><?= $us['kategori']; ?></h6>
                                     <div>Stocks <a class="badge badge-primary"><?= $us['stok'] ?></a></div>

                                 </div>
                                 
                                 <div class="total" >
                                     <h4>$<?= $us['harga']; ?>.00</h4>
                                     <div class="main-border-button"><a href="<?= base_url('Profil/keranjang/') . $us['id']; ?>">Add To Cart</a></div>
                                 </div>
                             </div>
                             <?php $i++; ?>
                         <?php endforeach; ?>
                     </div>
                 </div>

             </div>

         </div>

     </div>

 </section>
 <!-- ***** Men Area Ends ***** -->

 <!-- ***** Women Area Starts ***** -->

 <!-- ***** Women Area Ends ***** -->



 <!-- ***** Explore Area Starts ***** -->
 <section class="section" id="explore">
     <div class="container">
         <div class="row">
             <div class="col-lg-6">
                 <div class="left-content">
                     <h2>Explore Our Products</h2>
                     <span>
                     Using high-end gaming gear will only enhance your gaming experience.
                     </span>
                     <span> 
                     In addition to a keyboard, a good mouse and a good headset are essential to give you the feeling of being actually present in the game.
                     </span>
                     <span> 
                     In a gaming mouse, the focus is on the DPI. Are you an FPS gamer? You will then want set the DPI a little higher so that you can rapidly move your cursor from one side to the other side of the screen. Or do your prefer simulator games? Then you set the DPI a little lower so that you can move with greater precision.
                     </span>
                     <div class="quote">
                         <i class="fa fa-quote-left"></i>
                         <p>You don't regret shopping here</p>
                     </div>
                     <p>Another piece of gaming gear that you need is a headset.
                        Ask yourself the following questions: Do I want a surround headset where I can hear my opponents sneak up behind me? Should the headset fit tightly on my head? Do I still want to hear ambient noise? Only when you have answered those questions can you decide which headset is suitable for top-quality gaming experience..</p>
                     
                     <div class="main-border-button">
                         <a href="<?= base_url('Profil/produk') ?>">Discover More</a>
                     </div>
                 </div>
             </div>
             <div class="col-lg-6">
                 <div class="right-content">
                     <div class="row">
                         <div class="col-lg-6">
                         <div class="first-image">
                                 <img src="<?= base_url('assets/') ?>images/produk/APEX_PRO.png" alt="">
                             </div>
                         </div>
                         <div class="col-lg-6">
                             <div class="first-image">
                                 <img src="<?= base_url('assets/') ?>images/produk/AEROX_3.png" alt="">
                             </div>
                         </div>
                         <div class="col-lg-6">
                             <div class="second-image">
                                 <img src="<?= base_url('assets/') ?>images/produk/RAZER_BLACKSHARK.png" alt="">
                             </div>
                         </div>
                         <div class="col-lg-6">
                         <div class="second-image">
                                 <img src="<?= base_url('assets/') ?>images/produk/RAZER_CHART.png" alt="">
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- ***** Explore Area Ends ***** -->

 <!-- ***** Social Area Starts ***** -->
 <section class="section" id="social">
     <div class="container">
         <div class="row">
             <div class="col-lg-12">
                 <div class="section-heading">
                     <h2>Our Brand Products</h2>
                     <span>Details to details is what makes Hexashop different from the other themes.</span>
                 </div>
             </div>
         </div>
     </div>
     <div class="container">
         <div class="row images">
             <div class="col-2">
                 <div class="thumb">
                     <div class="icon">
                         <a href="https://www.razer.com/">
                             <h6>Razer</h6>
                             <i class="fa fa-instagram"></i>
                         </a>
                     </div>
                     <img src="<?= base_url('assets/') ?>images/data/LOGO_RAZER.png" alt="">
                 </div>
             </div>
             <div class="col-2">
                 <div class="thumb">
                     <div class="icon">
                         <a href="http://instagram.com">
                             <h6>Steelseries</h6>
                             <i class="fa fa-instagram"></i>
                         </a>
                     </div>
                     <img src="<?= base_url('assets/') ?>images/data/STEELSERIES_LOGO.png" width="30px">
                 </div>
             </div>
             <div class="col-2">
                 <div class="thumb">
                     <div class="icon">
                         <a href="http://instagram.com">
                             <h6>Logitech</h6>
                             <i class="fa fa-instagram"></i>
                         </a>
                     </div>
                     <img src="<?= base_url('assets/') ?>images/data/logitech.png" alt="">
                 </div>
             </div>
             <div class="col-2">
                 <div class="thumb">
                     <div class="icon">
                         <a href="http://instagram.com">
                             <h6>Rexus</h6>
                             <i class="fa fa-instagram"></i>
                         </a>
                     </div>
                     <img src="<?= base_url('assets/') ?>images/data/rexus.png" alt="">
                 </div>
             </div>
             <div class="col-2">
                 <div class="thumb">
                     <div class="icon">
                         <a href="http://instagram.com">
                             <h6>Fantech</h6>
                             <i class="fa fa-instagram"></i>
                         </a>
                     </div>
                     <img src="<?= base_url('assets/') ?>images/data/fantech.png" alt="">
                 </div>
             </div>
             <div class="col-2">
                 <div class="thumb">
                     <div class="icon">
                         <a href="http://instagram.com">
                             <h6>Republic of Gamers</h6>
                             <i class="fa fa-instagram"></i>
                         </a>
                     </div>
                     <img src="<?= base_url('assets/') ?>images/data/ROG.png" alt="">
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- ***** Social Area Ends ***** -->

 <!-- ***** Subscribe Area Starts ***** -->
 <div class="subscribe">
     <div class="container">
         <div class="row">
             <div class="col-lg-8">
                 <div class="section-heading">
                     
                     <h2>Good Gaming Shop is The Best Gaming Shop in The Universe</h2>
                     <span>Details to details is what makes Good Gaming Shop different from the other Stores.</span>
                 </div>
                 
             </div>
             <div class="col-lg-4">
                 <div class="row">
                     <div class="col-6">
                         <ul>
                             <li>Store Location:<br><span>Good Gaming Shop, 46546, Indonesia</span></li>
                             <li>Phone:<br><span>0853-8282-2954</span></li>
                             <li>Office Location:<br><span>Rumbai</span></li>
                         </ul>
                     </div>
                     <div class="col-6">
                         <ul>
                             <li>Work Hours:<br><span>07:30 AM - 9:30 PM Daily</span></li>
                             <li>Email:<br><span>goodgamingshop@company.com</span></li>
                             <li>Social Media:<br><span><a href="#">Facebook</a>, <a href="#">Instagram</a>, <a href="#">Behance</a>, <a href="#">Linkedin</a></span></li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- ***** Subscribe Area Ends ***** -->