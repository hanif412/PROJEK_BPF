<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>

<br/>

<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row">
        <div class="col-md-12">
            <?= $this->session->flashdata('message');
            ?>
        </div>
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <td>Date</td>
                        <td>Name Product</td>
                        <td>Price $</td>
                        <td>Amount</td>
                        <td>Sub Total</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    <form action="<?= base_url('Profil/pesanan'); ?>" method="POST" enctype="multipart/form-data">
                        <?php
                        function rupiah($angka)
                        {
                            $hasil_rupiah = "Rp " . number_format($angka, 2, ',', '.');
                            return $hasil_rupiah;
                        }
                        $i = 1;
                        $total_bayar = 0;
                        $total_p = 0; ?>
                        <?php foreach ($keranjang as $us) :
                            $total_bayar += $us['total'];
                        ?>
                            <tr>
                                <td><?= $us['tanggal']; ?></td>
                                <td><?= $us['nama']; ?></td>
                                <td><?= $us['harga']; ?></td>
                                <td><?= $us['jumlah']; ?></td>
                                <td><?= $us['total']; ?></td>
                                <td><a href="<?= base_url('profil/delkeranjang/') . $us['id']; ?>" class="btn btn-danger"><i class="fa fa-trash"></a></td>


                            </tr>
                            <input type="hidden" name="produk[]" value="<?= $us['id_produk']; ?>">
                            <input type="hidden" name="tanggal" value="<?= date('d/m/Y') ?>">
                            <input type="hidden" name="harga" value="<?= $us['harga']; ?>">
                            <input type="hidden" name="jumlah_p[]" value="<?= $us['jumlah']; ?>">
                            <input type="hidden" name="total_p[]" value="<?= $us['total']; ?>">
                            <?php $i++; ?>
                        <?php endforeach; ?>
                        <tr>
                            <td>Location Delivery</td>
                            <td colspan="5"><input name="alamat" type="text" class="form-control" id="alamat"></td>
                        </tr>
                        <tr>
                            <td>Payment</td>
                            <td colspan="5">
                                <select name="pembayaran" id="pembayaran" class="form-control">
                                    <option value="">Select Payment</option>
                                    <option value="BRI">BRI</option>
                                    <option value="MANDIRI">MANDIRI</option>
                                    <option value="BNI">BNI</option>
                                    <option value="OVO">OVO</option>
                                    <option value="LINK Aja">Link Aja</option>
                                    <option value="GoPay">GoPay</option>
                                    <option value="COD">Cash On Delivery (COD)</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Proof of Payment</td>
                            <td colspan="5">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="gambar" id="gambar">

                                    <label for="gambar" class="custom-file-label">Choose File</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Description</td>
                            <td colspan="5"><input name="keterangan" type="text" class="form-control" id="keterangan"></td>
                        </tr>
                        <tr>
                            <td colspan="4" align="right"><strong>Total : </strong></td>
                            <td>$ <?= $total_bayar; ?></td>
                            <td>
                                <input type="hidden" name="no_penjualan" value="SALES<?= time() ?>" readonly class="form-control">

                                <input type="hidden" name="bayar" value="<?= $total_bayar; ?>">

                                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>&nbsp;&nbsp;Pesan</button>

                            </td>
                        </tr>


                    </form>
                </tbody>
            </table>
        </div>
    </div>
</div>