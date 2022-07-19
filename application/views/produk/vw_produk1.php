<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row">
        <div class="col-md-3">
            <form action="<?= base_url('Produk/filter') ?>" method="POST">
                <select name="kategori" value="<?= set_value('kategori') ?>" class="form-control">
                    <option value="">Pilih Kategori Produk</option>
                    <option value="Mouse">Mouse Gaming</option>
                    <option value="Headset">Headset Gaming</option>
                    <option value="Keyboard">Keyboard Gaming</option>
                    <option value="Laptop">Laptop</option>
                    <option value="PC">PC</option>
                    <option value="Aksesoris">Aksesoris</option>
                </select>
                <br>
                <button type="submit" name="filter" class="btn btn-primary">Show Data</button>
            </form>
        </div>

        <div class="col-md-12">
            <div class="col-md-6"><a href="<?= base_url() ?>Produk/tambah" class="btn btn-info mb-2">Tambah
                    Produk</a></div>
            <?= $this->session->flashdata('message'); ?>
            <table class="table">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Gambar</td>
                        <td>Nama Produk</td>
                        <td>Kategori</td>
                        <td>Brand</td>
                        <td>Stok</td>
                        <td>Harga</td>
                        <td>Aksi</td>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($produk as $us) : ?>
                        <tr>
                            
                            <td><?= $i; ?>.</td>
                            <td><img src="<?= base_url('assets/img/produk/') . $us['gambar']; ?>" style="width : 100px;" class="img-thumbnail"></td>
                            <td><?= $us['nama']; ?></td>
                            <td><?= $us['kategori']; ?></td>
                            <td><?= $us['brand']; ?></td>
                            <td><?= $us['stok']; ?></td>
                            <td><?= $us['harga']; ?></td>
                            <td>
                                <a href="<?= base_url('Produk/hapus/') . $us['id']; ?>" class="badge badge-danger">Hapus</a>
                                <a href="<?= base_url('Produk/edit/') . $us['id']; ?>" class="badge badge-warning">Edit</a>
                                <a href="<?= base_url('Produk/detail/') . $us['id']; ?>" class="badge badge-info">Detail</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>