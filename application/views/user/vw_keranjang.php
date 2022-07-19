<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row">
        <div class="col-xl-12 col-md-12 mb-6">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="left-images">
                                        <img src="<?= base_url('assets/images/produk/') . $produk['gambar']; ?>" alt="">
                                    </div>
                                </div>
                            </div>
                                <div class="col mr-2">
                                    <div class="card-body">
                                        <form action="" method="POST">
                                            <input type="hidden" name="id" value="<?= $produk['id']; ?>">
                                            <input type="hidden" name="tanggal" value="<?= date('d/m/Y') ?>">
                                            <input type="hidden" name="stok" value="<?= $produk['stok'] ?>">
                                            <div class="form-group">
                                                <label for="nama">Name</label>
                                                <input name="nama" type="text" value="<?= $produk['nama']; ?>" readonly class="form-control" id="nama">
                                            </div>
                                            <div class="form-group">
                                                <label for="nama">Category</label>
                                                <input name="kategori" type="text" value="<?= $produk['kategori']; ?>" readonly class="form-control" id="nama">
                                            </div>
                                            <div class="form-group">
                                                <label for="stok">Stock</label>
                                                <input name="stok" value="<?= $produk['stok']; ?>" type="text" readonly class="form-control" id="pengarang">
                                            </div>
                                            <div class="form-group">
                                                <label for="harga">Price</label>

                                                <input name="harga" value="<?= $produk['harga']; ?>" type="text" readonly class="form-control" id="harga">

                                            </div>

                                            <div class="form-group">
                                                <label for="jumlah">Amount</label>
                                                <input type="number" name="jumlah" id="jumlah" class="form-control" min='1'>
                                                <?= form_error('jumlah', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="total">Total Price</label>
                                                <input type="text" name="total" id="total" readonly class="form-control">
                                            </div>
                                            <button type="submit" id="tambah" name="tambah" class="btn btn-primary float-center">Add To Cart</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>