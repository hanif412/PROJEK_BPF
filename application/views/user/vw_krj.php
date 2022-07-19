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
                <a href="<?= base_url('Profil/produk') ?>"  style="border: 1px solid black; border-radius: 15px;" class="btn btn-danger">Tutup</a>
                    <img src="<?= base_url('assets/images/produk/') . $produk['gambar']; ?>" style="border: 1px solid black; border-radius: 15px;" alt="IMG">
                </div>
                
                <form action="" method="POST" class="login100-form validate-form" >
                    <span class="login100-form-title">
                        <?php echo $judul; ?>
                    </span>
                    <input type="hidden" name="id" value="<?= $produk['id']; ?>">
                    <input type="hidden" name="tanggal" value="<?= date('d/m/Y') ?>">
                    <input type="hidden" name="stok" value="<?= $produk['stok'] ?>">

                    <div class="wrap-input100 validate-input" >
                        <label for="nama">Name</label>
                        <input name="nama" type="text" value="<?= $produk['nama']; ?>" readonly class="input100" id="nama">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input">
                        <label for="nama">Brand</label>
                        <input name="brand" type="text" value="<?= $produk['brand']; ?>" readonly class="input100" id="nama">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input">
                        <label for="nama">Category</label>
                        <input name="kategori" type="text" value="<?= $produk['kategori']; ?>" readonly class="input100" id="nama">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input">
                        <label for="stok">Stock</label>
                        <input name="stok" value="<?= $produk['stok']; ?>" type="text" readonly class="input100" id="pengarang">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input">
                        <label for="harga">Price ($)</label>
                        <input name="harga" value="<?= $produk['harga']; ?>" type="text" readonly class="input100" id="harga">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input">
                        <label for="jumlah">Amount</label>
                        <input type="number" name="jumlah" id="jumlah" class="input100" min='1'>
                        <?= form_error('jumlah', '<small class="text-danger pl-3">', '</small>'); ?>
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input">
                        <label for="total">Total Price ($)</label>
                        <input type="text" name="total" id="total" readonly class="input100">
                        <span class="focus-input100"></span>
                    </div>
                    

                    <div class="container-login100-form-btn">
                        <button type="submit" id="tambah" name="tambah" class="login100-form-btn">
                            Add to Cart
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