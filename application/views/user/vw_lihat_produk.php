<!-- ***** Main Banner Area Start ***** -->
<div class="page-heading" id="top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-content">
                    <h2>Single Product Page</h2>
                    <span>Awesome &amp; Creative HTML CSS layout by TemplateMo</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Main Banner Area End ***** -->


<!-- ***** Product Area Starts ***** -->

<section class="section" id="product">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="left-images">
                    <img src="<?= base_url('assets/images/produk/') . $produk['gambar']; ?>" alt="">

                </div>
            </div>
            <form action="" method="POST">
            <input type="hidden" name="id" value="<?= $produk['id']; ?>">
            <input type="hidden" name="tanggal" value="<?= date('d/m/Y') ?>">
            <input type="hidden" name="stok" value="<?= $produk['stok'] ?>">
            <input name="harga" value="<?= $produk['harga']; ?>" type="hidden" readonly class="form-control" id="harga">
            <div class="col-lg-4">
                <div class="right-content">
                    <h4><?= $produk['nama']; ?></h4>
                    <span class="price" id="harga"><b>$<?= $produk['harga']; ?></b></span>
                    
                    <span>Harga terjangkau kok</span>
                    <div class="quote">
                        <i class="fa fa-quote-left"></i>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiuski smod.</p>
                    </div>
                    <div class="form-group">
                        <label for="harga">Stok</label>
                        <input name="harga" value="<?= $produk['stok']; ?>" type="text" readonly class="form-control" id="stok">
                    </div>
                    <div class="form-group">
                        <label for="jumlah">Jumlah</label>
                        <input type="number" name="jumlah" id="jumlah" class="form-control" min='1'>
                        <?= form_error('jumlah', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    
                    <div class="total">
                    <label for="total">Total Harga</label>
                        <input type="text" name="total" id="total" readonly class="form-control">
                        <br/>
                        <button type="submit" id="tambah" name="tambah" class="btn btn-primary float-right">Tambah Ke Keranjang</button>
                        <!-- div class="main-border-button" type="submit" id="tambah" name="tambah"><a href="">Add To Cart</a></div> -->
                    </div>
                    
                </div>
            </div>
            </form>
        </div>
    </div>
</section>
<!-- ***** Product Area Ends ***** -->