<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-info">
                <?php
                $grand_total = 0;
                if ($keranjang = $this->cart->contents()) 
                {
                    foreach ($keranjang as $item)
                    {
                        $grand_total = $grand_total + $item['subtotal'];
                    }

                echo "<h4>Total Harga Tiket Yang Anda Beli: Rp. ".number_format($grand_total, 0,',','.');    
                 ?>
            </div><br><br>

            <h3>Alamat Pengiriman dan Pembayaran</h3>

            <form method="post" action="<?php echo base_url() ?>Dashboard/proses_pesanan">
                
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control">
                </div>

                <div class="form-group">
                    <label>Alamat Lengkap</label>
                    <input type="text" name="alamat" placeholder="Alamat Lengkap Anda" class="form-control">
                </div>

                <div class="form-group">
                    <label>Nomor Telepon</label>
                    <input type="text" name="no_telp" placeholder="Nomor Telepon Anda" class="form-control">
                </div>

                <div class="form-group">
                    <label>Jasa Pengiriman</label>
                    <select class="form-control">
                        <option>SiCepat</option>
                        <option>Anteraja</option>
                        <option>Gojek</option>
                        <option>JnT</option>
                        <option>Grab</option>
                        <option>JNE</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Pilih Bank</label>
                    <select class="form-control">
                        <option>BNI</option>
                        <option>BRI</option>
                        <option>MANDIRI</option>
                        <option>BCA</option>
                        <option>BSI</option>
                        <option>MUAMALAT</option>
                    </select>
                </div>
                
                <br>
                <small>*Optional</small>
                <div class="form-group">
                    <label>Masukan Voucher</label>
                    <input type="text" name="no_telp" placeholder="Masukan Voucher Jika Ada" class="form-control">
                </div>

                <button type="submit" class="btn btn-sm btn-success mb-3">PESAN</button>

            </form>

            <?php
            } else
            {
                echo "<h4>Keranjang Belanja Anda Masih Kosong";
            }
             ?>
        </div>

        <div class="col-md-2"></div>

    </div>
</div>