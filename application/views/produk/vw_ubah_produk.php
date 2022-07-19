<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Update Data Produk
                </div>

                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $produk['id']; ?>">
                        <div class="form-group">
                            <label for="nama">Nama Produk</label>
                            <input type="text" name="nama" value="<?= $produk['nama']; ?>" class="form-control" id="nama" placeholder="Nama Produk">
                            <?= form_error('nama', '<small class="text-danger p1-3">','</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="nama">Kategori Barang</label>
                            <select name="kategori" value="<?= $produk['kategori']; ?>" id="kategori" class="form-control" placeholder="Kategori Produk">
                                    <option value="<?= $produk['kategori']; ?>"><?= $produk['kategori']; ?></option>
                                    <option value="">Pilih Kategori Produk</option>
                                    <option value="Mouse">Mouse Gaming</option>
                                    <option value="Headset">Headset Gaming</option>
                                    <option value="Keyboard">Keyboard Gaming</option>
                                    <option value="Laptop">Laptop</option>
                                    <option value="PC">PC</option>
                                    <option value="Aksesoris">Aksesoris</option>
                            </select>
                            <?= form_error('kategori', '<small class="text-danger p1-3">','</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="brand">Brand Produk</label>
                            <select name="brand" value="<?= $produk['brand']; ?>" id="brand" class="form-control" placeholder="Brand Produk">
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
                            <?= form_error('brand', '<small class="text-danger p1-3">','</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="nim">Stok</label>
                            <input type="text" name="stok" value="<?= $produk['stok']; ?>" class="form-control" id="nim" placeholder="Ruangan">
                            <?= form_error('stok', '<small class="text-danger p1-3">','</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="nim">Harga</label>
                            <input type="text" name="harga" value="<?= $produk['harga']; ?>" class="form-control" id="harga" placeholder="Jurusan">
                            <?= form_error('harga', '<small class="text-danger p1-3">','</small>'); ?>
                        </div>
                        
                        <div class="form-group">
                            <img src="<?= base_url('assets/images/produk/'). $produk['gambar'];?>" style="width : 100px;" class="img-thumbnail">    
                            <label for="gambar">Gambar</label>
                            <div class="custom-file">
                                <input type="file" name="gambar" class="custom-file-input" id="gambar" >
                            <label for="gambar" class="custom-file-label">Choose File</label>
                            <?= form_error('gambar','<small class="text-danger pl-3">','</small>'); ?>    
                            </div>
                        </div>

                        <a href="<?= base_url('Produk') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Update

                            Produk</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>