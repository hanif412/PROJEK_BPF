<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $judul; ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?= base_url('assets/') ?>form/images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>form/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>form/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>form/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>form/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>form/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>form/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>form/css/main.css">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">

        <div class="container" style="box-shadow: 0px 0px 5px rgba(0,0,0,1); border-radius: 32px;">

            <div class="wrap-login100">

                <div class="login100-pic js-tilt" data-tilt>
                    <a href="<?= base_url('Produk') ?>"  style="border: 1px solid black; border-radius: 16px;" class="btn btn-danger">Tutup</a>
                    <img src="<?= base_url('assets/images/produk/') . $produk['gambar']; ?>" style="border: 1px solid black; border-radius: 15px;" alt="IMG">

                </div>
                <form action="" method="POST" class="login100-form validate-form" enctype="multipart/form-data">
                    <span class="login100-form-title">
                        <?php echo $judul; ?>
                    </span>
                    <input type="hidden" name="id" value="<?= $produk['id']; ?>">

                    <div class="wrap-input100 validate-input">
                        <label for="nama">Name</label>
                        <input name="nama" value="<?= $produk['nama']; ?>" class="input100" id="nama">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input">
                        <label for="nama">Category</label>

                        <select name="kategori" value="<?= $produk['kategori']; ?>" id="kategori" class="input100" placeholder="Kategori Produk">
                            <option value="<?= $produk['kategori']; ?>"><?= $produk['kategori']; ?></option>
                            <option value="">Pilih Kategori Produk</option>
                            <option value="Mouse">Mouse Gaming</option>
                            <option value="Headset">Headset Gaming</option>
                            <option value="Keyboard">Keyboard Gaming</option>
                            <option value="Laptop">Laptop</option>
                            <option value="PC">PC</option>
                            <option value="Aksesoris">Aksesoris</option>
                        </select>
                        <?= form_error('kategori', '<small class="text-danger p1-3">', '</small>'); ?>
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input">
                        <label for="nama">Brand</label>

                        <select name="brand" value="<?= $produk['brand']; ?>" id="brand" class="input100" placeholder="Brand Produk">
                            <option value="<?= $produk['brand']; ?>"><?= $produk['brand']; ?></option>
                            <option value="">Pilih Brand Produk</option>
                            <option value="Razer">Razer</option>
                            <option value="Steelseries">Steelseries</option>
                            <option value="HyperX">HyperX</option>
                            <option value="Logitech">Logitech</option>
                            <option value="Fantech">Fantech</option>
                            <option value="Rexus">Rexus</option>
                            <option value="ROG">ROG</option>
                            <option value="Gigabyte">HyperX</option>
                        </select>
                        <?= form_error('brand', '<small class="text-danger p1-3">', '</small>'); ?>
                    </div>
                    <span class="focus-input100"></span>


                    <div class="wrap-input100 validate-input">
                        <label for="nim">Stocks</label>
                        <input type="number" name="stok" value="<?= $produk['stok']; ?>" class="input100" id="stok" placeholder="Stok">
                        <?= form_error('stok', '<small class="text-danger p1-3">', '</small>'); ?>
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input">
                        <label for="nim">Price ($)</label>
                        <input type="number" name="harga" value="<?= $produk['harga']; ?>" class="input100" id="harga" placeholder="Harga">
                        <?= form_error('harga', '<small class="text-danger p1-3">', '</small>'); ?>
                    </div>

                    <div class="wrap-input100 validate-input">
                        <img src="<?= base_url('assets/images/produk/') . $produk['gambar']; ?>" style="width : 100px;" class="img-thumbnail">
                        <label for="gambar">Gambar</label>
                        <div class="custom-file">
                            <input type="file" name="gambar" class="custom-file-input" id="gambar">
                            <label for="gambar" class="custom-file-label">Choose File</label>
                            <?= form_error('gambar', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>


                    <div class="wrap-input100 validate-input">

                        <button type="submit" id="tambah" name="tambah" class="login100-form-btn">
                            Edit Product
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>




    <!--===============================================================================================-->
    <script src="<?= base_url('assets/') ?>form/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('assets/') ?>form/vendor/bootstrap/js/popper.js"></script>
    <script src="<?= base_url('assets/') ?>form/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('assets/') ?>form/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('assets/') ?>form/vendor/tilt/tilt.jquery.min.js"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <!--===============================================================================================-->
    <script src="<?= base_url('assets/') ?>form/js/main.js"></script>

</body>

</html>