
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">  
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
              
              <div class="col-md-6"><a href="<?= base_url() ?>Produk/tambah" class="btn btn-info mb-2">Tambah
                    Produk</a></div>
            <?= $this->session->flashdata('message'); ?>
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-3 ">Gambar</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-3 ">Nama</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-3 ">Kategori</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-3 ">Stok</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-3 ">Price</th>
                      
                      <th class="text-secondary opacity-7">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $i = 1; ?>
                    <?php foreach ($produk as $us) : ?>
                    <tr>
                    
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="<?= base_url('assets/images/produk/') . $us['gambar']; ?>" style="width : 100px;"  class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0"><?= $us['nama']; ?></p>
                        <p class="text-xs text-secondary mb-0"><?= $us['brand']; ?></p>
                      </td>
                      <td>
                        <p class="text-xs text-secondary mb-0"><?= $us['kategori']; ?></p>
                      </td>
                      <td>
                      <p class="text-xs text-secondary mb-0"><?= $us['stok']; ?></p>
                      </td>
                      <td>
                        <span class="text-secondary text-xs font-weight-bold">$ <?= $us['harga']; ?></span>
                      </td>
                      <td class="align-middle">
                        <a href="<?= base_url('Produk/edit/') . $us['id']; ?>" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Edit
                        </a>
                        <a href="<?= base_url('Produk/hapus/') . $us['id']; ?>" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Hapus
                        </a>
                      </td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>