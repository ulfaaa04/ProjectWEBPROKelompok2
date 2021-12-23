<div class="container-fluid">

    <div class="card">
        <h5 class="card-header">Detail Tiket</h5>
        <div class="card-body">

            <?php foreach($tiket as $tk): ?>
            <div class="row">
               <div class="col-md-4">
                   <img src="<?php echo base_url().'/uploads/'.$tk->image ?>" class="card-img-top">
               </div>
               <div class="col-md-8">
                   <table class="table">

                       <tr>
                           <td>Nama Tiket</td>
                           <td><strong><?php echo $tk->nama_tiket ?></strong></td>
                       </tr>

                       <tr>
                           <td>Kategori</td>
                           <td><strong><?php echo $tk->kategori ?></strong></td>
                       </tr>

                       <tr>
                           <td>Kelas</td>
                           <td><strong><?php echo $tk->kelas ?></strong></td>
                       </tr>

                       <tr>
                           <td>Info Tanggal</td>
                           <td><strong><?php echo $tk->info_tanggal ?></strong></td>
                       </tr>

                       <tr>
                           <td>Stok</td>
                           <td><strong><?php echo $tk->stok ?></strong></td>
                       </tr>

                       <tr>
                           <td>Harga</td>
                           <td><strong><div class="btn btn-sm btn-danger">Rp. <?php echo number_format($tk->harga,0,',','.') ?></div></strong></td>
                       </tr>
                    </table>

                    <?php echo anchor('Dashboard/tambah_ke_keranjang/'. $tk->id,'<div class="btn btn-sm btn-primary">Masukan ke Keranjang</div>') ?>
                    <?php echo anchor('SelamatDatang','<div class="btn btn-sm btn-info">Kembali</div>') ?>

                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

</div>